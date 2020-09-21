<?php
session_start();
if (!isset($_SESSION['idno']) OR $_SESSION['role'] != 'admin') {
	header("Location:login.php?err=admin");die();
}

require '../_inc/config.php';
require '../model/crud.php';
$conn = dbconnect();

if ($conn) {
	$idno  = $_GET['idno'];

	$sql = "DELETE from staff WHERE idno = $idno";
	deleteData($conn,$sql);

	$sql = "DELETE from user WHERE username = $idno";
	deleteData($conn,$sql);

	die();
} else {
	header("Location:../login?ret=admin");die();
}
?>