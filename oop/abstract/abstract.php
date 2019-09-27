<?php
abstract class onlinePay{
     protected $options ;
    public function __construct()
    {
        $this ->options = array(
            'mellat' => array('username' => '12jij423', 'password' => 'DF342@E'),
            'saman' =>array('mashcode' => '12349cvftt') ,
            'parsian' =>array('Dercman' =>'KJifI#','password'=>'23D_J5T&0'));
    }

    abstract public function setmodel();
    abstract public function getmodel();

}

class mellat extends onlinePay{
    private $gatewayName;
    private $mellat_options ;


    public function __construct()
    {
        $this -> gatewayName = 'mellat';
        parent::__construct();
        $this ->mellat_options = $this -> options[$this ->gatewayName];
    }


    public function setmodel()
    {
        echo '<pre>';
        print_r($this->mellat_options);
        echo '</pre>';
    }

    public function getmodel()
    {

    }
}


$obj = Factory::make('mellat');
$obj->setmodel();

class Factory{
    public static function make($className)
    {
        $className = ucfirst($className);
        if(!class_exists($className)){
            return false;
        }else{
            return new $className;
        }
    }
}