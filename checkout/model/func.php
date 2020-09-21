<?php
//this function should be replaced by your cart table
function fetchCart($conn,$owner)
{
	$sql = "SELECT c.id, c.qty, c.prod, p.title, p.price, p.front_view FROM cart c, property p WHERE c.owner = \"$owner\" AND c.prod = p.id";
	return fetchData($conn,$sql);
}

function fetchAdress($conn,$owner)
{
	$sql = "SELECT * FROM address WHERE owner = \"$owner\"";
	return fetchData($conn,$sql);
}

function getPrice($conn,$prod)
{
	$sql = "SELECT price FROM property WHERE id=$prod";
	return fetchData($conn,$sql)[0]['price'];
}

function createInvoice($conn,$owner)
{
	$invoice_id = date("mdhis");
	$prods = "";
	$products = fetchCart($conn,$owner);
	$total = 0;

	foreach ($products as $product) {
		extract($product);
		$sql = "INSERT INTO invoice_details (invoice_id,owner,prod,qty) VALUES ($invoice_id,$owner,$prod,$qty)";
		addData($conn,$sql);

		$price = getPrice($conn,$prod);

		$total += $price*$qty;

		$sql1 = "DELETE FROM cart WHERE id = $id";
		deleteData($conn,$sql1);

		$prods .= "|".$prod;
	}

	$date = date("Y-m-d H:i:s");
	$sql2 = "INSERT INTO invoice (invoice_id,prods,owner,amount,order_date) VALUES ($invoice_id,\"$prods\",$owner,\"$total\",\"$date\")";
	
	if (addData($conn,$sql2)) {
	 	return $invoice_id;
	} else {
		return false;
	}
}

function getUnpaidInvoices($conn,$owner)
{
	$sql = "SELECT * FROM invoice WHERE owner=\"$owner\" AND state=0";
	return fetchData($conn,$sql);
}

function getOrderDetails($conn,$orderno)
{
	$sql = "SELECT p.title, p.price, i.qty FROM property p, invoice_details i WHERE i.invoice_id = $orderno AND p.id = i.prod";
	return fetchData($conn,$sql);
}

function getInvoiceDetails($conn,$invoice_id)
{
	$sql = "SELECT * FROM invoice WHERE invoice_id=\"$invoice_id\"";
	return fetchData($conn,$sql);
}


function getTotals($conn,$invoice_id)
{
	$sql = "SELECT i.qty, p.price FROM invoice_details i, property p WHERE p.id = i.prod AND i.invoice_id = \"$invoice_id\"";
	return fetchData($conn,$sql);
}

function getAddresses($conn,$idno)
{
	$sql = "SELECT * FROM address WHERE owner = \"$idno\"";
	return fetchData($conn,$sql);
}

?>