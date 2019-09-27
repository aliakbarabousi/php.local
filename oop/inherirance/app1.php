<?php



class father{

    private $model ='BMW';

    public function setter ($model){
        $this ->model = $model;
    }

    public function getter()
    {
        return $this ->model;
    }

}

class child extends father {

}



$obj = new child();

$obj ->setter('pride');

echo $obj ->getter();

