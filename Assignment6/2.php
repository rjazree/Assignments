<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//$q = new Queue();
 

class Queue{

    private $array=[];
    function enque($item){
        array_push($this->array,$item);
    }

    function deque(){
        echo array_shift($this->array);
 }
}
    $q= new Queue();
    //$queue->enque('1');

 while(1)
 {
     echo "\nPress 1 to add element to queue";
     echo "\nPress 2 to delete element from queue";
     echo "\nPress 3 to display queue";
     echo "\nPress 4 to reset queue";
     echo "\nPress 5 to queue";
     echo "\nChoose one:\n";
    
     fscanf(STDIN,"%d",$n);
    if($n==1){
        echo "\nAdd value to the queue: ";
        fscanf(STDIN,"%s",$i);
        $q->enque($i);
    }
 
    if($n==2){
        echo  $q->deque();;
    }
     
    if($n==3){
        var_dump($q);
    }

    if($n==4){
        $q = new Queue();
     }
 
     
    if($n==5){
        break;
    }
 }



?>