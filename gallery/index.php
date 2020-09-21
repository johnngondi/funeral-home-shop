<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';
require '../model/material.php';

if (!isset($_COOKIE['sess_id'])) {
	setcookie('sess_id',date('Ymdhis'),time()+(60*60*24),'/');
}

$conn = dbconnect();

if (isset($_SESSION['idno'])) {
	$owner = $_SESSION['idno'];
} else {
	$owner = $_COOKIE['sess_id'];
}

if ($conn){

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		echo "were here";
		$id = $_POST['media'];
		$sql = "DELETE FROM gallery WHERE id = \"$id\"";
		deleteData($conn,$sql);
		echo "<script> 
			\$('#media-$id').removeClass('fadeInUp');
			\$('#media-$id').addClass('hinge');
		 </script>";
		die();

	}

	
$sql = "SELECT * FROM gallery WHERE media <> \"\" ORDER BY id DESC";
$medias = fetchData($conn,$sql);


$cartCount = getCartCount($conn,$owner);
	
	
} else {
	die('Error while connecting to server');
}

require '../views/gallery.view.php';
?>