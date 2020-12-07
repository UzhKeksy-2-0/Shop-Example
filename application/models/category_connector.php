<?php
    namespace app\models;

use UK\UK_DataBase;

class category_connector extends UK_DataBase
{
    protected $dbTable = "category_connector";
    private  $id;
    private  $category_id;
    private  $product_id;


    /**
    * Get $id
    * @return int
    */
    public function getId()
    {
        return $this->id;

    }


      /**
    * Get $id
    * @return int
    */
    public function getproduct_id()
    {
        return $this->product_id;
        
    }

      /**
    * Get $id
    * @return int
    */
    public function getcategory_id()
    {
        return $this->category_id;
        
    }

    /**
    * Set $id
    * @param int $id
    */
    public function setId( $id)
    {
        $this->id = $id;
    }

    

    /**
    * Set $id
    * @param int $id
    */
    public function setcategory_id( $category_id)
    {
        $this->category_id = $category_id;
    }

    /**
    * Set $id
    * @param int $id
    */
    public function setproduct_id( $product_id)
    {
        $this->product_id = $product_id;
    }

   

}



