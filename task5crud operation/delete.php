<?php  
include "config.php";
$id=$_GET['id'];
// echo $id;
$query = " DELETE FROM `users` WHERE id = $id ";
mysqli_query($conn, $query);
echo "<script>alert(Data is deleted);</script>";
header('location:task5.php');

?>
