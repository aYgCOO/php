<?php //Inheritance ?>
<?php 
class class_one{
     public $num;
     function __construct(){
          $this->num=2000;
          // echo "Constractor_1 <br>";
     }
     function _one(){
          echo "Function_1 <br>";
     }
     function _one_2(){
          echo "Function_2 <br>";
     }
}

class class_one_point_O extends class_one{
     function __construct(){
          parent::__construct();
          parent::_one_2();
          echo "Constractor_2/Class_2 <br>";
     }

}
$io=new class_one_point_O();
$io->_one();
echo $io->num;
?>
<br>
<a href="_next_two.php">Next...</a>