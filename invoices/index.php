<?php
session_start();

require '../checkout/_inc/config.php';
require '../checkout/model/crud.php';
require '../checkout/model/func.php';
$conn = dbconnect();

if ($conn) {
	if (isset($_SESSION['idno'])) {
		$idno = $_SESSION['idno'];
		
	} else {
		//redirect user to login form for them to login first
		header("Location:../?ret=invoices&login");die();
	}
	$total = 0;

	$unpaidInvoices = getUnpaidInvoices($conn,$idno);

	if (!$unpaidInvoices) {
		header("Location:../home");die();
	}
	

require '../views/invoices.view.php';
} else {
	die('Error while connecting..');
}