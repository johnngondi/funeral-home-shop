<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn){ 
	$idno = $_POST['idno'];
	$sql = "UPDATE tenant SET state = 1 WHERE idno=\"$idno\"";
	$result = addData($conn,$sql);
	$sql = "UPDATE user SET state = 1 WHERE username=\"$idno\"";
	$result = addData($conn,$sql);

	if ($result) {
		
		echo "		
	        <script>
				\$(\"#new-t-act-$idno\").html(\"<i class='fa fa-check green-text'></i> Tenant Activated\");
				\$(\"#new-tenant-$idno\").slideUp(2000);
	            var \$toastContent = \$('<span> Tenant Activated Successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	} else {
		echo "		
	        <script>
				$(\"#new-t-a-btn-$idno\").html(\"<i class='fa fa-check'></i> Activate Tenant\");
				$(\"#new-t-a-btn-$idno\").removeClass('disabled');
				$(\"#new-t-d-btn-$idno\").removeClass('hide');
	            var \$toastContent = \$('<span> Error while activating tenant.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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