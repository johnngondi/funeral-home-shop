
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register |  E-Burol Dalisay Funeral Home</title>

    <!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/jquery.Jcrop.min.css" rel="stylesheet"/>
    <link href="../css/materialize.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/style_3.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript">

  

</script>
<style type="text/css">


</style>
</head><!--/head-->

<body>

    

    <section>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-sm-12">
            <?php if (!isset($_GET['ok'])): ?>

                <div id="start" class="box text-center animated flipInY">                
                    <p><img src="../images/logo.png" alt="logo - Interior Design"></p>
                    <h1>Welcome to E-Burol Dalisay Funeral Home</h1>
                    <h2>We are pleased to see you here.</h2>
                    <h3>By registering, you agree to our <a href="../terms" target="_blank">Terms and Conditions <i class="fa fa-external-link"></i></a> and our <a href="../privacy" target="_blank">Privacy Policy <i class="fa fa-external-link"></i></a></h3>
                    <h3>To Register, click on the button below or wait for <span id="timer">20</span> Seconds 
                        <br>
                        <i class="fa fa-hand-o-down"></i>
                    </h3>
                    <p><button class="btn-apply-big" onclick="start()">Start Registration</button></p>
                    <p>Alredy a Customer?</p>
                    <a href="../login" class="btn-login" > <i class="fa fa-sign-in"></i> Login</a></p>
                </div>

                <div id="register" class="box text-center hidden animated"> 
                    <div id="reg-navi" class="row text-center">
                        <h6>Register here. Already a Customer? <a href="../login" class="btn-login" > Login <i class="fa fa-sign-in"></i> </a></p></h6><br>
                        <hr style=" margin-top: -5px; margin-bottom: -20px;">
                    </div>
                          
                    <form name="reg-form" method="POST" id="reg-form" action="reg_user.php" >     
                        <div id="p-details" class="animated">
                            <div class="col-md-12" style="padding-top: 0px;">                                
                                <h2>Personal Details</h2>
                            </div>
                            <div class="container">
                                <div class="input-field col-md-6 col-sm-6">
                                  <input id="idno" name="idno" type="number" onblur="validateIDNo()">
                                  <label id="lb-idno" for="idno">National ID/Birth Certificate/Passport Number</label>
                                  <p id="err-idno" style="margin-top: -20px;">This number is very important since its the identifier of the customer.</p>
                                </div> 

                                <div class="input-field col-md-6 col-sm-6">
                                 <input id="dob" name="dob" type="text" class="datepicker" onchange="validateDOB()" onblur="">
                                <label id="lb-dob" for="dob">Date of Birth</label>
                                  <p id="err-dob" style="margin-top: -20px;"></p>
                                </div> 
                            </div>

                            <div class="container">
                                <br>
                                 <div class="center-align col-md-6 col-sm-6">
                                    <p id="lb-gen" class="center-align">Select Gender</p>
                                      <input name="gender" type="radio" id="male" value="male" onchange="validateGender()">
                                    <label for="male">Male</label>
                                    <input name="gender" type="radio" id="female" value="female" onchange="validateGender()">
                                    <label for="female">Female</label>
                                  <p id="err-gen" style="margin-top: -5px; text-align: center;"></p>
                                </div>

                                <div class="input-field col-md-6 col-sm-6">
                                  <input id="sname" name="occupation" type="text" onblur="validateSName()" onkeyup="validateSName()" >
                                  <label id="lb-sname" for="sname">Occupation</label>
                                  <p id="err-sname" style="margin-top: -20px;"></p>
                                </div> 
                            </div>

                            <div class="container">
                                <div class="input-field col-md-6 col-sm-6">
                                  <input id="fname" name="first-name" type="text" onblur="validateFName()" onkeyup="validateFName()" >
                                  <label id="lb-fname" for="fname">First Name</label>
                                  <p id="err-fname" style="margin-top: -20px;"></p>
                                </div>  

                                <div class="input-field col-md-6 col-sm-6">
                                  <input id="lname" name="last-name" type="text" onblur="validateLName()" onkeyup="validateLName()" >
                                  <label id="lb-lname" for="lname">Last Name</label>
                                  <p id="err-lname" style="margin-top: -20px;"></p>
                                <br><br>
                                </div>                                 
                            </div>

                            <div class="container">
                                <div class="input-field col-md-6 col-sm-6">
                                  <input id="phone" name="phone" type="text" onblur="validatePhone()">
                                  <label id="lb-phone" for="phone">Enter Phone Number</label>
                                  <p id="err-phone" style="margin-top: -20px;"></p>
                                </div> 

                                <div class="input-field col-md-6 col-sm-6">
                                 <input id="email" name="email" type="text" class="" onblur="validateEmail()">
                                <label  id="lb-email" for="email">Enter Email Address</label>
                                  <p id="err-email" style="margin-top: -20px;"></p>
                                  <br><br>
                                </div> 
                            </div>

                          

                            <div class="container">
                                <div class="input-field col-md-6 col-sm-6">
                                  <input id="password" name="password" type="password" onblur="validatePassword()" onfocus="showPassSt()" onkeyup="passStrength ()" >
                                  <label id="lb-password" for="password">Enter Password</label>
                                  <p id="err-password" style="margin-top: -20px;"></p>
                                    <div id="pass-strength" class=" hidden">
                                   
                                        <div class="progress">
                                              <div id="prog" class="progress-bar progress-bar-striped active" role="progressbar"
                                              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                                <span style="font-size: 1.3em;" id="text-val"></span>
                                              </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="input-field col-md-6 col-sm-6">
                                  <input id="repass" name="repass" type="password" onblur="validateRepass()" onkeyup="validateRepass()" >
                                  <label id="lb-repass" for="repass">Confirm Password</label>
                                  <p id="err-repass" style="margin-top: -20px;"></p>
                                </div>
                                 
                            </div> 

                            <div class="container">
                                    <br>
                                <button id="save" class="btn-apply-big right" >Register <i class="fa fa-check"></i></button><br><br><br>
                            </div>

                                                                      
                        </div>  <!-- Personal Details End here -->                                         
                    </form>

                </div> <!-- Registration ends here.-->

                <div  id="registering" class="box text-center <?php if (isset($_GET['ppic'])){echo('hidden');}?> hidden animated">
                    <div class="row" style="margin-top: 100px;">
                      <ul>
                        <li id="red" class=" traffic-light red-border"></li>
                        <li id="amber" class=" traffic-light amber-border"></li>
                        <li id="green" class=" traffic-light green-border"></li>
                      </ul>
                    </div>

                    <div class="row" >
                        <h1 class="fore-color">Registering you.</h1>
                        <h3 class="fore-color">Please wait..</h3>
                    </div>
                      
                </div> <!-- Registering ends here-->

            <?php endif ?>

                <div  id="img-upload" class="box hidden text-center animated">
                    <div class="row">
                        <h2 class="fore-color"><i style="font-size: 200%;" class="fa fa-check green-text large-text"></i><br>
                        You have been Registered Succesfully.</h2>
                        <h6 id="prompt-1" class="fore-color">Now upload you Display Picture to complete Registration</h6>
                    </div>

                    <div class="row">
                      <img id="dpic" onclick="show_popup('popup_upload')" 
                      <?php 
                        if (isset($_GET['ppic'])) {
                          echo "src='".$_GET['ppic']."'";
                        } else {
                          echo "src='../images/profile/avatar.png'";
                        } 
                       ?> width="200px" height="200px;" class="dpic tooltipped" data-position="top" data-delay="1" data-tooltip="Click to select and Crop your Photo.">

                    </div>

                    
                    <br>
                      <a id="course" class="btn-apply-big hidden" href="../login">Finalize Registration</a>
                </div>

                <!-- The popup for upload new photo -->
                    <div id="popup_upload">
                        <div id="upload-img" class="form_upload">
                            <span class="close" onclick="close_popup('popup_upload')">x</span>
                            <h2>Click to Select Photo</h2>
                             <div style="width: 150; height: 150; font-size: 4em; text-align: center; vertical-align: middle; cursor: pointer;" onclick="openFile();"><i class="fa fa-plus"></i></div>
                            <form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
                             
                              <!-- hidden crop params -->
                              <input type="hidden" id="x1" name="x1" />
                              <input type="hidden" id="y1" name="y1" />
                              <input type="hidden" id="x2" name="x2" />
                              <input type="hidden" id="y2" name="y2" />
                              <div><input type="file" class="hidden" name="image_file" id="image_file" onchange="fileSelectHandler()" /></div>

                              <div class="error"></div>
                            </form>
                        </div>
                        <div class="center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                              
                            <div class="step2" id="step2">
                                <h4 class="hidden" id="prompt">Select the area to crop</h4>
                                 <p class="text-center"><img id="preview" /></p> 

                                  <input form="upload_form" class="hidden" type="text" id="filesize" name="filesize" />
                                  <input form="upload_form" class="hidden" type="text" id="filetype" name="filetype" />
                                  <input form="upload_form" class="hidden" type="text" id="filedim" name="filedim" />
                                  <input form="upload_form" class="hidden" type="text" id="w" name="w" />
                                  <input form="upload_form" class="hidden" type="text" id="h" name="h" />
                               </div>
                                  <button class="hidden tooltipped" data-position="top" data-delay="1" data-tooltip="Click to upload the Cropped Photo." form="upload_form" id="submit-img"><i class="fa fa-check"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                  <button class="hidden tooltipped" data-position="top" data-delay="1" data-tooltip="Click to change Photo." id="retry-img" onclick="replaceImage();"><i class="fa fa-repeat"></i></button> 
                        </div>

                             
                    </div>

                <div id="feedback"></div>
            </div>
            <div class="col-md-2"></div>
            
        </div>
    </section>

  

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/jquery.Jcrop.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/script_3.js"></script>
    <script src="../js/validate_2.js"></script>
    <script type="text/javascript">
      
        var timeOut;
        var timeOut2;
    </script>
    <?php 
      if (isset($_GET['ok'])) {
        echo "
          <script>
            var toastContent = \$('<span><i class=\"fa fa-check green-text\"></i> Profile Picture Uploaded Successfuly.</span>' );
            Materialize.toast(toastContent, 3000);
            \$('#img-upload').removeClass('hidden');
            \$('#course').removeClass('hidden');
            timeOut = setTimeout(function(){
              clearTimeout(timeOut);
            },1000);
            \$('#prompt-1').text('Profile picture uploaded. To change, click on the image below.');
            \$('#prompt-1').addClass('green-text');
            \$('#prompt-1').removeClass('fore-color');
          </script>
        ";
      } elseif (isset($_GET['err'])) {
        echo "
          <script>
            var toastContent = \$('<span><i class=\"fa fa-exclamation red-text\"></i> Error Uploading Display Picture.</span>' );
            Materialize.toast(toastContent, 3000);
            \$('#prompt-1').text('Error while uploading profile picture. To change, click on the image below.');
            \$('#prompt-1').addClass('red-text');
            \$('#prompt-1').removeClass('fore-color');
          </script>
        ";
      }
    ?>
    <script type="text/javascript"> 

        function openFile() {

          $("#image_file").trigger("click");
        }

        function replaceImage() {
          var file = $('#image_file');
          file.replaceWith(file.val('').clone(true));        
          $('#step2 img').remove();        
          $('#step2').append("<img id='preview'/>");  
          $("#image_file").trigger("click");
        }
      
      <?php if (!isset($_GET['ok'])): ?>
            function showPassSt() {
                $('#pass-strength').removeClass('hidden');
            }
            function hidePassSt() {
                $('#pass-strength').addClass('hidden');
            }
            function passStrength () {
                var password = document.getElementById('password').value;
                if (password.length < 3) {
                    $('#prog').css('background-color','#ff0000');
                    $('#prog').css('width','10%');
                    document.getElementById('text-val').innerHTML = "Poor.";

                } else if (password.length < 6){
                    $('#prog').css('background-color','#FF3300');
                    $('#prog').css('width','20%');
                    document.getElementById('text-val').innerHTML = "Very Weak.";

                } else if (password.length < 8){
                    $('#prog').css('background-color','#FF9900');
                    $('#prog').css('width','35%');
                    document.getElementById('text-val').innerHTML = "Weak.";

                } else if (password.length < 10){
                    $('#prog').css('background-color','#99CC00');
                    $('#prog').css('width','55%');
                    document.getElementById('text-val').innerHTML = "<b>Okay but not Strong.</b>";

                } else if (password.length < 13){
                    $('#prog').css('background-color','#66FF33');
                    $('#prog').css('width','65%');
                    document.getElementById('text-val').innerHTML = "Better";

                }
            }
        
            function reg() {
              var i = 0;
              timeOut = setInterval( function() {
                if (i == 0) {
                  i++;
                    $('#red').addClass('red');
                    $('#amber').removeClass('amber');
                    $('#green').removeClass('green');

                } else if (i == 1) {
                  i++;
                    $('#red').removeClass('red');
                    $('#amber').addClass('amber');
                    $('#green').removeClass('green');

                } else if (i == 2) {
                    $('#red').removeClass('red');
                    $('#amber').removeClass('amber');
                    $('#green').addClass('green');
                  
                  i = 0;
                }
              },500);
            }

        $(document).ready(function() {
                $(document).ready(function() {
                    $('select').material_select();
                });
            
              $("#reg-form").submit(function() {
                  if (checkPDetails()) {
                    
                    reg();
                    $('#registering').removeClass('hidden');
                    $('#registering').addClass('bounceInDown');
                    $("#register").addClass("hidden");


                    $.post($(this).attr("action"), $(this).serialize(), function(data) {
                        $("#feedback").html(data);
                    });
                  }

                    return false; // prevent normal submit
              });
              var now = new Date();
              var date = new Date();
              date.setYear(now.getFullYear() - 16);

              $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 35, // Creates a dropdown of 100 years to control year,
                    today: 'Today',
                    max : date,
                    clear: 'Clear',
                    close: 'Ok',
                    cancel: 'Cancel',
                    closeOnSelect: false // Close upon selecting a date,
                });

              time = 20;
              timeOut2 = setInterval(function() {
                time--;
                $('#timer').text(time);
               
              },1000);

            timeOut = setTimeout(function() {

                start();
            }, 20000);
         });

            function start() {
                clearTimeout(timeOut);
                clearTimeout(timeOut2);
                 $('#start').addClass('slideOutUp');
                 timeOut = setTimeout(function() {
                     $('#start').addClass('hidden');
                     $('#register').removeClass('hidden');
                     $('#register').addClass('slideInLeft');

                 }, 1000);
            }

           

            function checkPDetails() {
                return pDetails();
                // $('#p-details-icon').removeClass('fore-color');
                // $('#p-details-icon').removeClass('fa-ellipsis-h');

                // if (pDetails()) {
                //     $('#p-details-icon').removeClass('fa-times');
                //     $('#p-details-icon').removeClass('red-text');
                //     $('#p-details-icon').addClass('fa-check');
                //     $('#p-details-icon').addClass('green-text');
                //     $('#p-details-radio').removeClass('red-border');
                //     $('#p-details-radio').removeClass('gray-border');
                //     $('#p-details-radio').addClass('green-border');

                //     return true;

                // } else {
                //     $('#p-details-icon').removeClass('fa-check');
                //     $('#p-details-icon').removeClass('green-text');
                //     $('#p-details-icon').addClass('fa-times');
                //     $('#p-details-icon').addClass('red-text');
                //     $('#p-details-radio').removeClass('gray-border');
                //     $('#p-details-radio').removeClass('green-border');
                //     $('#p-details-radio').addClass('red-border');

                //     return false;

                // }
            }

            // function checkRDetails() {
            //     $('#r-details-icon').removeClass('fore-color');
            //     $('#r-details-icon').removeClass('fa-ellipsis-h');

            //     if (rDetails()) {
            //         $('#r-details-icon').removeClass('fa-times');
            //         $('#r-details-icon').removeClass('red-text');
            //         $('#r-details-icon').addClass('fa-check');
            //         $('#r-details-icon').addClass('green-text');
            //         $('#r-details-radio').removeClass('red-border');
            //         $('#r-details-radio').removeClass('gray-border');
            //         $('#r-details-radio').addClass('green-border');

            //         return true;

            //     } else {
            //         $('#r-details-icon').removeClass('fa-check');
            //         $('#r-details-icon').removeClass('green-text');
            //         $('#r-details-icon').addClass('fa-times');
            //         $('#r-details-icon').addClass('red-text');
            //         $('#r-details-radio').removeClass('gray-border');
            //         $('#r-details-radio').removeClass('green-border');
            //         $('#r-details-radio').addClass('red-border');

            //         return false;

            //     }
            // }

            // function checkCDetails() {
            //     $('#c-details-icon').removeClass('fore-color');
            //     $('#c-details-icon').removeClass('fa-ellipsis-h');

            //     if (cDetails()) {
            //         $('#c-details-icon').removeClass('fa-times');
            //         $('#c-details-icon').removeClass('red-text');
            //         $('#c-details-icon').addClass('fa-check');
            //         $('#c-details-icon').addClass('green-text');
            //         $('#c-details-radio').removeClass('red-border');
            //         $('#c-details-radio').removeClass('gray-border');
            //         $('#c-details-radio').addClass('green-border');

            //         return true;

            //     } else {
            //         $('#c-details-icon').removeClass('fa-check');
            //         $('#c-details-icon').removeClass('green-text');
            //         $('#c-details-icon').addClass('fa-times');
            //         $('#c-details-icon').addClass('red-text');
            //         $('#c-details-radio').removeClass('gray-border');
            //         $('#c-details-radio').removeClass('green-border');
            //         $('#c-details-radio').addClass('red-border');

            //         return false;

            //     }
            // }

            function pDetails() {
                if (validateIDNo() & validateDOB() & validateGender() & validateSName() & validateFName() & validateLName() & validatePhone() & validateEmail() & validatePassword() & validateRepass()){

                    return true;
                    
                } else {

                    return false;

                }
            }        


            //Personal data fields validation
            function validateIDNo() {
                var idno = document.getElementById('idno').value;

                if (!isBlank(idno)) {
                    if (idno.length < 4 ) {
                        $('#err-idno').addClass('error-input');
                        $('#err-idno').text('The ID/Birth Certificate/Passport Number must be 4 or more characters.');
                        $('#lb-idno').addClass('error-input');
                        $('#idno').removeClass('ok-input');
                        $('#idno').addClass('error-input');
                        $('#idno').select();

                        return false;

                    } else {
                        $('#err-idno').text('');
                        $('#lb-idno').removeClass('error-input');
                        $('#idno').removeClass('error-input');
                        $('#idno').addClass('ok-input');
                        checkDuplicate('id',idno);
                        return true;
                    }

                } else {

                    $('#err-idno').addClass('error-input');
                    $('#err-idno').text('Enter ID/Birth Certificate/Passport Number.');
                    $('#lb-idno').addClass('error-input');
                    $('#idno').removeClass('ok-input');
                    $('#idno').addClass('error-input');

                    return false;
                }
            }

            function checkDuplicate(label,data) {
              if (label == 'id') {
                  $.ajax({url:"check_duplicate.php?",
                      data: {'id':data},
                      type: 'GET',
                      success: function(response) {
                        $('#feedback').html(response);
                      }
                  });

              } else if (label == 'phone') {
                  $.ajax({url:"check_duplicate.php?",
                      data: {'phone':data},
                      type: 'GET',
                      success: function(response) {
                        $('#feedback').html(response);
                      }
                  });

              } else if (label == 'email') {
                  $.ajax({url:"check_duplicate.php?",
                      data: {'email':data},
                      type: 'GET',
                      success: function(response) {
                        $('#feedback').html(response);
                      }
                  });
              }
                  
            }

            function validateDOB() {
                var dob = document.getElementById('dob').value;

                if (isBlank(dob)) {

                    $('#err-dob').addClass('error-input');
                    $('#err-dob').text('Select Date of Birth.');
                    $('#lb-dob').addClass('error-input');
                    $('#dob').removeClass('ok-input');
                    $('#dob').addClass('error-input');

                    return false;

                } else {

                    $('#err-dob').text('');
                    $('#lb-dob').removeClass('error-input');
                    $('#dob').removeClass('error-input');
                    $('#dob').addClass('ok-input');

                    return true;
                }
            }


            function validateSName() {
                var sname = document.getElementById('sname').value;

                if (isBlank(sname)) {

                    $('#err-sname').addClass('error-input');
                    $('#err-sname').text('Enter Occupation.');
                    $('#lb-sname').addClass('error-input');
                    $('#sname').removeClass('ok-input');
                    $('#sname').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(sname)) {

                        $('#err-sname').addClass('error-input');
                        $('#err-sname').text('Occupation should not have Numbers otherwise use romans e.g. II for 2.');
                        $('#lb-sname').addClass('error-input');
                        $('#sname').removeClass('ok-input');
                        $('#sname').addClass('error-input');

                        return false;

                    } else {

                        $('#err-sname').text('');
                        $('#lb-sname').removeClass('error-input');
                        $('#sname').removeClass('error-input');
                        $('#sname').addClass('ok-input');

                        return true;

                    }
                }
            }


            function validateFName() {
                var fname = document.getElementById('fname').value;

                if (isBlank(fname)) {

                    $('#err-fname').addClass('error-input');
                    $('#err-fname').text('Enter First Name.');
                    $('#lb-fname').addClass('error-input');
                    $('#fname').removeClass('ok-input');
                    $('#fname').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(fname)) {

                        $('#err-fname').addClass('error-input');
                        $('#err-fname').text('A Name should not have Numbers otherwise use romans e.g. II for 2.');
                        $('#lb-fname').addClass('error-input');
                        $('#fname').removeClass('ok-input');
                        $('#fname').addClass('error-input');

                        return false;

                    } else {

                        $('#err-fname').text('');
                        $('#lb-fname').removeClass('error-input');
                        $('#fname').removeClass('error-input');
                        $('#fname').addClass('ok-input');

                        return true;

                    }
                }
            }


            function validateLName() {
                var lname = document.getElementById('lname').value;

                if (isBlank(lname)) {

                    $('#err-lname').addClass('error-input');
                    $('#err-lname').text('Enter First Name.');
                    $('#lb-lname').addClass('error-input');
                    $('#lname').removeClass('ok-input');
                    $('#lname').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(lname)) {

                        $('#err-lname').addClass('error-input');
                        $('#err-lname').text('A Name should not have Numbers otherwise use romans e.g. II for 2.');
                        $('#lb-lname').addClass('error-input');
                        $('#lname').removeClass('ok-input');
                        $('#lname').addClass('error-input');

                        return false;

                    } else {

                        $('#err-lname').text('');
                        $('#lb-lname').removeClass('error-input');
                        $('#lname').removeClass('error-input');
                        $('#lname').addClass('ok-input');

                        return true;

                    }
                }
            }


            function validateGender() {
                var male = document.getElementById('male');
                var female = document.getElementById('female');

                if (male.checked || female.checked) {

                    $('#err-gen').text('');
                    $('#lb-gen').removeClass('error-input');

                    return true;

                } else {

                    $('#err-gen').addClass('error-input');
                    $('#err-gen').text('Select either Male or Female.');
                    $('#lb-gen').addClass('error-input');

                    return false;
                }
            }

            //Residential fields validation
            function validateCounty() {
                var county = document.getElementById('county').value;

                if (isBlank(county)) {

                    $('#err-county').addClass('error-input');
                    $('#err-county').text('Enter your County.');
                    $('#lb-county').addClass('error-input');
                    $('#county').removeClass('ok-input');
                    $('#county').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(county)) {

                        $('#err-county').addClass('error-input');
                        $('#err-county').text('County should not have Numbers.');
                        $('#lb-county').addClass('error-input');
                        $('#county').removeClass('ok-input');
                        $('#county').addClass('error-input');

                        return false;

                    } else {

                        $('#err-county').text('');
                        $('#lb-county').removeClass('error-input');
                        $('#county').removeClass('error-input');
                        $('#county').addClass('ok-input');

                        return true;

                    }
                }
            }

            function validateSCounty() {
                var scounty = document.getElementById('scounty').value;

                if (isBlank(scounty)) {

                    $('#err-scounty').addClass('error-input');
                    $('#err-scounty').text('Enter your Sub County.');
                    $('#lb-scounty').addClass('error-input');
                    $('#scounty').removeClass('ok-input');
                    $('#scounty').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(scounty)) {

                        $('#err-scounty').addClass('error-input');
                        $('#err-scounty').text('Sub County should not have Numbers.');
                        $('#lb-scounty').addClass('error-input');
                        $('#scounty').removeClass('ok-input');
                        $('#scounty').addClass('error-input');

                        return false;

                    } else {

                        $('#err-scounty').text('');
                        $('#lb-scounty').removeClass('error-input');
                        $('#scounty').removeClass('error-input');
                        $('#scounty').addClass('ok-input');

                        return true;

                    }
                }
            }

            function validateLocation() {
                var location = document.getElementById('location').value;

                if (isBlank(location)) {

                    $('#err-location').addClass('error-input');
                    $('#err-location').text('Enter your Location.');
                    $('#lb-location').addClass('error-input');
                    $('#location').removeClass('ok-input');
                    $('#location').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(location)) {

                        $('#err-location').addClass('error-input');
                        $('#err-location').text('Location should not have Numbers.');
                        $('#lb-location').addClass('error-input');
                        $('#location').removeClass('ok-input');
                        $('#location').addClass('error-input');

                        return false;

                    } else {

                        $('#err-location').text('');
                        $('#lb-location').removeClass('error-input');
                        $('#location').removeClass('error-input');
                        $('#location').addClass('ok-input');

                        return true;

                    }
                }
            }

            function validateSLocation() {
                var slocation = document.getElementById('slocation').value;

                if (isBlank(slocation)) {

                    $('#err-slocation').addClass('error-input');
                    $('#err-slocation').text('Enter your Sub Location.');
                    $('#lb-slocation').addClass('error-input');
                    $('#slocation').removeClass('ok-input');
                    $('#slocation').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(slocation)) {

                        $('#err-slocation').addClass('error-input');
                        $('#err-slocation').text('Sub Location should not have Numbers.');
                        $('#lb-slocation').addClass('error-input');
                        $('#slocation').removeClass('ok-input');
                        $('#slocation').addClass('error-input');

                        return false;

                    } else {

                        $('#err-slocation').text('');
                        $('#lb-slocation').removeClass('error-input');
                        $('#slocation').removeClass('error-input');
                        $('#slocation').addClass('ok-input');

                        return true;

                    }
                }
            }

            function validateVillage() {
                var village = document.getElementById('village').value;

                if (isBlank(village)) {

                    $('#err-village').addClass('error-input');
                    $('#err-village').text('Enter your Village.');
                    $('#lb-village').addClass('error-input');
                    $('#village').removeClass('ok-input');
                    $('#village').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(village)) {

                        $('#err-village').addClass('error-input');
                        $('#err-village').text('Village should not have Numbers.');
                        $('#lb-village').addClass('error-input');
                        $('#village').removeClass('ok-input');
                        $('#village').addClass('error-input');

                        return false;

                    } else {

                        $('#err-village').text('');
                        $('#lb-village').removeClass('error-input');
                        $('#village').removeClass('error-input');
                        $('#village').addClass('ok-input');

                        return true;

                    }
                }
            }

            function validateAddress() {
                var address = document.getElementById('address').value;

                if (isBlank(address)) {

                    $('#err-address').addClass('error-input');
                    $('#err-address').text('Enter your Address.');
                    $('#lb-address').addClass('error-input');
                    $('#address').removeClass('ok-input');
                    $('#address').addClass('error-input');

                    return false;

                } else {

                    $('#err-address').text('');
                    $('#lb-address').removeClass('error-input');
                    $('#address').removeClass('error-input');
                    $('#address').addClass('ok-input');

                    return true;
                }
            }

            function validatePhone() {
                var phone = document.getElementById('phone').value;

                if (!isBlank(phone)) {
                    if (phone.length != 10 ) {
                        $('#err-phone').addClass('error-input');
                        $('#err-phone').text('Phone Number must be 10 characters.');
                        $('#lb-phone').addClass('error-input');
                        $('#phone').removeClass('ok-input');
                        $('#phone').addClass('error-input');
                        $('#phone').select();

                        return false;

                    } else {
                        $('#err-phone').text('');
                        $('#lb-phone').removeClass('error-input');
                        $('#phone').removeClass('error-input');
                        $('#phone').addClass('ok-input');
                          checkDuplicate('phone',phone);
                        return true;
                    }

                } else {

                    $('#err-phone').addClass('error-input');
                    $('#err-phone').text('Enter your Phone Number.');
                    $('#lb-phone').addClass('error-input');
                    $('#phone').removeClass('ok-input');
                    $('#phone').addClass('error-input');

                    return false;
                }

            }

            function validateEmail() {
                var email = document.getElementById('email').value;

                if (!isBlank(email)) {
                    if (!isEmail(email)) {
                        $('#err-email').addClass('error-input');
                        $('#err-email').text('Enter a valid Email Address must contain "@" and ".".');
                        $('#lb-email').addClass('error-input');
                        $('#email').removeClass('ok-input');
                        $('#email').addClass('error-input');
                        $('#email').select();

                        return false;

                    } else {
                        $('#err-email').text('');
                        $('#lb-email').removeClass('error-input');
                        $('#email').removeClass('error-input');
                        $('#email').addClass('ok-input');
                        checkDuplicate('email',email);
                        return true;
                    }

                } else {

                    $('#err-email').addClass('error-input');
                    $('#err-email').text('Enter your Email Address.');
                    $('#lb-email').addClass('error-input');
                    $('#email').removeClass('ok-input');
                    $('#email').addClass('error-input');

                    return false;
                }

            }



            function validatePassword() {
                hidePassSt();
                var password = document.getElementById('password').value;

                if (isBlank(password)) {

                    $('#err-password').addClass('error-input');
                    $('#err-password').text('Enter your password.');
                    $('#lb-password').addClass('error-input');
                    $('#password').removeClass('ok-input');
                    $('#password').addClass('error-input');

                    return false;

                } else {

                    if (hasNumber(password)) {

                        if (password.length >= 8) {

                            $('#err-password').text('');
                            $('#lb-password').removeClass('error-input');
                            $('#password').removeClass('error-input');
                            $('#password').addClass('ok-input');

                            return true;

                        } else {

                            $('#err-password').addClass('error-input');
                            $('#err-password').text('Password should not be less than 8 characters.');
                            $('#lb-password').addClass('error-input');
                            $('#password').removeClass('ok-input');
                            $('#password').addClass('error-input');

                            return false;

                        }

                    } else {

                        $('#err-password').addClass('error-input');
                        $('#err-password').text('Password should contain atleast 1 Number, can be numbers only.');
                        $('#lb-password').addClass('error-input');
                        $('#password').removeClass('ok-input');
                        $('#password').addClass('error-input');

                        return false;

                    }
                }
            }

            function validateRepass() {
                var password = document.getElementById('password').value;
                var repass = document.getElementById('repass').value;



                if (!isBlank(repass)) {
                    if (repass != password ) {
                        $('#err-repass').addClass('error-input');
                        $('#err-repass').text('Passwords don\'t match.');
                        $('#lb-repass').addClass('error-input');
                        $('#repass').removeClass('ok-input');
                        $('#repass').addClass('error-input');
                       

                        return false;

                    } else {
                        $('#err-repass').text('');
                        $('#lb-repass').removeClass('error-input');
                        $('#repass').removeClass('error-input');
                        $('#repass').addClass('ok-input');

                        return true;
                    }

                } else {

                    $('#err-repass').addClass('error-input');
                    $('#err-repass').text('Confirm your Password.');
                    $('#lb-repass').addClass('error-input');
                    $('#repass').removeClass('ok-input');
                    $('#repass').addClass('error-input');

                    return false;
                }
                
            }
      <?php endif ?>

    </script>
</body>
</html>
