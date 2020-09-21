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
	

	$cartCount = getCartCount($conn,$owner);
	$categories = getCategories($conn);
	$colors = getColors($conn);
	
	
} else {
	die('Error while connecting to server');
}

require '../views/shop.view.php';
?>