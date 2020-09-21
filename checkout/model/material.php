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


function ownUpCart($conn,$owner,$idno)
{
	$sql = "UPDATE cart SET owner = $idno WHERE owner=$owner";
	return addData($conn,$sql);
}

function fetchCustomRequests($conn)
{
	$sql = "SELECT c.id, c.idno, c.title, c.image, c.color, c.description, c.datedue, cs.fname, cs.lname, cs.ppic, cs.phone FROM customers cs, custom c WHERE c.idno=cs.idno AND c.state=0";
	return fetchData($conn,$sql);
}

?>