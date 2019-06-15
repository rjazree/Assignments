<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$in);

    $arr=array(array());
        for($i=0;$i<$in;$i++){
            for($j=0;$j<$in;$j++)
            fscanf(STDIN,"%d\n",$arr[$i][$j]);


        }

        for($i=0;$i<$in;$i++){
            for($j=0;$j<$in;$j++){
                echo $arr[$i][$j]." ";
            }
            echo "\n";
        }

        $sum=0;
        $sum1=0;

        for($i=0;$i<$in;$i++){
           
            echo "arr".$arr[$i][$i]."\n";
            $sum1=$sum1+$arr[$i][$i];

        }
        echo "\nFirst diagonal summation : ".$sum1."\n";
       

        $temp=$in-1;
        for($i=0;$i<$in;$i++){
           
           
            $sum=$sum+$arr[$i][$temp];
            $temp--;

        }

        echo "Second diagonal summation : ".$sum;