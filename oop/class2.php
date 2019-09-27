<?php

class myclass{

    public function print_public(){
        echo 'this is a public method';
    }

    private function print_private(){
        echo 'this is a private method';
    }

    protected function print_protected(){
        echo 'this is a protected method';
    }

    public function test (){
        echo $this->print_public().'<br/>';
        echo $this->print_private().'<br/>';
        echo $this->print_protected().'<br/>';
    }

}

$obj = new myclass();

$obj->print_public();

//$obj->test();
