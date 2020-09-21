<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn) {

	$idnumber = $_POST['idnumber'];
	$invoice = $_POST['invoiceNo'];
	$mode = $_POST['mode'];
	$amount = $_POST['amount'];
	$desc = $_POST['pay-desc'];
	$payment_date = date("Y-m-d H:i:s");

	$sql = "UPDATE invoice SET state = 1, payment_date=\"$payment_date\" WHERE invoice_id = $invoice";
	if (addData($conn,$sql)) {
		//log payment
		$sql = "INSERT INTO payments (product_id, payment_gross, payer_id, payment_status, currency_code, created, comment, mode) VALUES (\"$invoice\",\"$amount\",\"$idnumber\",1,\"PHP\",\"$payment_date\",\"$desc\",\"$mode\")";
		addData($conn,$sql);

		//deduct stock
		$sql = "SELECT * FROM invoice_details WHERE invoice_id = \"$invoice\"";
		$products = fetchData($conn,$sql);
		if ($products) {
			foreach ($products as $product) {
				$prod_id = $product['prod'];
				$qty = $product['qty'];
				$sql = "UPDATE property SET stock = stock-$qty WHERE id=$prod_id";
				addData($conn,$sql);
			}
		}


			echo "
				<script>
		            \$('#pay-order-btn').html(\"<i class='fa fa-check-circle'></i> Pay\");
		            \$('#pay-order-btn').removeClass('disabled');
		            
		            \$('#inReceiptBtn').attr('href','../invoice?invoice=$invoice');
		            \$('#inReceiptBtn2').attr('href','../invoice?invoice=$invoice');

		            \$('#pay').addClass('hide');
		            \$('#paid').addClass('hide');
		            \$('#confirm').removeClass('hide');
		            \$('#orderInfo').removeClass('hide');
		        </script>
			";
				
	} else {
		echo "		
	        <script>
	            $('#pay-order-btn').html(\"<i class='fa fa-check-circle'></i> Pay\");
	            $('#pay-order-btn').removeClass('disabled');
	            var \$toastContent = \$('<span> Payment Failed. Please contact webmaster.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 2000);
	        </script>
		";
	}

} else {
	echo "		
        <script>
            $('#pay-order-btn').html(\"<i class='fa fa-check-circle'></i> Pay\");
            $('#pay-order-btn').removeClass('disabled');
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";

}