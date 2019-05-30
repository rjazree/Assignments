<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    $num=array();
    echo "Total digits in array : ";
    fscanf(STDIN,"%d\n",$n);
    echo "Input digits : ";
        for($i=0;$i<$n;$i++){
            fscanf(STDIN,"%d\n",$num[$i]);

        }
        echo "\n\n";
        for($i=0;$i<$n;$i++){
            if($num[$i]>$num[$i+1]){
            $flag1=$num[$i];
            $num[$i+1]=$num[$i];
            }
            else{
            $flag1=$num[$i+1];
            
            }
        }

        for($i=0;$i<$n;$i++){
            if($num[$i]<$num[$i+1]){
            $flag2=$num[$i];
            $num[$i+1]=$num[$i];
            echo "1 .".$flag2."\n";
            }
            else{
            $flag2=$num[$i+1];
            
            echo "2 .".$flag2."\n";
            
            }
        }

    echo "\n\n".$flag1;
    echo "\n\n".$flag2;