<?php

class User {
    public string $name;
    public string $address;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayName()
    {
        echo 'My name is ' . $this->getName() . '.';
    }

    private function getName() : string
    {
        return $this->name ?? 'not set';
    }

    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }
}

$user = (new User('Bob'))->setAddress('Bob Road');
$user->sayName();


