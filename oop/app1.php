<?php


class Myclass {
    public $font_size = '18px';
    public $font_color = 'red';
    public $string_name = 'the text is blue';

    public function dump_text()
    {
        return '<p style="font-size:'.$this->font_size .';color:'.$this->font_color .'">'.$this->string_name.'</p>';
    }
}

$f = new Myclass();
$f->font_size='15px';
$f->font_color='pink';
$f->string_name='zahra ostad riazimon bood khoda khoda mikonam rafte bashe vahed';

echo $f->dump_text();