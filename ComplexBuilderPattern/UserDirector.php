<?php

class UserDirector
{
    private UserBuilder $builder;

    public function __construct(UserBuilder $builder)
    {
        $this->builder = $builder;
        $builder->setAccessRights();
    }

    public function getBuilder() : UserBuilder
    {
        return $this->builder;
    }
}