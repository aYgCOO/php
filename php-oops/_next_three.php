<?php //Abstraction ?>
<?php 
/*Abstract class contain atleast 1 abstract function
abstract function:- must declare but not implement
Abstract class could not create object
Abstract class, child class must contain abstract function
*/

abstract class class_one{
     abstract function test();
     
}
class class_two extends class_one{
     function test(){
          echo "test";
     }

}

?>