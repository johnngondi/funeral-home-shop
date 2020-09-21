<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';

$conn = dbconnect();

if ($conn){
	if (isset($_SESSION['idno'])) {
		$owner = $_SESSION['idno'];
	} else {
		$owner = $_COOKIE['sess_id'];
	}

	$cart = fetchCart($conn,$owner);
	$total = 0;

} else {
	die('Error while connecting to server');
}

require '../views/cart.view.php';
?>