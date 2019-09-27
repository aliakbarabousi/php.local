<?php

class DB {
    public $table ;

    public function all()
    {
        return " SELECT * FROM {$this->table} ";
    }

    public function find($id , $columns = null)
    {
        $columns = is_null($columns)? '*' :implode(',' , $columns) ;
        echo " SELECT $columns FROM {$this ->table} WHERE id ={$id}  ";
    }
}

$obj = new DB();
$obj ->table ='user';
$a = array('id','name');
$obj->find(3, $a);

