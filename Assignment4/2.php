<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    echo "Fibonacci number (1-40)\n";
    $f1=1;
    $f2=1;
    echo "1: ".$f1."\n2: ".$f2."\n";
    for($i=3;$i<=40;$i++){
        $next=$f1+$f2;
        echo $i.": ".$next."\n";
        $f1=$f2;
        $f2=$next;

    }