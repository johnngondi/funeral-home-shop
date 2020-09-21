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
				\$('#rent-info').removeClass('hide');
				\$('.tenant-ppic').prop(\"src\",\"$ppic\");
				\$('.tenant-name').text(\"$name\");
				\$('.tenant-id').text(\"$id\");
				\$('#tenant-id-rent').val(\"$t_id\");
			</script>
		";

		$invoices = getTenantInvoices($conn,$t_id);

		if ($invoices) {
			$radios='';
			foreach ($invoices as $invoice) {
			//get Property title
				$prop = $invoice['prop_id'];
				$sql = "SELECT title FROM property WHERE id = \"$prop\"";
				$title = fetchData($conn,$sql);
				$title = $title[0];
				$title = ucwords($title['title']);

				$invoice_id = $invoice['id'];
				$amount = $invoice['amount'];
				$paid = $invoice['paid'];
				$bal = $invoice['amount'] - $invoice['paid'];
				$due_date = date('F d, Y', strtotime($invoice['date_due']));


				$radios .= "
					<input type=\"radio\" id=\"rent-$invoice_id\" name=\"invoice\" value=\"$invoice_id\" onclick = \"setAmountDue('".$bal."','".$title."')\">
					<label for=\"rent-$invoice_id\">$due_date - Invoice</label>
				";

			}

			echo "
				$radios
				<script>
					\$('#payment-rent').removeClass('hide');
					
				</script>
			";

		} else {

			echo "
				<script>
		            var \$toastContent = \$('<span> There no unpaid invoices $name.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation yellow-text\"></i></button>'));
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