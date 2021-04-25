<?php
include_once "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(4);
echo $listInteger->get(2);
//print_r($listInteger->arrayList);
//echo $listInteger->get(-1);
