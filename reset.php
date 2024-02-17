<?php
class Reset extends Input{
    public $inputvalue;
    function __construct($value,$class,$id){
        $this->inputvalue = $value;
        $this->inputclass = $class;
        $this->inputid = $id;
        $this->inputbar = "<input type = 'reset' value = '$this->inputvalue' class = '$this->inputclass' id = '$this->inputid' >";
    }
}