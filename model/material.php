<?php
function getUserInfo($conn,$idno)
{
	$sql = "SELECT * FROM user WHERE username = \"$idno\"";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results[0];
	} else {
		return false;
	}
}

function getPersonalInfo($conn,$idno)
{
	$sql = "SELECT * FROM customers WHERE idno = \"$idno\" AND state = 1";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results[0];
	} else {
		return false;
	}
	
}

function getOverdueFines($conn,$idno,$criteria='')
{
	$date = date("Y-m-d");

	$sql = "SELECT SUM(amount-paid) AS fines FROM fines WHERE tenant_id=\"$idno\" AND due_date < \"$date\" AND state=0 $criteria";
	$results = fetchData($conn,$sql);

	if ($results) {
		$results = $results[0];

		return $results['fines'];
	} else {
		return 0;
	}
}

function getOverdueRent($conn,$idno,$criteria)
{
	$date = date("Y-m-d");

	$sql = "SELECT SUM(amount-paid) AS rent FROM rent_invoice WHERE tenant_id=\"$idno\" AND date_due < \"$date\" AND state=0 $criteria";
	$results = fetchData($conn,$sql);

	if ($results) {
		$results = $results[0];
		$rent = $results['rent'];
		
		return $rent;
	} else {
		return 0;
	}
}

function getOwnedProperties($conn,$idno)
{
	try {
		$sql = "SELECT count(*) FROM property WHERE occupant = \"$idno\" AND state <> 2";
		$numberofrows = getNumberOfRows($conn, $sql);
		
		return $numberofrows;
	} catch (PDOException $e) {
		return 0;
	}
}

function ownUpCart($conn,$owner,$idno)
{
	$sql = "UPDATE cart SET owner = $idno WHERE owner=$owner";
	return addData($conn,$sql);
}

function getCategories($conn)
{
	$sql = "SELECT * FROM categories";
	return fetchData($conn,$sql);
}


function getTotalAmount($conn,$t_id)
{
	$sql = "SELECT amount FROM invoice WHERE owner=\"$t_id\" AND state = 1";
	$results = fetchData($conn,$sql);
	$total=0;
	$orders = 0;
	if ($results) {
		foreach ($results as $result) {
			$total += $result['amount'];
			$orders += 1;
		}
	}
	


	$data = array(
		'total' => $total,
		'orders' => $orders

	);
	return $data;
}

?>