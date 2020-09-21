<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no"> 
	<meta name="description" content=" ">
	<title>Home - E-Burol Dalisay Funeral Home</title>
	<link href="../css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <link rel="stylesheet"" type="text/css" href="../css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style_main.css">
	<style type="text/css">
		
		.top-pane-header {
			color: white;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			margin-top: -2px;
			margin-bottom: -6px;
			margin-right: -1px;
			margin-left: -1px;
			padding-bottom: 10px;
			padding-top: 10px; 
			font-size: 1.1em;
			font-weight: bold;
			line-height: 20px;
		}
		.disabled{
			border: none;
			background-color: #cdcdcd;
			pointer-events: none;
		}
		.red-border{
			border-color: red !important;
		}
		
			   
		.input-field input[type=text]:focus + label, .input-field input[type=password]:focus + label, .input-field input[type=number]:focus + label, .input-field input[type=email]:focus + label {
			color: #0d81a7 !important;
		}
		/* label underline focus color */
		.input-field input[type=text]:focus, .input-field input[type=password]:focus , .input-field input[type=number]:focus, .input-field input[type=email]:focus {
			border-bottom: 1px solid #0d81a7 !important;
			box-shadow: 0 1px 0 0 #000;
		}

			.input-hidden {
			  position: absolute;
			  left: -9999px;
			}

			input[type=radio].cool:checked + label>img {
			  border: 1px solid #fff;
			  box-shadow: 0 0 5px 5px #0d81a7;
			}

			/* Stuff after this is only to make things more pretty */
			input[type=radio].cool + label>img {
			  width: 50px;
			  height: 50px;
			  transition: 500ms all;
			  border-radius: 50%;
			  cursor: pointer;
			  border: 1px dotted #0d81a7;
			}

			input[type=radio].cool:checked + label>img {
			  transform: 
			    rotateZ(-10deg) 
			    rotateX(10deg);
			}

			@-webkit-keyframes rotating {
				from {
					-webkit-transform: rotate(0deg);

				}

				to {
					-webkit-transform: rotate(360deg);		
				}
			}

			@keyframes rotating {
				from {
					transform: rotate(0deg);

				}

				to {
					transform: rotate(360deg);		
				}
			}

			.circular {
				animation: rotating 1.5s linear infinite;
				position: relative;
			}
	</style>
</head>
<body>

<div class="row hide visible-print center-align purple-text" style="margin-bottom: -20px; margin-top: -10px;">
	
	<a href="../" class="purple-text"> <i class="fa fa-bank"></i> <span class="hide-on-small-only"> <img src="../images/logo.png"></span></a>
	
</div>

<div class="row hide-print">	
	<div class="navbar-fixed">
	  <nav>
	    <div class="nav-wrapper">
	      <a href="../" class="brand-logo"><i style="padding-left: 20px;" class="fa fa-bank"></i></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="../"><i class="fa fa-home"></i> Home</a></li>
	        <li ><a href="../shop"><i class="fa fa-shopping-cart"></i> Shop</a></li>
	        <li ><a href="#change-pass-modal" class="modal-trigger"><i class="fa fa-lock"></i> Change Password</a></li>
	        <li><a href="../logout"><i class="fa fa-sign-out"></i> Logout</a></li>
	      </ul>
	    </div>
	  </nav>
	</div>
</div>


