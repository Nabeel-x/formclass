<?php
class Input{
    public $name;
    public $id;
    public $type;
    public $placeholder;
    public $inputbar;
    function __construct($n,$t,$i,$p,$extra){
        $this->name = $n;
        $this->type = $t;
        $this->placeholder = $p;
        $this->id = $i;
        $this->inputbar = "<input type = '$this->type' name = '$this->name' id = '$this->id' placeholder = '$this->placeholder' ".$extra.">";
    }
}

