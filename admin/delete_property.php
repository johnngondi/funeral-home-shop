<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn){ 
	$prop_id = $_POST['prop_id'];
	$sql = "UPDATE property SET state = 2 WHERE id=\"$prop_id\"";
	$result = addData($conn,$sql);

	if ($result) {
		
		echo "		
	        <script>
				\$(\"#props-$prop_id\").slideUp(2000);
	            var \$toastContent = \$('<span> Product Deleted.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	} else {
		echo "		
	        <script>
				$(\"#btn-$prop_id\").html(\"<i class='fa fa-trash'></i> Delete Product\");
				$(\"#btn-$prop_id\").removeClass('disabled');
	            var \$toastContent = \$('<span> Error while deleting Product.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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