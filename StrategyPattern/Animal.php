<?php

require_once('FlyingTypes.php');

abstract class Animal
{
    protected FlyingType $flyingType;

    public function fly()
    {
        echo $this->flyingType->fly();
    }

    public function setFlyingType(FlyingType $flyingType)
    {
        $this->flyingType = $flyingType;
    }
}