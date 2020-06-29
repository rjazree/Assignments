<?php
    $stdin = fopen('php://stdin', 'r');
    $stdout = fopen('php://stdout', 'w');
    $flag=0;
    fscanf(STDIN,"%d\n",$n);
//taking input after testcase
    for($test=1;$test<=$n;$test++){
        $input = trim(fgets(STDIN));
       // $split=str_split($input);
        $split = explode(" ", $input); 
        $row=$split[0];
        $col=$split[1];
        $in=array();
        for($i=0;$i<$row;$i++){
            $a = trim(fgets(STDIN));
            $b=str_split($a);
            for($j=0;$j<$col;$j++){
                //fscanf(STDIN,"%s",$in[$i][$j]);
                $in[$i][$j]= $b[$j];
                if($in[$i][$j]=="$"){               
                $flag=1;    
                }
            }
        }

//Checking
        echo "Case ".$test.":\n";
        if($flag!=1)
            echo "No Gold Found\n";
        else{
            for($i=0;$i<$row;$i++){
                for($j=0;$j<$col;$j++){
                    if($in[$i][$j]=="$"){
                        $p=$i+1;
                        $q=$j+1;               
                        echo $p.",".$q."\n";   
                    }  
                }
            } 
        }
    $flag=0;
        }


?>