<?php
$num1=1;
$num2=2;
$num3=3;

$largestNumber=($num1 > $num2)?(($num1 > $num3) ? $num1 : $num3) : (($num2 > $num3) ? $num2 : $num3);

echo " $num1 , $num2 and $num3 is $largestNumber the largest number";

?>