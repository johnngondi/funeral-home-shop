<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Checkout - E-Burol Dalisay Funeral Home</title>
		<link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
    	<link rel="stylesheet"" type="text/css" href="../css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style_main.css">
		<script type="text/javascript" src="../js/jquery.js"></script>
		
		<style type="text/css">
				


section {
  display: flex;
  flex-flow: row wrap;
}

section > div {
  flex: 1;
  padding: 0.5rem;
  margin-top: 20px;
}

input[type="radio"] {
  display: none;
}
input[type="radio"]:not(:disabled) ~ label {
  cursor: pointer;
}
input[type="radio"]:disabled ~ label {
  color: #bcc2bf;
  border-color: #bcc2bf;
  box-shadow: none;
}

label.radio {
  display: block;
  background: white;
  border: 1px solid #9c27b0;
  border-radius: 2px;
  padding: 1rem;
  margin-bottom: 1rem;
  text-align: center;
  box-shadow: 0px 3px 10px -2px rgba(161, 170, 166, 0.5);
  position: relative;
}

input[type="radio"]:checked + label {
  background: #9c27b0;
  color: white;
}
input[type="radio"]:checked + label::after {
  color: #9c27b0;
  font-family: FontAwesome;
  border: 2px solid #9c27b0;
  content: "\f00c";
  font-size: 24px;
  position: absolute;
  top: -25px;
  left: 50%;
  transform: translateX(-50%);
  height: 50px;
  width: 50px;
  line-height: 50px;
  text-align: center;
  border-radius: 50%;
  background: white;
  box-shadow: 0px 2px 5px -2px rgba(0, 0, 0, 0.25);
}
			.green-txt {
				color: #9c27b0 !important;
			}
			.red-txt {
				color: #aa0000 !important;
			}

			.checkout-div-top {

				/*margin-top: 8%;*/
			}
			.checkout-div {
				margin-top: -20px;
				background: rgba(255,255,255, .0); ;
				border: 1px solid white;
				border-radius: 5px;
			}

			.line-inactive {
				border: 3px solid #cdcdcd;
				border-radius: 50px;
				margin-left: -10px;
			}

			.line-active {
				border: 3px solid #9c27b0;
				border-radius: 50px;
				margin-left: -10px;
			}

			.dot-inactive {
				background-color: #cdcdcd;
				color: #cdcdcd;
				height: 24px; 
				width: 24px;
				text-align: center;
				border-radius: 50%;
			}

			.dot-active {
				background-color: #9c27b0;
				color: white;
				height: 24px; 
				width: 24px;
				text-align: center;
				border-radius: 50%;
			}

			.map {
				height: 50px;
				width: 50px;
				border-radius: 50%;
				border: solid 1px green;
			}

			.disabled{
				border: none;
				background-color: #cdcdcd;
				pointer-events: none;
			}

			
			.heading-bar{
				/*border-bottom: 1px solid #0099cc;*/
				box-shadow:  #efefef 1px 1px 1px 2px;
				padding-top: 30px;
				z-index: 2;
				background-color:#fff;	
				top: 0;	
				padding-right: 2%;	

			}

			.fixed-top{	
				position: fixed;
				width: 100%;
			}


			.popup {
				position: fixed;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
				background: rgba(0,0,0,0.7);
				z-index: 99991;
				text-align: center;
				display: none;
				overflow: auto;	
				opacity: 1;
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
	 

		<nav class="" style="top: 0; position: fixed; z-index: 999;">
		    <div class="nav-wrapper">
		      <a href="../" class="brand-logo"><img src="../images/logo.png"></a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		      	<li><a href="../" ><i class="fa fa-home"></i> Home</a></li>
		      	<li><a href="../shop" ><i class="fa fa-bank"></i> Shop</a></li>
		        <li><a href="../gallery" ><i class="fa fa-image"></i> Gallery</a></li>
		        <li><a href="../obituaries" ><i class="fa fa-users"></i> Orbituaries</a></li>

		    <?php if (isset($_SESSION['idno'])): ?>
		        <li><a href="../<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {echo "admin";} else {echo "home";} ?>" class="modal-trigger"><i class="fa fa-user"></i> My Account</a></li>
		        <li><a href="../logout"><i class="fa fa-sign-out"></i> Logout</a></li>		        	
		    <?php else: ?>
		        <li><a href="../login?ret=gallery"><i class="fa fa-sign-in"></i> Login</a></li>	
		        	
		    <?php endif ?>
		      </ul>

		      <ul class="side-nav" id="mobile-demo">		        
		      	<li><a href="../" ><i class="fa fa-home"></i> Home</a></li>
		      	<li><a href="../shop" ><i class="fa fa-bank"></i> Shop</a></li>
		        <li><a href="../gallery" ><i class="fa fa-image"></i> Gallery</a></li>
		        <li><a href="../obituaries" ><i class="fa fa-users"></i> Orbituaries</a></li>
			
		    <?php if (isset($_SESSION['idno'])): ?>
		        <li><a href="../<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {echo "admin";} else {echo "home";} ?>" class="modal-trigger"><i class="fa fa-user"></i> My Account</a></li>
		        <li><a href="../logout"><i class="fa fa-sign-out"></i> Logout</a></li>		        	
		    <?php else: ?>
		        <li><a href="../login?ret=gallery"><i class="fa fa-sign-in"></i> Login</a></li>	
		        	
		    <?php endif ?>
		      </ul>
		    </div>
		</nav>

	 <div class="row container checkout-div-top" style="margin-top: 80px;">	 	
	 	<div class="row">
	 		<div class="col m4">
	 			<div class="row">
	 				<div class="col m1">
	 					<div id="dot-ship" class="dot-active"><i class="fa fa-truck"></i></div>
	 				</div>
	 				<div class="col m11">
	 					<hr id="line-ship" class="line-active">
	 				</div>
	 			</div>
	 		</div>

	 		<div class="col m4">
	 			<div class="row">
	 				<div class="col m1">
	 					<div id="dot-pay" class="dot-inactive"><i class="fa fa-money"></i></div>
	 				</div>
	 				<div class="col m11">
	 					<hr id="line-pay" class="line-inactive">
	 				</div>
	 			</div>
	 		</div>

	 		<div class="col m4">
	 			<div class="row">
	 				<div class="col m1">
	 					<div id="dot-confirm" class="dot-inactive"><i class="fa fa-check"></i></div>
	 				</div>
	 				<div class="col m11">
	 					<hr id="line-confirm" class="line-inactive">
	 				</div>
	 			</div>
	 		</div>
	 		
	 	</div>
	 	<div class="checkout-div">
	 		<div id="shipping-address" class="">
	 			<div class="row white-text center-align" style=" padding-bottom: ">
	 				<div class="col m2 s12">
	 					<p class=""><i style="font-size: 7em; text-align: center;" class="fa fa-truck"></i></p>
	 				</div>
	 				<div class="col m6 s12">
	 					<h2>Shipping Address</h2>
	 					<h6>Select where your products are supposed to be shipped to.</h6>
	 					<br><br>
	 				</div>
	 				<div class="col m4 s12">
	 					<h5>Order Summary</h5>
	 					<h4>PHP. <?=number_format($total,2,".",",")?></h4>
	 					<!-- <a href="../cart" class="btn-flat green white-text waves-effect waves-light"><i class="fa fa-shopping-cart"></i> View Cart</a> -->
	 				</div>
	 				<hr style="width: 90%; border: solid 1px #fff;">
	 			</div>

	 			<div id="addresses" class="row">
	 				<div class="col m1 l1"></div>
	 				<div class="col m10 l10">
	 					<div class="row" id="address">
	 						<?php if ($addresses): ?>
		 							
			 					<?php foreach ($addresses as $address): ?>
				 						
				 					<div class="col m6 s12 l4 hoverable" style="margin-bottom: 20px; padding-right: -5px;">
				                          <input type="radio" name="select" id="address-<?=$address['id']?>" value="<?=$address['id']?>" onchange="setAddress(<?=$address['id']?>,<?=$invoice?>)" class="" required>
				                          
				                          <label class="radio" for="address-<?=$address['id']?>">
				                            <h4 class="center-align white-text"><?=ucwords($address['title'])?></h4>                           
				                            <p class="left-align" style="font-size: 1.3em; color: white; line-height: 8px;"><b>Country: </b><?=ucwords($address['country'])?></p>                  
				                            <p class="left-align" style="font-size: 1.3em; color: white; line-height: 8px;"><b>Province: </b><?=ucwords($address['county'])?></p>                  
				                            <p class="left-align" style="font-size: 1.3em; color: white; line-height: 8px;"><b>City: </b><?=ucwords($address['city'])?></p>                  
				                            <p class="left-align" style="font-size: 1.3em; color: white; line-height: 8px;"><b>Street: </b><?=ucwords($address['street'])?></p>                  
				                            <p class="left-align" style="font-size: 1.3em; color: white; line-height: 8px;"><b>House No: </b><?=ucwords($address['houseno'])?></p>                  
				                            <p class="left-align" style="font-size: 1.3em; color: white; line-height: 8px;"><b>Landmark: </b><?=ucwords($address['landmark'])?></p>
				                          </label>
				                   	</div>
			 					<?php endforeach ?>
	 						<?php else: ?>
	 							<h5 class="center-align fore-color">No addresses available.</h5>
	 						<?php endif ?>

		 					<div class="col m6 s12 l4 hoverable">
		                       <div style="border: 1px solid #9c27b0; background-color: white; cursor: pointer; border-radius: 5px;" class="center-align green-txt waves-effect waves-purple" onclick="show_popup('addnew')">
		                       		<h1><i class="fa fa-plus-circle"></i></h1>
		                       		<h5>Add New Shipping Address</h5>
		                       		<h6 class="blue-text"><i><i class="fa fa-info-circle"></i> The new shipping address will be saved for future use. <br> Thank-you</i></h6>
		                       </div>  
		                   	</div>
	 					</div>
	 				</div>
	 				
                    <div class="col m1 l1"></div>
		 				

		 			<div class="row">
		 				<div class="col m6">		 					
			 				<a style="margin-left: 20px;" href="../shop" class="btn-flat orange-text waves-effect waves-purple"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
		 				</div>
		 				<div class="col m6 right-align">
		 					<button style="margin-right: 20px;" onclick="payment()" class="btn-flat white purple-text waves-effect waves-purple">Proceed to Payment <i class="fa fa-arrow-circle-right"></i></button>		 			
		 				</div>
		 			</div>
	 			</div>
	 			
	 		</div>


	 		<div id="payment" class="hide">
	 			<div class="row white-text center-align" style=" padding-bottom: ">	 				

	 				<div class="col m4 s12">
	 					<h2>Payment</h2>
	 					<h6>Pay for your Invoice.</h6>
	 					<br><br>
	 				</div>

	 				<div class="col m4 s12">
	 					<h5>Invoice Number</h5>
	 					<h4><?=$invoice?></h4>
	 				</div>

	 				<div class="col m4 s12">
	 					<h5>Total Amount to Pay</h5>
	 					<h4>PHP. <?=number_format($total,2,".",",")?></h4>
	 				</div>
	 				<hr style="width: 90%; border: solid 1px #fff;">
	 			</div>

	 			<div class="row white-text">
	 				<div class="col s12 hide-print">
						<ul class="tabs tabs-fixed-width" style="background-color: transparent;">	

							<li class="tab col s3 active"><a style="font-size: 110%; color: pink;" class="waves-effect waves-purple hoverable blue-text" href="#paypal"><i class="fa fa-cc-paypal"></i> <span style=" font-weight: bold;"> Paypal Payment</span></a></li>

						    <li class="tab col s3"><a style="font-size: 110%; color: purple;" class="waves-effect waves-purple hoverable blue-text" href="#cash"><i class="fa fa-dollar"></i> <span style=" font-weight: bold;"> Pay Cash</span></a></li>

						    <li class="tab col s3"><a style="font-size: 110%; color: purple;" class="waves-effect waves-purple hoverable blue-text" href="#remittance"><i class="fa fa-money"></i> <span style=" font-weight: bold;"> Remittance</span></a></li>

						</ul>
					</div>

					<div id="paypal" class="col s12" style="padding-top: 20px;">

		 	  			<!-- <h3 class="center-align"><i class="fa fa-cc-paypal" style="font-size: 1.5em;"></i> <i class="fa fa-ellipsis-h"></i> <i class="fa fa-ellipsis-h"></i> <i class="fa fa-money"></i></h3> -->
		 	  			<!-- <h6 class="center-align purple-text"><i><i class="fa fa-info-circle"></i> All payments are done via Paypal only!</i></h6><br> -->
			 	  		<div class="col m5 l5 s12 right-align" style="border-right: 1px solid #9c27b0;">
			 	  			<h5><b>Details</b></h5>
			 	  			<h5>Invoice Number</h5>
			 	  			<h6 style="font-weight: bold;"><?=$invoice?></h6>
			 	  			<h5>Total Amount</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($total,2,".",",")?></h6>
			 	  			<h5>Shipping Fee</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($shipping,2,".",",")?></h6>
			 	  			<h5>Grand Total</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($grandTotal,2,".",",")?></h6>
			 	  			
			 	  		</div>

			 	  		<div id="pay" class="col m7 l7 s12 center-align" style="padding-left:10px;padding-right:20px;">
			 	  			<h5><b><i class="fa fa-paypal"></i> Pay with Paypal</b></h5><br>
			 	  			<h6>By Clicking the button below, you agree to <a target="_blank" style="color: cyan;" href="#">Our Terms and Conditions <i class="fa fa-external-link"></i> </a> and <a target="_blank" style="color: cyan;" href="#">Privacy Policy <i class="fa fa-external-link"></i> </a> and Paypal's <a target="_blank" style="color: cyan;" href="#">Terms of Service <i class="fa fa-external-link"></i> </a>.<br> <br> <span class="red-text hide" id="pay-error"><i class="fa fa-exclamation-triangle"></i> Error while Paying! Please try again!</span> <br><br> Click the button below to Pay. <br><br></h6>
					            <!-- Checkout button -->
	    					<div id="paypal-button"><span class="white-text">Requesting Paypal... Hold On <i class="fa fa-spinner circular"></i></span></div>

			 	  		</div>

			 	  		<div id="confirm" class="hide container center-align">
			 	  			<h5 class="white-text"> <i class="fa fa-check-square-o"></i><br> Payment Successful!</h5>
			 	  			<h6>Your payment has been made successfully. Shipping Process will begin Shortly.<br><br><span class="white-text">Paypal Transaction ID: <?=$_GET['t_id']?></span></h6>

			 	  			<br>
			 	  			<a class="btn-apply waves-effect waves-blue" href="../home"><i class="fa fa-shield"></i> Go to my Account</a>
			 	  		</div>


			 	  		<div id="paid" class="hide container center-align">
			 	  			<h5 class="orange-text"> <i class="fa fa-exclamation-triangle"></i><br> Order Already paid For!</h5>
			 	  			<h6>This order is already paid. You can't pay for it again.<br></h6>

			 	  			<br>
			 	  			<a class="btn-apply waves-effect waves-blue" href="../home"><i class="fa fa-shield"></i> Go to my Account</a>
			 	  		</div>

					</div>

					<div id="cash">
						<div class="col m5 l5 s12 right-align" style="border-right: 1px solid #9c27b0;">
			 	  			<h5><b>Details</b></h5>
			 	  			<h5>Invoice Number</h5>
			 	  			<h6 style="font-weight: bold;"><?=$invoice?></h6>
			 	  			<h5>Total Amount</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($total,2,".",",")?></h6>
			 	  			<h5>Shipping Fee</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($shipping,2,".",",")?></h6>
			 	  			<h5>Grand Total</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($grandTotal,2,".",",")?></h6>
			 	  			
			 	  		</div>

			 	  		<div id="pay-cash" class="col m7 l7 s12 center-align" style="padding-left:10px;padding-right:20px; padding-top: 50px;">
			 	  			<h5><b>Pay with Cash</b></h5><br>
			 	  			
			 	  			<h6>To pay with cash, please copy the <b>Invoice Number</b> and visit any e-Burol Dalisy outlet shop and make the payment there. You can print the invoice and go with it</h6><br>
			 	  			<a target="_blank" class="btn btn-flat white purple-text waves-effect waves-purple" href="../invoice?invoice=<?=$invoice?>"><i class="fa fa-print"></i> Print Invoice</a>

			 	  		</div>
					</div>

					<div id="remittance">
						<div class="col m5 l5 s12 right-align" style="border-right: 1px solid #9c27b0;">
			 	  			<h5><b>Details</b></h5>
			 	  			<h5>Invoice Number</h5>
			 	  			<h6 style="font-weight: bold;"><?=$invoice?></h6>
			 	  			<h5>Total Amount</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($total,2,".",",")?></h6>
			 	  			<h5>Shipping Fee</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($shipping,2,".",",")?></h6>
			 	  			<h5>Grand Total</h5>
			 	  			<h6 style="font-weight: bold;">PHP. <?=number_format($grandTotal,2,".",",")?></h6>
			 	  			
			 	  		</div>

			 	  		<div id="pay-remittance" class="col m7 l7 s12 center-align" style="padding-left:10px;padding-right:20px; padding-top: 50px;">
			 	  			<h5><b>Pay with Remittance</b></h5><br>
			 	  			
			 	  			<h6>For Remmitance payment, please copy the <b>Invoice Number</b> and transfer the money to the E-Burol Dalisy Bank account using the invoice number as refference number.</h6><br>
			 	  			<h6 style="font-size: 1.2em;">Account Number: <b>1256895632</b><br><br>Account Name: <b>E-Burol Dalisy</b></h6><br>
			 	  			
			 	  			<a target="_blank" class="btn btn-flat white purple-text waves-effect waves-purple" href="../invoice?invoice=<?=$invoice?>"><i class="fa fa-print"></i> Print Invoice</a>

			 	  		</div>
					</div>

		 	  	</div>
	 			
	 		</div>
	 	</div>
	 </div>


<!-- new popup starts here -->

<!-- Signup popup starts here -->
	<div id="addnew" class="row popup">
		<div class="col m2 s1 l3"></div>
	        <div class="forms col m8 s10 l6 box">
	        	<div class="row ">
	        		<button onclick="close_popup('addnew')" class="btn-flat waves-effect waves-red right" style="padding-right: 2px; padding-left: 2px; padding-top: 2px; padding-bottom: 2px;"><i class="fa fa-times red-text"></i></button>
	        	</div>
	        	<div id="forms" class="row">
	        				        	
	        		<div id="register" class="form-signup col m12 l12 s12">
		        		<h5 class="green-txt center"><i class="fa fa-truck"></i><br> Add New Shipping Address</h5>
		        		<div class="row" id="signup-form">
						    <form method="POST" action="add_address.php" id="form-address">
						    	<input type="hidden" name="invoice" value="<?=$invoice?>">
							    	<div class="row">
							    		<div class="input-field col m12 l12 s12">
							    			<input id="title" type="text" name="title" class="validate" data-error="Enter Title" required>
								          	<label for="title">Title (e.g. Home Address)</label>
								        </div>
							    	</div>
						    	
						    		<div class="row">
								        
								       	<div class="input-field col m6 s12">
										    <input id="country" type="text" name="country" class="validate" data-error="Enter Country" required>
								          	<label for="country">Country</label>
										</div>

								       	<div class="input-field col m6 s12">
										    <input id="county" type="text" name="county" class="validate" data-error="Enter County" required>
								          	<label for="county">County/Province</label>
										</div>
								    </div>

								    <div class="row">
								        <div class="input-field col m6 s12">
								          <input id="city" type="text" name="city" class="validate" data-error="Enter City/Town" required>
								          <label for="city">City/Town</label>
								        </div>

								        <div class="input-field col m6 s12">
								          <input id="street" type="text" name="street" class="validate" data-error="Enter Street" required>
								          <label for="street">Street</label>
								        </div>
								    </div>

								    <div class="row">
								        <div class="input-field col m6 s12">
								          <input id="houseno" type="text" name="houseno" class="validate" data-error="Enter House Number" required>
								          <label for="houseno">House Number</label>
								        </div>

								        <div class="input-field col m6 s12">
								          <input id="landmark" type="text" name="landmark" class="validate" data-error="Enter Land Mark" required>
								          <label for="landmark">Land Mark</label>
								        </div>
								    </div>

								     

						  			<div id="feedback"></div>

								    <div class="row">
								      	<input id="btn-add-adress" type="submit" class="btn-apply waves-effect waves-green" value="Save">
								    </div>						    							      
						    </form>
						</div>

						
		        	</div> 
	        	</div>
	        	
	        </div>
		<div class="col m2 s1 l3"></div>
	</div>
<!-- Signup ends here -->
<!-- new ends here -->



	<div id="preview"></div>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>

	<?php if (!isset($_GET['status'])): ?>
		<script src="https://www.paypalobjects.com/api/checkout.js"></script>
		<!--
		JavaScript code to render PayPal checkout button
		and execute payment
		-->
		<script>
			$('#paypal-button').html('');
		paypal.Button.render({
		    // Configure environment
		    env: '<?php echo $paypal->paypalEnv; ?>',
		    client: {
		        sandbox: '<?php echo $paypal->paypalClientID; ?>',
		        production: '<?php echo $paypal->paypalClientID; ?>'
		    },
		    // Customize button (optional)
		    locale: 'en_US',
		    style: {
		        size: 'large',
		        color: 'silver',
		        shape: 'pill',
		    },
		    // Set up a payment
		    payment: function (data, actions) {
		        return actions.payment.create({
		            transactions: [{
		                amount: {
		                    total: '<?php echo ($grandTotal); ?>',
		                    currency: 'PHP'
		                }
		            }]
		      });
		    },
		    // Execute the payment
		    onAuthorize: function (data, actions) {
		        return actions.payment.execute()
		        .then(function () {
		            // Show a confirmation message to the buyer
		            //window.alert('Thank you for your purchase!');
		            
		            // Redirect to the payment process page
		            window.location = "process.php?paymentID="+data.paymentID+"&token="+data.paymentToken+"&payerID="+data.payerID+"&pid=<?php echo $invoice?>";
		        });
		    }
		}, '#paypal-button');
		</script>
	<?php else: ?>
		<?php if ($_GET['status'] == 1): ?>
			<script type="text/javascript">
				$('#shipping-address').addClass('hide');
				$('#payment').removeClass('hide');
				$('#pay').addClass('hide');
				$('#confirm').removeClass('hide');
			</script>
		<?php else: ?>
			<?php if ($_GET['status'] == 2): ?>
				<script type="text/javascript">
					$('#shipping-address').addClass('hide');
					$('#payment').removeClass('hide');
					$('#pay').addClass('hide');
					$('#paid').removeClass('hide');
				</script>
			<?php else: ?>
				
				<script type="text/javascript">
					$('#shipping-address').addClass('hide');
					$('#payment').removeClass('hide');
					$('#pay-error').removeClass('hide');
				</script>

				<script src="https://www.paypalobjects.com/api/checkout.js"></script>
				<!--
				JavaScript code to render PayPal checkout button
				and execute payment
				-->
				<script>
				paypal.Button.render({
				    // Configure environment
				    env: '<?php echo $paypal->paypalEnv; ?>',
				    client: {
				        sandbox: '<?php echo $paypal->paypalClientID; ?>',
				        production: '<?php echo $paypal->paypalClientID; ?>'
				    },
				    // Customize button (optional)
				    locale: 'en_US',
				    style: {
				        size: 'large',
				        color: 'silver',
				        shape: 'pill',
				    },
				    // Set up a payment
				    payment: function (data, actions) {
				        return actions.payment.create({
				            transactions: [{
				                amount: {
				                    total: '<?php echo ($grandTotal/100); ?>',
				                    currency: 'USD'
				                }
				            }]
				      });
				    },
				    // Execute the payment
				    onAuthorize: function (data, actions) {
				        return actions.payment.execute()
				        .then(function () {
				            // Show a confirmation message to the buyer
				            //window.alert('Thank you for your purchase!');
				            
				            // Redirect to the payment process page
				            window.location = "process.php?paymentID="+data.paymentID+"&token="+data.paymentToken+"&payerID="+data.payerID+"&pid=<?php echo $productData['id']; ?>";
				        });
				    }
				}, '#paypal-button');
				</script>
			<?php endif ?>
		<?php endif ?>
	<?php endif ?>
	
	<script type="text/javascript">
		var amount = <?=$total?>;
		$(document).ready(function() {
	    	$('select').material_select();
			$('.modal').modal();
			$(".button-collapse").sideNav();

			$("#form-address").submit(function() {

           		$("#btn-add-adress").val("Saving! Please wait...");
            	$("#btn-add-adress").addClass("disabled");

	            $.post($(this).attr("action"), $(this).serialize(), function(feedback) {
	                $("#preview").html(feedback);
	           		$("#btn-add-adress").val("Save");
	            	$("#btn-add-adress").removeClass("disabled");
	            });

	            
	            return false; // prevent normal submit
	        });



			$("#pay-form").submit(function() {

           		$("#btn-paypal").html("Requesting Payment! Please wait...<i class='fa fa-spinner circular'></i>");
            	$("#btn-paypal").addClass("disabled");

	            $.post($(this).attr("action"), $(this).serialize(), function(feedback) {
	                $("#preview").html(feedback);
	            });

	            
	            return false; // prevent normal submit
	        });

			$('.dropdown-button').dropdown({
			      inDuration: 300,
			      outDuration: 225,
			      constrainWidth: false, // Does not change width of dropdown to that of the activator
			      hover: false, // Activate on hover
			      gutter: 20, // Spacing from edge
			      belowOrigin: true, // Displays dropdown below the button
			      alignment: 'right', // Displays dropdown with edge aligned to the left of button
			      stopPropagation: false // Stops event propagation
			});
		});

		function show_popup(id) {
			$('#'+id).show();
		}
	
		function close_popup(id) {
			
			$('#'+id).hide();
		}

		function setAddress(address,invoice) {
			$.ajax({
				url: 'set_address.php',
				data: {'address':address, 'invoice':invoice},
				type: 'POST',
				success:function(feedback) {
					$('#preview').html(feedback);
				}
			});
		}

		function payment() {
			$('#shipping-address').addClass('hide');
			$('#payment').removeClass('hide');
			$('#dot-pay').addClass('dot-active');
			$('#dot-pay').removeClass('dot-inactive');
			$('#line-pay').addClass('line-active');
			$('#line-pay').removeClass('line-inactive');

		}
		
	</script>

	</body>
</html>