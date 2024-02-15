<?php
class Reset extends input{
    public $value;
    function __construct(string $n, string $i, string $v){
        $this->name = $n;
        $this->value = $v;
        $this->id = $i;
        $this->inputbar = "<input 
        type = 'reset' 
        name = '$this->name' 
        id = '$this->id' 
        value = '$this->value';
        >";
    }
}