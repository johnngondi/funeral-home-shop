<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn){ 
	$idno = $_POST['idno'];
	$sql = "UPDATE tenant SET state = 2 WHERE idno=\"$idno\"";
	$result = addData($conn,$sql);

	if ($result) {
		
		echo "		
	        <script>
				\$(\"#tenant-$idno\").slideUp(2000);
	            var \$toastContent = \$('<span> Tenant Deleted.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	} else {
		echo "		
	        <script>
				$(\"#btn-$idno\").html(\"<i class='fa fa-trash'></i> Delete Tenant\");
				$(\"#btn-$idno\").removeClass('disabled');
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