<div class="row white-text">
	
    <div id="profile" class="col s12 m3 profile hide-print">

    	<div class="center-align">
    		<p><img src="../images/profile/<?php 
    		if ($tenantInfo['ppic'] == '') {
    			echo 'avatar.png';
    		} else {
    			echo $tenantInfo['ppic'];
    		}
    		?>" class="circle dpic" height="150px" width="150px"></p>
		    <h4><span id="u-fname"><?=ucwords($tenantInfo['fname'])?></span> <span id="u-lname"><?=ucwords($tenantInfo['lname'])?></span></h4>
		    <h6><?=$tenantInfo['idno']?> - <span id="u-occ"><?=ucwords($tenantInfo['occupation'])?></span></h6>
    	</div>      

      	<div class="container">
      		<br>
      		<h6>Phone Number: <span id="u-phone"><?=$tenantInfo['phone']?></span></h6>
      		<h6>Email Address: <span id="u-email"><?=$tenantInfo['email']?></span></h6>
      		<p class="center-align"><a href="#modal1" id="update-form-btn" class="btn-apply  waves-effect waves-green modal-trigger"><i class="fa fa-edit"></i> Update Info</a></p>
      	</div>
    </div>


    <div id="info" class="col s12 m9 info">
      

		<!-- <summary info starts here -->
		<div id="summary" class="col s12" style="padding-top: 20px;">
			<div class="row center-align hide-print">
				
				<div class=" col s12 m3 l3 xl3" style="margin-bottom: 10px;">
				 <a href="../cart" class="tooltipped" data-position="left" data-delay="1" data-tooltip="Click to go to your Cart.">
				 <div class="dpic <?php if($overdue_fines > 0){echo 'red-border';} ?> " style="height: 100px;">
				 	<div  class="top-pane-header purple">
				 		My Cart (Qty)
				 	</div>
				 	<div class="white-text" style="font-size: 2.6em; font-weight: bold;">
				 		<?=number_format($cartCount,0,".",",")?>
				 	</div>
				 </div>
				</a>
				</div>

				<div class=" col s12 m3 l3 xl3" style="margin-bottom: 10px;">
				 <div class="dpic <?php if($overdue_fines > 0){echo 'red-border';} ?> " style="height: 100px;">
				 	<div  class="top-pane-header purple">
				 		Total Orders
				 	</div>
				 	<div class="white-text" style="font-size: 2.6em; font-weight: bold;">
				 		<?=number_format($totalOrders,0,".",",")?>
				 	</div>
				 </div>
				</div>

				<div class=" col s12 m6 l6 xl6" style="margin-bottom: 10px;">
				 <div class="dpic <?php if($overdue_rent > 0){echo 'red-border';} ?> " style="height: 100px;">
				 	<div  class="top-pane-header purple">
				 		Total Amount Spent (PHP)
				 	</div>
				 	<div class="white-text" style="font-size: 2.6em; font-weight: bold;">		 		
				 		<?=number_format($totalAmount,2,".",",")?>
				 	</div>
				 </div>
				</div>
			</div>

			<div class="row center-align white-text color-print" style="padding-top: 5px;">
				<h5 class="white-text"><b>My Orders</b></h5>
				<?php if ($orders): ?>
						
					<table class="responsive-table centered bordered">
						<thead>
							<tr>
							    <th>Order #</th>
							    <th>Products</th>
							    <th>Total Amount</th>
							    <th>Order Date</th>
							    <th>Status</th>
							    <th class="hide-print">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($orders as $order ): ?>
								<?php
									$orderno = $order['invoice_id'];
									$date = date('D d-F-Y', strtotime($order['order_date']));
								?>
								<tr id="">
									<td><?=$orderno?></td>
									<td>									
											<table class="responsive-table centered">
												<?php
													$products = getOrderDetails($conn,$orderno);
													
												?>

												<?php foreach ($products as $product): ?>								
													<tr><td><?=ucwords($product['title'])?></td> <td><?=$product['qty']?> Units @ <?=number_format($product['price'],0,".",",")?></td> <td><?=number_format(($product['qty']*$product['price']),0,".",",")?></td></tr>
												<?php endforeach ?>
											</table>
																			
									</td>
									<td>PHP. <?=number_format($order['amount'],2,".",",")?></td>
									<td><?=$date?></td>
									<td id="order-status-cell-<?=$orderno?>"><?php if ($order['state'] == 0) {
										echo "<b class='blue-text'>Pending Payment..</b>";
									} elseif ($order['state'] == 1) {
										echo "<b class='green-text'>Completed.</b>";
									} elseif ($order['state'] == 3) {
										echo "<b class='green-text'>Paid. Waiting Confirmation..</b>";
									} else {
										echo "<b class='red-text'>Cancelled.</b>";									
									} ?></td>
									<td id="order-action-cell-<?=$orderno?>" class="hide-print">
										<a target="_blank" class="btn-flat purple white-text waves-effect waves-light" href="../invoice?invoice=<?=$orderno?>"><i class="fa fa-file-text"></i> View Invoice</a>
										<?php if ($order['state'] == 0): ?>
											<br><br>
											<a id="" class="btn-apply waves-effect waves-purple" href="../checkout?invoice=<?=$orderno?>"><i class='fa fa-check-square-o'></i> Pay Invoice</a> 
											<br>
											<button style="margin-top: 5px;" id="cancel-order-btn-<?=$orderno?>" class="btn-cancel waves-effect waves-red" onclick="cancelOrder(<?=$orderno?>)"><i class='fa fa-times'></i> Cancel Order</button> 
										
										<?php endif ?>
										            	 
									</td>
								</tr>

							<?php endforeach ?>
						</tbody>
					</table>
				<?php else: ?>
					<h5 class="color-print white-text center-align">You have not bought anything yet.</h5>
				<?php endif ?>
				<br>

				<?php if ($orders): ?>
					<button class="btn-apply waves-effect waves-green hide-print" onclick="print()"><i class="fa fa-print"></i> Print Orders</button>					
				<?php endif ?>

				<a class="btn-apply waves-effect waves-green hide-print" href="../shop"><i class="fa fa-shopping-cart"></i> Go Shopping</a>
			</div>
		</div>
		<!-- <summary info ends here -->

		
    </div>
