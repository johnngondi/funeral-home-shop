<?php
session_start();

if (!isset($_SESSION['uname'])) {
    //header("location:401.html");
    //die("Restricted area. Sorry");
}
require '_inc/config.php';
require 'model/crud.php';
require 'model/register.php';


$conn = dbconnect();
$idno = $_SESSION['idno'];
if ($conn) {
    
    if(isset($_FILES["image_upload"]["name"])){
        $name = $_FILES["image_upload"]["name"];
        $size = $_FILES["image_upload"]["size"];
        $ext  = @end(explode(".", $name));
        $allowed_ext = array("png","jpg","gif","jpeg","JPG","PNG","GIF");

        if(in_array($ext, $allowed_ext)){
            if($size < (500 * 500)){

                $new_image = '';
                $new_name = md5(rand()).".".$ext;
                $path = 'images/profile/'.$new_name;
                list($width, $height) = getimagesize($_FILES["image_upload"]["tmp_name"]);
                   
                if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], $path)) {
                    $result = setPic($conn,$idno,$new_name);

                    if ($result) {
                        $_SESSION['ppic'] = $new_name;
                        echo "
                            <script>
                                \$('#working-icon').html('<i class=\"fa fa-check green-txt\"></i>');
                                \$('#working-title').html('Passport Photo Uploaded Successfully. <br> You will be able to login to your accout once activated.');
                                setTimeout(function(){
                                    close_popup('working');
                                },4000);
                                \$('.dpic').removeClass('disabled');
                                \$('#upload-submit').addClass('hide');
                                \$('#prog').addClass('hide');
                                \$('#u-pic').prop(\"src\",\"images/profile/".$new_name."\");
                                \$('#u-pic-down').prop(\"src\",\"images/profile/".$new_name."\");
                            </script>
                        ";
                    } else {
                        echo "
                            <script>
                                \$('#working-icon').html('<i class=\"fa fa-times red-text\"></i>');
                                \$('#working-title').html('Error while setting the photo!.');
                                setTimeout(function(){
                                    close_popup('working');
                                },2000);
                                \$('.dpic').removeClass('disabled');
                                \$('#upload-submit').addClass('hide');
                                \$('#prog').addClass('hide');
                            </script>
                        ";
                    }

                }else{
                    echo "
                        <script>
                            \$('#working-icon').html('<i class=\"fa fa-times red-text\"></i>');
                            \$('#working-title').html('Error while uploading the photo!!. Try again.');
                            setTimeout(function(){
                                close_popup('working');
                            },2000);
                            \$('.dpic').removeClass('disabled');
                            \$('#upload-submit').addClass('hide');
                            \$('#prog').addClass('hide');
                        </script>
                    ";
                }
                 
            }else{
                echo "
                    <script>
                        \$('#working-icon').html('<i class=\"fa fa-exclamation orange-text\"></i>');
                        \$('#working-title').html('The image is too big. Resize it or choose a different one!');
                        setTimeout(function(){
                            close_popup('working');
                        },2000);
                        \$('.dpic').removeClass('disabled');
                        \$('#upload-submit').addClass('hide');
                        \$('#prog').addClass('hide');
                    </script>
                ";
             }
        }else{
            echo "
                <script>
                    \$('#working-icon').html('<i class=\"fa fa-exclamation orange-text\"></i>');
                    \$('#working-title').html('Invalid image, please try a jpg, gif or png image!');
                    setTimeout(function(){
                        close_popup('working');
                    },2000);
                    \$('.dpic').removeClass('disabled');
                    \$('#upload-submit').addClass('hide');
                    \$('#prog').addClass('hide');
                </script>
            ";
        }
        
    }else{
        echo "
            <script>
                \$('#working-icon').html('<i class=\"fa fa-exclamation orange-text\"></i>');
                \$('#working-title').html('Please select an image!');
                setTimeout(function(){
                    close_popup('working');
                },2000);
                \$('.dpic').removeClass('disabled');
                \$('#upload-submit').addClass('hide');
                \$('#prog').addClass('hide');
            </script>
        ";
    }

} else {

}


?> 