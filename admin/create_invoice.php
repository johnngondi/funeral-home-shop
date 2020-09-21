<?php
session_start();
require '../_inc/config.php';
require '../model/crud.php';

$conn = dbconnect();
if ($conn) {

	//get all occpied properties
    $sql = "SELECT id, title, occupant, rent FROM property WHERE occupant <> ''";
    $properties = fetchData($conn,$sql);

    if ($properties) {
        $this_month = date('Y-m')."%";
        $f_this_month = date('F Y');
        $new_due_date = date('Y-m').'-5';

        foreach ($properties as $property) {
            $t_id = $property['occupant'];
            $prop_id = $property['id'];
            $title = ucwords($property['title']);
            $amount = $property['rent'];
            $f_amount = number_format($amount,2,".",",");
            //check if the invoice for that month exists
            $sql = "SELECT * FROM rent_invoice WHERE tenant_id = \"$t_id\" AND prop_id =\"$prop_id\" AND date_due LIKE \"$this_month\"";
            $results = fetchData($conn,$sql);

            if (!$results) {
                //create invoice
                $sql = "INSERT INTO rent_invoice (tenant_id, prop_id, amount, date_due) VALUES (\"$t_id\",\"$prop_id\",\"$amount\",\"$new_due_date\")";
                $result = addData($conn,$sql);

                if ($result) {
                    
                    echo "      
                        <script>
                            var \$toastContent = \$('<span> Invoive of KShs.$f_amount for $title occupied by $t_id for $f_this_month  been created succesfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
                            Materialize.toast(\$toastContent, 5000);
                        </script>
                    ";
                } else {

                    echo "      
                        <script>
                            var \$toastContent = \$('<span> Error while creating Invoive for $title occupied by $t_id for $f_this_month.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
                            Materialize.toast(\$toastContent, 5000);
                        </script>
                    ";
                }
            } else {
                echo "      
                    <script>
                        var \$toastContent = \$('<span> Invoive for $title occupied by $t_id for $f_this_month is already exists.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info white-text\"></i></button>'));
                        Materialize.toast(\$toastContent, 5000);
                    </script>
                ";
            }
        }

                echo "      
                    <script>
                        $('#invoice-btn').html(\"<i class='fa fa-check'></i> All invoices Created \");
                        var \$toastContent = \$('<span> All Invoices Created Succesfully.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-check green-text\"></i></button>'));
                        Materialize.toast(\$toastContent, 5000);
                    </script>
                ";


    } else {

        echo "      
            <script>
                $('#invoice-btn').html(\"<i class='fa fa-check'></i> All invoices Created \");
                $('#invoice-btn').removeClass('disabled');
                var \$toastContent = \$('<span> There are no occupied Properties.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-info white-text\"></i></button>'));
                Materialize.toast(\$toastContent, 2000);
            </script>
        ";
    }

}else {
	echo "		
        <script>
            $('#invoice-btn').html(\"<i class='fa fa-check'></i> All invoices Created \");
            $('#invoice-btn').removeClass('disabled');
            var \$toastContent = \$('<span> Error while connecting to server! Contact Admin.</span>').add(\$('<button class=\"btn-flat toast-action\"><i class=\"fa fa-exclamation-triangle red-text\"></i></button>'));
            Materialize.toast(\$toastContent, 2000);
        </script>
	";

}

?>