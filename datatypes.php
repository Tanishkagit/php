<?php
if(TRUE)      //scaler data type.
               //boolean.
echo "true";
if(FALSE)
echo "true";
?>
  <?php  
$a=10;               //integer
$b=20;
$c=$a+$b;
echo "the sum of a+b is " .$c;              //we use concatenation operator (.)to join  string operand together.
?>

<?php
$a=10.45;             //float
$b=20.99;                
$c=$b*$a;
echo "the multiply of b and a is " .$c;
?>

<?php
$a="php";             //string 
echo "hello $a";        
echo 'hello $a';
?>


<?php
$arr =array("tanishka","prinyanka","lucky","yogyta","khushi");     //compound data types.
echo "array elememnt is $arr[0]";                                  //array.
echo "array elememnt is $arr[1]";
echo "array elememnt is $arr[2]";
echo "array elememnt is $arr[3]";
echo "array elememnt is $arr[4]";
?>

<?php
class cars{                                                      //object.
   function marutisuzuki(){
        $car ="maruti suzuki";
        echo "the car is $car";
    }
}
$object =new cars();
$object -> marutisuzuki();
?>

