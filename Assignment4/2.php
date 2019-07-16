<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    echo "Fibonacci number (1-40)\n";
    $f1=1;
    $f2=1;
    echo "1: ".$f1."\n2: ".$f2."\n";
    $i=3;
    while(true){
       
        $next=$f1+$f2;
        
        $f1=$f2;
        $f2=$next;
        if($next> 1000000)
            break;
        else {
            echo $i.": ".$next."\n";
            $i++;
        }

    }