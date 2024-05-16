<?php

$array = array("jeny","dhaval","dhaval","patel");

$uniqueArray=array_unique($array);

foreach($uniqueArray as $value){
    echo "$value  ";
}
?>