</div>

<!--Update info Modal Structure -->
<div id="modal1" class="modal bottom-sheet center-align" style="height: 100%;">
	<div class="modal-content">
		<h1><i class="fa fa-edit purple-text"></i></h1>
		<h5 class="purple-text">Update Personal Details</h5>
		<br>
		<form id="update-form" action="update_tenant.php" method="POST">
			<div class="row container">
				<div class="input-field col s6">
		          <input id="first-name" type="text" class="validate" name="first-name" value="<?=$tenantInfo['fname']?>" required>
		          <label for="first-name">First Name</label>
		        </div>
				<div class="input-field col s6">
		          <input id="last-name" type="text" class="validate" name="last-name" value="<?=$tenantInfo['lname']?>" required>
		          <label for="last-name">Last Name</label>
		        </div>
			</div>

			<div class="row container">
				<div class="input-field col s6">
		          <input id="occupation" type="text" class="validate" name="occupation" value="<?=$tenantInfo['occupation']?>" required>
		          <label for="occupation">Occupation</label>
		        </div>
				<div class="input-field col s6">
		          <input id="phone" type="number" class="validate" name="phone" value="<?=$tenantInfo['phone']?>" required>
		          <label for="phone">Phone Number</label>
		        </div>
			</div>

			<div class="row container">
				<div class="input-field col s12">
		          <input id="email" type="email" class="validate" name="email" value="<?=$tenantInfo['email']?>" required>
		          <label for="email">Email</label>
		        </div>
			</div>
			
		</form>
	</div>
	<div class="modal-footer">
		<a href="#" class="modal-action modal-close waves-effect waves-red btn-flat red-text">Cancel</a>

		<input type="submit" form="update-form" class="waves-effect waves-green btn-flat green-text" value="Submit">
	</div>
</div>
<!-- End of modal structure -->



						<!-- Modal Structure -->
							  <div id="change-pass-modal" class="modal fore-color">
							    <div class="modal-content center-align">
							      	<h4>Change Password.</h4>
							      	<form method="POST" action="change_pass.php" id="change-pass">
							      		<div class="container">
							      			<br>
							      			<div class="input-field col s12 m6 l6">
								          		<input id="pass" name="pass" type="password" class="validate" required>
								          		<label for="pass">Old Password</label>
								        	</div>

								      		<div class="input-field col s12 m6 l6">
								          		<input id="new-pass" name="new-pass" type="password" class="validate" required>
								          		<label for="new-pass">New Password</label>
								        	</div>

								      		<div class="input-field col s12 m12 l12">
								          		<input id="re-pass" name="re-pass" type="password" class="validate" required>
								          		<label for="re-pass">Repeat Password</label>
								        	</div>
							      		</div>
							      		

							      		<button id="btn-change-pass" class="modal-action waves-effect waves-light btn-apply" ><i class="fa fa-check"></i> Change Password</button>

							        	<a href="#" class="modal-action modal-close waves-effect waves-light btn-cancel"><i class="fa fa-times"></i> Cancel</a>
							      	</form>
							    </div>
							   
							  </div>
							<!-- End of modal structure -->
