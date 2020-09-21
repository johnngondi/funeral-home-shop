<?php
session_start();

require '_inc/config.php';
require 'model/crud.php';
require 'model/func.php';
$conn = dbconnect();

if ($conn) {
	if (isset($_SESSION['idno'])) {
		$idno = $_SESSION['idno'];
		
	} else {
		//redirect user to login form for them to login first
		header("Location:../login?ret=checkout");die();
	}
	$total = 0;

	//get cart
	$cart = fetchCart($conn,$idno);

	if (!$cart) {
		
		//if cart is empty, check if there is a unpaid invoice
		$unpaidInvoices = getUnpaidInvoices($conn,$idno);
		if ($unpaidInvoices) {
			//redirect user to unpaid invoices
			header("Location:../invoices");die();
			
		} else {
			header("Location:../cart");die();
		}

	} else {

		//get total amount from cart
		foreach ($cart as $prod) {
			$total = $total + ($prod['qty']*$prod['price']);
		}

		//create invoice
		createInvoice($conn,$idno);
	}


require '../views/checkout.view.php';
} else {
	die('Error while connecting..');
}