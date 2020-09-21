<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn){ 
	$cat = $_POST['cat'];
	$title = $_POST['title'];

	$sql = "DELETE FROM categories WHERE id=\"$cat\"";
	$result = deleteData($conn,$sql);

	$sql = "DELETE FROM property WHERE type=\"$title\"";
	$result = deleteData($conn,$sql);

	if ($result) {
		
		echo "
	        <script>
				\$(\"#cat-row-$cat\").fadeOut(2000);
	            var \$toastContent = \$('<span> Category Deleted.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	} else {
		echo "		
	        <script>
				$(\"#btn-$cat\").html(\"<i class='fa fa-trash'></i> Delete Category\");
				$(\"#btn-$cat\").removeClass('disabled');
	            var \$toastContent = \$('<span> Error while deleting Category.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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