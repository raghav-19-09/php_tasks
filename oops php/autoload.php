<?php
include 'error.php';
// require "namespace/add.php";
// require "namespace/sub.php";
// require "namespace/mul.php";
// require "namespace/div.php";
spl_autoload_register(function ($class_name) {
    require "namespace/".$class_name . '.php';
});
echo"<b>Use of autoload</b>"."<br>";
$obj= new addition();
$obj->add(12,12);
$obj1= new subtraction();
$obj1->sub(20,12);
$obj2= new multiplication();
$obj2->mul(12,12);
$obj3= new division();
$obj3->div(100,20);
?>