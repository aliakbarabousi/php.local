<?php

class data_R{
    static public $prefix = 255;

     public  function export(){
//        echo self::$prefix;
       echo static::$prefix;
    }
}

class nnn extends data_R{
    static public $prefix = 1540;

}



nnn::export();