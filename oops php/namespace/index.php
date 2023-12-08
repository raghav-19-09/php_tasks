<?php
include 'error.php';
include 'test.php';
include 'test1.php';

function show(){
    echo "hello from index file.";
}

echo"<b>Use of namespace</b>"."<br>";
$obj1= new test1\calculation();
$obj1->sum();
$obj1->sub();
$obj= new test\calculation();
$obj->mul();
$obj->div();
// show();

// test\show();
?>