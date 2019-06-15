<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$in);

    $arr[][]=array(array());
        for($i=0;$i<$in;$i++){
            for($j=0;$j<$in;$j++)
            fscanf(STDIN,"%d\n",$arr[$i][$j]);


        }
        
        $new_arr[][]=array(array());
        for($i=0;$i<$in;$i++){
            for($j=0;$j<$in;$j++){
                if($i==0){
                    if($j==0)
                        $new_arr[$i][$j]=$arr[$i][$j+1]+$arr[$i+1][$j];
                    if($j==($in-1))
                        $new_arr[$i][$j]=$arr[$i][$j-1]+$arr[$i+1][$j];
                    else
                        $new_arr[$i][$j]=$arr[$i][$j-1]+$arr[$i][$j+1]+$arr[$i+1][$j];
                }
                if($i==($in-1)){
                    if($j==0)
                        $new_arr[$i][$j]=$arr[$i-1][$j]+$arr[$i][$j+1];
                    if($j==$i)
                        $new_arr[$i][$j]=$arr[$i][$j-1]+$arr[$i-1][$j];
                    else
                       $new_arr[$i][$j]=$arr[$i][$j-1]+$arr[$i-1][$j]+$arr[$i][$j+1];
                }

                else{
                    if($j==0)
                        $new_arr[$i][$j]=$arr[$i-1][$j]+$arr[$i][$j+1]+$arr[$i+1][$j];                    
                    if($j==($in-1))
                        $new_arr[$i][$j]=$arr[$i-1][$j]+$arr[$i+1][$j]+$arr[$i][$j-1];                    
                    else{
                        $new_arr[$i][$j]=$arr[$i-1][$j]+$arr[$i][$j-1]+$arr[$i][$j+1]+$arr[$i+1][$j];
                
            
                    }
            
            
                }

            }
           
        }
        echo "Old array : \n";
        for($i=0;$i<$in;$i++){
            for($j=0;$j<$in;$j++){
                echo $arr[$i][$j]." ";
         
            }
            echo "\n";

        }


        echo "\nNew array : \n";
        $sum=-1000;
        for($i=0;$i<$in;$i++){
            for($j=0;$j<$in;$j++){
                if($new_arr[$i][$j]>$sum){
                    $sum=$new_arr[$i][$j];
                    $a=$i;
                    $b=$j;
                }
    
                echo $new_arr[$i][$j]." ";
            }
            echo "\n";
        }

        echo "The largest sum is : ".$sum."\nThe position is : [".$a."][".$b."]"; 