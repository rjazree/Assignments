<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    fscanf(STDIN,"%d\n",$decimal);
    $mod="";
    for($i=0;;$i++){
        $mod.=$decimal%2;
        $decimal= floor($decimal/2);
        if($decimal==0)
        break;




    }
    echo strrev($mod);

    $a=".23";
    $m="";
    echo ".";
    for($j=0;;$j++){
    $a= $a *2;
    //echo "a".$a;
    if($a<1){
    $m.='0';
    echo $m;
    //$a= $a *2;
    }
   // echo "\na".$a;
    if($a>1){
        $m.='1';
        echo $m;
        break; 
        $a=$a-1;

        
    }
}