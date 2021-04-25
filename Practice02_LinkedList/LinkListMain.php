<?php
include_once "LinkList.php";

$linkList = new LinkList();
$linkList->insertFirst(12);
$linkList->insertFirst(11);
$linkList->insertLast(99);
$linkList->insertLast(97);
$totalNodes = $linkList->totalNodes();
$linkData = $linkList->readList();
echo "<pre>";
//echo $totalNodes;
echo implode("-", $linkData);
