<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/tenant.php';

$conn = dbconnect();
if ($conn) {
	$t_id = $_POST['t_id'];

	$tenant = getTenantInfo($conn,$t_id);
	if ($tenant) {
		$name = ucwords($tenant['fname']." ".$tenant['lname']);
		$id = ucwords($tenant['idno']." - ".$tenant['occupation']);
		$ppic = "../images/profile/".$tenant['ppic'];

		echo "
			<script>
				\$('#fine-info').removeClass('hide');
				\$('.tenant-ppic').prop(\"src\",\"$ppic\");
				\$('.tenant-name').text(\"$name\");
				\$('.tenant-id').text(\"$id\");
				\$('#tenant-id-fines').val(\"$t_id\");
			</script>
		";

		$properties = getTenantProperties($conn,$t_id);
		if ($properties) {
			$radios='';
			foreach ($properties as $property) {				
				$prop_id = $property['id'];
				$title = ucwords($property['title']);
				$radios .= "
					<input type=\"radio\" id=\"fines-$prop_id\" name=\"property\" value=\"$prop_id\" required>
					<label for=\"fines-$prop_id\">$title</label>
				";

			}

			echo "
				$radios
				<script>
					\$('#record-fine').removeClass('hide');
					
				</script>
			";

		} else {

			echo "
				<script>
		            var \$toastContent = \$('<span> There no Properties rented by $name.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation yellow-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 3000);
		        </script>
		    ";
		}

	} else {
		echo "
			<script>
	            var \$toastContent = \$('<span> tenant Not Found.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 2000);
	        </script>
	    ";
	}

} else {
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";

}


?>