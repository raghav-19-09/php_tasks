<?php
namespace test;
class calculation{
   public $a=10,$b=2;
    function mul(){
        echo  "mul. value of C : " . $this->a*$this->b . "<br>";
    }
    function div(){
        echo "div. value of C : " . $this->a/$this->b . "<br>";
    }
   }

?>