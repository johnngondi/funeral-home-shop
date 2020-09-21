<?php

function getAllProperties($conn)
{
	$sql = "SELECT * FROM property WHERE state <> 2";
	$results = fetchData($conn,$sql);

	if ($results) {
		
		return $results;
	} else {
		
		return false;
	}
}

function getTenantInfor($conn,$id)
{
	$sql = "SELECT ppic,fname,lname,occupation FROM customers WHERE idno=\"$id\"";
	$results = fetchData($conn,$sql);

	if ($results) {
		$results = $results[0];

		return $results;
	} else {

		return false;
	}
}

function getAllTenants($conn)
{
	$sql = "SELECT * FROM customers WHERE state = 1";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results;
	} else {
		return false;
	}
}

function getNewTenants($conn)
{
	$sql = "SELECT * FROM customers WHERE state = 0";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results;
	} else {
		return false;
	}
}

function getNewPayments($conn)
{
	$sql = "SELECT c.ppic, c.fname, c.lname, c.phone, t.id, t.invoice, t.txn_id, t.amount, t.stamp FROM customers c, temp_pay t, invoice i WHERE i.state = 2 AND i.id = t.invoice AND i.owner = c.idno AND i.state=0";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results;
	} else {
		return false;
	}
}

function getNoOfNewTenants($conn)
{
	try {
		$sql = "SELECT count(*) FROM customers WHERE  state = 0";
		$numberofrows = getNumberOfRows($conn, $sql);
		
		return $numberofrows;
	} catch (PDOException $e) {
		return 0;
	}
}

function getAllPayments($conn)
{
	$sql = "SELECT * FROM payments";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results;
	} else {
		return false;
	}
}

function getPaymentInfo($conn,$id)
{
	$sql = "SELECT * FROM temp_pay WHERE id =\"$id\"";
	return fetchData($conn,$sql)[0];

}


function getAdmins($conn,$idno)
{
	$sql = "SELECT * FROM staff WHERE email <> \"sudo@sys\.com\" AND idno <> \"$idno\"";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results;
	} else {
		return false;
	}
}
?>