<?php
//$p="1834";
//$q="4567";

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
  
    // Initialize result 
    $res[1] = 1; 
    $res_size = 1; 
  
   
$f=1;
    for ($i=1;$i<90; $i++){
        $f=$f*$i;
        $array  = str_split($f);
    }
var_dump($array);


?>
