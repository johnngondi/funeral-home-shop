<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/tenant.php';

$conn = dbconnect();
if ($conn) {

	$invoice_id = $_POST['invoice'];
	$paid_amount = $_POST['rent-amount'];	
	$type = $_POST['payment-type'];
	$desc = $_POST['rent-description'];

	$sql = "SELECT * FROM rent_invoice WHERE id = \"$invoice_id\"";
	$results = fetchData($conn,$sql);
	$results = $results[0];
	$amount_payable = $results['amount'];
	$amount_paid = $results['paid'];
	$bal = $amount_payable - $amount_paid;
	$prop_id = $results['prop_id'];
	$tenant_id = $results['tenant_id'];
	$date_due = $results['date_due'];

	$amount_to_pay = $amount_paid+$paid_amount;

	if ($amount_to_pay >= $amount_payable) {		
		$sql = "UPDATE rent_invoice SET paid = \"$amount_to_pay\", state = 1 WHERE id = \"$invoice_id\"";
	} else {
		$sql = "UPDATE rent_invoice SET paid = \"$amount_to_pay\" WHERE id = \"$invoice_id\"";
	}
	
	$result = addData($conn,$sql);

	if ($result) {
		$f_bal = number_format(($amount_payable-$amount_to_pay),2,".",",");	
		//cerate statement
		$data = array(
			'amount' => $paid_amount,
			'paid_for' => 'rent',
			'prop_id' => $prop_id,
			'tenant_id' => $tenant_id,
			'mode' => $type,
			'date_due'=> $date_due,
			'date_paid'=> date('Y-m-d'),
			'comment' => $desc
		);

		$result = createStatement($conn,$data);

		if ($result) {
			echo "		
		        <script>
					
           			\$(\"#rent-btn\").html(\"<i class='fa fa-check-square-o'></i> Record Rent\");
            		\$(\"#rent-btn\").removeClass(\"disabled\");
					searchTenantRent();
					
		            var \$toastContent = \$('<span> Rent Paid Balance is: KShs. $f_bal. Payment Statement created Successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 4000);
		        </script>
			";
		} else {
			echo "		
		        <script>
					
           			\$(\"#rent-btn\").html(\"<i class='fa fa-check-square-o'></i> Record Rent\");
            		\$(\"#rent-btn\").removeClass(\"disabled\");
					searchTenantRent();
					
		            var \$toastContent = \$('<span> Rent Paid Balance is: KShs. $f_bal. Error while created Payment Statement.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle yello-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 4000);
		        </script>
			";
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
?>