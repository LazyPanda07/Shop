<?php

include_once("BaseModel.php");

class BasketModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();

        $this->tableName = "basket";
    }
}
