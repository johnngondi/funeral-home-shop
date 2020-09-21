<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';

$conn = dbconnect();

if ($conn) {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$title = $_POST['title'];
		 
		$data = array(
			'title' => $title, 
			'price' => $_POST['price'],
			'sticker' => $_POST['sticker-img'],
			'barner' => $_POST['barner-img'], 
		);


		$result = addNewCategory($conn,$data);

		if ($result) {
			extract($data);
			$price = number_format($price,0,".",",");
			$title = ucwords($title);
			
			echo "		
		        <script>
					\$('#sticker-cont').addClass('hide');
					\$('#stickeradd').removeClass('hide');
					\$('#barner-cont').addClass('hide');
					\$('#barneradd').removeClass('hide');
					\$(\"#sticker-img\").val('');
					\$(\"#barner-img\").val('');
					\$(\"#price\").val('');
					\$(\"#title\").val('');
           			\$(\"#add-category-btn\").html(\"Create Category\");
            		\$(\"#add-category-btn\").removeClass(\"disabled\");

		            var \$toastContent = \$('<span> Category added successfully!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2000);
		        </script>
			";
		} else {
			
			echo "		
		        <script>

		            var \$toastContent = \$('<span> Error while adding Category, probably it exists!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2500);
		        </script>
			";

		}
	}
} else {
	echo "		
        <script>
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";
}

?>