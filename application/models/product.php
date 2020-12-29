<?php

namespace app\models;

use CH\modificators\DataBase\CH_DataBase;

class product extends CH_DataBase
{
    protected static $tableName = "product";
    protected $relations = Array(
        'image' => Array('hasMany', 'app\models\product_image', 'product_id'),
        'feedback' => Array('hasMany','app\models\product_feedback','product_id')
    );
}