<div id="preview"></div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript">
	var timeOut;
	$(document).ready(function() {
		$('.modal').modal();

		$("#update-form").submit(function() {
           		$("#update-form-btn").html("Updating data! Please wait...<i class='circular fa fa-spinner green-text'></i>");
            	$("#update-form-btn").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
           		$("#update-form-btn").html("<i class='fa fa-edit'></i> Update");
            	$("#update-form-btn").removeClass("disabled");
            });

            
            return false; // prevent normal submit
        });


        $("#change-pass").submit(function() {
        	var password = $('#new-pass').val();
        	var re_password = $('#re-pass').val();
        	if (password != re_password) {
	         	Materialize.toast('Passwords dont match!', 4000);
        		return false;
        	}
           		$("#btn-change-pass").text("Changing Password! Please wait...");
            	$("#change-pass").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
            });

            
            return false;
        });


        $("#custom-furniture-form").submit(function() {
        	
        	var datedue = $('#datedue').val();

        	if (datedue == '') {
	         	Materialize.toast('Select Date Due!', 3000);
        		return false;
        	}
           		$("#btn-change-pass").html("Submitting Request! Please wait... <i class='fa fa-spinner circular'></i>");
            	$("#change-pass").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
            });

            
            return false;
        });

		//Interior View Image manenoss
		$("#interior-view-image-div").click(function() {
			$("#interior-view-image-file").trigger("click");
		});

		$("#interior-view-image-file").change(function(){
            $("#interior-view-image-form-btn").removeClass("hide");
            $("#image2").removeClass("hide");
            $("#image2add").addClass("hide");

			var output = document.getElementById('image2img');
			var f_v_url = URL.createObjectURL(event.target.files[0]);
			output.src = f_v_url;
		 		        
		});

		var minDate = new Date();
		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 1, // Creates a dropdown of 15 years to control year,
		    today: 'Today',
		    clear: 'Clear',
		    min: minDate,
		    cancel: 'Cancel',
		    close: 'Ok',
		    format:'yyyy-mm-dd',
		    closeOnSelect: false // Close upon selecting a date,
		  });
	});


	function uploadImage(form) {
		$('#'+form+'-form-btn').addClass("hide");

	    $('#'+form).ajaxForm({

	        target: '#preview',
	        beforeSend:function(){
	            $('#'+form+'-prog').show();
	            $('#'+form+'-prog').attr('value','0');
	        },
	        uploadProgress:function(event,position,total,percentComplete){
	            $('#'+form+'-prog').attr('value',percentComplete);
	                     
	        }
	                     
	    }).submit();
	}

	function showAll() {
		
		$('.pay-statement-rent').removeClass('hide');
		$('.pay-statement-fine').removeClass('hide');
		$('#payment-filter').text('All');
	}

	function showRent() {
		
		$('.pay-statement-rent').removeClass('hide');
		$('.pay-statement-fine').addClass('hide');
		$('#payment-filter').text('Rent');
	}

	function showFine() {
		
		$('.pay-statement-rent').addClass('hide');
		$('.pay-statement-fine').removeClass('hide');
		$('#payment-filter').text('Fine');
	}

	function cancelOrder(orderno) {
		var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Cancelling Order in <span id="time" class="red-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action green-text"><i class="fa fa-undo"></i> Undo</button>'));
        Materialize.toast($toastContent, 6000);

        var i=4;
        timeOut = setInterval(function() {
	        $('#time').text(i);
	        if (i < 0) {
				$('#cancel-order-btn-'+orderno).html("Cancelling Order! Hold On... <i class='circular fa fa-spinner'></i>");
				$('#cancel-order-btn-'+orderno).addClass('disabled');
				$('#pay-order-btn-'+orderno).addClass('hide');
				clearTimeout(timeOut);

				$.ajax({url:"../cancel_order.php",
					data: {'orderno':orderno},
					type: 'POST',
					success: function(response) {
						$('#preview').html(response);
					}
				});
		    }

	        i--;

        }, 1000);
	}

	function undo() {
		clearTimeout(timeOut);
		Materialize.Toast.removeAll();
	}
</script>
</body>
</html>

