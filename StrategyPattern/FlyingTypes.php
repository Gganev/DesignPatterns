<?php

interface FlyingType {
    public function fly();
}

class CantFly implements FlyingType
{
    public function fly()
    {
        echo 'I cannot fly.';
    }
}

class FlysHigh implements FlyingType
{
    public function fly()
    {
        echo 'Flying high.';
    }
}

class FlysLow implements FlyingType
{
    public function fly()
    {
       echo 'roflmao.';
    }
}