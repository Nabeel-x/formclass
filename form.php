<?php
include 'input.php';
include 'hidden.php';
include 'submit.php';
include 'reset.php';
class Form{
    public string $formname;
    public string $formmethod;
    public string $formaction;
    public string $formDeploy;
    public string $formid;
    public string $formclass;
    function __construct(string $name = '',string $method = '',string $action = '',string $class = '',string $id = ''){
        $this->formname = $name;
        $this->formmethod = $method;
        $this->formaction = $action;
        $this->formid = $id;
        $this->formclass = $class;
        $this->formDeploy = "\n<form name = '$this->formname' method = '$this->formmethod' action = '$this->formaction' id= '$this->formid' class = '$this->formclass'>\n";
    }
    static function label($name,$value){
        return "<label for = '$name'>$value</label>";
    }

    function create($arr){
        foreach( $arr as $e){
            $this->formDeploy = $this->formDeploy.$e."\n";
        }
        $this->formDeploy=$this->formDeploy."</form>\n";
    }
    function display(){
        return $this->formDeploy;
    }
}