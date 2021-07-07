<?php

abstract class User
{
    protected string $name = 'empty';
    protected string $address = 'empty';
    protected array $accessRights;

    public function sayName()
    {
        echo "\nMy name is " . $this->name;
    }
    public function sayAddress()
    {
        echo "\nMy address is " . $this->address;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    public function setAccessRights(array $rights)
    {
        $this->accessRights = $rights;
    }

    public abstract function isAdministrator() : bool;

    public function tellAccessRights()
    {
        foreach ($this->accessRights as $right)
        {
            echo "\nI am allowed to " . $right;
        }
    }
}