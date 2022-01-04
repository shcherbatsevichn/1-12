<?php 
error_reporting(-1);
//Определить, является ли заданное целое число N простым.
$n = 7;

if(isjustnumder($n)){
    echo("{$n} - это просое число!");
}else{
    echo("{$n} не является простым числом!");
}


function isjustnumder($number){
    $counter = 0;
    for ($n = 1; $n <= $number; $n++){
        if ($number % $n == 0){
            $counter++;
        }
    }
    if($counter <= 2){
        return true;
    }else{
        return false;
    }
    
}


