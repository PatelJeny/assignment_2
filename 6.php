<?php

$num=407;
$total=0;

$x=$num;

while($x!=0){
    
    $a=$x%10;
    $total=$total+$a*$a*$a;

    $x=$x/10;
}  

if($num==$total){
    echo "armstrong number";
}
else{
    echo "not armstrong number";
}


?>