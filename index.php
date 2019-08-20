<?php

// Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "Linianos". But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.
    $arr = array();    
    //Print Linio if multiple of 3
        $i = 1;
        for ($i =1; $i<=100 ; $i++){
            $arr[$i  ] = $i;
            $arr[$i+1] = $i+1;
            $arr[$i+2] = "Linio";
            $i = $i+2;
        }

    //Print IT if multiple of 5
        $i=1;
        for ($i =1; $i<=100 ; $i++){
            $arr[$i+4] = "IT";
            $i = $i+4;
        }
    //Print Linianos if multiple of 3 and 5
        $i=1;
        for ($i =1; $i<=100 ; $i++){
            if( ($i%15) == 0 ){
                $arr[$i] = "Linianos";
            }
        }

    //Print all the number
    for ($i =1; $i<=100 ; $i++){
        echo $arr[$i]  . "<br>";
    }

?>