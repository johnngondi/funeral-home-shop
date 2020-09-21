<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Shop - E-Burol Dalisay Funeral Home</title>
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
			


			#recent-works .col-xs-12.col-sm-4.col-md-3{
			  padding: 0;
			}

			#recent-works{
			    padding-bottom: 70px;
			}

			.recent-work-wrap {
			  position: relative;
			}

			.recent-work-wrap img{
			  width: 100%;
			}

			.recent-work-wrap .recent-work-inner{
			  top: 0;
			  background: transparent;
			  opacity: .8;
			  width: 100%;
			  border-radius: 0;
			  margin-bottom: 0;
			}

			.recent-work-wrap .recent-work-inner h3{
			  margin: 10px 0;
			}

			.recent-work-wrap .recent-work-inner h3 a{
			  font-size: 24px;
			  color: #fff;
			}

			.recent-work-wrap .overlay {
			  position: absolute;
			  top: 0;
			  left: 0;
			  width: 100%;
			  height: 45%;
			  opacity: 0;
			  border-radius: 0;
			  background: #9c27b0;
			  color: #fff;
			  vertical-align: middle;
			   -webkit-transition: opacity 500ms;
			  -moz-transition: opacity 500ms;
			  -o-transition: opacity 500ms;
			  transition: opacity 500ms;  
			  padding: 5px;
			}

			.recent-work-wrap .overlay .preview {
			  bottom: 0;
			  display: inline-block;
			  height: 35px;
			  line-height: 35px;
			  border-radius: 0;
			  background: transparent;
			  text-align: center;
			  color: #fff;
			}

			.recent-work-wrap:hover .overlay {
			  opacity: 0.7;
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

			.disabled{
				border: none;
				background-color: #cdcdcd;
				pointer-events: none;
			}

			.category-heading {
				background:linear-gradient(90deg, transparent, white, rgb(254,78,218));
				color: white;
				padding: 3px 3px 3px 3px;
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
      .count {
          background-color: white;
          color: purple;
          border-radius: 50%;
          padding-left: 10px;
          padding-right: 10px;
          padding-top: 5px;
          padding-bottom: 5px;
          font-weight: bold;

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
		      	<li><a href="../gallery" ><i class="fa fa-image"></i> Gallery</a></li>
		        <li><a href="../obituaries" ><i class="fa fa-users"></i> Obituaries</a></li>
			<?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'): ?>	
		      	<li><a href="../cart" ><i class="fa fa-shopping-cart"></i> My Cart <span id="cart-count" class="count"><?php if ($cartCount>0) {echo $cartCount;} else {echo 0;}?></span></a></li>					
			<?php endif ?>

		       <?php if (isset($_SESSION['idno'])): ?>
		        <li><a href="../<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {echo "admin";} else {echo "home";} ?>" class="modal-trigger"><i class="fa fa-user"></i> My Account</a></li>
		        <li><a href="../logout"><i class="fa fa-sign-out"></i> Logout</a></li>		        	
		       <?php else: ?>
		        <li><a href="../login?ret=gallery"><i class="fa fa-sign-in"></i> Login</a></li>	
		        	
		       <?php endif ?>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">		        
		      	<li><a href="../" ><i class="fa fa-home"></i> Home</a></li>
		      	<li><a href="../gallery" ><i class="fa fa-image"></i> Gallery</a></li>
		        <li><a href="../obituaries" ><i class="fa fa-users"></i> Obituaries</a></li>
			<?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'): ?>	
		      	<li><a href="../cart" ><i class="fa fa-shopping-cart"></i> My Cart <span id="cart-count" class="count"><?php if ($cartCount>0) {echo $cartCount;} else {echo 0;}?></span></a></li>					
			<?php endif ?>
			
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
			<?php if ($categories): ?>
			<ul class="tabs tabs-fixed-width" style="background-color: transparent; color: white;">				
				<?php foreach ($categories as $category): ?>
					<li class="tab col s3"><a style="font-size: 1.4em; color: white;" class="waves-effect waves-purple hoverable" href="#<?=$category['id']?>"> <?=ucwords($category['title'])?></a></li>
				<?php endforeach ?>

			</ul>

			<!-- Start of category tab -->
			<?php foreach ($categories as $category): ?>
			<div id="<?=$category['id']?>" class="col s12">
				 <?php
				 	$type = $category['title'];
					$products = getAllAvailableProps($conn," AND type = \"$type\" AND state <> 2");
				 ?>

				<?php if (($category['title'] == 'casket' || $category['title'] == 'caskets' || $category['title'] == 'coffin' || $category['title'] == 'coffins') && $products): ?>

					<?php if ($colors): ?>
						<p class="center-align white-text">Filter by color</p>
						<p class="center-align" style="">
							<span class="waves-effect waves-light hoverable tooltipped" data-position="top" data-delay="1" data-tooltip="Show all <?=$category['title']?>s." style="cursor: pointer; margin-right: 10px; margin-bottom: 10px; background-color: white; border-radius: 20px; padding: 5px 5px 5px 5px;" onclick="toggleColor('all')"> <span style=""><img src="../images/icons/wheel.png" height="22px" width="22px" style="margin-bottom: -4px;"></span> All Colors</span>
							<?php foreach ($colors as $color): ?>
							<span class="waves-effect waves-light hoverable tooltipped" data-position="top" data-delay="1" data-tooltip="Only show <?=ucwords($color['colorName'])?> <?=$category['title']?>s." style="cursor: pointer; margin-right: 10px; margin-bottom: 10px; background-color: white; border-radius: 20px; padding: 5px 10px 5px 10px;" onclick="toggleColor('<?=str_replace('#', '', $color['colorCode'])?>')"><span style="padding-top: 5px; padding-bottom: 5px; padding-left: 10px; border: solid 1px #dfdfdf; padding-right: 10px; border-radius: 50%; background-color: <?=$color['colorCode']?>; color: <?=$color['colorCode']?>">0</span> <?=ucwords($color['colorName'])?></span>						
							<?php endforeach ?>	
						</p>
					
					<?php endif ?>

				<?php endif ?>
				<?php if ($products): ?>
					<?php foreach ($products as $product): ?>

						<?php

							$myColors = explode(',', $product['colors']);

						?>
								
						<div class="col m12 l6 all <?=str_replace(',', ' ', str_replace('#', '', $product['colors']))?>">
						 	<div class="card sticky-action large" style="overflow: hidden;">
					            <div id="prod-image-<?=$product['id']?>" class="card-image waves-effect waves-block waves-purple animated">
					                <img id="card-image1-<?=$product['id']?>" class="activator animated" src="../images/bg/<?=$product['front_view']?>">
					            </div>
					            <div class="card-content">
					                <span class="card-title activator purple-text text-darken-4"><?=ucwords($product['title'])?><i class="fa fa-chevron-up right" style="color: #9c27b0;"></i></span>

					                <p class="activator purple-text" style="cursor: pointer; color: #9c27b0;">Click to show more</p>
					                <p><?=ucfirst($product['description'])?></p> <br>
					            </div>

					             <div class="card-action">
					             	<h5 style=" padding-bottom: -15px; margin-bottom: -20px; margin-top: -10px;" class="purple-text text-darken-4 left">PHP. <?=number_format($product['price'],0,".",",")?> / <?=ucwords($product['unit'])?><br><span class="orange-text" style="font-size: 0.5em;"><?=$product['stock']?> Items in Stock.</span></h5>

					             	<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
					             		<a id="rent-btn-<?=$product['id']?>" class="btn-flat purple waves-effect white-text waves-light right disabled" href="javascript:addToCart('<?=$product['id']?>')">Admin can't buy! <i class="fa fa-warning-triangle"></i></a>
					             	<?php else: ?>
					             		<?php if ($product['stock']<1): ?>
					             			<a id="rent-btn-<?=$product['id']?>" class="btn-flat purple waves-effect white-text waves-light right disabled" href="javascript:addToCart('<?=$product['id']?>')">Sold Out! Check back later. <i class="fa fa-warning-triangle"></i></a>
					             		<?php else: ?>
					             			<a id="rent-btn-<?=$product['id']?>" class="btn-flat purple waves-effect white-text waves-light right" href="javascript:addToCart('<?=$product['id']?>')"><i class="fa fa-shopping-cart"></i> Add to Cart!</a>
					             		<?php endif ?>
					                	
					             		
					             	<?php endif ?>

					             </div>

					             <div class="card-reveal" style="display: none; transform: translateY(0px); padding-bottom: 150px;">
					                <span class="card-title gray-text text-darken-4 center-align" style=""><?=ucwords($product['title'])?><i class="fa fa-chevron-down right" style="color: #9c27b0;"></i></span>
					                <div class="col s12 hide-print">
									  <ul class="tabs tabs-fixed-width">
									    <li class="tab col s6"><a style="font-size: 90%;" class="waves-effect waves-teal hoverable" href="#info_<?=$product['id']?>"><i class="fa fa-info-circle"></i> <span>Info</span></a></li>

									    <li class="tab col s6"><a style="font-size: 90%;" class="waves-effect waves-teal hoverable" href="#images_<?=$product['id']?>"><i class="fa fa-picture-o"></i> <span>Images</span></a></li>
									  </ul>
									</div>

									<!-- Start of Info tab -->
								    <div id="info_<?=$product['id']?>" class="col s12 center-align">

								    	<h5 id="desc-heading" class="purple-text"><?=ucwords($product['title'])?></h5>
										<h5 id="desc-location" style="font-size: 95%;">
											<br>
											Price
										<h5 id="desc-price" class="purple-text">
											<b>PHP. <?=number_format($product['price'],0,".",",")?></b> per <?=ucwords($product['unit'])?>									
										</h5>
										<h6 id="desc-desc" class=""><?=ucfirst($product['description'])?>
										</h6>
										<?php if ($product['colors'] != ''): ?>											
											<h5 class="center-align">Available Colors</h5>
											<p class="center-align" style="">
												<span class="" style=" margin-right: 2px; margin-bottom: 30px; background-color: white; border-radius: 20px; padding: 5px 5px 5px 5px;" onclick="toggleColor('all')">Custom</span>
												<?php foreach ($myColors as $myColor): ?>
												<span style="padding-top: 5px; padding-bottom: 5px; padding-left: 10px; border: solid 1px #dfdfdf; padding-right: 10px; border-radius: 50%; margin-right: 2px; margin-bottom: 30px; background-color: <?=$myColor?>; color: <?=$myColor?>">0</span>						
												<?php endforeach ?>	
											</p>
											<p>Once you visit the shop for pickup you'll take your preffered color.</p>
										<?php endif ?>
								    </div>
								    <!-- end of Info tab -->

									<!-- Start of Images tab -->
								    <div id="images_<?=$product['id']?>" class="col s12">
								    	<div class="portfolio-items" style="border-bottom: 3px white solid;">
						                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3">
						                        <div class="recent-work-wrap">
						                            <img class="responsive-img" src="../images/bg/<?=$product['front_view']?>" alt="">
						                            <a style="cursor: zoom-in;"  href=" javascript:show_popup('../images/bg/<?=$product['front_view']?>')" rel="prettyPhoto" target="_blank">
							                            <div class="overlay">
							                                <div class="recent-work-inner">
							                                    <h6 style="font-size: 150%;">Front View</h6><h6>Click to zoom</h6>
							                                    
							                                </div>
							                            </div>
							                        </a>
						                        </div>          
						                    </div><!--/.portfolio-item-->
						                </div>

								    	<div class="portfolio-items" style="border-bottom: 3px white solid;">
						                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3">
						                        <div class="recent-work-wrap">
						                            <img class="responsive-img" src="../images/bg/<?=$product['interior_view']?>" alt="">
						                            <a style="cursor: zoom-in;"  href=" javascript:show_popup('../images/bg/<?=$product['interior_view']?>')" rel="prettyPhoto" target="_blank">
							                            <div class="overlay">
							                                <div class="recent-work-inner">
							                                    <h6 style="font-size: 150%;">Interior View</h6><h6>Click to zoom</h6>
							                                    
							                                </div>
							                            </div>
							                        </a>
						                        </div>          
						                    </div><!--/.portfolio-item-->
						                </div>

								    	<div class="portfolio-items" style="border-bottom: 3px white solid;">
						                    <div class="portfolio-item col-xs-12 col-sm-4 col-md-3">
						                        <div class="recent-work-wrap">
						                            <img class="responsive-img" src="../images/bg/<?=$product['aerial_view']?>" alt="">
						                            <a style="cursor: zoom-in;"  href=" javascript:show_popup('../images/bg/<?=$product['aerial_view']?>')" rel="prettyPhoto" target="_blank">
							                            <div class="overlay">
							                                <div class="recent-work-inner">
							                                    <h6 style="font-size: 150%;">Aerial View</h6><h6>Click to zoom</h6>
							                                    
							                                </div>
							                            </div>
							                        </a>
						                        </div>          
						                    </div><!--/.portfolio-item-->
						                </div>
								    </div>
								    <!-- end of Images tab -->
					            </div>

					         </div>
					        <script>
					        	$(document).ready(function() {

					        		changeCardImage1_<?=$product['id']?>();
					        	});
					        	function changeCardImage1_<?=$product['id']?>() {
									var images_<?=$product['id']?> = [];
									images_<?=$product['id']?>[0] = "../images/bg/<?=$product['front_view']?>";
									images_<?=$product['id']?>[1] = "../images/bg/<?=$product['interior_view']?>";
									images_<?=$product['id']?>[2] = "../images/bg/<?=$product['aerial_view']?>";
									var i_<?=$product['id']?> = 0;
									var maxI_<?=$product['id']?> = images_<?=$product['id']?>.length;
									setInterval(function() {
										$('#card-image1-<?=$product['id']?>').prop("src",images_<?=$product['id']?>[i_<?=$product['id']?>]);
										$('#prod-image-<?=$product['id']?>').addClass('pulse');
										i_<?=$product['id']?>++
										if (i_<?=$product['id']?>==maxI_<?=$product['id']?>) {
											i_<?=$product['id']?>=0;
										}
										$('#prod-image-<?=$product['id']?>').removeClass('pulse');
									},1500);

								} 
					        </script>
						</div>
					<?php endforeach ?>
				<?php else: ?>
					<h5 class="white-text center-align"><span>There are no <?=ucwords($category['title'])?> available.</span> <br> Check back later.</h5>
				<?php endif ?>
			</div>	
				
			<?php endforeach ?>		
			<!-- End of categories tab -->
			<?php else: ?>
				<h5>The shop is flushed.</h5>
			<?php endif ?>



		</div>

		<!-- Modal Structure -->
		<div id="popup_upload">
	        <div class="form_upload">
	        	<div class="hide-on-med-and-down">
	        		<span style="position: fixed; cursor: pointer; z-index: 9999999; font-size:500%; padding-top: -10px; background-color: transparent; color: red;" class="close" onclick="close_popup('popup_upload')"><i class="fa fa-times right"></i></span>
	        	</div>

	        	<div class="hide-on-large-only">
	        		<span style="position: fixed right; cursor: pointer; z-index: 9999999; font-size:500%; padding-top: -10px; background-color: transparent; color: red;" class="close" onclick="close_popup('popup_upload')"><i class="fa fa-times right"></i></span>
	        		
	        	</div>
	        	<div>
	            	<img id="pre-image" src="" class="responsive-img">
	        	</div>
	            
	            	
	        </div>
	    </div>
   
	<!-- End of modal structure -->	

	<!-- Modal Structure -->
		<!-- <div id="popup_crop">
	        <div class="row container" style="margin-top: 5%; background-color: #fff; border-radius: 10px;">
         		hello
	        </div>
	    </div> -->
	<!-- End of modal structure -->	

<div id="preview"></div>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>

	<script type="text/javascript">
		

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

		// show_popup : show the popup
		function show_popup(img) {
		
			$('#popup_upload').show();
			$('#pre-image').prop("src",img)
		}

		// close_popup : close the popup
		function close_popup(id) {
			// hide the popup
			$('#'+id).hide();
		}

		function addToCart(propId) {
			
			 $('#rent-btn-'+propId).addClass('disabled');
			 $('#rent-btn-'+propId).html("Adding! Please wait... <i class='circular fa fa-spinner purple-text'></i>");
			
			$.ajax({
				url:"../add_to_cart.php",
			    data: {'prod_id':propId},
			    type: 'POST',
			    success: function(response) {
			        $('#preview').html(response);

			        if (status == 'os') {
			        	$('#rent-btn-'+propId).html("<i class='fa fa-exclamation-triangle orange-text'></i> Out of Stock!");
			        } else {
			        	$('#rent-btn-'+propId).html("<i class='fa fa-shopping-cart'></i> Add to Cart!");
			 			$('#rent-btn-'+propId).removeClass('disabled');
			        }
			    }
			});
		}
  	
    function toggleColor(what) {
        if (what == 'all') {
            $('.all').removeClass('hide');
        } else {
            $('.all').addClass('hide');
            $('.'+what).removeClass('hide');
        }
    }

	</script>
	</body>
</html>