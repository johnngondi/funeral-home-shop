<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <meta name="msapplication-tap-highlight" content="no"> 
	    <meta name="description" content=" ">
	    <title>Obituaries - E-Burol Dalisay Funeral Home</title>
	<link href="../css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
		<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
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

			.popup {
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
		      	<li><a href="../shop" ><i class="fa fa-bank"></i> Shop</a></li>
			<?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'): ?>	
		      	<li><a href="../cart" ><i class="fa fa-shopping-cart"></i> My Cart <span class="count"><?php if ($cartCount>0) {echo $cartCount;} else {echo 0;}?></span></a></li>					
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
		      	<li><a href="../shop" ><i class="fa fa-bank"></i> Shop</a></li>
			<?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'): ?>	
		      	<li><a href="../cart" ><i class="fa fa-shopping-cart"></i> My Cart <span class="count"><?php if ($cartCount>0) {echo $cartCount;} else {echo 0;}?></span></a></li>					
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

		<div class="row " style="margin-bottom: 160px; margin-top: 100px; padding-top: 30px;">
		
		<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>

			<div class="row container center-align white-text">
				<h5>Add New Obituary</h5>
				<p>To add a New Obituary, click the button below.</p>

				<button onclick="show_popup('popup-new-ob')" class="btn white purple-text waves-effect waves-purple"><i class="fa fa-plus-circle"></i> Add New Obituary</button><br><br>
				<hr>
				<h4 class="white-text">Existing Obituaries</h4>
			</div>	
			
		<?php endif ?>

			<div class="row" style="padding-left: 3%; padding-right: 3%;">

			<?php if ($obits): ?>
				<?php foreach ($obits as $obit): ?>
				<div class="col s12 m6 l6 xl4 animated fadeInRight">
			      <div class="card">
			        <div class="card-image">
			          <img src="../images/obits/<?php 
			          	if ($obit['photo'] == '') {
			          		echo "avatar.png";
			          	} else {
			          		echo $obit['photo'];
			          	}
			           ?>">
			          <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
			          	<a href="?act=del&id=<?=$obit['id']?>" class="btn-floating btn-large halfway-fab waves-effect waves-light red tooltipped" data-position="bottom" data-delay="50" data-tooltip="Delete Obituary"><i class="fa fa-trash"></i></a>
			          <?php endif ?>
			          
			        </div>
			        <div class="card-content">
			          <span class="card-title center-align"><?=ucwords($obit['name'])?></span><br>
			          <div class="row">
			          	<div class="col s6 center-align">
			          		<p><b>Sunrise</b></p>
			          		<p><?=date("M d, Y", strtotime($obit['dob']))?></p>
			          	</div>
			          	<div class="col s6 center-align">
			          		<p><b>Sunset</b></p>
			          		<p><?= date("M d, Y", strtotime($obit['dod']))?> <br> (<?=$obit['dod'] -$obit['dob']?> Years)</p>
			          	</div>
			          	
			          </div>
			          <p><?=ucfirst($obit['obitDesc'])?>.</p>
			        </div>
			      </div>
			    </div>					
				<?php endforeach ?>
			<?php else: ?>
				<h5 class="center-align white-text">No Obituaries.</h5>
			<?php endif ?>

			</div>


		</div>

		<!-- Modal Structure -->
		<div id="popup-new-ob" class="popup">
	        <div class="row container">
	        	<div class="col m1 l1"></div>
	            <div class="col m10 l10 white" style="padding: 10px 10px 10px 10px; margin-top: 10%; border-radius: 10px;">
	            	<span onclick="close_popup('popup-new-ob')" style="cursor: pointer; font-size: 1.5em;" class="right-align right"><i class="fa fa-times-circle red-text"></i></span>


	            	<h5 class="center-align">Add New Obituary</h5><br>

	            		<div class="row">
	            			<div class="col m3 l3 xl4"></div>
	            			<div class="col s12 m6 l6 xl4">
	            				<div id="front-view-image-div" class="dpic" style="height: 200px; cursor: pointer;">
									<div class="top-pane-header purple white-text" style="padding-bottom: 5px;">
									 	<i class="fa fa-image"></i> Passport Photo
									</div>
									<div id="image1" class="hide" style="margin-top: 6px;">
										<img id="image1img" src="../images/obits/avatar.png" class="responsive-image" height="155px">
									</div>
									<div id="image1add" class="purple-text" style="font-size: 3em; font-weight: bold;">
										<h1><i class="fa fa-camera"></i></h1>
										<h6>Click to add image</h6>
									</div>	
								</div>
								<progress  id="front-view-image-prog" max="100" value="0" style="display:none;"></progress>

								<form method="POST" action="front_view_upload_image.php" id="front-view-image" enctype="multipart/form-data">
									
									 <input type="file" name="front-view-image-file" class="hide" id="front-view-image-file" accept="image/*" required>
									 <button type="button" id="front-view-image-form-btn" class="btn-flat purple white-text hide" onclick="uploadImage('front-view-image')">Set Image</button>
								</form>

	            			</div>
	            			<div class="col m3 l3 xl4"></div>
	            		</div>

	            	<form action="" method="POST">

	            		<div class="row" style="padding: 20px 20px 20px 20px;">
	            			<input id="photo" type="text" name="photo" value="" class="hide">
	            			<div class="input-field col s12 m4">
								<input id="name" type="text" class="validate" name="name" required>
								<label for="name">Full Name</label>
							</div>

	            			<div class="input-field col s12 m4">
								<input id="dob" type="text" class="datepicker" name="dob" required>
								<label for="dob">Date of Birth</label>
							</div>
	            		
	            			<div class="input-field col s12 m4">
								<input id="dod" type="text" class="datepicker" name="dod" required>
								<label for="dod">Date of Death</label>
							</div>
	            			
	            		</div>

	            		<div class="row" style="padding: 20px 20px 20px 20px;">
	            			<div class="input-field col s12 m6">
	            				<textarea id="desc" name="desc" class="materialize-textarea validate" data-length="500" required></textarea>
            					<label for="desc">Description</label>
	            			</div>

	            			<div class="input-field col s12 m6 center">
	            				<button class="btn purple white-text waves-effect waves-light"><i class="fa fa-check-circle"></i> Add Obituary</button>
	            			</div>
	            			
	            		</div>

	            		
	            	</form>

	            </div>
	        	<div class="col m1 l1"></div>
	            	
	        </div>
	    </div>
   
	<!-- End of modal structure -->	

	<!-- Modal Structure -->
		
	<!-- End of modal structure -->	

<div id="preview"></div>
    <script src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script src="../js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="../js/jquery.form.js"></script>

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


              $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 35, // Creates a dropdown of 100 years to control year,
                    today: 'Today',
                    max : new Date(),
                    clear: 'Clear',
                    format: 'yyyy-mm-dd',
                    close: 'Ok',
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
					
		});

		// show_popup : show the popup
		function show_popup(id) {
		
			$('#'+id).show();
		}

		// close_popup : close the popup
		function close_popup(id) {
			// hide the popup
			$('#'+id).hide();
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
  

	</script>
	</body>
</html>