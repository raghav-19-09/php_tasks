<?php 
abstract class calc{
    // public $a,$b;
   abstract protected function add($a,$b);
   abstract protected function sub($a,$b);
   abstract protected  function mul($a,$b);
   abstract protected function div($a,$b);
}

class calculation extends calc{
    public function add($a,$b){
    echo "<b>Use of Abstract Class</b>". "<br>"."sum of C : " . $a+$b . "<br>";
    }
    public function sub($a,$b){
    echo "sub of C : " . $a-$b . "<br>";
    }
    public function mul($a,$b){
    echo "mul of C : " . $a*$b. "<br>";
    }
    public function div($a,$b){
    echo "div of C : " . $a/$b. "<br>";
    }
}
$obj=new calculation();
$obj->add(50,20);
$obj->sub(50,20);
$obj->mul(50,20);
$obj->div(50,20);
?>