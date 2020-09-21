<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/tenant.php';
require '../model/material.php';
require '../model/props_func.php';

$conn = dbconnect();
if ($conn){ 
	//die ("Welcome to Customers home... <br> This area is still under development <br><br><br> <a href='../cart'>View My Cart</a>
		// <br><br> <a href='../furniture'>View More Furniture</a>
		// <br><br> <a href='../'>Back Home</a>
		// <br><br><br> <a href='../logout'>Log Out</a>");
	$t_id = $_SESSION['idno'];
	$tenantInfo = getPersonalInfo($conn,$t_id);
	$orders = getAllOrders($conn,$t_id);
	$totalOrders = getTotalAmount($conn,$t_id)['orders'];
	$totalAmount = getTotalAmount($conn,$t_id)['total'];
	$cartCount = getCartCount($conn,$t_id);


	if (!$tenantInfo) {
		header('Location:../index.php');
	}

require '../views/home.view.php';
}else {
	die('Error while connecting to server');
}
?>