<?php


$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo "Enter 1st number:\n";
$a = trim(fgets(STDIN));

echo "Enter 2nd number:\n";
$b = trim(fgets(STDIN));

if($a == $b)
{
    echo "0\n";
    return;
}

if(strlen($a) < strlen($b))
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = strrev($a);
$b = strrev($b);

$carry = 0;
$result = array();
for($i = 0; $i< strlen($a); $i++)
{
    $x = ord($a[$i]) - ord("0");
    $y = $i < strlen($b) ? ord($b[$i]) - ord("0") : 0;

    if($x < $y + $carry)
    {
        $result[] = $x + 10 - $y - $carry;
        $carry = 1;
    }
    else
    {
        $result[] = $x - $y - $carry;
        $carry = 0;
    }
}

if($carry > 0)
 $result[] = 10 - $carry;

 for($i=count($result)-1; $i>=0; $i--)
    if($result[$i]!=0)
        break;

 while($i>=0)
 {
     echo $result[$i--];
 }

echo "\n";

?>
