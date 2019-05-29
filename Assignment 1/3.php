<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$num=array();

fscanf(STDIN,"%d\n",$n);

for($i=0;$i<$n;$i++){
    fscanf(STDIN,"%d\n",$num[]);

}

for($i=0;$i<$n;$i++){
    $num[$i]=$num[$i]*2;
    echo $num[$i]."  ";
}

