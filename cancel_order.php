<?php
session_start();
require '_inc/config.php';
require 'model/crud.php';

$conn = dbconnect();

if ($conn){
	$orderno = $_POST['orderno'];

	$sql = "UPDATE invoice SET state=2 WHERE invoice_id=$orderno";
		
	if (addData($conn,$sql)) {
		echo "		
	        <script>
	            var \$toastContent = \$('<span> Order Cancelled.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 5000);
	            \$('#order-status-cell-$orderno').html(\"<b class='red-text'>Cancelled.</b>\");
	            \$('#order-action-cell-$orderno').html(\"Done!\");
	            \$('#invoice-$orderno').fadeOut(2000);
	        </script>
		";
	} else {
		echo "		
	        <script>
				\$('#pay-order-btn-'+orderno).removeClass('hide');
				\$('#cancel-order-btn-'+orderno).html(\"<i class='fa fa-times'></i> Cancel Order\");
				\$('#cancel-order-btn-'+orderno).removeClass('disabled');
	            var \$toastContent = \$('<span> Error while cancelling order. Try again later</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 4000);
	        </script>
		";

	}

} else {	
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 4000);
        </script>
	";
}
?>