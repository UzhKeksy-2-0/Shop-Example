<?php
    namespace app\models;

use UK\UK_DataBase;

class user extends UK_DataBase
{
    protected $dbTable = "user";
    public $id;
    public $rool_id;
    public $login;
    public $password;

    /**
    * Get $id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get $roolid
    */
    public function getRool_id()
    {
        return $this->rool_id;
    }

    /**
    * Get $login
    */
    public function getLogin()
    {
        return $this->login;
    }

    /**
    * Get $password
    */
    public function getPassword()
    {
        return $this->password;
    }

    /**
    * Set $id
    */
    public function setId( $id)
    {
        $this->id = $id;
    }

    /**
    * Set $roolid
    */
    public function setRool_id( $rool_id)
    {
        $this->rool_id = $rool_id;
    }

    /**
    * Set $login
    */
    public function setLogin( $login)
    {
        $this->login = $login;
    }

    /**
    * Set $password
    */
    public function setPassword( $password)
    {
        $this->password = $password;
    }

}
