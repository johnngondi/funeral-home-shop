<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
	header("Location:../login?ret=admin");die();
}
require '../_inc/config.php';
require '../model/crud.php';
require '../model/admin.php';
require '../model/material.php';
require '../model/props_func.php';

$conn = dbconnect();
if ($conn){ 

	$properties = getAllProperties($conn);
	$tenants = getAllTenants($conn);
	$payments = getAllPayments($conn);
	$new_tenants = getNewTenants($conn);
	$new_payments = getNewPayments($conn);
	$categories = getCategories($conn);
	$admins = getAdmins($conn,$_SESSION['idno']);
	$colors = getColors($conn);
	//$no_of_new_tenants = getNoOfNewTenants($conn);

require '../views/admin.view.php';
}else {
	die('Error while connecting to server');
}

?>