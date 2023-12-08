<?php
include 'config.php'; 
include 'error.php';
$productId=$_POST['id'];
// echo $productId; 
$sql = "SELECT * FROM cart_list WHERE productId='$productId'";
$query = mysqli_query($conn, $sql);
if ( $query) {
    while ($row = mysqli_fetch_array($query)) {
        //   print_r($row); 
        //  echo $row['quantity'];
        $fetchQuantity=$row['quantity'];
    }
    $fetchQuantity--;
    
    $update="UPDATE `cart_list` SET quantity=' $fetchQuantity' WHERE productId='$productId'";
    $result=mysqli_query($conn,$update);
    if ($result) {
        echo "Updated";
    }else{
        echo "not Updated";
    }

   }
   if($fetchQuantity<=1){
    $dataq="DELETE FROM cart_list WHERE productId=$productId";
    $resquery=mysqli_query($conn,$dataq);
   }
   


?>