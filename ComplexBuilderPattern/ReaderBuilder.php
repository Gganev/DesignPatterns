<?php
require_once('UserBuilder.php');
require_once('Reader.php');
require_once('User.php');
class ReaderBuilder extends UserBuilder
{
    public function __construct()
    {
        $this->user = new Reader;
    }

    public function setAccessRights(): self
    {
        $this->user->setAccessRights([
            'read articles'
        ]);
        return $this;
    }
}