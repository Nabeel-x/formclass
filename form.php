<?php
include 'input.php';
include 'hidden.php';
include 'submit.php';
include 'reset.php';
class Form{
    public string $name;
    public string $method;
    public $action;
    public $formDeploy;
    function __construct(string $n,string $m,$a){
        $this->name = $n;
        $this->method = $m;
        $this->action = $a;
        $this->formDeploy = "<form name = '$this->name' method = '$this->method' action = '$this->action'>\n";
    }
    static function label($name,$value){
        return "<label for = '$name'>$value</label>";
    }
    function tabulate($arr){
        $tabularform = "<table>\n";
        foreach($arr as $e){
            $tabularform = $tabularform."<tr><td>".$e."</td></tr>\n";
        }
        $tabularform = $tabularform."</table>\n";
        return "<form>".$tabularform."</form>\n";
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