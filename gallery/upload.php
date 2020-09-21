<?php
if(!empty($_FILES)){
echo "string";    
  
require '../_inc/config.php';
require '../model/crud.php';
$conn = dbconnect();
if(!$conn){
    
	echo "
		<script>
			var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
			Materialize.toast(\$toastContent, 3000);
		</script>
	";die();
}

	
		for ($i=0; $i < count($_FILES['file']['name']) ; $i++) { 

	    	
		    $fileName = $_FILES['file']['name'];
		    $fileName = $fileName[$i];
		    $fileName = str_ireplace("'","",$fileName);
		   
		    $cat = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
		    if ($cat == 'png' || $cat == 'jpg' || $cat == 'gif' || $cat == 'jpeg' ) {

		    	$cat = 'img';
		    } elseif ($cat == 'mp4' || $cat == 'webm' || $cat == 'ogg') {
		    		 
		    	$cat = 'vid';
		    } else {
		    	echo "
		    		<script>
			            var \$toastContent = \$('<span> Those files are not acceptable. Choose a video (.mp4 or .webm or .ogg), image and a pdf document.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle\"></i></button>'));
			            Materialize.toast(\$toastContent, 5000);
			        </script>
		    	";die();
		    }

		    		    	
		    $targetDir = "../images/gallery/";

		   

		   
		    $size = $_FILES['file']['size'];
		    $size = $size[$i];
		    $targetFile = $targetDir.$fileName;

		    $file_to_upload = $_FILES['file']['tmp_name'];
		    $file_to_upload = $file_to_upload[$i];

		    
		    if(move_uploaded_file( $file_to_upload,$targetFile)){
		        //insert file information into db table
		       
		       	$sql = "INSERT INTO gallery (type,media) VALUES (\"$cat\",\"$fileName\")";
		       	$result = addData($conn,$sql);

		       	if ($result) {
		       		
		       		echo "
			    		<script>
				            var \$toastContent = \$('<span> \"".ucfirst($fileName)."\" uploaded successfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
				            Materialize.toast(\$toastContent, 3000);
				            close_popup('popup-new-ob');
				        </script>
			    	";
		       	} else {
		       		echo "
			    		<script>
				            var \$toastContent = \$('<span> \"".ucfirst($fileName)."\" was uploaded but not saved. Try again</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
				            Materialize.toast(\$toastContent, 3000);
				            close_popup('popup-new-ob');
				        </script>
			    	";
		       	}
		       
		    } else {
		    	echo "
		    		<script>
			            var \$toastContent = \$('<span> Error while uploading your \"".ucfirst($fileName)."\" to the server. Try again</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
			            Materialize.toast(\$toastContent, 3000);
			        </script>
		    	";
		    }
	    }

	    
    
    
}
?>