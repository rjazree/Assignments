<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$l=trim(fgets(STDIN));
fprintf(STDOUT,"%s\n",strrev($l));
if($l==strrev($l))
echo "\nYes";
else
echo "\nNo";


?>