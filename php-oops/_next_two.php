<?php //Encaptulation ?>
<?php 
class class_one{
     // protected $num;
     // public $num;
     private $num;
     // function __construct(){
     //      $this->num=1;

     // }
     function getNum($y){
          return $this->num=$y;
     }
}
$q=new class_one();
// echo $q->num=2+2;
$q->getNum(20);
$result_=$q->getNum(20);
echo $result_;

#public 
#proctected
#private
?>
<br>
<a href="_next_three.php">Next...</a>