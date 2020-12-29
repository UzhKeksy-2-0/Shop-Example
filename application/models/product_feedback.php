<?php

namespace app\models;

use CH\modificators\DataBase\CH_DataBase;

class product_feedback extends CH_DataBase
{
    protected static $tableName = "product_feedback";
    protected $relations = Array(
        'user' => Array('hasOne','app\models\user','client_id')
    );
}
