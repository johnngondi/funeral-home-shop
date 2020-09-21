<?php
session_start();

require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn){ 
	$prop_id = $_POST['prop_id'];
	$sql = "UPDATE property SET occupant = '', state = 0 WHERE id=\"$prop_id\"";
	$result = addData($conn,$sql);

	if ($result) {
		
		echo "		
	        <script>
				\$(\"#prop-occ-pic-$prop_id\").text(\"\");
				\$(\"#prop-occ-$prop_id\").text(\"Just Vacated\");
				\$(\"#btn-$prop_id\").html(\"<i class='fa fa-trash'></i> Delete Property\");
				\$(\"#btn-$prop_id\").attr(\"onclick\",\"deleteProperty('".$prop_id."')\");
				\$(\"#btn-$prop_id\").removeClass('btn-apply waves-effect waves-green disabled');
				\$(\"#btn-$prop_id\").addClass('btn-cancel waves-effect waves-red');
	            var \$toastContent = \$('<span> Tenant Vacated.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info\"></i></button>'));
	            Materialize.toast(\$toastContent, 3000);
	        </script>
		";
	} else {
		echo "		
	        <script>
				\$(\"#btn-$prop_id\").html(\"<i class='fa fa-times'></i> Vacate Tenant\");
				\$(\"#btn-$prop_id\").removeClass('disabled');
	            var \$toastContent = \$('<span> Error while vacating Tenant.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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