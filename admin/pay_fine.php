<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/tenant.php';

$conn = dbconnect();
if ($conn) {
	$f_id = $_POST['f_id'];
	$amount = $_POST['amount'];
	$payable = $_POST['payable'];
	$bal =$_POST['bal'];
	$paid = $payable-$bal;
	$to_pay = $paid+$amount;

	$new_bal = $payable - $to_pay;

	$f_new_bal = number_format($new_bal,2,".",",");
	$f_to_pay = number_format($to_pay,2,".",",");
	$sql = '';
	if ($new_bal <= 0) {		
		$sql = "UPDATE fines SET paid =\"$to_pay\", state = 1 WHERE id=\"$f_id\"";
	} else {
		$sql = "UPDATE fines SET paid =\"$to_pay\" WHERE id=\"$f_id\"";
	}

	$result = addData($conn,$sql);

	if ($result) {	
	//cerate statement
		$sql = "SELECT prop_id, tenant_id, due_date, description FROM fines WHERE id = \"$f_id\"";
		$results = fetchData($conn,$sql);
		$results = $results[0];
		$data = array(
			'amount' => $amount,
			'paid_for' => 'fine',
			'prop_id' => $results['prop_id'],
			'tenant_id' => $results['tenant_id'],
			'mode' => 'null',
			'date_due'=> $results['due_date'],
			'date_paid'=> date('Y-m-d'),
			'comment' => $results['description']
		);

		$result = createStatement($conn,$data);	
		if ($result) {
			
			echo "		
		        <script>

					\$('#btn-$f_id').html(\"Pay\");
					\$('#btn-$f_id').removeClass('disabled');
					\$('#paid-$f_id').text(\"KShs. $f_to_pay\");
					\$('#btn-$f_id').attr(\"onclick\",\"payFine($f_id,$new_bal,$payable)\");
					\$('#$f_id').val('');
		            var \$toastContent = \$('<span> Fine Paid Balance is: KShs. $f_new_bal. Statement Created.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 4000);
		        </script>
			";
		} else {
			
			echo "		
		        <script>

					\$('#btn-$f_id').html(\"Pay\");
					\$('#btn-$f_id').removeClass('disabled');
					\$('#paid-$f_id').text(\"KShs. $f_to_pay\");
					\$('#btn-$f_id').attr(\"onclick\",\"payFine($f_id,$new_bal,$payable)\");
					\$('#$f_id').val('');
		            var \$toastContent = \$('<span> Fine Paid Balance is: KShs. $f_new_bal. Statement not Created</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info white-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 4000);
		        </script>
			";
		}

	} else {

		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error while Paying Fines! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	        </script>
		";
	}

}else {
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 4000);
        </script>
	";

}