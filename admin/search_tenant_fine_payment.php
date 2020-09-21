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
				\$('#fine-info-payment').removeClass('hide');
				\$('.tenant-ppic').prop(\"src\",\"$ppic\");
				\$('.tenant-name').text(\"$name\");
				\$('.tenant-id').text(\"$id\");
			</script>
		";

		$fines = getTenantFines($conn,$t_id);
		try {
			if ($fines) {
				$myFines="<table class=\"striped highlight responsive-table centered\">
							<thead>
								<tr>
								    <th>Property</th>
								    <th>Description</th>
								    <th>Date Due</th>
								    <th>Amount</th>
								    <th>Paid</th>
								    <th>Amount to Pay</th>
								</tr>
							</thead>

							<tbody>";
				foreach ($fines as $fine) {	
					if ($fine['amount']>$fine['paid']) {
									
						$due_date = date('d-F-Y', strtotime($fine['due_date']));
						$myFines .= "
									<tr>
										<td><span style=\"font-size: 1.2em;\"></span>".ucwords($fine['title'])."</td>
										<td>".ucfirst($fine['description'])."</td>
										<td>".$due_date."</td>
										<td>ksh. ".number_format($fine['amount'],2,".",",")."</td>
										<td id ='paid-".$fine['id']."'>Ksh. ".number_format($fine['paid'],2,".",",")."</td>
										<td><input type='number' id='".$fine['id']."' class='center-align'>
											<span  id='lb-".$fine['id']."' class='red-text'></span>
										</td>
										<td><button id='btn-".$fine['id']."' class='btn-flat green white-text' onclick=\"payFine(".$fine['id'].",".($fine['amount']-$fine['paid']).",".$fine['amount'].")\">Pay</button></td>
									</tr>
						";			
					}
				}
				$myFines .= "</tbody>
						</table>";
				echo $myFines;
				echo "
					<script>
						\$('#payment-fine').removeClass('hide');
						
					</script>
				";

			} else {

				echo "
					<script>
			            var \$toastContent = \$('<span> There no fine for $name.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation yellow-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 3000);
			        </script>
			    ";
			}	
		} catch (Exception $e) {
			echo "
					<script>
			            var \$toastContent = \$('<span> $e.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation yellow-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 3000);
			        </script>
			    ";
		}
		

	} else {
		echo "
			<script>
	            var \$toastContent = \$('<span> Tenant Not Found.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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