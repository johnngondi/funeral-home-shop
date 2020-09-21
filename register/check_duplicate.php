<?php
require '../_inc/config.php';
require '../model/crud.php';
$conn = dbconnect();

if ($conn) {
	if (isset($_GET['id'])) {

		$id = $_GET['id'];

		//Check in Customers table

		$sql = "SELECT fname,lname FROM customers WHERE idno=$id";
		$results = fetchdata($conn,$sql);
		if ($results) {
			$results = $results[0];
			echo "
			<script>
				\$('#err-idno').addClass('error-input');
                \$('#err-idno').text('The ID Number you are using is already in use by ".ucwords($results['fname']." ".$results['lname'])." (Customer). Try a different one.');
                \$('#lb-idno').addClass('error-input');
                \$('#idno').removeClass('ok-input');
                \$('#idno').addClass('error-input');
	            \$('#save').addClass('disabled');
                \$('#idno').select();
            </script>
			";
		} else {
			//Check Staff
			$sql = "SELECT names FROM staff WHERE idno=$id";
			$results = fetchdata($conn,$sql);

			if ($results) {
				$results = $results[0];
				echo "
				<script>
					\$('#err-idno').addClass('error-input');
	                \$('#err-idno').text('The ID Number you are using is already in use by ".ucwords($results['names'])." (Staff). Try a different one.');
	                \$('#lb-idno').addClass('error-input');
	                \$('#idno').removeClass('ok-input');
	                \$('#idno').addClass('error-input');
	                \$('#save').addClass('disabled');
	                \$('#idno').select();
	            </script>
				";
			} else {
				echo "
				<script>
					\$('#err-idno').removeClass('error-input');
	                \$('#err-idno').text('');
	                \$('#lb-idno').removeClass('error-input');
	                \$('#idno').addClass('ok-input');
	                \$('#idno').removeClass('error-input');
	                \$('#save').removeClass('disabled');
	            </script>
				";
			}
		}

	} elseif (isset($_GET['phone'])) {

		$phone = $_GET['phone'];
		//Check in Customers table

		$sql = "SELECT fname,lname FROM customers WHERE phone=$phone";
		$results = fetchdata($conn,$sql);
		if ($results) {
			$results = $results[0];
			echo "
			<script>
				\$('#err-phone').addClass('error-input');
                \$('#err-phone').text('The Phone Number you are using is already in use by ".ucwords($results['fname']." ".$results['lname'])." (Customer). Try a different one.');
                \$('#lb-phone').addClass('error-input');
                \$('#phone').removeClass('ok-input');
                \$('#phone').addClass('error-input');
	            \$('#save').addClass('disabled');
                \$('#phone').select();
            </script>
			";
		} else {
			//Check Staff
			$sql = "SELECT names FROM staff WHERE phone=$phone";
			$results = fetchdata($conn,$sql);

			if ($results) {
				$results = $results[0];
				echo "
				<script>
					\$('#err-phone').addClass('error-input');
	                \$('#err-phone').text('The Phone Number you are using is already in use by ".ucwords($results['names'])." (Staff). Try a different one.');
	                \$('#lb-phone').addClass('error-input');
	                \$('#phone').removeClass('ok-input');
	                \$('#phone').addClass('error-input');
	                \$('#save').addClass('disabled');
	                \$('#phone').select();
	            </script>
				";
			} else {
				echo "
				<script>
					\$('#err-phone').removeClass('error-input');
	                \$('#err-phone').text('');
	                \$('#lb-phone').removeClass('error-input');
	                \$('#phone').addClass('ok-input');
	                \$('#phone').removeClass('error-input');
	                \$('#save').removeClass('disabled');
	            </script>
				";
			}
		}

	} elseif (isset($_GET['email'])) {

		$email = $_GET['email'];

		$sql = "SELECT fname,lname FROM customers WHERE email=\"$email\"";
		$results = fetchdata($conn,$sql);
		if ($results) {
			$results = $results[0];
			echo "
			<script>
				\$('#err-email').addClass('error-input');
                \$('#err-email').text('The Email Address you are using is already in use by ".ucwords($results['fname']." ".$results['lname'])." (Customer). Try a different one.');
                \$('#lb-email').addClass('error-input');
                \$('#email').removeClass('ok-input');
                \$('#email').addClass('error-input');
	            \$('#save').addClass('disabled');
	            \$('#prev-last').addClass('disabled');
                \$('#email').select();
            </script>
			";
		} else {
			//Check Staff
			$sql = "SELECT names FROM staff WHERE email=\"$email\"";
			$results = fetchdata($conn,$sql);

			if ($results) {
				$results = $results[0];
				echo "
				<script>
					\$('#err-email').addClass('error-input');
	                \$('#err-email').text('The Email Address you are using is already in use by ".ucwords($results['names'])." (Staff). Try a different one.');
	                \$('#lb-email').addClass('error-input');
	                \$('#email').removeClass('ok-input');
	                \$('#email').addClass('error-input');
	                \$('#save').addClass('disabled');
	            	\$('#prev-last').addClass('disabled');
	                \$('#email').select();
	            </script>
				";
			} else {
				echo "
				<script>
					\$('#err-email').removeClass('error-input');
	                \$('#err-email').text('');
	                \$('#lb-email').removeClass('error-input');
	                \$('#email').addClass('ok-input');
	                \$('#email').removeClass('error-input');
	                \$('#save').removeClass('disabled');
	            </script>
				";
			}
		}

	}
} else {
	echo "string";
}

?>