<?php                          //if statement
$x=2;
if($x>5)
echo "$x is greater than 5";
?>


<?php
$x=3;                                //if-else statements
if($x>5)
echo "$x is greater than 5";
else
echo "$x is smaller than 5";
?>


<?php                                 //if-else-if
$x=91;
if($x<50){
echo "number is greate then value";}
else if($x==50){
echo "number is smaller than value";}
else{
echo "number is correct";}
?>


<?php                                //switch
$x=5;
switch($x){
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    case 4:
        echo "4";
        break;
    default:
        echo "wrong number";
}
?>
