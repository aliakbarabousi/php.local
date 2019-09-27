<?php

    class Fa{

    public function hello()
    {
        echo 'hello1';
    }
}


class Ch extends Fa {

    public function hello2()
    {
        echo 'hello2';
    }

}

$obj = new Ch();
$obj ->hello2();
