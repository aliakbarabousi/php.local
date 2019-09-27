<?php

require_once "class/class-htmlExport.php";
require_once "class/class-xmlExport.php";
require_once "class/class-jsonExport.php";
//$export = 'html';
//$handler = $export .' '. 'Export';
$handlerobject = new htmlExport;

class check_Export{
    public function Doexport(can_export $handler){
         $handler -> export();
    }
}

$obj = new check_Export();
$obj ->Doexport($handlerobject);



