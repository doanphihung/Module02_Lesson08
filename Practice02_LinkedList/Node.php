<?php
class Node
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    function readNode()
    {
        return $this->data;
    }
}
