<?php
echo "Give input in this manner-    \"1, 2, 3, 4\" \n";
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
$n = trim(fgets(STDIN));
$s=0;
$p= explode(",", $n);
$t=sizeof($p);
for($i=0;$i<$t;$i++){
    $s=$s+$p[$i];
}

fprintf(STDOUT, "Mean : %s\n",round($s/$t,3));

?>



