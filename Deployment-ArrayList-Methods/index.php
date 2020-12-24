<?php
include_once 'MyList.php';

$list1 = new MyList();
$list2 = new MyList([1,2,3,4,5]);

$list1->add(1);
$list1->add(3);
$list1->add(5);
$list1->add(7);
$list1->add(9);

echo $list1->indexOf(3);
echo "<pre>";
var_dump($list1);
var_dump($list2);

$list2->remove(0);
var_dump($list2);