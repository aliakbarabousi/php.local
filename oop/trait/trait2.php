<?php

trait first_trait{
    function print_value($in){
        echo '<pre>';
        print_r($in);
        echo '</pre>';
    }
}
trait second_trait{
    function print_value($a , $b){
        echo  $a + $b;
    }
}
class nb {
    use first_trait , second_trait{
        second_trait::print_value insteadof first_trait;
    }

}
(new nb())->print_value();
//$obj = new nb ();
//$obj ->print_value();

