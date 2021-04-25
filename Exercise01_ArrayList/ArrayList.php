<?php

class ArrayList
{
    public $size;
    public $arrayList;

    public function ArrayList($arr = '')
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function size()
    {
        $this->size = count($this->arrayList);
        return $this->size;
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function insert($index, $obj)
    {
        if ($this->isInteger($index)) {
            $this->arrayList[$index] = $obj;
        }
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
                array_splice($this->arrayList, $index, 1);
        }
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else die("ERROR in ArrayList.get");
    }
    public function clear()
    {
        $this->arrayList = [];
    }
    public function addAll($arr)
    {
        if (is_array($arr)) {
            foreach ($arr as $value) {
                array_push($this->arrayList, $value);
            }
        } else {
            $this->add($arr);
        }
    }
    public function indexOf($obj)
    {
        if (in_array($obj, $this->arrayList)) {
            return array_search($obj, $this->arrayList);
        } else {
           return "Phần tử không có trong mảng";
        }
    }
    public function sort()
    {
        sort($this->arrayList);
    }

}

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(9);
$listInteger->add(3);
$listInteger->add(4);
//$listInteger->remove(2);
//echo $listInteger->get(2);
print_r($listInteger->arrayList);
//print_r($listInteger->arrayList);
//$listInteger->clear();
////print_r($listInteger->arrayList);
//$arr = [1,2,3];
//$listInteger->addAll($arr);
//print_r($listInteger->arrayList);

//echo $listInteger->indexOf(5);
//$listInteger->sort();
//print_r($listInteger->arrayList);



