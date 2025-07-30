<?php 
//Object, Class
class first_class{
     public $x=1;
     function fun1(){
          return "return value:".$this->x;
         

     }
     function fun2(){
          return "return value:".++$this->x;
     }
     function fun3(){
          return "return value:".--$this->x;
     }
        

}
$ob = new first_class();
$ob->fun1();
$ob->fun2();
$ob->fun3();
$result_1=$ob->fun1();
$result_2=$ob->fun2();
$result_3=$ob->fun3();
echo "Function_1=".$result_1."<br>";
echo "Function_2=".$result_2."<br>";
echo "Function_3=".$result_3."<br>";

?>
<br>
<a href="_next.php">Next...</a>