<?php

require_once('UserDirector.php');
require_once ('AdministratorBuilder.php');
require_once ('ReaderBuilder.php');

echo "Creating administrator with name and street\n";
$user = (new UserDirector(new AdministratorBuilder()))
    ->getBuilder()
    ->setName('Bob')
    ->setAddress('Rofl Street')
    ->getUser();

$user->sayName();
$user->sayAddress();
$user->tellAccessRights();

echo "\n\ncreating administrator with no name or street\n";
$user = (new UserDirector(new AdministratorBuilder()))
    ->getBuilder()
    ->getUser();

$user->sayName();
$user->sayAddress();
$user->tellAccessRights();

echo "\n\ncreating reader with no name or street\n";
$user = (new UserDirector(new ReaderBuilder()))
    ->getBuilder()
    ->getUser();

$user->sayName();
$user->sayAddress();
$user->tellAccessRights();


