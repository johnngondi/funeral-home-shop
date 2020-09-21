
<?php
session_start();

require '_inc/config.php';
require 'model/crud.php';
require 'model/props_func.php';

$conn = dbconnect();

if ($conn) {

	if (isset($_SESSION['idno'])) {
		$owner = $_SESSION['idno'];
	} else {
		$owner = $_COOKIE['sess_id'];
	}

	$prod_id = $_POST['prod_id'];

	//check if is in stock
	if (checkIfInStock($conn,$prod_id)) {
		//check if more than enough is added
		$prodstock = fetchData($conn,"SELECT stock FROM property WHERE id = \"$prod_id\"")[0]['stock'];
		$cartqty = fetchData($conn,"SELECT qty FROM cart WHERE prod=\"$prod_id\" AND owner = \"$owner\"")[0]['qty'];

		if ($prodstock > $cartqty) {
			//add to cart
			if (addToCart($conn,$prod_id,$owner)) {
				//record hit
				$sql = "UPDATE property SET hits=hits+1 WHERE id=\"$prod_id\"";
				addData($conn,$sql);
				
				$cartCount = getCartCount($conn,$owner);
					
					echo "			
				        <script>
				            var \$toastContent = \$('<span> Product added to Cart. If you had added before, quantity was increased by 1</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
				            Materialize.toast(\$toastContent, 4000);
				           			            
				            \$('#cart-count').text($cartCount);
				        </script>
					";
			} else {

				echo "			
			        <script>
			            var \$toastContent = \$('<span> Error while adding to Cart! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 2000);
			        </script>
				";
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
	            var \$toastContent = \$('<span> Sorry, this product is out of stock! Check back later.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info-circle yellow-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	            var status = 'os';
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





?>