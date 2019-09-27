<?php

new finalclass();

function __autoload($className){
    $fileName = 'class-'.$className . '.php';
    $filepath = __DIR__. DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR .$fileName ;
    if(file_exists($filepath)){
        require_once $filepath;



    }
}



