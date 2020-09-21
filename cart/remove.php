
<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';

$conn = dbconnect();

if ($conn) {

	$id = $_GET['id'];

	$result = removeItem($conn,$id);

	if ($result) {

		echo "			
	        <script>
	            var gt = eval($('#gt').text());
				var total = eval($('#total-$id').text());
				$('#gt').text(gt-total);
	        </script>
		";die();
	} else {

		echo "			
	        <script>
	            var \$toastContent = \$('<span> Error while removing Item! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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