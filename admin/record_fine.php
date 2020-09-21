<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/tenant.php';
$conn = dbconnect();
if ($conn) {
	$t_id = $_POST['tenant-id-fines'];
	$amount = $_POST['fine-amount'];
	$due_date = $_POST['fine-due-date'];
	$description = $_POST['fines-description'];
	$property = $_POST['property'];

	$data = array(
		'id' => $t_id, 
		'amount' => $amount, 
		'due_date' => $due_date, 
		'description' => $description,
		'property' => $property 
	);

	$result = recordFine($conn,$data);
	if ($result) {
		echo "
			<script>
				\$(\":text\").val('');
				\$(\"#fine-amount\").val('');
				\$(\"#fines-description\").val('');
				\$(\"#feedback-fines\").html('');
				\$('#fine-info').addClass('hide');
				\$('#record-fine').addClass('hide');
				\$('#fine-btn-span').html(\"Record Fine\");
            	\$('#fine-btn').removeClass('disabled');

		        var \$toastContent = \$('<span> Fine Recorded Successfully successfully!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
		        Materialize.toast(\$toastContent, 3000);
			</script>
		";
	} else {	
		echo "		
	        <script>
	            var \$toastContent = \$('<span> Error while recording fine.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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