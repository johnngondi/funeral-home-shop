<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn){ 
	$prod = $_POST['prod'];
	$stock = $_POST['stock'];
	$price = $_POST['price'];
	$sql = "UPDATE property SET stock = stock+$stock, price = \"$price\" WHERE id=\"$prod\"";
	$result = addData($conn,$sql);

	if ($result) {
		
		echo "		
	        <script>
				$(\"#btn-$prod\").html(\"<i class='fa fa-save'></i> Save\");
				$(\"#btn-$prod\").removeClass('disabled');
				$(\"#qty-$prod\").text(eval(curqty)+$stock);
				$(\"#qty-add-$prod\").val('0');
	            var \$toastContent = \$('<span> Stock and Price Updated Successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	} else {
		echo "		
	        <script>
				$(\"#btn-$prod\").html(\"<i class='fa fa-exclamation-triangle'></i> Error <i class='fa fa-undo'></i> Try Again.\");
				$(\"#btn-$prod\").removeClass('disabled');
	            var \$toastContent = \$('<span> Error while updating Price and Stock.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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