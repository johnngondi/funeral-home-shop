<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login - E-Burol Dalisay Funeral Home</title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style_2.css">
	
	<style type="text/css">

		a.persist:active{
			text-decoration: none;
			font-size: 1.1em;

		}
		a.persist:hover{
			margin-right: 6px;
			margin-left: 6px;
			text-decoration: none;
			font-size: 1.1em;
		}

	</style>
	
    
</head>
<body>
	<div class="col-md-4 col-xs-1 col-sm-2"></div>

		<div class="col-md-4 col-xs-10 col-sm-8">
	
		<div class="box fore-color">
			<div class="row">
				<div class="col-md-12 center" style="padding-top:20px;"><img src="../images/logo.png"></div>
				<div class="col-md-12 center"><h5>Welcome to E-Burol Dalisay Funeral Home</h5>
			
				<h6>One account, login once, access everything.</h6>
				<h6 class="text-warning"><?=$message?></h6>
				</div>

			</div>
		    <div class="row">
		    	<h5 class="center">Login</h5>
			        <div class="col-md-12">
						<form method="POST" name="unameform" action="">
				          <div class="uname input-field inline col s12">
				            <input type="text" name="uname" id="uname" class="validate"  onblur="validateUname()" value="">
				            <label id="label-uname" for="uname" data-error="" data-success="">Enter ID/Birth Certificate/Passport Number</label>
					          <p id="status-id" class="error"></p>
				          </div>

				          <div class="uname input-field inline col s12">
				            <input type="password" name="password" id="password" class="validate"  onblur="validatePass()" value="">
				            <label id="label-pass" for="password" data-error="" data-success="">Enter Password</label>
					          <p id="status-pass" class="error"></p>
				          </div>

				          <div class="row">
					          
					          <div class="col-md-8">
								
					          </div>
					          <div class="col-md-4">
					          	<button id="next" class="btn-apply waves-effect waves-blue  right hoverable ">Login <i class="fa fa-sign-in"></i></button>	
					          </div>

					        </div>
					        <h6 class="center"><a class="waves-effect hoverable persist tooltipped" data-position="top" data-delay="1" data-tooltip="Click here to Register if you are a new Member." href="../register">New? Register here!</a></h6>	
				    	</form>
			        </div>
		    </div>
		</div>	
				   
		</div>
	
	<div class="col-md-4 col-xs-1 col-sm-2"></div>

	<div id="feedback"></div>
 
</body>

<script type="text/javascript" src="../js/jquery.js"></script>
<!-- <script type="text/javascript" src="../js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="../js/materialize.min.js"></script>

<script type="text/javascript" src="../js/script_2.js"></script>
		<?php
			if (isset($_GET['errcode'])) {
				echo "<script>
						$('#uname').addClass('invalid');
						$('#label').css('color','red');
						$('#uname').select();
					</script>";	
			}
		?>

<script type="text/javascript">
	var ret='';
		<?php if (isset($_GET['ret'])): ?>
			ret = '<?=$_GET['ret']?>';		
		<?php endif ?>
	$(document).ready(function () {

		document.getElementById('uname').focus();

		
		$("form").submit(function() {
			var idno = document.getElementById('uname').value;
			var pass = document.getElementById('password').value;

			if (validateUname() && validatePass()) {

				$.ajax({
					url: 'login_check.php',
					type: 'POST',
					data: {'idno':idno, 'password':pass},
					success: function(feedback) {
						$('#feedback').html(feedback);
					}
				});

				return false;
			} else {
				return false;
			}
		});
	});

	function validateUname() {
		
		var uname = document.getElementById('uname');
		var valuname = uname.value;
		
		if (valuname != '') {
			if (valuname.length < 4 || isNaN(valuname)) {

				$('#label-uname').css("color","red");
				$('#uname').addClass('invalid');
				$('#uname').focus();
				$('#status-id').text('The ID Number/Birth Certificate/Passport Number you entered is wrong! Must be 4 or more Numbers.');

				return false;
			} else {
				$('#label-uname').css("color","#0099cc");
				$('#status-id').text('');
				$('#uname').removeClass('invalid');

				return true;
			}
		} else {
				$('#status-id').text('Please Enter ID Number!');
				$('#uname').focus();

				return false;
		}
		
		
	}


	 function validatePass() {
		 if (document.getElementById('password').value == "") {
		 	
		 	$('#label-pass').css("color","red");
			$('#password').addClass('invalid');
			$('#password').focus();
			$('#status-pass').text('Please Enter your password.');

			return false;
		 }else{

		 	$('#label-pass').css("color","#0099cc");
			$('#password').removeClass('invalid');
			$('#status-pass').text('');

		 	return true;
		 }            
       
	}




</script>
</html>	 	