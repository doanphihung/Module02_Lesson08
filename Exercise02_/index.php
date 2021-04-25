<?php
class Hung
{
    public $width;
    public $height;

    public function __construct($a, $b)
    {
        $this->width = $a;
        $this->height = $b;
    }
}
$obj = new Hung(1, 2);
$obj->height = 1;
var_dump($obj);
