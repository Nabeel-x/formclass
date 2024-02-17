<?php
class Button{
    public string $buttonname;
    public string $buttonid;
    public string $buttonclass;
    public string $buttononclick;
    public string $deploy;
    public string $buttontype;
    public string $buttonicon;
    function __construct(string $name = '',string $type = '',string $onclick = '',string $icon = '',string $class = '',string $id = ''){
        $content = $name.$icon;
        $this->buttonname =  $name;
        $this->buttonclass = $class;
        $this->buttonid = $id;
        $this->buttontype = $type;
        $this->buttononclick = $onclick;
        $this->buttonicon = $icon;
        $this->deploy = "<button type = '$this->buttontype' class = '$this->buttonclass' id = '$this->buttonid' onclick = '$this->buttononclick'>".$content."</button>";
    }
}