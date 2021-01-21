<?php
class User
{
    public $login = 'admin';
    public $pass = 'amdin_pass';
    public function getLogin()
    {
        return $this->login;
    }
}
die('alive');
$user = new User();
// echo $user->login;

echo $user->getLogin();
$korova = new User();
$korova->login = 'korova';
echo $korova->getLogin();