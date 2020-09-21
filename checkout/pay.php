<?php
session_start();

require '_inc/config.php';
require 'model/crud.php';

$conn = dbconnect();

if ($conn) {
	$invoice = $_POST['invoice'];
	$phone = $_POST['phone'];
	$txn_id = $_POST['txn_id'];
	$amount = $_POST['amount'];
	$date_paid = date("Y-m-d H:i:s");

	$sql = "INSERT INTO payment (invoice_id, txn_id, amount, phone, date_paid) VALUES (\"$invoice\",\"$txn_id\",\"$amount\",\"$phone\",\"$date_paid\")";
	if (addData($conn,$sql)) {
		$sql = "UPDATE invoice SET state = 3 WHERE invoice_id=\"$invoice\"";
		addData($conn,$sql);
		
		echo"
            <script>	
            	\$('#pay').addClass('hide');
            	\$('#confirm').removeClass('hide');					
                var \$toastContent = \$('<span>Payment Added Successfully! Wait for its approval.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
                Materialize.toast(\$toastContent, 3000);
            </script>
        ";
	} else {

		echo "		
	        <script>
				$('#btn-pay').html(\"Pay\");
				$('#btn-pay').removeClass('disabled');
	            var \$toastContent = \$('<span> Error adding Payment. Seems like order is paid for. Try again or Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	}

} else {

	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 3000);
        </script>
	";
}

?>