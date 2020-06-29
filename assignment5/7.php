<?php
//$p="1834";
//$q="4567";
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
echo "Enter 1st number : ";
$p = trim(fgets(STDIN));
echo "\nEnter 2nd number : ";
$q = trim(fgets(STDIN));
$a = str_split($p, 1);
$a=array_reverse($a);
$l=sizeof($a);
$b = str_split($q, 1);
$b=array_reverse($b);
$l1=sizeof($b);
if($l1>$l){
    $t=$l1;
    $l1=$t;
    $l=$t;
    
}

$ad=array();
$c=0;
for($i=0;$i<$l;$i++){
    $s=$a[$i]+$b[$i];
    if($s>=10){
        $s=$s+$c;
        if($s==10){
        $ad[$i]='0';
        $c='1';
        $s='0';
        }
        else{
        $ad[$i]=round($s%10);
        $c=round($s/10);
        $s=0;
      }

}
    else{
    $ad[$i]=$s+$c;
    $s=0;
   $c=0;
    
    }
}

print_r(array_reverse($ad));

echo "Sum : ".implode(array_reverse($ad));





?>
