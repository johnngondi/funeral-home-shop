<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/material.php';
$conn = dbconnect();
if ($conn) {

	
	$idno = $_POST['idno'];
	$password = $_POST['password'];
	$owner = $_COOKIE['sess_id'];

	$user = getUserInfo($conn,$idno);
	if ($user) {
		if ($user['password'] == $password) {
			if ($user['state'] == 1) {

				if ($user['role'] == 'tenant') {
					$tenant = getPersonalInfo($conn,$idno);
					if ($tenant) {

						extract($tenant);
						
						require '../model/sys_set_session.php';
						if(createTenantSession($idno,$fname,$lname,$ppic,$occupation)) {
							//assign cart to user
							ownUpCart($conn,$owner,$idno);
							echo "
								<script>
									var \$toastContent = \$('<span> Login Successful. If yo had put anything in the cart it has been assigned to you. Wait to be redirected.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
						            Materialize.toast(\$toastContent, 4000);
						            session = $idno;
						            if (ret != '') {
						            	window.location.href='../'+ret;
						            } else {
						            	window.location.href=\"../\";
						            }
	                                

								</script>
							";

						} else {
							echo "		
						        <script>
						            var \$toastContent = \$('<span> Both username and password are okay but an error occured with your account. Contact wenmaster</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
						            Materialize.toast(\$toastContent, 2000);
						        </script>
							";

						}

					} else {
						echo "		
					        <script>
					            var \$toastContent = \$('<span> There are no personal details for you.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
					            Materialize.toast(\$toastContent, 2000);
					        </script>
						";					
					}
				
				} else {
					require '../model/sys_set_session.php';
					if(createStaffSession($idno)) {
							echo "
								<script>
									var \$toastContent = \$('<span> Login Successful. Wait to be redirected.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
						            Materialize.toast(\$toastContent, 2000);
						           
						          	window.location.href=\"../admin\";

								</script>
							";
					} else {
						echo "		
					        <script>
					            var \$toastContent = \$('<span> Both username and password are okay but an error occured with your account. Contact wenmaster</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
					            Materialize.toast(\$toastContent, 2000);
					        </script>
						";

					}
				}
				
			} else {

				echo "		
			        <script>
			            var \$toastContent = \$('<span> Your account is not activated yet!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 2000);
			        </script>
				";
			}

		} else {
			echo "		
		        <script>
		            var \$toastContent = \$('<span> Wrong Password. Try a different password.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2000);
					\$('#status-pass').text('Wrong Password. Try a different password.');
					\$('#password').val('');
		        </script>
			";

		}
		

	} else {
		echo "		
	        <script>
	            var \$toastContent = \$('<span> Sorry! That ID Number is not registered.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
	            Materialize.toast(\$toastContent, 2000);
				\$('#status-id').text('Sorry! That ID Number is not registered.');
				\$('#password').val('');
				\$('#uname').select();
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