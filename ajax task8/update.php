<?php
include 'connection.php';
 $id=$_POST['id'];
 $p_sku=$_POST['p_sku'];
 $p_name=$_POST['p_name'];
 $p_price=$_POST['p_price'];
 $p_quantity=$_POST['p_quantity'];

// print_r($_POST['id']);
// echo "<br>";
// print_r($_POST['p_quantity']);
// echo "<br>";
// print_r($_POST['p_sku']);
// echo "<br>";
// print_r($_POST['p_sku']);
// echo "<br>";

$data="UPDATE products SET p_quantity='$p_quantity' WHERE id='$id'";
$query=mysqli_query($conn,$data);
if($query){
  echo "data updated successfully";
  
}
else{
  echo "data not  updated successfully";
}

?>
