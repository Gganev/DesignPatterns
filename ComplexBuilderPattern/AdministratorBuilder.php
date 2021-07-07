<?php
require_once('UserBuilder.php');
require_once('Administrator.php');
require_once('User.php');
class AdministratorBuilder extends UserBuilder
{
    public function __construct()
    {
        $this->user = new Administrator();
    }

    public function setAccessRights(): self
    {
        $this->user->setAccessRights([
            'read articles',
            'edit articles',
            'delete articles'
        ]);
        return $this;
    }
}