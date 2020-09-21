<?php
session_start();

require '_inc/config.php';
require 'model/crud.php';
require 'model/func.php';

$conn = dbconnect();

if ($conn) {
	$owner = $_SESSION['idno'];

} else {

	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 3000);
        </script>
	";
}

?>