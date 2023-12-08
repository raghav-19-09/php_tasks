<?php
    include 'config.php';
    include 'error.php';
    $productId=$_POST['productId'];
    $image=$_POST['image'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];

    $sql1="SELECT * FROM `cart_list` WHERE productId='$productId'";
    $query=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_array($query)){
        $fetch_val=$row['quantity']; 
    }
    $newquantity=$quantity+$fetch_val;
    $update="UPDATE `cart_list` SET quantity='$newquantity' WHERE productId='$productId'";
    $query_update=mysqli_query($conn,$update);
    
    }
    else{
        $sql = "INSERT INTO `cart_list` (`productId`,`image`,`name`,`price`,`quantity`) 
        VALUES('$productId','$image','$name','$price','$quantity')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
           echo "data inserted successfully";
       }else{
           echo "data not inserted";
       }
    }
?>




<!-- if ($_item['product_id'] === [$_POST['id']]) {
          $item['product_quantity'] += $_POST['quantity'];  -->
