<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
$value = array("Ahmed 29 3.9", "Abul 29 3.9", "Rafiq 30 3.0", "Hasan 23 3.9", "Firoz 30 3.0");
echo count($value);
for($i=0;$i<count($value);$i++){
    $info_per_person=explode(" ",$value[$i]);
        echo $info_per_person;
        for($j = $i + 1; $j < count($arr); $j++) {
            $next_person_info=explode(" ",$value[$j]);
            if($next_person_info[2] > $info_per_person[2] or $next_person_info[1] < $info_per_person[1])
            {
                $temp = $info_per_person;
                $info_per_person = $next_person_info;
                $next_person_info = $temp;
            }
        }
    }
    
for($i = 0; $i < count($value); $i++)
echo $value[$i]."\n";
//var_dump($info_per_person);

?>