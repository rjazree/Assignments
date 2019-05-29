<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$num=array();

fscanf(STDIN,"%d\n",$n);

for($i=0;$i<$n;$i++){
    fscanf(STDIN,"%d\n",$num[$i]);

}

for($i=0;$i<$n;$i++){
    if($num[$i]>$num[$i+1]){
    $flag1=$num[$i];
    $flag2=$num[$i+1];
    
    }
    else{
    $flag1=$num[$i+1];
    $flag2=$num[$i];
    
    }
}

echo $flag1."    ".$flag2;