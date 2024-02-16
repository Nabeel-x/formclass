<?php
class Hidden extends Input{
    public $value;
    function __construct($n,$i,$v){
        $this->name = $n;
        $this->id = $i;
        $this->value = $v;
        $this->inputbar = "<input type = 'hidden' name = '$this->name' id = '$this->id' value = '$this->value'>\n";
    } 
}