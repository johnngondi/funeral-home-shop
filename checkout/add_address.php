<?php
session_start();

require '_inc/config.php';
require 'model/crud.php';

$conn = dbconnect();



if ($conn) {
	$owner = $_SESSION['idno'];
	$invoice = $_POST['invoice'];
	$title = ucwords($_POST['title']);
	$country = ucwords($_POST['country']);
	$county = ucwords($_POST['county']);
	$city = ucwords($_POST['city']);
	$street = ucwords($_POST['street']);
	$houseno = ucwords($_POST['houseno']);
	$landmark = ucwords($_POST['landmark']);

	$sql = "INSERT INTO address (owner, title, country, county, city, street, houseno, landmark) VALUES (\"$owner\",\"$title\",\"$country\",\"$county\",\"$city\",\"$street\",\"$houseno\",\"$landmark\")";
	
	if (addData($conn,$sql)) {
		$sql = "SELECT id FROM address ORDER BY id desc LIMIT 1";
		$id = fetchData($conn,$sql)[0]['id'];


		$address = "<div class=\"col m6 s12 l4 hoverable\"><input type=\"radio\" id=\"address-$id\" name=\"select\" value=\"$id\" onchange=\"setAddress($id,$invoice)\" class=\"\" required><label class=\"radio\" for=\"address-$id\"><h4 class=\"center-align\">$title</h4><p class=\"left-align\" style=\"font-size: 1.3em; line-height: 8px;\"><b>Country: </b>$country</p><p class=\"left-align\" style=\"font-size: 1.3em; line-height: 8px;\"><b>County: </b>$county</p><p class=\"left-align\" style=\"font-size: 1.3em; line-height: 8px;\"><b>City: </b>$city</p><p class=\"left-align\" style=\"font-size: 1.3em; line-height: 8px;\"><b>Street: </b>$street</p><p class=\"left-align\" style=\"font-size: 1.3em; line-height: 8px;\"><b>House No: </b>$houseno</p><p class=\"left-align\" style=\"font-size: 1.3em; line-height: 8px;\"><b>Landmark: </b>$landmark</p></label></div>";

				echo "		
			        <script>
			        	var address='$address';
			        	\$('#address').append(address);
			        	close_popup('addnew');
			            var \$toastContent = \$('<span> Address Added Sucessfully</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 5000);
			        </script>
				";die();
	} else {

		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error while adding Address. That House No. exists.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	}

} else {

	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 3000);
        </script>
	";
}

?>