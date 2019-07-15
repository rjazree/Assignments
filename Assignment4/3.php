<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');


    for($j=0;$j<1000000;$j++){
     //   fscanf(STDIN,"%d\n",$n);
        $flag=0;
        for($i=2;$i<=$j/2;$i++){
            if($j%$i==0)
                $flag++;
        }
        if($flag==0)
            echo $j.": prime\n";
    }