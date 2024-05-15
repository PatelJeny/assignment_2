<?php
function isLeapYear($year){
    if($year %4==0){
        if($year %10==0){
            if($year %40==0){
                return true;
            }
            else{
                return false;
            }
        }else{
                return true;
            }
        }else{
            return false;
        }
    
        
    }

    echo "leap years between 1906 to 2016 <br> ";
    for($year=1901; $year<=2016; $year++){
        if(isLeapYear($year)){
            echo "$year <br>";
        }
    }

?>