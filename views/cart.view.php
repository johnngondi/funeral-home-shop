<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Cart - E-Burol Dalisay Funeral Home</title>
	<link href="../css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
    	<link href="../css/prettyPhoto.css" rel="stylesheet">
    	<link rel="stylesheet"" type="text/css" href="../css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style_main.css">
    	<link href="../css/responsive.css" rel="stylesheet">
		<script type="text/javascript" src="../js/jquery.js"></script>
		
		<style type="text/css">
				

			

			@media (max-width: 1050px) {
			  ul.dropdown-content {
			    background-color: #ffffff !important;
			  }
			}


			#popup_upload,
			#popup_crop {
				position: fixed;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
				background: rgba(0, 0 ,0, 0.7);
				z-index: 99999;
				text-align: center;
				display: none;
				overflow: auto;
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

			.disabled{
				border: none;
				background-color: #cdcdcd;
				pointer-events: none;
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



			.cart{
				border-radius: 5px;
				background: rgba(255,255,255, .0); ;
				border: 1px solid #fff;
				text-align: center;
				padding-top: 20px;
				padding-bottom: 20px;

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


		<div class="row container" style="margin-bottom: 160px; margin-top: 100px;">
			<div class="cart white-text">
				<h1><i class="fa fa-shopping-cart"></i></h1>
				<h4>My Cart</h4>
				<?php if ($cart): ?>	
					<p><i class="fa fa-info-circle"></i> You can increase/decrease the quantity of your products here and also remove some items here.</p>
					<div style="margin-left: 10px; margin-right: 10px;">
		
						<table class="bordered responsive-table centered white-text">
							<thead>
								<tr>
									<th></th>
									<th style="text-align: left;">Product</th>
									<th>QTY</th>
									<th>Price</th>
									<th>Total</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>

								<?php foreach ($cart as $product): ?>
									<?php
										$total = $total + ($product['qty']*$product['price']);
									?>
									<tr id="prod-<?=$product['id']?>">
										<input type="hidden" name="prod_id" value="<?=$product['prod']?>">
										<td style="width: 200px;"><img src="../images/bg/<?=$product['front_view']?>" width="100%"></td>
										<td style="text-align: left;"><?=ucwords($product['title'])?></td>
										<td style="width: 100px;"><input onchange="checkQty(<?=$product['id']?>,<?=$product['prod']?>)" type="number" id="qty-<?=$product['id']?>" value="<?=$product['qty']?>"></td>
										<td id="unit-<?=$product['id']?>"><?=$product['price']?></td>
										<td id="total-<?=$product['id']?>"><?=$product['qty']*$product['price']?></td>
										<td>
											<i onclick="remove(<?=$product['id']?>)" style="font-size: 2em; cursor: pointer;" class="fa fa-minus-circle red-text tooltipped" data-position="right" data-delay="1" data-tooltip="Click to REMOVE item from Cart"></i></td>
									</tr>
								<?php endforeach ?>
								
							</tbody>
						</table>
						<div class="row center-align">
							<div class="col s12 m6 l6 xl6"><h4> Grand Total</h4></div>
							<div class="col s12 m6 l6 xl6"><h4>PHP. <span id="gt"><?= $total ?></span></h4></div>
						</div>


						<div class="row center-align">
							<div class="col s12 m6 l6 xl6 left"> <a href="../shop" class="btn-flat orange-text waves-effect waves-purple hoverable"><i class="fa fa-shopping-cart"></i> Continue Shopping</a></div>
							<div class="col s12 m6 l6 xl6 right"><button data-target="payment" class="modal-trigger btn-flat purple white-text waves-effect waves-light"><i class="fa fa-check-circle"></i> Proceed to Checkout</button></div>
						</div>
					</div>
				<?php else: ?>
					<h6 class="white-text">Your Cart is empty</h6>	

					<h6><a href="../shop" class="btn-flat white purple-text desc-link waves-effect waves-purple"><i id="desc-icon" class="fa fa-shopping-cart"></i> <span id="desc-link-txt">Start Shopping!</span></a></h6><br>
				<?php endif ?>
			</div>
		</div>
	
	    	
		    	
			
	  
<div id="payment" class="modal bottom-sheet center-align">
	<div class="modal-content container">
		<h1><i class="fa fa-check-square-o purple-text"></i></h1>
		<h5 class="purple-text">Proceed to Checkout?</h5>
		<h6>This will create the order invoice with the products you have added to cart.<br> Are you sure you are good to go? </h6>
		<p>If everything is right click on <span class="purple-text">Yeah! Sure</span> to Proceed. Otherwise click <span class="red-text">Review</span> to review your cart.</p>
		
	</div>
	<div class="modal-footer">
		<button class="modal-action modal-close waves-effect waves-red btn-flat red-text">Review</button>

		<button onclick="checkOut()" class="modal-action modal-close waves-effect waves-green btn-flat purple-text">Yeah! Sure</button>

	</div>
</div>	

<div id="preview"></div>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>

	<script type="text/javascript">
		var timeOut;
		$(document).ready(function() {
			$('.modal').modal();
			$(".button-collapse").sideNav();

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

		function checkOut() {
			window.location.href="../checkout";
		}
	
		function checkQty(id,prod) {
			var gt = eval($('#gt').text());
			var unit = eval($('#unit-'+id).text());
			var total = eval($('#total-'+id).text());
			var qty = $('#qty-'+id).val();

			if (qty < 1) {
				qty = 1;
				$('#qty-'+id).val(qty);
				Materialize.toast('Quantity must be more than 0',1000);
			} 

			gt = (gt-total);
			total = unit*qty;
			gt = gt+total;
			$('#total-'+id).text(total);
			$('#gt').text(gt);

			$.ajax({url:"increase_qty.php?",
               	data: {'id':id, 'qty':qty, 'prod':prod},
               	type: 'GET',
               	success: function(response) {
                 	$('#preview').html(response);
               	}
            });
		}	

		function remove(id) {
			
			var $toastContent = $('<span>Item Removed.</span>').add($('<button onclick="undo('+id+')" class="btn-flat green-text toast-action">Undo</button>'));
  			Materialize.toast($toastContent, 5000);

  			$('#prod-'+id).fadeOut(5000);

				timeOut = setTimeout(function() {

				$.ajax({url:"remove.php?",
	               	data: {'id':id},
	               	type: 'GET',
	               	success: function(response) {
	                 	$('#preview').html(response);
	               	}
	            });

			},5000);

		}	 

		function undo(id) {
			clearInterval(timeOut);
  			$('#prod-'+id).fadeIn(1000);
  			Materialize.Toast.removeAll();
		}

	</script>
	</body>
</html>