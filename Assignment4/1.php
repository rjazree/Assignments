<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    $arr=array();
    $a=array();
    $b=array();
    echo "Enter number of vertices : ";
    fscanf(STDIN,"%d\n",$v);
    echo "Enter number of edges : ";
    fscanf(STDIN,"%d\n",$e);
    for($i=1;$i<=$e;$i++){
        $in=trim(fgets(STDIN));
        $arr=explode(" ",$in);
        $a[$i]=$arr[0];
        $b[$i]=$arr[1];
    }

    echo "Adjacency List:\n";
    for($i=1;$i<=$e;$i++){
       echo $a[$i]." --> ".$b[$i]."\n";
    }
    for($i=1;$i<=$e;$i++){
        echo $b[$i]." --> ".$a[$i]."\n";
     }
    echo "Enter Adjacency matrix : \n";
    for($i=1;$i<=$v;$i++){
       $input=trim(fgets(STDIN));
     }

/*sample input output
3
3
1 2
1 3
2 3
Adjacency List:
1 --> 2
1 --> 3
2 --> 3
2 --> 1
3 --> 1
3 --> 2
Enter Adjacency matrix :
0 1 1
1 0 1
1 1 0
*/