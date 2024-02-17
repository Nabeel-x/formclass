<?php
class Submit extends Input{
    public $submitvalue;
    public function __construct($value ='',$id ='',$class ='') {
        $this->submitvalue = $value;
        $this->inputclass = $class;
        $this->inputid = $id;
        $this->inputbar = "<input type = 'submit' value = '$this->submitvalue' class = '$this->inputclass' id = '$this->inputid'>";
    }
}