<?php
    namespace app\models;

use UK\UK_DataBase;

class payment extends UK_DataBase
{
    protected $dbTable = "payment";
    public $id;
    public $date;
    public $order_id;
    public $payment;
    public $payment_type;

    /**
    * Get $id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get $date
    */
    public function getDate()
    {
        return $this->date;
    }

    /**
    * Get $payment
    */
    public function getPayment()
    {
        return $this->payment;
    }

    
    /**
    * Get $payment_type
    */
    public function getPayment_type()
    {
        return $this->payment_type;
    }

    /**
    * Set $id
    */
    public function setId( $id)
    {
        $this->id = $id;
    }

    /**
    * Set $date
    */
    public function setDate( $date)
    {
        $this->date = $date;
    }

    /**
    * Set $payment
    */
    public function setPayment( $payment)
    {
        $this->payment = $payment;
    }

    /**
    * Set $payment_type
    */
    public function setPayment_type( $id)
    {
        $this->payment_type = $id;
    }

}


