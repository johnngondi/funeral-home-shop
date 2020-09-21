<?php
session_start();

require '_inc/config.php';
require 'model/crud.php';
require 'model/func.php';
require 'model/material.php';
$conn = dbconnect();

if ($conn) {
	if (isset($_SESSION['idno'])) {
		$idno = $_SESSION['idno'];
		
	} else {
		//redirect user to login form for them to login first
		header("Location:../login?ret=checkout");die();
	}
	$total = 0;
	$invoice = '';
	if (!isset($_GET['invoice'])) {
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
			$invoice = createInvoice($conn,$idno);
		}

	} else {
		$invoice = $_GET['invoice'];
	}

	//get Invoice Details
	$order = getInvoiceDetails($conn,$invoice)[0];
	$total = $order['amount'];
	$addresses = getAddresses($conn,$idno);
	$phone = getPersonalInfo($conn,$idno)['phone'];
	$shipping = 0;
	$grandTotal = $total+$shipping;

	// Include and initialize database class
	include 'DB.class.php';
	$db = new DB;

	// Include and initialize paypal class
	include 'PaypalExpress.class.php';
	$paypal = new PaypalExpress;

	if (isset($_GET['status'])) {

		if ($_GET['status'] == 1) {
			$payment_date = date("Y-m-d H:i:s");
			$sql = "UPDATE invoice SET state = 1, payment_date=\"$payment_date\" WHERE invoice_id = $invoice";
			if (addData($conn,$sql)) {
				//deduct stock
				$sql = "SELECT * FROM invoice_details WHERE invoice_id = \"$invoice\"";
				$products = fetchData($conn,$sql);
				if ($products) {
					foreach ($products as $product) {
						$prod_id = $product['prod'];
						$qty = $product['qty'];
						$sql = "UPDATE property SET stock = stock-$qty WHERE id=$prod_id";
						addData($conn,$sql);
					}
				}
				
			} else {
				echo "Eror!";
			}
		}
	}


require '../views/checkout.view.php';
} else {
	die('Error while connecting..');
}