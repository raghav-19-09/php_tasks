<?php
class A{
    //set default value of variable
    public $name="No Name";
    public $age="0";
    public function show(){
    echo "$this->name". " age is " . "$this->age";
  } 
}
$p1=new A();
$p1->name="Raghav";
$p1->age="23". "<br>". "<br>";
$p1->show();
$p2=new A();
$p2->name="Rohan" ;
$p2->age="19";
$p2->show();
?>