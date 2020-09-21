<?php
session_start();

require '_inc/config.php';
require 'model/crud.php';

$conn = dbconnect();

if ($conn) {
	$address = $_POST['address'];
	$invoice = $_POST['invoice'];

	$sql = "UPDATE invoice SET address=\"$address\" WHERE invoice_id=\"$invoice\"";
	if (addData($conn,$sql)) {
		
		echo"
            <script>						
                var \$toastContent = \$('<span>Address set as order address!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
                Materialize.toast(\$toastContent, 3000);
            </script>
        ";
	} else {

		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error setting address. Try again.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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