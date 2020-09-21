<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn) {

	$invoiceNo = $_POST['invoiceNo'];

	$sql = "SELECT * FROM invoice WHERE invoice_id = \"$invoiceNo\"";
	$invoice = fetchData($conn,$sql)[0];

	if ($invoice) {
		$idnumber = $invoice['owner'];
		$amount = $invoice['amount'];
		$inAmount = number_format($invoice['amount'],2,".",",");
		$orderDate = date("M d, Y", strtotime($invoice['order_date']));

		if ($invoice['state'] == 2) {
			echo "		
		        <script>
		            $('#check-invoice-btn').html(\"<i class='fa fa-check-circle'></i> Check Invoice \");
		            $('#check-invoice-btn').removeClass('disabled');
		            var \$toastContent = \$('<span> The order was cancelled by owner.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-circle yellow-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2000);
		        </script>
			";
		} elseif ($invoice['state'] == 1) {
			echo "
				<script>
		            \$('#check-invoice-btn').html(\"<i class='fa fa-check-circle'></i> Check Invoice \");
		            \$('#check-invoice-btn').removeClass('disabled');
		            
		            \$('#inNo').text('$invoiceNo');
		            \$('#inAmount').text('$amount');
		            \$('#inDate').text('$orderDate');
		            \$('#inReceiptBtn').attr('href','../invoice?invoice=$invoiceNo');
		            \$('#inReceiptBtn2').attr('href','../invoice?invoice=$invoiceNo');

		            \$('#pay').addClass('hide');
		            \$('#confirm').addClass('hide');
		            \$('#paid').removeClass('hide');
		            \$('#orderInfo').removeClass('hide');
		        </script>
			";

		} elseif ($invoice['state'] == 0) {
			echo "
				<script>
		            \$('#check-invoice-btn').html(\"<i class='fa fa-check-circle'></i> Check Invoice \");
		            \$('#check-invoice-btn').removeClass('disabled');
		            
		            \$('#inNo').text('$invoiceNo');
		            \$('#inAmount').text('$inAmount');		            
		            \$('#idnumber').val('$idnumber');			            
		            \$('#amount').val('$amount');	           
		            \$('#inDate').text('$orderDate');
		            \$('#inReceiptBtn').attr('href','#');
		            \$('#inReceiptBtn2').attr('href','#');

		            \$('#pay').removeClass('hide');
		            \$('#confirm').addClass('hide');
		            \$('#paid').addClass('hide');
		            \$('#orderInfo').removeClass('hide');
		            \$('#pay-desc').val('');
		            \$('#pay-order-btn').removeClass('disabled');
		            \$('#pay-order-btn').html(\"<i class='fa fa-check-circle'></i> Pay\");
		        </script>
			";
		}
		
	} else {
		echo "		
	        <script>
	            $('#check-invoice-btn').html(\"<i class='fa fa-check-circle'></i> Check Invoice \");
	            $('#check-invoice-btn').removeClass('disabled');
	            var \$toastContent = \$('<span> Invoice does not exist.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info-circle yellow-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 2000);
	        </script>
		";

	}


} else {
	echo "		
        <script>
            $('#check-invoice-btn').html(\"<i class='fa fa-check-circle'></i> Check Invoice \");
            $('#check-invoice-btn').removeClass('disabled');
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";

}
?>