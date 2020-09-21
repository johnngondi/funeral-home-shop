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
  border: 1px solid #0d81a7;
  border-radius: 2px;
  padding: 1rem;
  margin-bottom: 1rem;
  text-align: center;
  box-shadow: 0px 3px 10px -2px rgba(161, 170, 166, 0.5);
  position: relative;
}

input[type="radio"]:checked + label {
  background: #0d81a7;
  color: white;
}
input[type="radio"]:checked + label::after {
  color: #0d81a7;
  font-family: FontAwesome;
  border: 2px solid #0d81a7;
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
				background: rgba(255,255,255, .0); ;
				border: 1px solid #fff;
				border-radius: 5px;
			}

			.line-inactive {
				border: 3px solid #cdcdcd;
				border-radius: 50px;
				margin-left: -10px;
			}

			.line-active {
				border: 3px solid #0d81a7;
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
				background-color: #0d81a7;
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
	 			<div class="row white-text" style=" padding-bottom: ">
	 				<div class="col m4 s12 center-align">
	 					<p class=""><i style="font-size: 7em; text-align: center;" class="fa fa-files-o"></i></p>
	 				</div>
	 				<div class="col m8 s12">
	 					<h2>Unpaid Invoices</h2>
	 					<h6>Select the invoice you wish to pay for.</h6>
	 					<br><br>
	 				</div>
	 				
	 				<hr style="width: 90%; border: solid 1px #fff;">
	 			</div>

	 			
	 			<div id="invoices" class="row white-text">

	 				<div class="col m1 l1"></div>
	 				<div class="col m10 l10">
	 								<table class="highlight responsive-table centered">
								<thead>
									<tr>
									    <th>Invoice Number</th>
							    		<th>Products</th>
									    <th>Total Amount</th>
									    <th>Date & Time</th>
									    <th class="hide-print">Action</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ($unpaidInvoices as $unpaidInvoice): ?>
										

										<tr id="invoice-<?=$unpaidInvoice['invoice_id']?>">
											<td><?=$unpaidInvoice['invoice_id']?></td>
											<td>
														
												<table class="responsive-table centered">
													<?php
														$products = getOrderDetails($conn,$unpaidInvoice['invoice_id']);
															
													?>

													<?php foreach ($products as $product): ?>								
														<tr><td><?=ucwords($product['title'])?></td> <td><?=$product['qty']?> Units @ <?=number_format($product['price'],0,".",",")?></td> <td><?=number_format(($product['qty']*$product['price']),0,".",",")?></td></tr>
													<?php endforeach ?>
												</table>
																						
											</td>
											<td>PHP. <?=number_format($unpaidInvoice['amount'],2,".",",") ?></td>
											<td><?=date('D d, F-Y H:i:s', strtotime($unpaidInvoice['order_date']))?></td>
											
											<td class="hide-print">
												<a target="_blank" class="btn-flat purple white-text waves-effect waves-light" href="../invoice?invoice=<?=$unpaidInvoice['invoice_id']?>"><i class="fa fa-file-text"></i> View Invoice</a>

												<a id="" class="btn-flat white-text green waves-effect waves-light tooltipped" data-position="top" data-delay="1" data-tooltip="Click to Pay Order" href="../checkout?invoice=<?=$unpaidInvoice['invoice_id']?>" ><i class='fa fa-check-square-o'></i> Pay</a>  
												  
												<button id="cancel-order-btn-<?=$unpaidInvoice['invoice_id']?>" class="btn-flat white-text red waves-effect waves-light tooltipped" data-position="right" data-delay="1" data-tooltip="Click to Cancel Order" onclick="cancelOrder(<?=$unpaidInvoice['invoice_id']?>)"><i class='fa fa-minus-circle'></i> Cancel</button>          	 
											</td>
										</tr>
										
									<?php endforeach ?>

								</tbody>
							</table>
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