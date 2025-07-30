<?php //Constractor ?>

<?php 
#Non Parametarize Constractor
class class_one{
     public $x = 10;
     function __construct(){
          echo "Start <br>";
          $this->x;
     }
     function fun_(){
          // echo "Hello <br>";
          return $this->x. "<br>";
     }
   
}

$obb=new class_one();
$obb->fun_();
$result_=$obb->fun_();
echo "Non Parametarize Constractor <br>";
echo "Function...".$result_;

?>

<?php 
#Parametrize Constractor

class class_one_point_O{
     public $x;
     function __construct($y){
          return $this->x=$y;
     }
     function _fun(){
          echo "Ok <br>";
     }
     function getX(){
          return $this->x. "<br>";
     }
     function __destruct(){
          echo "End";
     }
}
$obb_=new class_one_point_O(20);
$obb_->_fun();
$result___=$obb_->getX();
echo $result___;
?>

<br>
<a href="_next_one.php">Next...</a><br>
