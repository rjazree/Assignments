<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    fprintf(STDOUT,"Enter first number : ");
    fscanf(STDIN,"%d",$a);

    fprintf(STDOUT,"\nEnter second number : ");
    fscanf(STDIN,"%d",$b);
    $a=$a+$b;

    echo "Sum : ".$a;
    

?>