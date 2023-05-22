<?php
class calculator {
    public $operatr;
    public $num1;
    public $num2;
    public function __construct($num1,$num2,$operatr){
        $this->num1=$num1;
        $this->num2=$num2;
        $this->operatr=$operatr;
    }
    public function calculat(){
    if ($this->operatr==='+'){
        $sum=0;
        $sum=$this->num1+$this->num2;
        return $sum;    }
    elseif ($this->operatr==='*'){
        $sum=0;
        $sum=$this->num1*$this->num2;
        return $sum;    }
    elseif ($this->operatr==='/'){
        $sum=0;
        $sum=$this->num1/$this->num2;
        return $sum;    }
    elseif ($this->operatr==='-'){
        $sum=0;
        $sum=$this->num1-$this->num2;
        return $sum;    }
    else{
        return -1;
    }
    }
}
$result1= new calculator(20,30,'+');
$This_result1=$result1->calculat();
echo("This is result of sum :".$This_result1);
$result2= new calculator(20,30,'*');
$This_result2=$result2->calculat();
echo("<br>This is result of multipication :".$This_result2);
$result3= new calculator(20,30,'/');
$This_result3=$result3->calculat();
echo("<br>This is result of division :".$This_result3);
$result4= new calculator(20,30,'-');
$This_result4=$result4->calculat();
echo("<br>This is result of substraction :".$This_result4);
?>