<?php

include_once("BaseModel.php");

class OrdersModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();

        $this->tableName = "orders";
    }
}
