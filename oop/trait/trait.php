<?php

trait trait1{
    public $name = 'ali';
    function print_name(){
        echo $this ->name;
    }
    function sum ($a , $b){
        return $a + $b;
    }
}

class Ch {

    use trait1;
}

$obj = new Ch();
echo $obj->sum(2,3);