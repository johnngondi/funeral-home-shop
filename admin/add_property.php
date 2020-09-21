<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';
require '../model/props_func.php';

$conn = dbconnect();

if ($conn) {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$title = $_POST['title'];
		$colors = $_POST['colors'];
		
		$colors = implode(',', $colors);
		
		
		$data = array(
			'title' => $title,
			'price' => $_POST['rent'],
			'unit' => $_POST['unit'],
			'type' => $_POST['type'],
			'stock' => $_POST['in-stock'],
			'colors' => $colors,
			'description' => $_POST['description'],
			'title' => $_POST['title'],
			'front_view' => $_POST['front-view-img'],
			'interior_view' => $_POST['interior-view-img'],
			'aerial_view' => $_POST['aerial-view-img']
		);

		$result = addNewProperty($conn,$data);

		if ($result) {
			
			echo "		
		        <script>
					\$('#image1').addClass('hide');
					\$('#image1add').removeClass('hide');
					\$('#image2').addClass('hide');
					\$('#image2add').removeClass('hide');
					\$('#image3').addClass('hide');
					\$('#image3add').removeClass('hide');
					images[0] = \"../images/bg/front_view.png\";
					images[1] = \"../images/bg/interior_view.png\";
					images[2] = \"../images/bg/aerial_view.png\";
					\$(\":text\").val('');
					\$(\"#rent\").val('');
					\$(\"#description\").val('');
					\$(\":file\").val('');

		            var \$toastContent = \$('<span> Property added successfully!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
		            Materialize.toast(\$toastContent, 2000);
		        </script>
			";
		} else {
			
			echo "		
		        <script>

		            var \$toastContent = \$('<span> Error while adding Property, probably it exists!</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
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