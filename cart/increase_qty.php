
<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';

$conn = dbconnect();

if ($conn) {

	$id = $_GET['id'];
	$qty = $_GET['qty'];
	$prod = $_GET['prod'];

	echo $qty;

	$prodstock = fetchData($conn,"SELECT stock FROM product WHERE id = \"$prod\"")[0]['stock'];

	echo $prodstock;

	if ($qty <= $prodstock) {
		
		$result = increaseQty($conn,$id,$qty);

		if (!$result) {

			echo "			
		        <script>
		            var \$toastContent = \$('<span> Error while increasing qty! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2000);
		        </script>
			";die();
		}

	} else {

			echo "			
		        <script>
		        	\$('#qty-$id').val('$prodstock');
		            var \$toastContent = \$('<span> No more products.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle yellow-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2000);
		        </script>
			";die();
	}
	
} else {
	echo "			
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";
}





?>