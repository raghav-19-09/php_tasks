<?php
class parent1{
    public $name;
    function show(){
        echo "<b>Method overriding</b>"."<br>". "name : ".$this->name ."raghav";
   }
}
class child extends parent1{
function show(){
    echo "<b>Method overriding</b>"."<br>"."name : ".$this->name ."Abhi";
   }
}
// Reference type of parent
$obj1=new parent1();
$obj1->show(); 
// Reference type of parent
// $obj=new child();
// $obj->show();
?>