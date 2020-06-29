<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
echo "Enter row number : ";
fscanf(STDIN,"%d",$n);
echo "\nEnter coloumn number : ";
fscanf(STDIN,"%d",$m);
echo "\nEnter the number you want to find : ";
fscanf(STDIN,"%d",$t);
$arr=array(array());
echo "\nEnter the digits of array serially from left to right :  ";
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$m;$j++){
		
fscanf(STDIN,"%d ",$arr[$i][$j]);
	}
//echo "\n";
}

for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$m;$j++){
		
fprintf(STDOUT,"%d  ",$arr[$i][$j]);
	}
echo "\n";
}

for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$m;$j++){
		if($t==$arr[$i][$j]){
		echo "Row : ".$i."Coloumn : ".$j;
			break;
	}

	}
}




?>