<?php


$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
$n = trim(fgets(STDIN));


$strip = array("?","!",",",";","."); 
$n= str_replace($strip, "", $n);
$n=trim($n, '"');
$p= explode(" ", $n);

print_r(array_count_values($p));
?>