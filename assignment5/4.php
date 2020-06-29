<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
echo "Enter a number : ";
fscanf(STDIN, "%d\n", $n);
$p=1;
for($i=1;$i<=$n;$i++){
	$p=$p*$i;
}
echo "The factorial is : ".$p;

?>