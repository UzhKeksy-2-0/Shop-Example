<?php
    namespace app\models;

use UK\UK_DataBase;

class category_connector extends UK_DataBase
{
    protected $dbTable = "category_connector";
    private int $id;
    private int $category_id;
    private int $product_id;

    /**
    *  __Construct method
    * @param int $id
    */
    public function __construct(int $id, int $category_id, int $product_id)
    {
        $this->id = $id;
        $this->category_id = $category_id;
        $this->product_id = $product_id;
    }

    /**
    * Get $id
    * @return int
    */
    public function getId(): int
    {
        return $this->id;

    }


      /**
    * Get $id
    * @return int
    */
    public function getproduct_id(): int
    {
        return $this->product_id;
        
    }

      /**
    * Get $id
    * @return int
    */
    public function getcategory_id(): int
    {
        return $this->category_id;
        
    }

    /**
    * Set $id
    * @param int $id
    */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    

    /**
    * Set $id
    * @param int $id
    */
    public function setcategory_id(int $category_id)
    {
        $this->category_id = $category_id;
    }

    /**
    * Set $id
    * @param int $id
    */
    public function setproduct_id(int $product_id)
    {
        $this->product_id = $product_id;
    }

   

}



