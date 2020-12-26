<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/models/OrdersModel.php");

class UnAuthorized extends Exception
{
    public function __construct()
    {
        parent::__construct("You must authorize");
    }
}

class OrdersController
{
    private $model;

    public function __construct()
    {
        $this->model = new OrdersModel();
    }

    public function addOrder(array &$attributes): void
    {
        $this->model->insert($attributes);
    }
}
