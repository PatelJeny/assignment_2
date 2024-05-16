<?php
$array=['apple','banana','cherry','date','elderberry'];

$randomKey=array_rand($array);
$randomValue=$array[$randomKey];

echo "random value is " . $randomValue;

?>