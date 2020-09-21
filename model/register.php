<?php

function addTenant($conn, $data){
	//converts the array sent to variables
	extract($data);
	$reg_date = date("YY-m-d");
	
	$sql = "INSERT INTO customers (idno,dob,gender,fname,lname,phone,email,occupation,state) 
			VALUES (\"$idno\",\"$dob\",\"$gender\",\"$fname\",\"$lname\",\"$phone\",\"$email\",\"$occupation\",1)";
	$result = addData($conn,$sql);

	if ($result) {
		//add user
		$sql = "INSERT INTO user (username,password,role,state) VALUES (\"$idno\",\"$password\",\"tenant\",1)";
		$result = addData($conn,$sql);

		if ($result) {
			return true;
		}else{
			return false;
		}
	} else {
		return false;
	}
}

function setPic($conn,$idno,$image)
{
	$sql = "UPDATE customers SET ppic = \"$image\" WHERE idno = \"$idno\"";
	$result = addData($conn,$sql);

	if ($result) {
		return true;
	}else{
		return false;
	}
}

function updateTenant($conn,$data)
{
	extract($data);
	
	$sql = "UPDATE customers SET fname = \"$fname\",lname = \"$lname\",phone = \"$phone\",email = \"$email\",occupation = \"$occupation\" WHERE idno = \"$idno\"";
	$result = addData($conn,$sql);

	if ($result) {
		return true;
	}else{
		return false;
	}
}
 
?>
