<?php
class Input{
    public string $inputname;
    public string $inputclass;
    public string $inputid;
    public string $inputtype;
    public string $inputplaceholder;
    public string $inputbar;
    function __construct(string $name,string $type,string $placeholder = '',string $id = '',string $class = '',string $extra = ''){
        $this->inputname = $name;
        $this->inputtype = $type;
        $this->inputclass = $class;
        $this->inputplaceholder = $placeholder;
        $this->inputid = $id;
        $this->inputbar = "<input type = '$this->inputtype' name = '$this->inputname' class = '$this->inputclass' id = '$this->inputid' placeholder = '$this->inputplaceholder' ".$extra.">";
    }
}

