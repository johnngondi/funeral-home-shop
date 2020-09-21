<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn) {
	$id = $_POST['id'];
	$prop_id = $_POST['prop_id'];

	//delete payment
	$sql = "DELETE FROM temp_pay WHERE id=\"$id\"";
	$result = deleteData($conn,$sql);

	if ($result) {
		$sql = "UPDATE property SET occupant='', state=0 WHERE id=\"$prop_id\" AND state = 2";
		$result = addData($conn,$sql);

		if ($result) {
			$sql = "DELETE FROM rent_invoice WHERE prop_id = \"$prop_id\"";
			deleteData($conn,$sql);
			
			echo "		
		        <script>
	            	\$(\"#new-payment-$id\").fadeOut(1000);

		            var \$toastContent = \$('<span> Payment deleted.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info-circle white-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2000);
		        </script>
			";
		} else {

			echo "		
		        <script>
		        	\$('#new-p-act-$id').html(\"<i class='fa fa-exclamation-triangle red-text'></i> Error while deleting\");
		            var \$toastContent = \$('<span> Error while deleting payment.</span>').add(\$('<button class=\"btn-flat toast-action\"></button>'));
		            Materialize.toast(\$toastContent, 2000);
		        </script>
			";
		}
	} else {


			echo "		
		        <script>
		        	\$('#new-p-act-$id').html(\"<i class='fa fa-exclamation-triangle red-text'></i> Error while deleting\");
		            var \$toastContent = \$('<span> Error while deleting payment.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2000);
		        </script>
			";
	}


} else {
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";

}