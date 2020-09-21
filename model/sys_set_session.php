<?php
function createTenantSession($username,$fname,$lname,$ppic,$occupation)
{
	try {
		$_SESSION['idno'] = $username;
		$_SESSION['user'] = $fname." ".$lname;
		$_SESSION['ppic'] = $ppic;
		$_SESSION['role'] = "tenant";
		$_SESSION['occupation'] = $occupation;

		return true;
		
	} catch (Exception $e) {
		
		return false;
	}

}

function createStaffSession($username)
{
	try {
		$_SESSION['idno'] = $username;
		$_SESSION['role'] = "admin";
		$_SESSION['ppic'] = '';

		return true;
		
	} catch (Exception $e) {

		return false;
	}
}
?>