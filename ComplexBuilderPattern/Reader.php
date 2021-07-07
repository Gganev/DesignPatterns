<?php

class Reader extends User
{
    public function isAdministrator(): bool
    {
        return false;
    }
}