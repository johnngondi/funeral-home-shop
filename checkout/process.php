<?php
$redirectStr = '';
if(!empty($_GET['paymentID']) && !empty($_GET['token']) && !empty($_GET['payerID']) && !empty($_GET['pid']) ){
    // Include and initialize database class
    include 'DB.class.php';
    $db = new DB;

    // Include and initialize paypal class
    include 'PaypalExpress.class.php';
    $paypal = new PaypalExpress;
    
    // Get payment info from URL
    $paymentID = $_GET['paymentID'];
    $token = $_GET['token'];
    $payerID = $_GET['payerID'];
    $productID = $_GET['pid'];

    
   

        // Get the transaction data
        $id = $productID;
        $state = 1;
        $payerID = $payerID;
        
        // Get product details
        $conditions = array(
            'where' => array('invoice_id' => $productID),
            'return_type' => 'single'
        );
        $productData = $db->getRows('invoice', $conditions);
        
        if ($productData) {
            // Insert transaction data in the database
            $data = array(
                'product_id' => $productID,
                'txn_id' => $paymentID,
                'payer_id' => $payerID,
                'payment_gross' => $productData['amount'],
                'payment_status' => 1
            );
            $insert = $db->insert('payments', $data);

            if ($insert) {
                // Add insert id to the URL
                $redirectStr = 'id='.$insert;
                
                // Redirect to payment status page
                header("Location:./?status=1&invoice=$productID&t_id=$paymentID".$redirectStr);

            } else {

                header("Location:./?status=2&invoice=$productID");
            }

        } else {
           header("Location:./?status=0&invoice=$productID"); 
        }
            
            
            
            
}else{
    // Redirect to the home page
    header("Location:index.php");
}
?>