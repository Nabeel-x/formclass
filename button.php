<?php
class Button{
    public $name;
    public $id;
    public $onclick;
    public $deploy;
    public $type;
    public $icon;
    function __construct($n,string $i,string $t,$on,$ic){
        $content = $n!=null? $n:$ic;
        $this->name =  $n;
        $this->id = $i;
        $this->type = $t;
        $this->onclick = $on;
        $this->icon = $ic;
        $this->deploy = "<button id = '$this->id' type = '$this->type' onclick = '$this->onclick'>".$content."</button>";
    }
}