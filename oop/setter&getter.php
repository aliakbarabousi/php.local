<?php

class momy{

    private $model = 'BMW';

    public function setter($model44)
    {
       echo $this->model = $model44;


    }

    public function getter()
    {
    }

}

$obj = new momy();
$obj ->setter('pride');
//echo $obj ->getter();

