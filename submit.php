<?php
class Submit extends input{
    public $value;
    public function __construct(string $n,string $i,string $v) {
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