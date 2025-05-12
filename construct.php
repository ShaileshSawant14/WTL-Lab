<?php

class demo{
    var $name="nigga";
    function __construct($name)
    {
        $this->name=$name;
    }
}
$obj=new demo("Rohan");
echo $obj->name;
?>