<?php

if(isset($_FILES["front-view-image-file"]["name"])){
        $name = $_FILES["front-view-image-file"]["name"];
        $size = $_FILES["front-view-image-file"]["size"];
        $ext  = @end(explode(".", $name));
    $allowed_ext = array("png","jpg","gif","jpeg","JPG","PNG","GIF");
     if(in_array($ext, $allowed_ext)){
         if($size < (5120 * 5120)){

             $new_image = '';
             $new_name = md5(rand()).".".$ext;
             $path = '../images/obits/'.$new_name;
            list($width, $height) = getimagesize($_FILES["front-view-image-file"]["tmp_name"]);
                   
           if (move_uploaded_file($_FILES["front-view-image-file"]["tmp_name"], $path)) {

                echo"
                    <script>
						\$('#front-view-image-prog').hide();
						\$('#photo').val(\"$new_name\");
                        var \$toastContent = \$('<span> Front View Image Uploaded!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
                        Materialize.toast(\$toastContent, 1500);
                    </script>
                ";
            }else{

                echo"
                    <script>
                        \$('#front-view-image-prog').hide();
                        var \$toastContent = \$('<span> An error occured while uploading image!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
                        Materialize.toast(\$toastContent, 1500);
                    </script>
                ";
            }
             
         }else{

            echo"
                <script>
                    \$('#front-view-image-prog').hide();
                    var \$toastContent = \$('<span>This image is very large. Please try resizing it.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
                    Materialize.toast(\$toastContent, 1500);
                </script>
            ";
         }
     }else{

        echo"
            <script>
                \$('#front-view-image-prog').hide();
                var \$toastContent = \$('<span>Invalid image, please try a jpg, gif or png image.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
                Materialize.toast(\$toastContent, 1500);
            </script>
        ";
     }
    
}else{
    
    echo"
        <script>
            \$('#front-view-image-prog').hide();
            var \$toastContent = \$('<span>Please select an image.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle yellow-text\"></i></button>'));
            Materialize.toast(\$toastContent, 1500);
        </script>
    ";
}
?>