<?php
require('Iterator.php');
require('Set.php');

use SP\Set\Set;

$set = Set::fromArray([2,3]);

foreach($set as $k=>$v) {
	var_dump($k);
	var_dump($v);
} 

var_dump($set->toArray());

$set->add(5);
var_dump($set->toArray());

$set->add(3);
var_dump($set->toArray());

$set->remove(3);
var_dump($set->toArray());

$set->remove(1);
var_dump($set->toArray());

var_dump($set->has(1));

var_dump($set->has(2));