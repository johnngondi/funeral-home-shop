<?php
session_start();
if (!isset($_SESSION['idno']) OR $_SESSION['role'] != 'admin') {
	header("Location:../login?ret=admin");die();
}
require '../_inc/config.php';
require '../model/crud.php';
$conn = dbconnect();
$message = '';
$adm = $_SESSION['regno'];

if ($conn) {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$idno = $_POST['id-no'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "INSERT INTO staff (idno,names,phone,email) VALUES (\"$idno\",\"$name\",\"$phone\",\"$email\")";
		$result = addData($conn,$sql);

		$sql = "INSERT INTO user (username,password,role,state) VALUES (\"$idno\",\"$password\",\"admin\",1)";
		$result = addData($conn,$sql);
		
		if ($result) {

			header("Location:./?ok=ok#admins");
		} else {

			header("Location:./?err=err#admins");			
		}
	}

} else {
	dheader("Location:login.php?err=student");die();
}
?>