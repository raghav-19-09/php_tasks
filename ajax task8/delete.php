<?php

include "connection.php";
// die('die');
$id = $_POST['id'];
 //echo $id;
$sql = "DELETE FROM `products` WHERE id = $id";
$query=mysqli_query($conn,$sql);
if($query){
    echo "deleted successfull";
}else{
    echo "Delete Failed";

}


?>

