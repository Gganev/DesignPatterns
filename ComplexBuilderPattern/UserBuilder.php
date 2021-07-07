<?php

abstract class UserBuilder
{
    protected User $user;

    public abstract function __construct();
    public abstract function setAccessRights() : self;
    public function getUser() : User
    {
        return $this->user;
    }

    public function setName(string $name) : self
    {
        $this->user->setName($name);
        return $this;
    }

    public function setAddress(string $address) : self
    {
        $this->user->setAddress($address);
        return $this;
    }
}