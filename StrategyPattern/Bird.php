<?php

require_once('Animal.php');

class Bird extends Animal
{
    public function __construct(FlyingType $flyingType = null)
    {
        $this->flyingType = $flyingType ?? new CantFly();
    }
}