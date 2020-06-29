<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $n);
$flag=0;
for($i=1;$i<=$n;$i++){
	for($j=2;$j<=sqrt($i);$j++){
	if($i%$j==0)
	$flag++;
}
if($flag==0 )
echo "$i\n";
$flag=0;
}

?>