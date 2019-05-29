<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   
    function integer($integer){
        $binary_b4_point="";
            for($i=0;;$i++){
                $binary_b4_point.=$integer%2;  
                $integer= floor($integer/2);
                
                if($integer==0)
                    break;
            }

        echo strrev($binary_b4_point);
    }

    function fraction($fraction){
        $binary_after_point="";
        $p='.';
        $p.=$fraction;
        $fraction=$p;
        
            for($j=0;$j<=10;$j++){
                $fraction=$fraction*2;
            
                if($fraction<1)
                    $binary_after_point.='0';
                if($fraction>=1){
                    $binary_after_point.='1';
                    $fraction=$fraction-1;
                }
            }
        
        echo ".".$binary_after_point;
    }
        
    
    echo "Enter the decimal number : ";
    $input=trim(fgets(STDIN));
    echo "\nConverted binary number : ";   
        
        if (strpos($input, '.') !== false){
            $input_array=explode(".",$input);
            $integer=$input_array[0];
            $fraction=$input_array[1];

            integer($integer);
            fraction($fraction); 
        }

        else{
            $integer=$input;
            integer($integer);
        }