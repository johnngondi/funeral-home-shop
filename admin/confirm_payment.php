<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';
require '../model/admin.php';
require '../model/tenant.php';

$conn = dbconnect();
if ($conn) {
	$id = $_POST['id'];
	$paymentInfo = getPaymentInfo($conn,$id);
	$prop_id = $paymentInfo['prop_id'];
	$tenant_id = $paymentInfo['t_id'];
	$txn_id = $paymentInfo['txn_id'];
	$amount = $paymentInfo['amount'];
	$date_paid = $paymentInfo['add_date'];
	$unpaidInvoces = getUnpaidInvoices($conn,$prop_id);

	foreach ($unpaidInvoces as $unpaidInvoce) {
		$amount_payable = $unpaidInvoce['amount'];
		$amount_paid = $unpaidInvoce['paid'];
		$to_pay = $amount_payable - $amount_paid;
		$date_due = $unpaidInvoce['date_due'];
		$invoice_id = $unpaidInvoce['id'];

		if ($to_pay<$amount) {
			$amount = $amount-$to_pay;
		} else {
			$to_pay = $amount;
			$amount = 0;
		}

		//pay
		$amount_to_pay = $to_pay;

		if ($amount_to_pay >= $amount_payable) {		
			$sql = "UPDATE rent_invoice SET paid = \"$amount_to_pay\", state = 1 WHERE id = \"$invoice_id\"";
		} else {
			$sql = "UPDATE rent_invoice SET paid = \"$amount_to_pay\" WHERE id = \"$invoice_id\"";
		}
		
		$result = addData($conn,$sql);


		if ($result) {
			resetNewPayment($conn,$id);
			confirmProp($conn,$prop_id);
			$f_bal = number_format(($amount_payable-$amount_to_pay),2,".",",");	
			//cerate statement
			$data = array(
				'amount' => $amount_to_pay,
				'paid_for' => 'rent',
				'prop_id' => $prop_id,
				'tenant_id' => $tenant_id,
				'mode' => 'mpesa',
				'date_due'=> $date_due,
				'date_paid'=> $date_paid,
				'comment' => "M-pesa transaction Id: ".$txn_id
			);

			$result = createStatement($conn,$data);

			if ($result) {
				echo "		
			        <script>
						
	            		\$(\"#new-payment-$id\").fadeOut(1000);
						
			            var \$toastContent = \$('<span> Rent Paid! Balance is: KShs. $f_bal. Payment Statement created Successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 4000);
			        </script>
				";
			} else {
				echo "		
			        <script>
						
	            		\$(\"#new-payment-$id\").fadeOut(1000);
						
			            var \$toastContent = \$('<span> Rent Paid Balance is: KShs. $f_bal. Error while created Payment Statement.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle yello-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 4000);
			        </script>
				";
			}
				
		}
	}


} else {
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";

}