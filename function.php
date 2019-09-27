<?php


function sum ($number_one , $number_two){
    echo 'this is answer: ' , $number_one + $number_two;
}

function get_bg($bg_color_name){
    $result = '';
    switch ($bg_color_name){
        case 'red':
            $result='#c00';
        break;
        case 'blue':
            $result='#00c';
        break;
        case 'yellow':
            $result='#ffeb3b';
        break;
    }
    return $result;
}



function get_users(){
    return array(
        array('id' => 1, 'name'=>'ali', 'email' => 'ali@gmail.com'),
        array('id' => 2, 'name'=>'hasan', 'email' => 'hasan@gmail.com'),
        array('id' => 3, 'name'=>'akbar', 'email' => 'akbar@gmail.com'),
        array('id' => 4, 'name'=>'eli', 'email' => 'eli@gmail.com'),
        array('id' => 5, 'name'=>'pedram', 'email' => 'pedram@gmail.com'),
        array('id' => 6, 'name'=>'nikoo', 'email' => 'nikoo@gmail.com'),
    );
}





