<?php
    namespace app\models;

use UK\UK_DataBase;

class order extends UK_DataBase
{
    protected $dbTable = "order";
    public $id;
    public $status_id;
    public $client_id;
    public $reciver_id;
    public $date;
    public $date_sendp_lan;
    public $date_send;

    /**
    * Get $id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get $statusid
    */
    public function getStatus_id()
    {
        return $this->status_id;
    }

    /**
    * Get $clientid
    */
    public function getClient_id()
    {
        return $this->client_id;
    }

    /**
    * Get $reciverid
    */
    public function getReciver_id()
    {
        return $this->reciver_id;
    }

    /**
    * Get $date
    */
    public function getDate()
    {
        return $this->date;
    }

    /**
    * Get $datespendplan
    */
    public function getDate_send_plan()
    {
        return $this->date_send_plan;
    }

    /**
    * Get $datesend
    */
    public function getDate_send()
    {
        return $this->date_send;
    }
    

    /**
    * Set $id
    */
    public function setId( $id)
    {
        $this->id = $id;
    }

    /**
    * Set $statusid
    */
    public function setStatus_id( $status_id)
    {
        $this->status_id = $status_id;
    }

    /**
    * Set $clientid
    */
    public function setClient_id( $client_id)
    {
        $this->client_id = $client_id;
    }

    /**
    * Set $reciverid
    */
    public function setReciver_id( $reciver_id)
    {
        $this->reciver_id = $reciver_id;
    }

    /**
    * Set $date
    */
    public function setDate( $date)
    {
        $this->date = $date;
    }

    /**
    * Set $datespendplan
    */
    public function setDate_send_plan( $date_send_plan)
    {
        $this->date_send_plan = $date_send_plan;
    }

    /**
    * Set $datesend
    */
    public function setDate_send( $date_send)
    {
        $this->date_send = $date_send;
    }

}

