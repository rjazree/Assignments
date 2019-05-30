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
        $high=$num[0];
        for($i=0;$i<$n;$i++){     
            if($high<$num[$i]){
                $high=$num[$i];
            }
        }
        echo "high : ".$high."\n";
        $low=$num[0];
        for($i=0;$i<$n;$i++){
            if($low>$num[$i]){
               $low=$num[$i];
            
            }
            
            
        }
        echo "low : ".$low;
