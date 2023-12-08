<?php
class cal{
    public $a,$b,$c;
    function sum(){
        $this->c=$this->a+$this->b;
        echo "<h2>calculation</h2>"  . "Add. value of C : " . $this->c . "<br>";
    }

}

class subtraction extends cal {
   
    public function sub(){
        $this->c=$this->a-$this->b;
        echo "Sub. value of C : " . $this->c . "<br>";
    }
}
class multiplication extends cal{
    
    function mul(){
        $this->c=$this->a*$this->b;
        echo "mul. value of C : " . $this->c ."<br>";
    }
}
class division extends cal{
    function div(){
        $this->c=$this->a/$this->b;
        echo "Div. value of C : " . $this->c . "<br>";
    } 
}
$p1=new cal();
$p1->a=100;
$p1->b=20;
$p1->sum();
$p2=new subtraction();
$p2->a=100;
$p2->b=20;
$p2->sub();
$p3=new multiplication();
$p3->a=100;
$p3->b=20;
$p3->mul();
$p4=new division();
$p4->a=100;
$p4->b=20;
$p4->div();
?>