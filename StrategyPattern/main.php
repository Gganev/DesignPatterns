<?php

require_once('Dog.php');
require_once('Bird.php');

$dog = new Dog(new FlysHigh());
$dog->fly();

$bird = new Bird(new CantFly());
$bird->fly();

$bird2 = new Bird(new FlysLow());
$bird2->fly();

$bird2->setFlyingType(new CantFly());
$bird2->fly();