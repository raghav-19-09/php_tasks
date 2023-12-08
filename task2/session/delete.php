<?php
session_start();
$id=$_GET['id'];
//echo $id;
 unset($_SESSION['product'][$id]);
// print_r($_SESSION['product'][$id]['']);
//die();
echo "<script>alert('Deleted successfully');</script>";
echo" <script>location.href='form.product.php'</script>";


?>