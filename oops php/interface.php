<?php 
interface sum{
    function add($a,$b);
}
interface subtraction{
    function sub($a,$b);
}
interface multiplication{
    function mul($a,$b);
}
interface division{
    function div($a,$b);
}
class cal implements sum,subtraction,multiplication,division{
    public function add($a,$b){
    echo "<b>Use of Interface</b>". "<br>"."sum of C : " . $a+$b . "<br>";
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
$obj=new cal();
$obj->add(50,20);
$obj->sub(50,20);
$obj->mul(50,20);
$obj->div(50,20);
?>