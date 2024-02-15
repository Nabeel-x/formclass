<?php
include 'input.php';
include 'submit.php';
include 'reset.php';
class Form{
    public $name;
    public $method;
    public $action;
    public $formDeploy;
    function __construct(string $n,string $m,$a){
        $this->name = $n;
        $this->method = $m;
        $this->action = $a;
        $this->formDeploy = "<form name = '$this->name' method = '$this->method' action = '$this->action'><table>";
    }
    function create($arr){
        foreach( $arr as $e){
            $this->formDeploy = $this->formDeploy."<tr><td>".$e."</td></tr>";
        }
        $this->formDeploy=$this->formDeploy."</table></form>";
    }
    function display(){
        return $this->formDeploy;
    }
}