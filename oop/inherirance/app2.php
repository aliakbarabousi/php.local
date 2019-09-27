<?php
class car {
    protected $model;

    public function setModel($model)
    {
        $this -> model = $model;
    }

}

class SportsCar extends car {

    public function sport(){
        return "beep! I am a <i>" . $this ->model . "</i><br />";
    }
}

$sportsCar1 = new SportsCar();

$sportsCar1 ->setModel('samand');

echo $sportsCar1-> sport();




