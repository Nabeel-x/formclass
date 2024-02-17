<?php
class Hidden extends Input{
    public $hiddenvalue;
    function __construct(string $name,$value,string $id = ''){
        $this->inputname = $name;
        $this->inputid = $id;
        $this->hiddenvalue = $value;
        $this->inputbar = "<input type = 'hidden' name = '$this->inputname' value = $this->hiddenvalue id = '$this->inputid'>\n";
    } 
}