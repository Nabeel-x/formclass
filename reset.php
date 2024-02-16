<?php
class Reset extends Input{
    public $value;
    function __construct($n,$i,$v){
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