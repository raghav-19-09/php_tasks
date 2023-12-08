<?php
class cal{
    public $a,$b,$c;
    function sum(){
        $this->c=$this->a+$this->b;
        echo "<h2>calculation</h2>"  . "Add. value of C : " . $this->c . "<br>";
    }
    function sub(){
        $this->c=$this->a-$this->b;
        echo "Sub. value of C : " . $this->c . "<br>";
    }
    function mul(){
        $this->c=$this->a*$this->b;
        echo "mul. value of C : " . $this->c ."<br>";
    }
    function div(){
        $this->c=$this->a/$this->b;
        echo "Div. value of C : " . $this->c . "<br>";
    }
}
$p1=new cal();
$p1->a=100;
$p1->b=20;
$p1->sum();
$p2=new cal();
$p2->a=100;
$p2->b=20;
$p2->sub();
$p3=new cal();
$p3->a=100;
$p3->b=20;
$p3->mul();
$p4=new cal();
$p4->a=100;
$p4->b=20;
$p4->div();
?>