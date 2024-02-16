<?php
class Option{
    public $value;
    public $ivalue;
    public $optiontag;
    function __construct($v,$iv){
        $this->value = $v;
        $this->ivalue = $iv;
        $this->optiontag = "<option value = '$this->value'>$this->ivalue</option>";
    }
}

class Select{
    public $name;
    public $id;
    public $selectbar;
    function __construct($n,$i,$arr){
        $this->name = $n;
        $this->id = $i;
        $this->selectbar = "<select name = '$this->name' id = '$this->id'>\n";
        foreach($arr as $e){
            $this->selectbar = $this->selectbar.$e."\n";
        }
        $this->selectbar = $this->selectbar."</select>\n";
    }
}