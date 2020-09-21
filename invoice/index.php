<?php
session_start();
if (isset($_SESSION['idno'])) {
	$idno = $_SESSION['idno'];
		
} else {
	//redirect user to login form for them to login first
	header("Location:../?ret=invoice&login");die();
}

require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';
$conn = dbconnect();

if ($conn) {
	
	$invoice = $_GET['invoice'];

	$invoiceInfo = getInvoiceData($conn,$invoice)[0];

	$invoiceProds = getOrderDetails($conn,$invoice);
	$total = $invoiceInfo['amount'];
	$shipping = 0;
	$grandTotal = $shipping+$total;

	

require '../views/invoice.view.php';
} else {
	die('Error while connecting..');
}
?>