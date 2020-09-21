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
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/style_main.css">
	<style type="text/css">
		
		.top-pane-header {
			color: purple;
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
		.disabled:hover{
			background-color: #cdcdcd;
			pointer-events: none;
			border: none;
		}
		.red-border{
			border-color: red !important;
		}
		div.dpic{
			cursor: pointer;
		}

		.add-category {
			border-radius: 10px;
			border: 1px solid purple;
			background: rgba(255,255,255,.3);
			padding-top: 10px;
			padding-bottom: 5px;
			padding-left: 10px;
			padding-right: 10px;
			margin-top: 5px;
			margin-left: 20px !important;
			margin-right: 20px !important;
		}
		.pop-up {
				position: fixed;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
				background: rgba(0,0,0,0.7);
				z-index: 9999;
				text-align: center;
				display: none;
				overflow: auto;		
			}

			   
			.input-field input[type=text]:focus + label, .input-field input[type=password]:focus + label, .input-field input[type=number]:focus + label, .input-field input[type=email]:focus + label {
			    color: purple !important;
			}
			/* label underline focus color */
			.input-field input[type=text]:focus, .input-field input[type=password]:focus , .input-field input[type=number]:focus, .input-field input[type=email]:focus {
			    border-bottom: 1px solid purple !important;
			    box-shadow: 0 1px 0 0 #000;
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
}
	</style>
</head>
<body>

<div class="row hide visible-print center-align white-text" style="margin-bottom: -20px; margin-top: -10px;">
	
	<img src="../images/logo.png">
</div>

<div class="row hide-print">	
	<!-- <div class="navbar-fixed"> -->
	<nav class="" style="top: 0; position: fixed; z-index: 999;">
	    <div class="nav-wrapper">
	      <a href="../" class="brand-logo"><img src="../images/logo.png"></a>
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	      	<li><a href="../gallery" ><i class="fa fa-image"></i> Gallery</a></li>
	        <li><a href="../obituaries" ><i class="fa fa-users"></i> Obituaries</a></li>
	        <li><a href="#change-pass-modal" class="modal-trigger"><i class="fa fa-lock"></i> Change Password</a></li>
	        <li><a href="../logout"><i class="fa fa-sign-out"></i> Logout</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	      	<li><a href="../gallery" ><i class="fa fa-image"></i> Gallery</a></li>
	        <li><a href="../obituaries" ><i class="fa fa-users"></i> Obituaries</a></li>
	        <li><a href="#change-pass-modal" class="modal-trigger"><i class="fa fa-lock"></i> Change Password</a></li>
	        <li><a href="../logout"><i class="fa fa-sign-out"></i> Logout</a></li>
	      </ul>
	    </div>
	</nav>
	<!-- </div> -->
</div>

	
    <div id="info" class="col s12 white-text" style="margin-top: 70px;">
      	<div class="col s12 hide-print">
			<ul class="tabs tabs-fixed-width" style="background-color: transparent;">
									
			    <li class="tab col s3"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#new-payment"><i class="fa fa-dollar"></i> <span> Receive Payment</span></a></li>
				

				<li class="tab col s3"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#property"><i class="fa fa-gift"></i> <span> Products & Categories</span></a></li>

			    <li class="tab col s3"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#stock"><i class="fa fa-shopping-cart"></i> <span> Load Stock/Price</span></a></li>

			    <li class="tab col s3"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#reports"><i class="fa fa-folder-open"></i> <span> Reports</span></a></li>

			    <li class="tab col s3"><a style="font-size: 130%;" class="waves-effect waves-light hoverable white-text" href="#admins"><i class="fa fa-cogs"></i> <span> Admins</span></a></li>

			</ul>
		</div>


		<?php if (!$new_payments): ?>			
			<!-- New Tenant starts here -->
			<div id="new-payment" class="container" style="padding-top: 30px;">
				<h6 class="white-text center-align" ><span>This section allows you to receive Cash and Remittance Payments.</span> </h6><br><br>

				<div class="row">
					<div class="col m1 l1 xl1"></div>
					<div class="col s12 m10 l10 xl10" style="border: 1px solid white; border-radius: 10px; padding: 10px 10px 10px 10px; ">
						<h6 class="center-align">Search invoice.</h6>

						<div class="row center-align" style="padding: 10px 15px 10px 20px;">
							<div class="input-field col m6 l6 xl8">
								
								<input id="invoiceNoTxt" onkeyup="" type="number" class="validate" name="invoiceNoTxt">
								<label for="invoiceNoTxt" style="color: white;">Enter Invoice Number</label>
							</div>
							<div class=" col m6 l6 xl4" style="padding: 15px 10px 10px 10px;">
								<button id="check-invoice-btn" onclick="checkInvoice()" class="btn white purple-text waves-effect waves-purple"><i class="fa fa-check-circle"></i> Check Invoice</button>
							</div>
						</div>

						<div id="orderInfo" class="row hide">
							
			 	  			<!-- <h3 class="center-align"><i class="fa fa-cc-paypal" style="font-size: 1.5em;"></i> <i class="fa fa-ellipsis-h"></i> <i class="fa fa-ellipsis-h"></i> <i class="fa fa-money"></i></h3> -->
			 	  			<!-- <h6 class="center-align purple-text"><i><i class="fa fa-info-circle"></i> All payments are done via Paypal only!</i></h6><br> -->
				 	  		<div class="col m4 l4 s12 right-align" style="border-right: 1px solid #fff;">
				 	  			<h5><b>Details</b></h5><br>
				 	  			<h6>Invoice Number</h6>
				 	  			<h6 id="inNo" style="font-weight: bold;">668662</h6><br>
				 	  			<h6>Total Amount</h6>
				 	  			<h6 style="font-weight: bold;">PHP. <span id="inAmount">0.00</span></h6><br>
				 	  			<h6>Order Date</h6>
				 	  			<h6 id="inDate" style="font-weight: bold;">Jan 12, 2015</h6>
				 	  			
				 	  		</div>

				 	  		<div id="pay" class="col m8 l8 s12 center-align" style="padding-left:20px;padding-right:20px; padding-top: 10px;">
				 	  			<h6>Fill in this payment form.</h6>
				 	  			<form id="payment-form" action="payment.php" method="POST">
				 	  				<input id="invoiceNo" type="hidden" name="invoiceNo">
				 	  				<input id="idnumber" type="hidden" name="idnumber">
				 	  				<div class="row">
				 	  					<div class="input-field col l6 m6 s12 white-text">
				 	  						<select id="mode" name="mode" required>
				 	  							<option value="cash">Cash Payment</option>
				 	  							<option value="remitance">Remittance Payment</option>
				 	  						</select>
				 	  					</div>

				 	  					<div class="input-field col l6 m6 s12 white-text">
				 	  						<input type="number" id="amount" name="amount" required>
				 	  						<label class="white-text">Amount Paid</label>
				 	  					</div>
				 	  					
				 	  				</div>

								    <div class="row">
								        <div class="input-field col s12">
								          <textarea id="pay-desc" name="pay-desc" class="materialize-textarea" rows="3" required></textarea>
								          <label class="white-text" for="description">Payment Description (e.g. Bank receipt number, manual receipt number etc)</label>
								        </div>
								    </div>

								    <div class="row right-align" style="margin-top: -20px; padding-right: 20px;">
								    	<button id="pay-order-btn" class="btn white purple-text"><i class="fa fa-check-circle"></i> Pay</button>
								    </div>
				 	  			</form>

				 	  		</div>

				 	  		<div id="confirm" class="container center-align hide">
				 	  			<br>
				 	  			<h5 class="green-text"> <i class="fa fa-check-square-o"></i><br> Payment Successful!</h5>
				 	  			<h6>Your payment has been made successfully.<br><br> You can print the paid invoice/receipt using the button below.<br></h6>

				 	  			<br>
				 	  			<a target="_blank" id="inReceiptBtn" class="btn-login waves-effect waves-blue" href="../invoice?invoice=2562"><i class="fa fa-print"></i> Print Receipt</a>
				 	  		</div>


				 	  		<div id="paid" class="hide container center-align">
				 	  			<br>
				 	  			<h5 class="green-text"> <i class="fa fa-check-circle"></i><br> Order already paid.</h5>
				 	  			<h6>This order is already paid. You can't pay for it again.<br>You can print the paid invoice/receipt using the button below.</h6>

				 	  			<br>
				 	  			<a target="_blank" id="inReceiptBtn2" class="btn-login waves-effect waves-blue" href="../invoice?invoice=2562"><i class="fa fa-print"></i> Print Receipt</a>
				 	  		</div>
						</div>
					</div>
					<div class="col m1 l1 xl1"></div>
					
				</div>
		
			</div>
			<!-- New payment starts here -->
		<?php endif ?>

		<!-- property info starts here -->
		<div id="property" class="col s12" style="padding-top: 20px;">
			
			<div class="row">
				<div class="container">
					<br>
					<div class="col s12 hide-print">
						<ul class="tabs tabs-fixed-width" style="background-color: transparent;">
						    <li class="tab col s3"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#new_prod"> <span> <i class="fa fa-plus-circle white-text"></i> Add New Product</span></a></li>

						    <li class="tab col s3"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#categories"> <span> <i class="fa fa-list white-text"></i> Categories</span></a></li>

						</ul>
					</div>					
				</div>

				<div id="new_prod" class="row">
					<div class="col l7 m12 s12" style="border: 1px solid white; border-radius: 5px;">
						<div class="row center-align" style="padding-top: 20px;">					
							<h4 class="white-text"><i class="fa fa-plus-circle white-text"></i> Add New Product</h4>
							<div class="col l7 m12">
								<h5 class="white-text"><b>Add Product Info</b></h5>
								<br>
								<form id="add-property-form" method="POST" action="add_property.php">
									
									<div class="row">
										<div class="input-field col s12">
								          <input id="title" type="text" class="validate" name="title" onkeyup="setPreview('title','title-prev')" required>
								          <label for="title">Product Title</label>
								        </div>
								    </div>

								    
									
									<div class="row">
										<div class="input-field col m6 s12">
								          <input id="in-stock" type="number" class="validate" name="in-stock" onkeyup="setPreview('in-stock','in-stock-prev')" required>
								          <label for="in-stock">In Stock</label>
								        </div>
										<div class="input-field col m6 s12">
								          	<select id="category" name="type" class="icons" onchange="setPreview('category','category-prev')" required>
										      <?php if ($categories): ?>
										      		<option value="" disabled selected>Choose Product Category</option>								      	
											      <?php foreach ($categories as $category): ?>			      	
												      <option value="<?=$category['title']?>" data-icon="../images/categories/<?=$category['barner']?>" class="circle"><?=ucwords($category['title'])?></option>
											      <?php endforeach ?>
										      <?php else: ?>
										      	<option value="" disabled selected>No Categories Added.</option>
										      <?php endif ?>
										    </select>
								          	<label for="colors">Product Category</label>
								        </div>
									</div>
									
									<div class="row">
										<div class="input-field col m6 s12">
								          <input id="rent" type="number" class="validate" name="rent" onkeyup="setPreview('rent','rent-prev')" required>
								          <label for="rent">Price</label>
								        </div>
										
										<div class=" col m6 s12">
								          		Unit<br><br>      	
								        	<input name="unit" type="radio" id="kgs" value="kgs" required />
      										<label for="kgs" style="color: white !important;">KGs</label>
								          	<input name="unit" type="radio" id="mts" value="sqr mt" required />
      										<label for="mts" style="color: white !important;">M <sup>2</sup></label>
								          	<input name="unit" type="radio" id="lts" value="lts" required />
      										<label for="lts" style="color: white !important;">Ltrs</label>
								          	<input name="unit" type="radio" id="units" value="units" required />
      										<label for="units" style="color: white !important;">Units</label>
								        </div>
									</div>

								    <div class="row">
								        <div class="input-field col s12">
								          <textarea id="description" name="description" class="materialize-textarea" rows="5" onkeyup="setPreview('description','description-prev')"></textarea>
								          <label for="description">Description</label>
								        </div>
								    </div>

								    <?php if ($colors): ?>
								    <div id="colors" class="row hide">
								    	<p class=" center-align">Select Colors available (optional)</p>
								    	<p class=" center-align white-text">

								    	<?php foreach ($colors as $color): ?>
									      <input type="checkbox" name="colors[]" value="<?=$color['colorCode']?>" id="<?=$color['id']?>" />
									      <label style="margin-left: 50px; margin-bottom: 20px;" for="<?=$color['id']?>"><?=ucwords($color['colorName'])?> <span style="padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; border-radius: 50%; background-color: <?=$color['colorCode']?>; color: <?=$color['colorCode']?>">0</span></label>
								    	<?php endforeach ?>

									    </p>								    	
								    </div>								    	
								    <?php endif ?>

								    <input type="text" id="front-view-img" name="front-view-img" class="hide" >
								    <input type="text" id="interior-view-img" name="interior-view-img" class="hide" >
								    <input type="text" id="aerial-view-img" name="aerial-view-img" class="hide" >
								    <div class="row">
								    	<a href="#modal1" class="btn-apply modal-trigger submit-btn"><i class="fa fa-check-square-o"></i> <span class="submit-btn-span"> Publish Product</span></a>
								    </div>
								</form>								
							</div>

							<div class="col l5 m12 s12">
								
								<div class="col s12 m6 l12" style="margin-bottom: 10px;">
									<div id="front-view-image-div" class="dpic" style="height: 200px;">
									 	<div class="top-pane-header white">
									 		<i class="fa fa-image"></i> Front View Image
									 	</div>
										 	<div id="image1" class="hide" style="margin-top: 6px;">
										 		<img id="image1img" src="../images/bg/bg1.jpg" class="responsive-image" height="155px">
										 	</div>
										 	<div id="image1add" class="white-text" style="font-size: 3em; font-weight: bold;">
										 		<h1><i class="fa fa-camera"></i></h1>
										 		<h6>Click to add image</h6>
										 	</div>	
									</div>
									
						       		<progress  id="front-view-image-prog" max="100" value="0" style="display:none;"></progress>

									<form method="POST" action="front_view_upload_image.php" id="front-view-image" enctype="multipart/form-data">
										<input type="text" name="image" value="front-view-image" class="hide">
									 	<input type="file" name="front-view-image-file" class="hide" id="front-view-image-file" accept="image/*" required>
									 	<a id="front-view-image-form-btn" class="btn-flat purple white-text hide" onclick="javascript:uploadImage('front-view-image')">Set Image</a>
									</form>
								</div>
								
								<div class="col s12 m6 l12" style="margin-bottom: 10px;">
									<div id="interior-view-image-div" class="dpic" style="height: 200px;">
									 	<div class="top-pane-header white">
									 		<i class="fa fa-image"></i> Interior View Image
									 	</div>
										 	<div id="image2" class="hide" style="margin-top: 6px;">
										 		<img id="image2img" src="../images/bg/bg1.jpg" class="responsive-image" height="155px">
										 	</div>
										 	<div id="image2add" class="white-text" style="font-size: 3em; font-weight: bold;">
										 		<h1><i class="fa fa-camera"></i></h1>
										 		<h6>Click to add image</h6>
										 	</div>	
									</div>
									
						       		<progress  id="interior-view-image-prog" max="100" value="0" style="display:none;"></progress>

									<form method="POST" action="interior_view_upload_image.php" id="interior-view-image" enctype="multipart/form-data">
									 	<input type="file" name="interior-view-image-file" class="hide" id="interior-view-image-file" required>

									 	<a id="interior-view-image-form-btn" class="btn-flat purple white-text hide" onclick="javascript:uploadImage('interior-view-image')">Set Image</a>
									</form>
								</div>
								
								<div class="col s12 m6 l12" style="margin-bottom: 10px;">
									<div id="aerial-view-image-div" class="dpic" style="height: 200px;">
									 	<div class="top-pane-header white">
									 		<i class="fa fa-image"></i> Aerial View Image
									 	</div>
										 	<div id="image3" class="hide" style="margin-top: 6px;">
										 		<img id="image3img" src="../images/bg/bg1.jpg" class="responsive-image" height="155px">
										 	</div>
										 	<div id="image3add" class="white-text" style="font-size: 3em; font-weight: bold;">
										 		<h1><i class="fa fa-camera"></i></h1>
										 		<h6>Click to add image</h6>
										 	</div>	
									</div>
									
						       		<progress  id="aerial-view-image-prog" max="100" value="0" style="display:none;"></progress>

									<form method="POST" action="aerial_view_upload_image.php" id="aerial-view-image" enctype="multipart/form-data">
									 	<input type="file" name="aerial-view-image-file" class="hide" id="aerial-view-image-file" required>

									 	<a id="aerial-view-image-form-btn" class="btn-flat purple white-text hide" onclick="javascript:uploadImage('aerial-view-image')">Set Image</a>
									</form>
								</div>

							</div>			
						</div>
					</div>

					<div class="col l5">
						<h5 class="white-text center-align"><i class="fa fa-eye"></i> Product Preview</h5>
						<div class="row">
							<div class="col m12 l12">
							 	<div class="card sticky-action large" style="overflow: hidden;">
						            <div class="card-image waves-effect waves-block waves-purple">
						                <img id="card-image1" class="activator" src="../images/bg/front_view.png">
						            </div>
						            <div class="card-content">
						                <span class="card-title activator purple-text text-darken-4"><span id="title-prev">Product Title</span> <i class="fa fa-chevron-up right" style="color: purple;"></i></span>

						                <p class="activator purple-text" style="cursor: pointer; color: purple;">Click to show more</p>
						                <p id="description-prev"></p> <br>
						            </div>

						             <div class="card-action">
						             	<div class="row" style="margin-bottom: -10px;">
						             		<div class="col s6">
						             			<h5 class="purple-text text-darken-4">PHP. <span  id="rent-prev">0</span>
						             			<br><span class="orange-text left" style="font-size: 0.5em;"><span id="in-stock-prev">0 </span> Pieces in Stock.</span></h5>
						             		</div>
						             		<div class="col s6">
						             			 <a class="btn-flat white waves-effect white-text waves-light right" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart!</a>
						             		</div>
						             	</div>
						             	
						               
						             </div>

						             <div class="card-reveal" style="display: none; transform: translateY(0px); padding-bottom: 150px;">
						                <span class="card-title gray-text text-darken-4 center-align" style=""> <span id="title-in-prev"> Product Title</span><i class="fa fa-chevron-down right" style="color: purple;"></i></span>
						                <div class="col s12 hide-print">
										  <ul class="tabs tabs-fixed-width">
										    <li class="tab col s6"><a style="font-size: 90%;" class="waves-effect waves-purple hoverable" href="#info"><i class="fa fa-info-circle"></i> <span>Info</span></a></li>

										    <li class="tab col s6"><a style="font-size: 90%; pointer-events: none;" class="" href="#images" ><i class="fa fa-picture-o"></i> <span>Images</span></a></li>
										  </ul>
										</div>

										<!-- Start of Info tab -->
									    <div id="info" class="col s12 center-align">
									    	<h5 id="desc-heading" class="purple-text">Product Title</h5>
											<h5 class="purple-text" style="font-size: 95%;">Price Range</h5>
											<h5 class="purple-text"><b>PHP.<span id="desc-price">0</span> </b> to <b>PHP.<span id="max-price-prev">0</span> </b></h5>
											<h6 id="desc-desc" class="purple-text">
											</h6>
									    </div>
									    <!-- end of Info tab -->

										
						            </div>

						        </div>
							</div>
						</div>

						<div class="row center-align">
							<a href="#modal1" class="btn-apply modal-trigger submit-btn"><i class="fa fa-check-square-o"></i> <span class="submit-btn-span"> Publish Product</span></a>
						</div>
					</div>
				</div>

				<!-- Category starts here -->
				<div id="categories" class="row">
					 <div class="col l6 m12 s12 ">
					 	<div class="row add-category">
					 		<div class="container">						 			
						 		<div class="center-align col l6 m6 s6">
						 			<img src="../images/icons/quote.png" height="100px" width="100px">
						 		</div>
						 		<div class="center-align col l6 m6 s6">
						 			<h5>Add New Category</h5>
						 			<h6>Add Category for use</h6>
						 		</div>
					 		</div>
					 		<br>
					 		<hr style="border: 1px dotted purple; width: 100%; margin-top: 10px;">

					 		<div class="row">
					 			<div class="col l8">
					 				<div id="barner-div" class="dpic center-align" style="height: 200px; width: 100% !important;">
									 	<div class="top-pane-header white">
									 		<i class="fa fa-image"></i> Barner Image
									 	</div>
										 	<div id="barner-cont" class="hide" style="margin-top: 6px;">
										 		<img id="barnerimg" src="../images/bg/bg1.jpg" class="responsive-image" height="155px">
										 	</div>
										 	<div id="barneradd" class="white-text" style="font-size: 3em; font-weight: bold;">
										 		<h1><i class="fa fa-camera"></i></h1>
										 		<h6>Click to add image <br> Recommended (1920 x 1200 P)</h6>
										 	</div>	
									</div>
									
						       		<progress  id="barner-prog" max="100" value="0" style="display:none;"></progress>
					 				<form method="POST" action="barner_upload.php" id="barner-form" enctype="multipart/form-data" class="center-align">
									 	<input type="file" name="barner" class="hide" id="barner" required>

									 	<a id="barner-form-btn" class="btn-flat purple white-text hide" onclick="javascript:uploadImage2('barner')">Set Image</a>
									</form>
					 			</div>

					 			<div class="col l4">
					 				<div id="sticker-div" class="dpic center-align" style="height: 200px; width: 100% !important;">
									 	<div class="top-pane-header white">
									 		<i class="fa fa-image"></i> sticker Image
									 	</div>
										 	<div id="sticker-cont" class="hide" style="margin-top: 6px;">
										 		<img id="stickerimg" src="../images/bg/bg1.jpg" class="responsive-image" height="155px">
										 	</div>
										 	<div id="stickeradd" class="white-text" style="font-size: 3em; font-weight: bold;">
										 		<h1><i class="fa fa-camera"></i></h1>
										 		<h6>Click to add image <br> Recommended (300 x 364 P)</h6>
										 	</div>	
									</div>
									
						       		<progress  id="sticker-prog" max="100" value="0" style="display:none;"></progress>
					 				<form method="POST" action="sticker_upload.php" id="sticker-form" enctype="multipart/form-data" class="center-align">
									 	<input type="file" name="sticker" class="hide" id="sticker" required>

									 	<a id="sticker-form-btn" class="btn-flat purple white-text hide" onclick="javascript:uploadImage2('sticker')">Set Image</a>
									</form>
					 			</div>
					 			
					 		</div>

					 		<div class="container white-text center-align">
					 			<form action="add_category.php" id="add_category" method="POST">
					 				<div class="row">
					 					<input type="hidden" name="sticker-img" id="sticker-img">
					 					<input type="hidden" name="barner-img" id="barner-img">
					 				</div>

					 				<div class="row">
					 					<h5>Category Details</h5>

						 				<div class="input-field col l6 m6 s12">
						 					<input id="title" type="text" name="title" class="validate" required>
						 					<label for="title">Category Title</label>
						 				</div>						 					
						 				<div class="input-field col l6 m6 s12">
						 					<input id="price" type="number" name="price" class="validate" required>
						 					<label for="price">Least Price</label>
						 				</div>
					 				</div>

					 				<div class="row">
					 					<button id="add-category-btn" class="btn-apply waves-effect waves-purple right">Create Category</button>
					 				</div>
					 			</form>
					 			
					 		</div>
					 	</div>
					 </div>


					 <div class="col l6 m12 s12 ">
					 	<div class="row add-category">
					 		<div class="container">						 			
						 		<div class="center-align col l6 m6 s6">
						 			<img src="../images/icons/tender.png" height="100px" width="100px">
						 		</div>
						 		<div class="center-align col l6 m6 s6">
						 			<h5>Categories</h5>
						 			<h6>Manage Categories here.</h6>
						 		</div>
					 		</div>
					 		<br>
					 		<hr style="border: 1px dotted purple; width: 100%; margin-top: 10px;">
						 		
						 	<div class="row center-align">
							 	<?php if ($categories): ?>
							 		<table class="responsive-table centered">
							 			<thead>
							 				<tr>
							 					<th style="width: 300px;">Barner & Sticker</th>
							 					<th style="width: 200px;">Category</th>
							 					<th style="width: 200px;">Least Price</th>
							 					<th style="width: 200px;">Action</th>
							 				</tr>
							 			</thead>
							 			<tbody id="category-table">
							 				<?php foreach ($categories as $category): ?>								 					
								 				<tr id="cat-row-<?=$category['id']?>">
								 					<td style="width: 500px;">
								 						<img style="cursor: pointer;" onclick="show_popup('img-pop','../images/categories/<?=$category['barner']?>')" src="../images/categories/<?=$category['barner']?>" width="200px" height="100px" class="tooltipped" data-position="left" data-delay="1" data-tooltip="Click to show Barner Image."> 
								 						<img style="cursor: pointer;" onclick="show_popup('img-pop','../images/categories/<?=$category['sticker']?>')" src="../images/categories/<?=$category['sticker']?>" height="100px" width="70px" class="tooltipped" data-position="right" data-delay="1" data-tooltip="Click to show Sticker Image." ></td>
								 					<td><?=ucwords($category['title'])?></td>
								 					<td>PHP. <?=number_format($category['least_price'],0,".",",")?></td>
								 					<td>
								 						<button id="delete-cat-btn-<?=$category['id']?>" onclick="deleteCategory(<?=$category['id']?>,'<?=$category['title']?>')" class="btn-cancel waves-effect waves-red"><i class="fa fa-trash-o"></i> Delete Category</button>
								 					</td>
								 				</tr>
							 				<?php endforeach ?>
							 			</tbody>
							 		</table>
						 			
						 		<?php else: ?>
						 			<h5>There are no Catogories.</h5>
						 		<?php endif ?>
						 	</div>
					 	</div>

					 </div>

				</div>
				<!-- Category ends here -->

				
			</div>
		</div>
		<!-- property info ends here -->

		<!-- Payment info starts here -->
		<div id="stock" class="col s12">
			<!-- payment second level navigator starts here-->
			<div class="container">
				<br>
				<div class="col s12 hide-print">
					<ul class="tabs tabs-fixed-width" style="background-color: transparent;">
						<?php foreach ($categories as $category): ?>							
					    	<li class="tab col s3"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#cat-<?=$category['id']?>"> <span> <?=ucwords($category['title'])?></span></a></li>
						<?php endforeach ?>

					</ul>
				</div>				
			</div>
			<!-- payment second level navigator ends here-->

			<div class="row container center-align white-text" style="border: 1px solid white; border-radius: 5px; margin-top: 10px;">
			<?php foreach ($categories as $category): ?>
				<!-- stock starts here -->
				<div id="cat-<?=$category['id']?>" class="col s12">
					<?php
						$type = $category['title'];
						$prods = getAllAvailableProps($conn," AND type = \"$type\"");
					?>
					<?php if ($prods): ?>
					<div class="row">						
						<h4 class="white-text"><b><?=ucwords($category['title'])?> Products Stock</b></h4>
						<br>
					</div>


					<div class="row white-text">
						<table class="responsive-table centered white-text">
							<thead>
								<tr>
								    <th>Product</th>
								    <th>In Stock</th>
								    <th>Qty to Add</th>
								    <th>Unit Price</th>
								</tr>
							</thead>

							<tbody>
								<?php foreach ($prods as $prod): ?>									
									<tr>
										<td><?=ucwords($prod['title']) ?></td>
										<td id="qty-<?=$prod['id']?>"><?=$prod['stock']?></td>
										<td style="">
											<input min="0" type='number' id="qty-add-<?=$prod['id']?>" class='center-align' value="0">
											<span style="margin-top: -10px;"  id='lb-qty-<?=$prod['id']?>' class='red-text'> </span>
										</td>
										<td>
											<input min="0" type='number' id="price-<?=$prod['id']?>" class='center-align' value="<?=$prod['price']?>">
											<span  id='lb-price-<?=$prod['id']?>' class='red-text'></span>
										</td>
										<td><button id='btn-<?=$prod['id']?>' class='btn-flat white purple-text waves-effect waves-purple' onclick="save(<?=$prod['id']?>)"><i class="fa fa-save"></i>  Save</button></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
					<?php else: ?>
						<h5>No Products in <?=ucwords($category['title'])?> Category</h5>
					<?php endif ?>
				</div>
				
			<?php endforeach ?>
				<!-- stock ends here -->

			</div>

		</div>
		<!-- Payment info ends here -->

		<!-- Reports info starts here -->
		<div id="reports" class="col s12">
			
			<!-- reports second level navigator starts here-->
			<div class="container">
				<br>
				<div class="col s12 hide-print">
					<ul class="tabs tabs-fixed-width" style="background-color: transparent;">
					    <li class="tab col s4"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#properties-reports"><i class="fa fa-shopping-cart"></i> <span> Products Reports</span></a></li>

					    <li class="tab col s4"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#tenants-reports"><i class="fa fa-users"></i> <span> Customers Reports</span></a></li>

					    <li class="tab col s4"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#payment-reports"><i class="fa fa-dollar"></i> <span> Orders Reports</span></a></li>

					</ul>
				</div>				
			</div>
			<!-- reports second level navigator ends here-->

			<div class="row">
				<!-- properties reports starts here -->
				<div id="properties-reports" class="col s12 center-align white-text">

					<div class="row">
						<div class="container hide-print">
							<ul class="tabs tabs-fixed-width" style="background-color: transparent;">

							    <li class="tab col s6"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#m-v-p"><i class="fa fa-bars"></i> <span> Most Viewed Product Graph</span></a></li>

							    <li class="tab col s6"><a style="font-size: 120%;" class="waves-effect waves-purple hoverable white-text" href="#p-stock"><i class="fa fa-shopping-cart"></i> <span> Stock Reports</span></a></li>

							</ul>
						</div>

						
						<div class="row container white-text" id="m-v-p">
							<?php if ($properties): ?>
							

								<h4 class="white-text" >Graph of most viewed Product</span> </h4>
							
								<table class="white-text">
									<?php
										$totalcount = 0;
										foreach ($properties as $property) {
											$totalcount += $property['hits'];
										}
										// echo $totalcount;
									?>
								
									<?php foreach ($properties as $property ): ?>
										<?php
											$prop_id = $property['id'];
											$cases = $property['hits'];
											$percent = floor($cases/$totalcount*100);
										 	$width = $percent*7;
										 	if ($width == 0) {
										 		$width=2;
										 	}
															
										?>
										
										<tr>
											<td style="width: 150px !important;"><?= ucwords($property['title']) ." ".$cases ." (".$percent." %)"?></td>
											<td style="border-left: 2px solid purple; padding-left: -2px;"><img class="bar" src="../images/graph.jpg" width="<?=$width?> px;" height="70px;"></td>
										<tr>
										<tr style="height: -10px;"></tr>

									<?php endforeach ?>
								</tbody>
								</table>

								<button class="btn-apply waves-effect waves-purple hide-print" onclick="print()"><i class="fa fa-print"></i> Print Product Graph</button>

							<?php else: ?>
								<h5 class="white-text center-align">There are No Product.</h5>
							<?php endif ?>
						</div>



						<div class="row" id="p-stock">
							<?php if ($properties): ?>
							

								<h4 class="white-text" >Product Report <span id="props-filter">for All Product</span> </h4>
							
								<table class="responsive-table centered white-text">
									<thead>
										<tr>
										    <th>Property</th>
										    <th>Price</th>
										    <th>Category</th>
										    <th>Stock</th>
										    <th class="hide-print">Action</th>
										</tr>
									</thead>

									<tbody>
										<?php foreach ($properties as $property ): ?>
											<?php
												$prop_id = $property['id'];
																
											?>
											<tr id="props-<?=$prop_id?>" class="prop-<?=$property['type']?>">
												<td><?= ucwords($property['title'])?></td>
												<td>PHP. <?= number_format($property['price'],2,".",",")?></td>
												<td><?= ucwords($property['type'])?></td>

												<td class="left-align" id="prop-occ-<?=$prop_id?>">
													<?php if ($property['stock'] > 0): ?>
														
														<?= $property['stock'] ?>
													<?php else: ?>
														<p class="red-text">Out of Stock!</p>
													<?php endif ?>
												</td>
												
												<td class="hide-print">
													<?php if ($property['stock'] >= 0): ?>
														
														<button id="btn-<?=$prop_id?>" class="btn-cancel waves-effect waves-red" onclick="deleteProperty('<?=$prop_id?>')" ><i class='fa fa-trash-o'></i> Delete Product</button> 
													<?php else: ?>
														<i class='fa fa-exclamation'></i> Can't Delete Product
													<?php endif ?>
													            	 
												</td>
											</tr>

										<?php endforeach ?>
									</tbody>
								</table>

								<button class="btn-apply waves-effect waves-purple hide-print" onclick="print()"><i class="fa fa-print"></i> Print Product Report</button>

							<?php else: ?>
								<h5 class="white-text center-align">There are No Product.</h5>
							<?php endif ?>
						</div>

					</div>
				</div>
				<!-- properties reports ends here -->

				<!-- tenant reports starts here -->
				<div id="tenants-reports" class="col s12 center-align" style="border: 1px solid white; border-radius: 5px; margin: 10px 25px 10px 10px;">
					<?php if ($tenants): ?>
						<h5 class="white-text" >Report <span>for All Customers</span> </h5>
						
							<table class="responsive-table centered white-text bordered">
								<thead>
									<tr>
									    <th></th>
									    <th>Name</th>
									    <th>Occupation</th>
									    <th>ID Number</th>
									    <th>Phone</th>
									    <th>Email</th>
									    <th>Total Purchases</th>
									    <th>Money Spent</th>
									    <th class="hide-print">Action</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ($tenants as $tenant ): ?>
										<?php
											$idno = $tenant['idno'];

											$totalOrders = getTotalAmount($conn,$idno)['orders'];
											$totalAmount = getTotalAmount($conn,$idno)['total'];
											
															
										?>
										<tr id="tenant-<?=$idno?>">
											<td>
												
												<img class="circle" src="../images/profile/<?php 
													if($tenant['ppic'] != '') {
														echo $tenant['ppic'];
													} else {
														echo "avatar.png";
													} ?>" 
													height="40px" width="40px">
																								
											</td>
											<td><?= ucwords($tenant['fname']." ".$tenant['lname'])?></td>
											<td><?= ucwords($tenant['occupation'])?></td>
											<td><?= $tenant['idno']?></td>
											<td><?= $tenant['phone']?></td>
											<td><?= $tenant['email']?></td>
											<td><?=$totalOrders?></td>
											<td>PHP. <?= number_format($totalAmount,2,".",",")?></td>
											
											<td class="hide-print">
												<button id="btn-<?=$idno?>" class="btn-cancel waves-effect waves-red" onclick="deleteTenant('<?=$idno?>')" ><i class='fa fa-trash-o'></i> Delete Customer</button> 
												            	 
											</td>
										</tr>

									<?php endforeach ?>
								</tbody>
							</table>
							<button class="btn-apply waves-effect waves-purple hide-print" onclick="print()"><i class="fa fa-print"></i> Print Customers Report</button>
					<?php else: ?>
						<h5 class="white-text center-align">There are No Customers.</h5>
					<?php endif ?>
				</div>
				<!-- tenant reports ends here -->

				<!-- payment reports starts here -->
				<div id="payment-reports" class="col s12 center-align" style="border: 1px solid white; border-radius: 5px; margin: 10px 10px 10px 10px;">
					<?php if ($payments): ?>
						<h5 class="white-text" ><span id="payment-filter">All</span> Orders Report</h5>
						
							<table class="responsive-table centered bordered white-text">
								<thead>
									<tr>
									    <th>Order Number</th>
									    <th>Amount</th>
									    <th>Time Stamp</th>
									    <th>Payment Mode</th>
									    <th class=" hide-print">Action</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ($payments as $payment ): ?>
										<?php
											$id = $payment['product_id'];
											$date_paid = date('D d-F-Y | H:i:s', strtotime($payment['created']));
															
										?>
										<tr id="payment-<?=$id?>" class=" ">
											<td><?=$id?></td>
											<td>PHP. <?= number_format($payment['payment_gross'],2,".",",")?></td>
											<td><?= $date_paid ?></td>
											<td><?= ucfirst($payment['mode'])?></td>
											<td class=" hide-print"><a class="btn-flat white waves-effect waves-purple purple-text" target="_blank" href="../invoice?invoice=<?=$id?>"><i class="fa fa-file"></i> View Order</a></td>
											
										</tr>

									<?php endforeach ?>
								</tbody>
							</table>
							<button class="btn-apply waves-effect waves-purple hide-print" onclick="print()"><i class="fa fa-print"></i> Print Orders Report</button>
					<?php else: ?>
						<h5 class="white-text center-align">There are No Payments made.</h5>
					<?php endif ?>
				</div>
				<!-- payment reports ends here -->
			</div>
		</div>
		<!-- Reports info ends here -->
		<!-- Admin Tab Starts here -->
			    <div id="admins" class="col s12" style="border: 1px solid white; border-radius: 5px; margin: 10px 10px 10px 10px;">
			    	<div class="center-align white-text col m12 l12 s12 hide-print">
			   			<h4 class="center-align">Add Administrator</h4>
			   			<h6 class="yellow-text text-darken-4">Other System Administrators has equal privilliges as you.</h6><br>
			   				<button data-target="add-admin" class="btn-apply waves-effect waves-light modal-trigger">Add New Admin</button>
			   			<br><br>
			   		</div>
			    	
			    	<?php if ($admins): ?>
			    		<div class="center-align white-text col m12 l12 s12">
			    			<h4 class="center-align">System Administrators</h4>
				    		<table class="responsive-table centered white-text">
						        <thead>
						          <tr>
						              <th>ID No</th>
						              <th>Names</th>
						              <th>Email</th>
						              <th>Phone</th>
						              <th class="hide-print">Action</th>
						          </tr>
						        </thead>

						        <tbody>

						    		<?php foreach ($admins as $admin): ?>
						    			<tr id="<?=$admin['idno']?>">
								            <td><?=$admin['idno']?></td>
								            <td><?=ucwords($admin['names'])?></td>
								            <td><?=$admin['email']?></td>
								            <td><?=$admin['phone']?></td>
								            <td class="hide-print">
								            	
								            	<button class="btn-cancel waves-effect waves-red"
									            onclick="deleteAdmin('delete_admin.php','<?=$admin['idno']?>')" ><i class='fa fa-delete'></i> Delete Admin</button>          		
									            		
								            	
								            </td>
								         </tr>
						    		<?php endforeach ?>

						        </tbody>
						    </table>
						    <br><br>
						</div>
					<?php else: ?>
						<div class="center-align white-text col m12 l12 s12">
							<h5>There are no more Administrators.</h5><br>

							<h6>Click the Above Button to add a Administrator.</h6>
							 <br><br><br>
						</div>
			    	<?php endif ?>	

			    	<!-- Modal Structure -->
							  <div id="add-admin" class="modal fore-color">
							    <div class="modal-content center-align row">
							      	<h4>Add Administrator.</h4>
							      	<form method="POST" action="add_admin.php" id="add-admin-form">
							      		<div class="input-field col s12 m6 l6">
							          		<input id="id-no" name="id-no" type="number" class="validate" required>
							          		<label for="id-no">ID/Passport/Birth Certificate Number</label>
							        	</div>

							      		<div class="input-field col s12 m6 l6">
							          		<input id="name" name="name" type="text" class="validate" required>
							          		<label for="name">Full Names</label>
							        	</div>

							      		<div class="input-field col s12 m6 l6">
							          		<input id="phone" name="phone" type="number" class="validate" required>
							          		<label for="phone">Phone Number</label>
							        	</div>

							      		<div class="input-field col s12 m6 l6">
							          		<input id="email" name="email" type="email" class="validate" required>
							          		<label for="email">Email</label>
							        	</div>

							      		<div class="input-field col s12 m12 l12">
							          		<input id="password" name="password" type="password" class="validate" required>
							          		<label for="password">Password</label>
							        	</div>

							      		<button class="modal-action waves-effect waves-light btn-apply" ><i class="fa fa-check"></i> Add</button>

							        	<a href="#" class="modal-action modal-close waves-effect waves-light btn-cancel"><i class="fa fa-times"></i> Cancel</a>
							      	</form>
							    </div>
							   
							  </div>
							<!-- End of modal structure -->		    	

			    </div>
			   <!-- Admins tab ends here -->
    </div>
</div>


<div class="pop-up row"  id="img-pop">
	<span style="margin-top: 10px;">
		<button class="btn-flat right tooltipped" data-position="left" data-delay="1" data-tooltip="Close" onclick="close_popup('img-pop')"><i class="fa fa-times red-text"></i></button>
	</span>
	<div class="row" style="margin-top: 10px;">
		<img id="pop-image" src="">
	</div>
	
</div>

<!--Publish info Modal Structure -->
<div id="modal1" class="modal bottom-sheet center-align">
	<div class="modal-content container">
		<h1><i class="fa fa-check-square-o purple-text"></i></h1>
		<h5 class="purple-text">Publish Product?</h5>
		<h6>Once you publish, the Product is visisble to potential customers.<br> Are you sure it is ready and all the details are clear? </h6>
		<p>If everything is right click on <span class="purple-text">Publish</span> to Publish. Otherwise click <span class="red-text">Review</span> to review the Product details</p>
		
	</div>
	<div class="modal-footer">
		<a href="#" class="modal-action modal-close waves-effect waves-red btn-flat red-text">Review</a>

		<input type="submit" form="add-property-form" class="modal-action modal-close waves-effect waves-purple btn-flat purple-text" value="Publish">
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
<script src="../js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
		<?php 
			if (isset($_GET['ok'])) {
				echo "
				<script>
					var \$toastContent = \$('<span><i class=\"fa fa-check green-text\"></i>  New Administrator Added </span>');
	  				Materialize.toast(\$toastContent, 3000);
	  			</script>
				";

			} elseif (isset($_GET['err'])) {
				echo "
				<script>
					var \$toastContent = \$('<span><i class=\"fa fa-exclamation red-text\"></i>  Error while adding new Administrator. Try again. </span>');
	  				Materialize.toast(\$toastContent, 3000);
	  			</script>
				";
			} 
		?>

<script type="text/javascript">
	var timeOut;
	var images = [];
	images[0] = "../images/bg/front_view.png";
	images[1] = "../images/bg/interior_view.png";
	images[2] = "../images/bg/aerial_view.png";

	

	// function searchTenantPayment() {

	// 	var value = $('#search-tenant-payment').val();

	// 	if (value == '' || value.length < 7 || value.length > 8) {
	// 		$('#search-tenant-payment').addClass('red-text red-border');
	// 		return false;
	// 	} else {
	// 		$('#search-tenant-payment').removeClass('red-text red-border');

	// 	}
	
	// 	$('#fine-info-payment').addClass('hide');
	// 	$('#payment-fine').addClass('hide');

	// 	$.ajax({url:"search_tenant_fine_payment.php",
	// 	    data: {'t_id':value},
	// 	    type: 'POST',
	// 	    success: function(response) {
	// 	        $('#feedback-fines-payment').html(response);
	// 	    }
	// 	});
	// }

	// function searchTenantRent() {

	// 	var value = $('#search-tenant-rent').val();

	// 	if (value == '' || value.length < 7 || value.length > 8) {
	// 		$('#search-tenant-rent').addClass('red-text red-border');
	// 		return false;
	// 	} else {
	// 		$('#search-tenant-rent').removeClass('red-text red-border');

	// 	}
	
	// 	$('#rent-info').addClass('hide');
	// 	$('#payment-rent').addClass('hide');
	// 	$('#search-tenant-rent-btn').html("Searching Tenant...<i class='fa fa-spinner circular'></i>");
	// 	$('#search-tenant-rent-btn').addClass("disabled");

	// 	$.ajax({url:"search_tenant_rent.php",
	// 	    data: {'t_id':value},
	// 	    type: 'POST',
	// 	    success: function(response) {
	// 	        $('#feedback-rent-payment').html(response);
	// 			$('#search-tenant-rent-btn').html("Search Tenant");
	// 			$('#search-tenant-rent-btn').removeClass("disabled");

	// 	    }
	// 	});
	// }

	// function payFine(f_id,bal,payable) {
	// 	var amount = $('#'+f_id).val();
	// 	if (amount != '' && amount < (bal+1) && amount > 0) {
	// 		$('#'+f_id).removeClass('error');
	// 		$('#'+f_id).removeClass('red-border');
	// 		$('#lb-'+f_id).text('');
	// 		$('#btn-'+f_id).html("Paying...<i class='circular fa fa-spinner white-text'></i>");
	// 		$('#btn-'+f_id).addClass('disabled');

	// 		$.ajax({url:"pay_fine.php",
	// 		    data: {'amount':amount,'f_id':f_id,'bal':bal,'payable':payable},
	// 		    type: 'POST',
	// 		    success: function(response) {
	// 		        $('#preview').html(response);
	// 		    }
	// 		});
	// 	} else {
	// 		$('#'+f_id).addClass('error red-border');
	// 		$('#lb-'+f_id).text('Enter amount less or equal to '+bal);
	// 	}
	// }


	$(document).ready(function() {
    	$('select').material_select();
		$(".button-collapse").sideNav();
		$('.modal').modal();
		changeCardImage1();
		var date = new Date();

		$('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 5, // Creates a dropdown of 100 years to control year,
            today: 'Today',
            min: date,
            clear: 'Clear',
            close: 'Ok',
            format: 'dd-mm-yy',
            cancel: 'Cancel',
            closeOnSelect: false // Close upon selecting a date,
		});

		//Front View Image manenoss
		$("#front-view-image-div").click(function() {
			$("#front-view-image-file").trigger("click");
		});

		$("#front-view-image-file").change(function(){
            $("#front-view-image-form-btn").removeClass("hide");
            $("#image1").removeClass("hide");
            $("#image1add").addClass("hide");

			var output = document.getElementById('image1img');
			var f_v_url = URL.createObjectURL(event.target.files[0]);
			output.src = f_v_url;
			images[0] = f_v_url;
		 		        
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
			images[1] = f_v_url;
		 		        
		});	

		//Aerial View Image manenoss
		$("#aerial-view-image-div").click(function() {
			$("#aerial-view-image-file").trigger("click");
		});

		$("#aerial-view-image-file").change(function(){
            $("#aerial-view-image-form-btn").removeClass("hide");
            $("#image3").removeClass("hide");
            $("#image3add").addClass("hide");

			var output = document.getElementById('image3img');
			var f_v_url = URL.createObjectURL(event.target.files[0]);
			output.src = f_v_url;
			images[2] = f_v_url;
		 		        
		});	


		//Barner Image manenoss
		$("#barner-div").click(function() {
			$("#barner").trigger("click");
		});

		$("#barner").change(function(){
            $("#barner-form-btn").removeClass("hide");
            $("#barner-cont").removeClass("hide");
            $("#barneradd").addClass("hide");

			var output = document.getElementById('barnerimg');
			var f_v_url = URL.createObjectURL(event.target.files[0]);
			output.src = f_v_url;
		 		        
		});

		//Sticker Image manenoss
		$("#sticker-div").click(function() {
			$("#sticker").trigger("click");
		});

		$("#sticker").change(function(){
            $("#sticker-form-btn").removeClass("hide");
            $("#sticker-cont").removeClass("hide");
            $("#stickeradd").addClass("hide");

			var output = document.getElementById('stickerimg');
			var f_v_url = URL.createObjectURL(event.target.files[0]);
			output.src = f_v_url;
		 		        
		});


        $("#add-property-form").submit(function() {
        	if ($('#front-view-img').val() == '') {
        		$('#front-view-image-div').addClass('red-border');
        		$('#image1add').removeClass('white-text');
        		$('#image1add').addClass('red-text');
        		return false;
        	} else {
        		$('#front-view-image-div').removeClass('red-border'); 
        		$('#image1add').addClass('white-text');
        		$('#image1add').removeClass('red-text');       		
        	}

        	if ($('#interior-view-img').val() == '') {
        		$('#interior-view-image-div').addClass('red-border');
        		$('#image2add').removeClass('white-text');
        		$('#image2add').addClass('red-text');
        		return false;
        	} else {
        		$('#interior-view-image-div').removeClass('red-border'); 
        		$('#image2add').addClass('white-text');
        		$('#image2add').removeClass('red-text');       		
        	}

        	if ($('#aerial-view-img').val() == '') {
        		$('#aerial-view-image-div').addClass('red-border');
        		$('#image3add').removeClass('white-text');
        		$('#image3add').addClass('red-text');
        		return false;
        	} else {
        		$('#aerial-view-image-div').removeClass('red-border'); 
        		$('#image3add').addClass('white-text');
        		$('#image3add').removeClass('red-text');       		
        	}

            //change text of button and disable it
            $(".submit-btn-span").text("Publishing Product! Please wait...");
            $(".submit-btn").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
           		$(".submit-btn-span").text("Publish Product");
            	$(".submit-btn").removeClass("disabled");
            });

            
            return false; // prevent normal submit
        });

        $("#add_category").submit(function() {
           	$("#add-category-btn").html("Adding Category! Please wait...<i class='fa fa-spinner circular'></i>");
            $("#add-category-btn").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
            });

            
            return false;
        });



    //     $("#add-fine-form").submit(function() {
    //        		$("#fine-btn-span").html("Recording Fine! Please wait...<i class='fa fa-spinner circular'></i>");
    //         	$("#fine-btn").addClass("disabled");

    //         $.post($(this).attr("action"), $(this).serialize(), function(data) {
    //             $("#preview").html(data);
    //         });

            
    //         return false;
    //     });

    //     $("#rent-form").submit(function() {

    //     	if (!checkCheck('payment-type')) {
    //     		$('#payment-type-lb').removeClass('white-text'); 
    //     		$('#payment-type-lb').addClass('red-text');
    //     		$('#payment-type-group').addClass('red-border');

    //     		return false;
    //     	} else {

    //     		$('#payment-type-lb').removeClass('red-text');
    //     		$('#payment-type-lb').addClass('white-text');
    //     		$('#payment-type-group').removeClass('red-border');
    //     	}

    //     	if (!checkCheck('invoice')) {
    //     		$('#invoice-lb').removeClass('white-text'); 
    //     		$('#invoice-lb').addClass('red-text');
    //     		$('#invoice-group').addClass('red-border');

    //     		return false;
    //     	} else {

    //     		$('#invoice-lb').removeClass('red-text');
    //     		$('#invoice-lb').addClass('white-text');
    //     		$('#invoice-group').removeClass('red-border');
    //     	}

    //        	$("#rent-btn").html("Recording Rent! Please wait...<i class='fa fa-spinner circular'></i>");
    //         $("#rent-btn").addClass("disabled");

    //         $.post($(this).attr("action"), $(this).serialize(), function(data) {
    //             $("#preview").html(data);
    //        		$('#rent-amount').text('0');
				// $('#rent-title').text('Select invoice first.');
    //         });

            
    //         return false;
    //     });


        $("#change-pass").submit(function() {
        	var password = $('#new-pass').val();
        	var re_password = $('#re-pass').val();
        	if (password != re_password) {
	         	Materialize.toast('ID Number should be between 6 to 8 Characters!', 4000);
        		return false;
        	}
           		$("#btn-change-pass").text("Changing Password! Please wait...<i class='fa fa-spinner circular'></i>");
            	$("#change-pass").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
            });

            
            return false;
        });


        $("#payment-form").submit(function() {
        	var mode = $('#mode').val();
        	if (mode == '') {
	         	Materialize.toast("<i class='fa fa-exclamation-triangle yellow-text' Select Payment method!", 3000);
        		return false;
        	}

           	$("#pay-order-btn").html("Paying! Please wait... <i class='fa fa-spinner circular'></i>");
            $("#pay-order-btn").addClass("disabled");

            $.post($(this).attr("action"), $(this).serialize(), function(data) {
                $("#preview").html(data);
            });

            
            return false;
        });
	});

	function changeColor(cat) {
		if (cat == 'casket' || cat == 'coffin' || cat == 'caskets' || cat == 'coffins') {
			$('#colors').removeClass('hide');
		} else {
			$('#colors').addClass('hide');
		}
	}

	function checkCheck(name) {		
		
		if ($('input[name=' + name + ']:checked').length) {
			return true;
		}

		return false;
	}

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


	function uploadImage2(form) {
		$('#'+form+'-form-btn').addClass("hide");

	    $('#'+form+'-form').ajaxForm({

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


	function setPreview(source,target) {
		var value = $('#'+source).val();
		if (source == 'category') {
			changeColor(value);
		}
		
		if (source == 'title') {
			$('#'+target).text(value);
			$('#title-in-prev').text(value);
			$('#desc-heading').text(value);
		}

		if (source == 'rent') {
			$('#rent-prev').text(value);
			$('#desc-price').text(value);
		}



		if (source == 'max-price') {
			$('#max-price-prev').text(value);
		}

		if (source == 'description') {
			$('#description-prev').text(value);
			$('#desc-desc').text(value);
		}

		if (source == 'in-stock') {
			$('#in-stock-prev').text(value);
		}

		if (source =='color') {
			value = document.getElementById('color').selected;
			$('#'+target).text(value);

		}
	}

	function changeCardImage1() {
		var i = 0;
		var maxI = images.length;
		setInterval(function() {

			$('#card-image1').prop("src",images[i]);
				i++
				if (i==maxI) {
					i=0;
			}
		},1500);

	}



	// function setAmountDue(amount_due,title) {
	// 	$('#rent-amount').text(amount_due);
	// 	$('#rent-title').text('for '+title);
	// }

	function save(prod) {
		curqty = $('#qty-'+prod).text();

		var stock = $('#qty-add-'+prod).val();
		if (!(eval(stock) >= 0)) {
			$('#lb-qty-'+prod).text("Quantity can't be negative!");
			return false;
		} else {
			$('#lb-qty-'+prod).text("");
		}

		var price = $('#price-'+prod).val();
		if (!(eval(price) >= 0)) {
			$('#lb-price-'+prod).text("Price can't be negative!");
			return false;
		} else {
			$('#lb-price-'+prod).text("");
		}			

		$('#btn-'+prod).html("Updating! Hold On... <i class='circular fa fa-spinner'></i>");
		$('#btn-'+prod).addClass("disabled");


		$.ajax({url:"update_stock.php",
			data: {'prod':prod, 'stock':stock, 'price':price},
			type: 'POST',
			success: function(response) {
				$('#preview').html(response);
			}
		});            	

	}

	function deleteCategory(cat,title) {
	
            var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Deleting Category in <span id="time" class="red-text" style="font-weight:bold;">7</span> Seconds! This will also delete all products in that category. You can</span>').add($('<button onclick="undo()" class="btn-flat toast-action green-text"><i class="fa fa-undo"></i> Undo</button>'));
            Materialize.toast($toastContent, 7000);

            var i=6;
            timeOut = setInterval(function() {
            	$('#time').text(i);
            	if (i < 0) {
					$('#delete-cat-btn-'+cat).html("Deleting Category! Hold On... <i class='circular fa fa-spinner'></i>");
					$('#delete-cat-btn-'+cat).addClass('disabled');
					clearTimeout(timeOut);

					$.ajax({url:"delete_category.php",
					    data: {'cat':cat, 'title':title},
					    type: 'POST',
					    success: function(response) {
					        $('#preview').html(response);
					    }
					});
            	}

            	i--;

            }, 1000);
       
	}

	function deleteProperty(prop_id) {
	
            var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Deleteing Product in <span id="time" class="red-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action white-text"><i class="fa fa-undo"></i> Undo</button>'));
            Materialize.toast($toastContent, 6000);

            var i=4;
            timeOut = setInterval(function() {
            	$('#time').text(i);
            	if (i < 0) {
					$('#btn-'+prop_id).html("Deleteing Product! Hold On... <i class='circular fa fa-spinner'></i>");
					$('#btn-'+prop_id).addClass('disabled');
					clearTimeout(timeOut);

					$.ajax({url:"delete_property.php",
					    data: {'prop_id':prop_id},
					    type: 'POST',
					    success: function(response) {
					        $('#preview').html(response);
					    }
					});
            	}

            	i--;

            }, 1000);
       
	}

	// function vacateTenant(prop_id) {
	// 		var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Vacating Tenant in <span id="time" class="red-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action white-text"><i class="fa fa-undo"></i> Undo</button>'));
 //            Materialize.toast($toastContent, 6000);
 //            var i=4;
 //            timeOut = setInterval(function() {
 //            	$('#time').text(i);
 //            	if (i < 0) {
	// 				$('#btn-'+prop_id).html("Vacating Tenant! Hold On... <i class='circular fa fa-spinner'></i>");
	// 				$('#btn-'+prop_id).addClass('disabled');
	// 				clearTimeout(timeOut);

	// 				$.ajax({url:"vacate_tenant.php",
	// 				    data: {'prop_id':prop_id},
	// 				    type: 'POST',
	// 				    success: function(response) {
	// 				        $('#preview').html(response);
	// 				    }
	// 				});
 //            	}

 //            	i--;

 //            }, 1000);
	// }

	function deleteTenant(idno) {
			var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Deleteing Customer in <span id="time" class="red-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action white-text"><i class="fa fa-undo"></i> Undo</button>'));
            Materialize.toast($toastContent, 6000);
            var i=4;
            timeOut = setInterval(function() {
            	$('#time').text(i);
            	if (i < 0) {
					$('#btn-'+idno).html("Deleting Customer! Hold On... <i class='circular fa fa-spinner'></i>");
					$('#btn-'+idno).addClass('disabled');
					clearTimeout(timeOut);

					$.ajax({url:"delete_tenant.php",
					    data: {'idno':idno},
					    type: 'POST',
					    success: function(response) {
					        $('#preview').html(response);
					    }
					});
            	}

            	i--;

            }, 1000);
	}

	function checkInvoice() {
		var invoiceNo = $('#invoiceNoTxt').val();
		if (invoiceNo == '') {
			var $toastContent = $('<span><i class="fa fa-exclamation-triangle yellow-text"></i> Enter Invoice Number</span>');
            Materialize.toast($toastContent, 3000);

            return false;
		}

		$('#invoiceNo').val(invoiceNo);
		$('#orderInfo').addClass('hide');

		$('#check-invoice-btn').html("<i class='fa fa-spinner circular'></i> Fetching Order");
		$('#check-invoice-btn').addClass('disabled');

		$.ajax({
			url:"check_invoice.php",
			data: {'invoiceNo':invoiceNo},
			type: 'POST',
			success: function(response) {
				$('#preview').html(response);
			}
		});
	}

	// function deleteNewTenant(idno) {
	// 		var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Deleteing Customer in <span id="time" class="red-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action white-text"><i class="fa fa-undo"></i> Undo</button>'));
 //            Materialize.toast($toastContent, 6000);
 //            var i=4;
 //            timeOut = setInterval(function() {
 //            	$('#time').text(i);
 //            	if (i < 0) {
	// 				$('#new-t-d-btn-'+idno).html("Deleting Customer! Hold On... <i class='circular fa fa-spinner'></i>");
	// 				$('#new-t-d-btn-'+idno).addClass('disabled');
	// 				$('#new-t-a-btn-'+idno).addClass('hide');
	// 				clearTimeout(timeOut);

	// 				$.ajax({url:"delete_new_tenant.php",
	// 				    data: {'idno':idno},
	// 				    type: 'POST',
	// 				    success: function(response) {
	// 				        $('#preview').html(response);
	// 				    }
	// 				});
 //            	}

 //            	i--;

 //            }, 1000);
	// }


	// function activateTenant(idno) {
	// 		var $toastContent = $('<span><i class="fa fa-check white-text"></i> Activating Tenant in <span id="time" class="white-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action white-text"><i class="fa fa-undo"></i> Undo</button>'));
 //            Materialize.toast($toastContent, 6000);
 //            var i=4;
 //            timeOut = setInterval(function() {
 //            	$('#time').text(i);
 //            	if (i < 0) {
	// 				$('#new-t-a-btn-'+idno).html("Activating Tenant! Hold On... <i class='circular fa fa-spinner'></i>");
	// 				$('#new-t-a-btn-'+idno).addClass('disabled');
	// 				$('#new-t-d-btn-'+idno).addClass('hide');
	// 				clearTimeout(timeOut);

	// 				$.ajax({url:"activate_tenant.php",
	// 				    data: {'idno':idno},
	// 				    type: 'POST',
	// 				    success: function(response) {
	// 				        $('#preview').html(response);
	// 				    }
	// 				});
 //            	}

 //            	i--;

 //            }, 1000);
	// }


	function deletePayment(id,prop) {
			var $toastContent = $('<span><i class="fa fa-exclamation-triangle red-text"></i> Deleteing Payment in <span id="time" class="red-text" style="font-weight:bold;">5</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action white-text"><i class="fa fa-undo"></i> Undo</button>'));
            Materialize.toast($toastContent, 6000);
            var i=5;
            timeOut = setInterval(function() {
            	$('#time').text(i);
            	if (i < 0) {
					$('#new-p-d-btn-'+id).html("Deleting Payment! Hold On... <i class='circular fa fa-spinner'></i>");
					$('#new-p-d-btn-'+id).addClass('disabled');
					$('#new-p-a-btn-'+id).addClass('hide');
					clearTimeout(timeOut);

					$.ajax({url:"delete_new_payment.php",
					    data: {'id':id, 'prop_id':prop},
					    type: 'POST',
					    success: function(response) {
					        $('#preview').html(response);
					    }
					});
            	}

            	i--;

            }, 1000);
	}


	function confirmPayment(id) {
			var $toastContent = $('<span><i class="fa fa-check white-text"></i> Confirming Payment in <span id="time" class="white-text" style="font-weight:bold;">3</span> Seconds! You can.</span>').add($('<button onclick="undo()" class="btn-flat toast-action "><i class="fa fa-undo"></i> Undo</button>'));
            Materialize.toast($toastContent, 3000);
            var i=2;
            timeOut = setInterval(function() {
            	$('#time').text(i);
            	if (i < 0) {
					$('#new-p-a-btn-'+id).html("Confirming Payment! Hold On... <i class='circular fa fa-spinner'></i>");
					$('#new-p-a-btn-'+id).addClass('disabled');
					$('#new-p-d-btn-'+id).addClass('hide');
					clearTimeout(timeOut);

					$.ajax({url:"confirm_payment.php",
					    data: {'id':id},
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

	function showAllProps() {
		$('.prop-t-room').removeClass('hide');
		$('.prop-b-room').removeClass('hide');
		$('.prop-kitchen').removeClass('hide');
	}

	function showProps(show,hide,hide_1) {
		
		$('.'+show).removeClass('hide');
		$('.'+hide).addClass('hide');
		$('.'+hide_1).addClass('hide');

		$('#props-filter').text('for '+show.toUpperCase().slice(5)+' Product');
	}

	function showMode() {
		$('#mode').removeClass('hide');
	}
	function hideMode() {
		$('#mode').addClass('hide');
	}

	function showAll() {
		hideMode();
		$('.pay-statement-rent').removeClass('hide');
		$('.pay-statement-fine').removeClass('hide');
		$('#payment-filter').text('All');
	}

	function showRent() {
		showMode();
		$('.pay-statement-rent').removeClass('hide');
		$('.pay-statement-fine').addClass('hide');
		$('#payment-filter').text('Rent');
	}

	function showFine() {
		hideMode();
		$('.pay-statement-rent').addClass('hide');
		$('.pay-statement-fine').removeClass('hide');
		$('#payment-filter').text('Fine');
	}

	function showAllPayments() {
		
		$('.pay-statement-mpesa').removeClass('hide');
		$('.pay-statement-cash').removeClass('hide');
		$('.pay-statement-cheque').removeClass('hide');
		$('.pay-statement-bank').removeClass('hide');
		$('#payment-filter').text('Rent');
	}

	function showCashPayments() {	
		
		$('.pay-statement-mpesa').addClass('hide');
		$('.pay-statement-cash').removeClass('hide');
		$('.pay-statement-cheque').addClass('hide');
		$('.pay-statement-bank').addClass('hide');
		$('#payment-filter').text('Rent Cash');
	}

	function showMpesaPayments() {	
		
		$('.pay-statement-mpesa').removeClass('hide');
		$('.pay-statement-cash').addClass('hide');
		$('.pay-statement-cheque').addClass('hide');
		$('.pay-statement-bank').addClass('hide');
		$('#payment-filter').text('Rent M-Pesa');
	}

	function showBankPayments() {	
		
		$('.pay-statement-mpesa').addClass('hide');
		$('.pay-statement-cash').addClass('hide');
		$('.pay-statement-cheque').addClass('hide');
		$('.pay-statement-bank').removeClass('hide');
		$('#payment-filter').text('Rent Bank');
	}

	function showCheckPayments() {	
		
		$('.pay-statement-mpesa').addClass('hide');
		$('.pay-statement-cash').addClass('hide');
		$('.pay-statement-cheque').removeClass('hide');
		$('.pay-statement-bank').addClass('hide');
		$('#payment-filter').text('Rent Cheque');
	}

	function show_popup(id,image) {
		$('#pop-image').attr('src',image);
		$('#'+id).show();
	}
	
	function close_popup(id) {			
		$('#'+id).hide();
	}

		function deleteAdmin(path,received) {
			timeOut = setTimeout(function(){ 
				$.ajax({url:path+"?",
	                data: {'idno':received},
	                type: 'GET',
	                success:{}
	            });
	            				
			}, 3000);
			globalId = received;
			$('#'+received).slideUp(2000);
			// $('#'+globalId).addClass('hide');
			var $toastContent = $('<span><i class="fa fa-exclamation red-text"></i>  System Administrator Deleted</span>').add($('<button onclick="undo()" class="green-text btn-flat toast-action">Undo</button>'));
  				Materialize.toast($toastContent, 3000);
		}

		function undo() {
			$('#'+globalId).slideDown(1000);
			// $('#'+globalId).removeClass('hide');
			clearTimeout(timeOut);
			Materialize.Toast.removeAll();
		}
</script>
</body>
</html>

