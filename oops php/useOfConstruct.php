<?php
class A{
    //set default value of variable
    public $name;
    public $age;
    function __construct($n="No Name",$a="0"){
        $this->name=$n;
        $this->age=$a;
    }
    public function show(){
    echo "Name : ".$this->name."<br> Age is " .$this->age;
  } 
}

$p1=new A("raghav",1);
$p1->show()
?>