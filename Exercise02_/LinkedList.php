<?php
include "Node.php";

class LinkedList
{
    public $count;
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }

    public function addFirst($data)
    {
        $obj = new Node($data);
        $obj->next = $this->firstNode;
        $this->firstNode = $obj;

        if ($this->lastNode == NULL) {
            $this->lastNode = $obj;
        }

        $this->count++;
    }

    public function addLastNode($data)
    {
        if ($this->firstNode != NULL) {
            $obj = new Node($data);
            $this->lastNode->next = $obj;
            $obj->next = NULL;
            $this->lastNode = $obj;
            $this->count++;
        } else $this->addFirst($data);
    }
    public function add($data, $index)
    {
            if ($index == 0) {
                $this->addFirst($data);
            } else {
                $obj = new Node($data);
                $current = $this->firstNode;
                $previous = $this->firstNode;

                for ($i = 0; $i < $index; $i++) {
                    $previous = $current;
                    $current = $current->next;
                }
                $obj->next = $current;
                $previous->next = $obj;
                $this->count++;
            }
    }
    public function totalNode()
    {
        return $this->count;
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    public function remove(int $index)
    {
        if ($index == 0) {
            $this->firstNode = $this->firstNode->next;
        } else if (0 < $index && $index < $this->count) {
            $current = $this->firstNode;
            for ($i = 0; $i < $index -1; $i++) {
                $current = $current->next;
            }
            $deleteNode = $current->next;
            $nextNode = $current->next->next;
            $current->next = $nextNode;
            $deleteNode->next = NULL;
        }
    }
}
$obj = new LinkedList();
$obj->addLastNode(5);
$obj->addFirst(3);
$obj->addFirst(2);
$obj->addFirst(0);
echo "<pre>";
 var_dump( $obj->firstNode);
 $obj->remove(3);
 $obj->remove(2);
 echo "<hr>";
var_dump( $obj->firstNode);



