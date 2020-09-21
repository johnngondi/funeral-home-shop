<?php
$message ='';
if (isset($_GET['ret'])) {
	$message = "Login to proceed to ".ucwords($_GET['ret']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	//require '../views/login_2.view.php';
} else {

	require '../views/login.view.php';
}
?>