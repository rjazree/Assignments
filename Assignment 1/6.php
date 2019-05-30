<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   
    function integer($integer){
        $binary_b4_point=0;
        $length=strlen($integer);
        $integer=strrev($integer); 
        $integer_array  = array_map('intval', str_split($integer));

       
        $binary_b4_point="";
            for($i=0;$i<$length;$i++){
                $binary_b4_point = $binary_b4_point + ($integer_array[$i] * (pow(2,$i)));
              
            }

        return $binary_b4_point;
    }

    function fraction($fraction){
        $binary_after_point=0;
        $length=strlen($fraction);
        $integer_array2  = array_map('intval', str_split($fraction));

            for($j=1;$j<=$length;$j++){
                $binary_after_point = $binary_after_point + ( $integer_array2[$j-1]/(pow(2,$j))) ;
                
            }
        
        return $binary_after_point;
    }
        
    
    echo "Enter the binary number : ";
    $input=trim(fgets(STDIN));
    echo "\nConverted decimal number : ";   
        
        if (strpos($input, '.') !== false){
            $input_array=explode(".",$input);
            $integer=$input_array[0];
            $fraction=$input_array[1];

           
            echo integer($integer)+fraction($fraction);
           
        }

        else{
            $integer=$input;
            echo integer($integer);
            
        }

       