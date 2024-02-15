<?php
class Input{
    public string $name;
    public string $id;
    public string $type;
    public string $placeholder;
    public string $inputbar;
    function __construct(string $n,string $t,string $i,string $p,$extra){
        $this->name = $n;
        $this->type = $t;
        $this->placeholder = $p;
        $this->id = $i;
        $this->inputbar = "<input 
        type = '$this->type' 
        name = '$this->name' 
        id = '$this->id' 
        placeholder = '$this->placeholder' ".$extra."
        >";
    }
}

