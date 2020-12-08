<?php
    namespace app\models;

use UK\UK_DataBase;

class contact_information extends UK_DataBase
{
    protected $dbTable = "contact_information";
    public $id;
    public $user_id;
    public $contact_type_id;
    public $contact;

    /**
    * Get $id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get $user
    */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
    * Get $contacttypeid
    */
    public function getContact_type_id()
    {
        return $this->contact_type_id;
    }

    /**
    * Get $contact
    */
    public function getContact()
    {
        return $this->contact;
    }

    /**
    * Set $id
    */
    public function setId( $id)
    {
        $this->id = $id;
    }

    /**
    * Set $userid
    */
    public function setUser_id( $user_id)
    {
        $this->user_id = $user_id;
    }

    /**
    * Set $contacttypeid
    */
    public function setContact_type_id( $contact_type_id)
    {
        $this->contact_type_id = $contact_type_id;
    }

    /**
    * Set $contact
    */
    public function setContact( $contact)
    {
        $this->contact = $contact;
    }

}
