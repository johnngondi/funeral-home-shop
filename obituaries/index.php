<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';
require '../model/material.php';

if (!isset($_COOKIE['sess_id'])) {
	setcookie('sess_id',date('Ymdhis'),time()+(60*60*24),'/');
}

$conn = dbconnect();

if (isset($_SESSION['idno'])) {
	$owner = $_SESSION['idno'];
} else {
	$owner = $_COOKIE['sess_id'];
}

if ($conn){

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$photo = $_POST['photo'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$dod = $_POST['dod'];
		$desc = $_POST['desc'];

		$sql = "INSERT INTO obit (name,dob,dod,photo,obitDesc) VALUES (\"$name\",\"$dob\",\"$dod\",\"$photo\",\"$desc\")";
		addData($conn,$sql);

	}

	if (isset($_GET['act']) && $_GET['act'] == 'del') {
		$id = $_GET['id'];
		$sql = "DELETE FROM obit WHERE id = \"$id\"";
		deleteData($conn,$sql);
	}
	
$sql = "SELECT * FROM obit ORDER BY id DESC";
$obits = fetchData($conn,$sql);


$cartCount = getCartCount($conn,$owner);
	
	
} else {
	die('Error while connecting to server');
}

require '../views/obituaries.view.php';
?>