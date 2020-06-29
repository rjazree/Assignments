<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo "Enter first circle's center (x,y) : ";
fscanf(STDIN, "%d,%d\n", $x1,$y1);

echo "Enter second circle's center (x,y) : ";
fscanf(STDIN, "%d,%d\n", $x2,$y2);


echo "Enter first circle's radius : ";
fscanf(STDIN, "%d\n", $r1);


echo "Enter second circle's radius : ";
fscanf(STDIN, "%d\n", $r2);
$d=sqrt(pow($x1-$x2,2)+pow($y1-$y2,2));
if($d<=$r1+$r2)
echo "Yes";
else
echo "No";

?>