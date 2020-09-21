<?php

function getTenantInfo($conn,$id)
{
	$sql = "SELECT * FROM customers WHERE idno=\"$id\"";
	$results = fetchData($conn,$sql);

	if ($results) {
		$results = $results[0];

		return $results;
	} else {

		return false;
	}
}
function getTenantProperties($conn,$t_id)
{
	$sql = "SELECT * FROM property WHERE occupant = \"$t_id\" AND state = 1";
	$results = fetchData($conn,$sql);

	if ($results) {

		return $results;
	} else {
		return false;
	}	
}

function recordFine($conn,$data)
{
	extract($data);

	$sql = "INSERT INTO fines (prop_id, tenant_id, amount, description, due_date) 
		VALUES (\"$property\",\"$id\",\"$amount\",\"$description\",\"$due_date\")";

	$result = addData($conn,$sql);

	if ($result) {
		return true;
	} else {
		return false;
	}
}

function updateTenantInfo($conn,$data)
{
	$sql = "UPDATE customers SET fname = \"$fname\", lname = \"$lname\", phone = \"$phone\" email = \"$email\" WHERE idno = \"$idno\"";
	$result = addData($conn,$sql);

	if ($result) {
		return true;	
	} else {
		return false;
	}
}

function getTenantFines($conn,$t_id)
{
	$sql = "SELECT p.title, f.id, f.description, f.due_date, f.amount, f.paid, f.state FROM property p, fines f WHERE f.prop_id = p.id AND p.occupant = f.tenant_id AND f.tenant_id=\"$t_id\"";
	$results = fetchData($conn,$sql);
	

	if ($results) {
		return $results;
	} else {
		return false;
	}
}

function getTenantInvoices($conn,$t_id)
{
	$sql = "SELECT * FROM rent_invoice WHERE tenant_id = \"$t_id\" AND state = 0 AND amount>paid";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results;
	} else {
		return false;
	}
}

function createStatement($conn,$data)
{
	extract($data);

	$sql = "INSERT INTO payment (amount, paid_for, prop_id, tenant_id, mode, date_due, date_paid, comment) VALUES ( \"$amount\", \"$paid_for\", \"$prop_id\", \"$tenant_id\", \"$mode\", \"$date_due\", \"$date_paid\", \"$comment\")";
	$result = addData($conn,$sql);

	if ($result) {
		return true;
	} else {
		return false;
	}
}

function getTenantPayments($conn,$t_id)
{
	$sql = "SELECT s.id, s.amount, s.paid_for, s.mode, s.date_due, s.date_paid, s.comment, t.fname, t.lname, p.title FROM payment s, customers t, property p WHERE t.idno = \"$t_id\" AND s.tenant_id = \"$t_id\" AND p.id = s.prop_id";
	$results = fetchData($conn,$sql);

	if ($results) {
		return $results;
	} else {
		return false;
	}
}
?>