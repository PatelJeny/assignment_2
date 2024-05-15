<?php

function fibonacci($number){
    if($number==0)
        return 0;

    elseif($number==1)
        return 1;


        else 
        
            return (fibonacci($number-1)+ fibonacci($number-2));
        
        }

        $number=10;

        for($counter = 0; $counter<$number; $counter++){
            echo fibonacci($counter),' ';
        }
?>