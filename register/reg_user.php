<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/register.php';

$conn = dbconnect();

if ($conn){
	$data = array(
		'idno' => $_POST['idno'],
		'dob' => $_POST['dob'],  
		'gender' => $_POST['gender'], 
		'fname' => $_POST['first-name'], 
		'lname' => $_POST['last-name'], 
		'email' => $_POST['email'], 
		'phone' => $_POST['phone'], 
		'occupation' => $_POST['occupation'], 
		'password' => $_POST['password']
	);


	$result = addTenant($conn,$data);
	if ($result) {
		echo "all good";

		extract($data);
		require '../model/sys_set_session.php';
		createTenantSession($idno,$fname,$lname,'',$occupation);

		echo "
			<script>
				var toastContent = \$('<span><i class=\"fa fa-check green-text\"></i> Registration successful. Add Profile Picture to Complete.</span>' );
  					Materialize.toast(toastContent, 3000);

				\$('#register').addClass('slideOutUp');
				    timeOut = setTimeout(function() {
				        $('#registering').addClass('hidden');
                        $('#regno').attr('value','');
				        $('#img-upload').addClass('bounceInDown ');
                        $('#img-upload').removeClass('hidden');

				}, 100);
			</script>
		";die(); 
	} else {
		echo "
			<script>
				var toastContent = \$('<span><i class=\"fa fa-exclamation red-text\"></i> Error while Registering. Correct Errors and try again.</span>' );
  				Materialize.toast(toastContent, 3000);
                \$('#register').removeClass('hidden');
                \$('#register').addClass('bounceInDown');
                \$('#registering').addClass('hidden');
			</script>
		";die();
	}
} else {
		
	die("

		<script type='text/javascript'> 
    		var toastContent = \$('<span><i class=\"fa fa-exclamation red-text\"></i> Error while Connecting to Server. Contact the System Technician</span>' );
  			Materialize.toast(toastContent, 3000);
                \$('#register').removeClass('hidden');
                            \$('#register').addClass('bounceInDown');
                \$('#registering').addClass('hidden');
    	</script>
    ");
}

?>