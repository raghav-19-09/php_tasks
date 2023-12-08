<?php
include 'connection.php';
$p_sku = $_POST['p_sku'];
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_quantity = $_POST['p_quantity'];
// echo $p_sku;
// echo $p_name;
// echo $p_price;
// echo $p_quantity;die;

$sql1="SELECT * FROM products WHERE p_sku='$p_sku'";
$query=mysqli_query($conn,$sql1);
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_array($query)){
    $fetch_val=$row['p_quantity']; 
 }
 $newquantity=$p_quantity+$fetch_val;
 $update="UPDATE products SET p_quantity='$p_quantity' WHERE p_sku='$p_sku'";
 $query_update=mysqli_query($conn,$update);
 
}
else{
  $sql = "INSERT INTO `products`(`p_sku`,`p_name`,`p_price`,`p_quantity`) 
  VALUES('$p_sku','$p_name','$p_price','$p_quantity')";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "1";
} else {
  echo "0";
}
}

?>
  
