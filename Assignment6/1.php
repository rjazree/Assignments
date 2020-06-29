<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
class Stack{
    private $stack;
    private $position;

    function __Construct(){
        $this->stack=array();
        $this->position=0;
    }
    function push($item){

        $this->stack[$this->position++]=$item;
    }
    function pop(){
            return array_shift($this->stack);
        
        
    }
    function display(){
        var_dump($this->stack);

    }
}

$stack = new Stack();
while(1)
{
    echo "\nPress 1 to add element to stack";
    echo "\nPress 2 to delete element from stack";
    echo "\nPress 3 to display stack";
    echo "\nPress 4 to reset stack";
    echo "\nPress 5 to stop";
    echo "\nChoose one:\n";
   
    fscanf(STDIN,"%d",$n);
    if($n==1){
        echo "\nAdd value to the stack: ";
        fscanf(STDIN,"%s",$i);
        $stack->push($i);
}

    if($n==2){
        echo $stack->pop();
        //$f = array_pop($stack);
        //print_r($stack);
    
    }
    
    if($n==3){
        $stack->display();
        }
        if($n==4){
            $stack = new Stack();
    }

    
    if($n==5){
       break;
   }
}
?>