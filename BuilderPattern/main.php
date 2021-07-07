<?php

class User {
    public string $name;
    public string $address;

    private function __construct()
    {
    }

    public static function build() : BuildUser
    {
        return new BuildUser(new self);
    }

    public function sayName()
    {
        echo 'My name is ' . $this->getName() . '.';
    }

    private function getName() : string
    {
        return $this->name ?? 'not set';
    }
}

interface BuildUserInterface {
    public function setName(string $name) : self;
    public function setAddress(string $address) : self;
}

class BuildUser implements BuildUserInterface {
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function setName(string $name) : self
    {
        $this->user->name = $name;
        return $this;
    }

    public function setAddress(string $address): self
    {
        $this->user->address = $address;
        return $this;
    }

    public function get() : User
    {
        return $this->user;
    }
}

$user = User::build()->setName('Bob')->setAddress('Bob Road')->get();
$user->sayName();

$user2 = User::build()->get();
$user2->sayName();


