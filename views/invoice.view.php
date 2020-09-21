<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Invoice Details - E-Burol Dalisay Funeral Home</title>
	<link href="../css/font-awesome.css" rel="stylesheet">
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
  border: 1px solid purple;
  border-radius: 2px;
  padding: 1rem;
  margin-bottom: 1rem;
  text-align: center;
  box-shadow: 0px 3px 10px -2px rgba(161, 170, 166, 0.5);
  position: relative;
}

input[type="radio"]:checked + label {
  background: purple;
  color: white;
}
input[type="radio"]:checked + label::after {
  color: purple;
  font-family: FontAwesome;
  border: 2px solid purple;
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
			
			.red-txt {
				color: #aa0000 !important;
			}

			.checkout-div-top {

				margin-top: 8%;
			}
			.checkout-div {
				margin-top: -20px;
				background: rgba(255,255,255, .5); ;
				/*border: 1px solid #9c27b0;*/
				border-radius: 5px;
			}

			.line-inactive {
				border: 3px solid #cdcdcd;
				border-radius: 50px;
				margin-left: -10px;
			}

			.line-active {
				border: 3px solid purple;
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
				background-color: purple;
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
	 
		<nav class="hide-print" style="top: 0; position: fixed; z-index: 999;">
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

	 <div class="row checkout-div-top" style="margin-left: 5%; margin-right: 5%;">	 	
	 
	 		 
	 	<div class="checkout-div">
	 		<div id="shipping-address" class="">
	 			<div class="row green-txt" style=" padding-bottom: ">
	 				<div style="margin-bottom: -100px; margin-left: -100px;" class="right row">
	 					<img src="../images/invoice/<?php
															if ($invoiceInfo['state'] == 1) {
																echo "paid.png";
															} else if ($invoiceInfo['state'] == 2) {
																echo "cancelled.png";
															} else if ($invoiceInfo['state'] == 0) {
																echo "notpaid.png";
															} else if ($invoiceInfo['state'] == 3) {
																echo "paid.png";
															}
														?>" style="transform: rotate(45deg);">
	 				</div>
	 				<div class="col m4 s12 center-align hide-print">
	 					<p class=""><i style="font-size: 7em; text-align: center;" class="fa fa-file-text-o"></i></p>
	 				</div>
	 				<div class="col m8 s12 center-align">
	 					<h3>Invoice Details</h3>
	 					<h5>Invoice Number: <?=$invoice?></h5>
	 					<br>
	 				</div>
	 				
	 				<hr style="width: 96%; border: solid 1px purple;">
	 			</div>

	 			
	 			<div id="invoices" class="row">

	 				<div class="col m1 l1"></div>
	 				<div class="col m10 l10 center">
	 						<table>
								<tr style="width: 100%; line-height: -3px;">
									<td style="width: 33%;">
										<table>
											<tr><h6><b>Customer Details</b></h6></tr>
											<tr>
												<td><img src="../images/profile/<?php if ($invoiceInfo['ppic'] != '') {echo $invoiceInfo['ppic'];} else {echo "avatar.png";} ?>" style="border: 1px solid purple" class="circle" height="80px;" width="80px"></td>
												<td>
													<h6><?=$invoiceInfo['idno']?></h6>
													<h6><?=ucwords($invoiceInfo['fname'])." ".ucwords($invoiceInfo['lname'])?></h6>
													<h6><?=$invoiceInfo['email']?></h6>
													<h6><?=$invoiceInfo['phone']?></h6>
												</td>
												
											</tr>

											
										</table>
										
									</td>

									<td style="width: 33%;" class="right-align">
										<table>
											<tr><h6><b>Shipping Address</b></h6></tr>
											<tr class="right-align" style="width: 100%;">
												
												
													<h6><?=ucwords($invoiceInfo['title'])?></h6>
													<h6><?=ucwords($invoiceInfo['county'])?>, <?=ucwords($invoiceInfo['country'])?></h6>
													<h6><?=ucwords($invoiceInfo['city'])?>, <?=ucwords($invoiceInfo['street'])?> <?=ucwords($invoiceInfo['houseno'])?></h6>
													<h6><?=ucwords($invoiceInfo['landmark'])?></h6>
												
												
											</tr>

											
										</table>
										
									</td>


									<td style="width: 33%;" class="right-align">
										<table>
											<tr><h6><b>Order Details</b></h6></tr>
											<tr class="right-align" style="width: 100%;">
												
												
													<h6><b>Invoice #:</b> <?=$_GET['invoice']?></h6>
													<h6><?=date('D d-F-Y', strtotime($invoiceInfo['order_date']))?></h6>
													<h6>
														<?php
															if ($invoiceInfo['state'] == 1) {
																echo "Paid: ".date('D d-F-Y', strtotime($invoiceInfo['order_date']));
															} else if ($invoiceInfo['state'] == 2) {
																echo "Cancelled";
															} else if ($invoiceInfo['state'] == 0) {
																echo "Not paid";
															} else if ($invoiceInfo['state'] == 3) {
																echo "Paid! Waiting Confirmation.";
															}
														?>
													</h6>
												
												
											</tr>

											
										</table>
										
									</td>
								</tr>

								<tr style="width: 100%">
									<table>
										<tr>
											<!-- <td style="width: 100%;"><hr style="border: purple 1px dotted;"></td> -->

										</tr>
									</table>
										<h6 class="center-align"><b><u>Order Details</u></b></h6>	
									
								</tr>

								<tr>
										<!-- <?php //print_r($invoiceInfo); ?>										 -->
										<table class="highlight responsive-table bordered">
											<thead>
												<tr>
												    <th class="left-align">Product Name</th>
												    <th class="center-align">Quantity</th>
												    <th class="right-align">Unit Price</th>
												    <th class="right-align">Total</th>
												</tr>
											</thead>								
											<tbody>
											<?php foreach ($invoiceProds as $invoiceProd): ?>								
												<tr>
													<td class="left-align"><?=ucwords($invoiceProd['title'])?></td>
													<td class="center-align"><?=$invoiceProd['qty']?> Units </td>
													<td class="right-align"><?=number_format($invoiceProd['price'],0,".",",")?></td> 
													<td class="right-align"><?=number_format(($invoiceProd['qty']*$invoiceProd['price']),0,".",",")?></td>
												</tr>
											<?php endforeach ?>
												<tr>
													<td class="right-align"><h6><b>Sub Total:</b></h6></td>
													<td></td>
													<td></td>
													<td class="right-align"><h6><b>PHP. <?=number_format($total,2,".",",")?></b></h6></td>
												</tr>

												<tr>
													<td class="right-align"><h6><b>Shipping Fee:</b></h6></td>
													<td></td>
													<td></td>
													<td class="right-align"><h6><b>PHP. <?=number_format($shipping,2,".",",")?></b></h6></td>
												</tr>

												<tr>
													<td class="right-align"><h6><b>Grand Total:</b></h6></td>
													<td></td>
													<td></td>
													<td class="right-align"><h6><b>PHP. <?=number_format($grandTotal,2,".",",")?></b></h6></td>
												</tr>
											</tbody>
										</table>
									

								</tr>
							</table>

					<div class="container hide-print center-align" style="padding-bottom: 10px;">
						
						<button onclick="print()" class="btn-flat white blue-text hoverable waves-effect waves-blue"><i class="fa fa-print"></i> Print Order</button>

						<button class="btn-flat white orange-text waves-effect waves-orange" onclick="window.close()"><i class="fa fa-times"></i> Close</button>
					</div>
	 				</div>	 				
                    <div class="col m1 l1"></div>
		 				
	 			</div>
	 			
	 		</div>

	 	</div>
	 </div>


<!-- new popup starts here -->

<!-- new ends here -->

<!--Checkout info Modal Structure -->
<!-- <div id="payment" class="modal bottom-sheet center-align">
	<div class="modal-content container">
		<h1><i class="fa fa-check-square-o green-text"></i></h1>
		<h5 class="green-text">Proceed to Payment?</h5>
		<h6>This will create the order invoice with the shipping address you have provided.<br> Are you sure the shipping address is correct? </h6>
		<p>If everything is right click on <span class="green-text">Yeah! Sure</span> to Proceed. Otherwise click <span class="red-text">Review</span> to review the shipping details</p>
		
	</div>
	<div class="modal-footer">
		<button class="modal-action modal-close waves-effect waves-red btn-flat red-text">Review</button>

		<button onclick="payment()" class="modal-action modal-close waves-effect waves-green btn-flat green-text">Yeah! Sure</button>

	</div>
</div> -->
<!-- End of modal structure -->

	<div id="preview"></div>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    	$('select').material_select();
			$('.modal').modal();

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

	function cancelOrder(orderno) {
		var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Cancelling Order in <span id="time" class="red-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action green-text"><i class="fa fa-undo"></i> Undo</button>'));
        Materialize.toast($toastContent, 6000);

        var i=4;
        timeOut = setInterval(function() {
	        $('#time').text(i);
	        if (i < 0) {
				$('#cancel-order-btn-'+orderno).html("Cancelling Order! Hold On... <i class='circular fa fa-spinner'></i>");
				$('#cancel-order-btn-'+orderno).addClass('disabled');
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