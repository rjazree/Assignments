<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

function perimeter($r){
    return 2*3.1416*$r;
}

function area($r){
    return 3.1416*pow($r,2);
    
}

echo "Enter radius of the circle : ";
fscanf(STDIN,"%d\n",$radius);

echo "\nPerimeter of the circle is ".perimeter($radius);

echo "\nArea of the circle is ".area($radius);