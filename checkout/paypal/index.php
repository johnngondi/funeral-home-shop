<?php
// Include and initialize database class
include 'DB.class.php';
$db = new DB;

// Get all products
$products = $db->getRows('products');
?>

<?php
// List all products
if(!empty($products)){
    foreach($products as $row){
?>
<div class="item">
    <img src="images/<?php echo $row['image']; ?>"/>
    <p>Name: <?php echo $row['name']; ?></p>
    <p>Price: <?php echo $row['price']; ?></p>
    <a href="checkout.php?id=<?php echo $row['id']; ?>">BUY</a>
</div>
<?php        
    }
}else{
    echo '<p>Product(s) not found...</p>';
}
?>