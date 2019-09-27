<?php


class dearclass{
    const aa = '23';
    public $font_size = '17';
    private $font_color = '#cdg';
    protected $string_name = 'khiarshor';

    function  property_print(){
        echo $this->string_name.'<br/>'.$this->font_color.'<br/>'.$this->font_size;
        $this ->mN;
    }
}

$yy = new dearclass();
$yy->property_print();
