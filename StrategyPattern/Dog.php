<?php

require_once('Animal.php');

class Dog extends Animal
{
    public function __construct(FlyingType $flyingType = null)
    {
        $this->flyingType = $flyingType ?? new CantFly();
    }
}