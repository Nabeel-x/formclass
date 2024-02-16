<?php
class Submit extends Input{
    public $value;
    public function __construct($n,$i,$v) {
        $this->name = $n;
        $this->value = $v;
        $this->id = $i;
        $this->inputbar = "<input 
        type = 'submit' 
        name = '$this->name' 
        id = '$this->id' 
        value = '$this->value'
        >";
    }
}