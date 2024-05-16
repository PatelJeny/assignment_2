<?php

echo "5 9 <br>";

function printPattern(){
    for($i=2; $i<=4; $i++){
        for($j=1; $j<=2; $j++){
            $num=$i*10 + $j + 4;
            echo $num;
        }
        echo "<br>";
    }
}

echo "5 9<br>";

printPattern();

?>