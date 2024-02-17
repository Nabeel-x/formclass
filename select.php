<?php
class Option{
    public $optionvalue;
    public $optionivalue;
    public $optiontag;
    function __construct($value,$displayvalue){
        $this->optionvalue = $value;
        $this->optionivalue = $displayvalue;
        $this->optiontag = "<option value = $this->optionvalue>$this->optionivalue</option>";
    }
}

class Select{
    public string$selectname;
    public string $selectid;
    public string $selectclass;
    public $selectbar;
    function __construct($name = '',$arr,$class = '',$id = ''){
        $this->selectname = $name;
        $this->selectclass = $class;
        $this->selectid = $id;
        $this->selectbar = "<select name = '$this->selectname' class = '$this->selectclass' id = '$this->selectid'>\n";
        foreach($arr as $e){
            $this->selectbar = $this->selectbar.$e."\n";
        }
        $this->selectbar = $this->selectbar."</select>\n";
    }
}