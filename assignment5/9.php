<?php

$p="1234";
$q="929";
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//$p = trim(fgets(STDIN));
//$q = trim(fgets(STDIN));
$a = str_split($p, 1);

print_r($a);
//$a=array_reverse($a);
$l=sizeof($a);
$b = str_split($q, 1);
echo $b;
//$b=array_reverse($b);
$l1=sizeof($b);
if($l1>$l){
    $t=$l1;
    $l1=$t;
    $l=$t;
}

$m=array();
$c=0;
for($j=0;$j<$l1;$j++){
for($i=$l-1;$i>=0;$i--){
	$mul=$a[$i]*$b[$j];
	if($mul>=10){
		$mul=$mul+$c;
		$m[$i]=round($mul%10);
		$c=$mul/10;

	}
	else{
	$m[$i]=round($mul+$c);
	$c=0;
	//$mul=0;
}
}
print_r(($m));

}




?>