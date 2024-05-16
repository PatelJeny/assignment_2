<?php

function check($number){
    if($number%2==0){
        echo "even";
    }
    else{
        echo "odd";
    }
}
$number=65;
check($number);
?>