<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$num=array();
echo "Total digits in array : ";
fscanf(STDIN,"%d\n",$n);
echo "Input digits : ";
    for($i=0;$i<$n;$i++){
        fscanf(STDIN,"%d\n",$num[]);

    }

    for($i=0;$i<$n/2;$i++){
        $temp=$num[$i];
        $num[$i]=$num[$n-$i-1];
        $num[$n-$i-1]=$temp;
    }

    for($i=0;$i<$n;$i++){
        fprintf(STDOUT,"%d ",$num[$i]);

    }
