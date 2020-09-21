<?php
function addNewProperty($conn,$data)
{
	extract($data);

	$sql = "INSERT INTO property (title, price, unit, type, description, stock, colors, front_view, interior_view, aerial_view) VALUES (\"$title\", \"$price\",\"$unit\",\"$type\",\"$description\",\"$stock\",\"$colors\",\"$front_view\",\"$interior_view\",\"$aerial_view\")";
	return addData($conn,$sql);

}

function addNewCategory($conn,$data)
{
	extract($data);

	$sql = "INSERT INTO categories (title, least_price, sticker, barner) VALUES (\"$title\", \"$price\",\"$sticker\",\"$barner\")";

	return addData($conn,$sql);

}


function getAllAvailableProps($conn,$criteria='')
{
	$sql = "SELECT * FROM property WHERE stock >= 0 $criteria";

	$results = fetchData($conn,$sql);

	if ($results) {

		return $results;
	} else {

		return false;	
	}
}



function getPropertyInfo($conn,$prop_id)
{
	$sql = "SELECT rent,title FROM property WHERE id = \"$prop_id\"";
	$results = fetchData($conn,$sql);

	if ($results) {
		$rent = $results[0];
		
		return $rent;
	} else {
		return 0;
	}
}

function checkIfInStock($conn,$prod_id)
{
	$sql = "SELECT * FROM property WHERE id = \"$prod_id\" AND stock > 0";
	return fetchData($conn,$sql);
}


function addToCart($conn,$prod_id,$owner)
{
	$sql = "SELECT * FROM cart WHERE owner = \"$owner\" AND prod = \"$prod_id\"";
	if (fetchData($conn,$sql)) {
		$sql = "UPDATE cart SET qty = qty+1 WHERE owner = \"$owner\" AND prod = \"$prod_id\"";
		return addData($conn,$sql);

	} else {
		$sql = "INSERT INTO cart (owner,prod) VALUES (\"$owner\",\"$prod_id\")";
		return addData($conn,$sql);
	}
}

function getCartCount($conn,$owner)
{
	$sql = "SELECT SUM(qty) as cartCount FROM cart WHERE owner = \"$owner\"";
	return fetchData($conn,$sql)[0]['cartCount'];
}

function fetchCart($conn,$owner)
{
	$sql = "SELECT c.id, c.qty, c.prod, p.title, p.price, p.front_view FROM cart c, property p WHERE c.owner = \"$owner\" AND c.prod = p.id";
	return fetchData($conn,$sql);
}

function increaseQty($conn,$id,$qty)
{
	$sql = "UPDATE cart SET qty = $qty WHERE id = \"$id\"";
	return addData($conn,$sql);
}

function removeItem($conn,$id)
{
	$sql = "DELETE FROM cart WHERE id = \"$id\"";
	return deleteData($conn,$sql);
}


function getAllOrders($conn,$idno)
{
	$sql = "SELECT * FROM invoice WHERE owner=$idno";
	return fetchData($conn,$sql);
}

function getOrderDetails($conn,$orderno)
{
	$sql = "SELECT p.title, p.price, i.qty FROM property p, invoice_details i WHERE i.invoice_id = $orderno AND p.id = i.prod";
	return fetchData($conn,$sql);
}


function getInvoiceData($conn,$orderno)
{
	$sql = "SELECT c.ppic, c.idno, c.fname, c.lname, c.phone, c.email, i.amount, i.order_date, i.payment_date, i.state, a.title, a.country, a.county, a.city, a.street, a.houseno, a.landmark FROM customers c, invoice i, address a WHERE i.invoice_id = \"$orderno\" AND c.idno = i.owner AND i.address = a.id";
	
	return fetchData($conn,$sql);
}

function getColors($conn)
{
	$sql = "SELECT * FROM color";
	return fetchData($conn,$sql);
}

?>
