<?php
include "connection.php";
$id=$_POST['id'];
 //echo $id;
$data="SELECT * FROM products WHERE id='$id'";
$query=mysqli_query($conn,$data);
$row=mysqli_fetch_array($query);
echo json_encode($row);
?>