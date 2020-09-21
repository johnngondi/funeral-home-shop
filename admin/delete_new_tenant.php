<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn){ 
	$idno = $_POST['idno'];
	$sql = "DELETE FROM tenant WHERE idno=\"$idno\"";
	$result = deleteData($conn,$sql);
	$sql = "DELETE FROM user WHERE username=\"$idno\"";
	$result = deleteData($conn,$sql);

	if ($result) {
		
		echo "		
	        <script>
				\$(\"#new-t-act-$idno\").html(\"<i class='fa fa-info-circle'></i> Tenant Deleted\");
				\$(\"#new-tenant-$idno\").slideUp(2000);
	            var \$toastContent = \$('<span> Tenant Deleted.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	} else {
		echo "		
	        <script>
				$(\"#new-t-d-btn-$idno\").html(\"<i class='fa fa-trash'></i> Delete Tenant\");
				$(\"#new-t-d-btn-$idno\").removeClass('disabled');
				$(\"#new-t-a-btn-$idno\").removeClass('hide');
	            var \$toastContent = \$('<span> Error while deleting tenant.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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