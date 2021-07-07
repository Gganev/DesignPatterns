<?php
require_once('User.php');
class Administrator extends User
{
    public function isAdministrator(): bool
    {
        return true;
    }
}