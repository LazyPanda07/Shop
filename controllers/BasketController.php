<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/models/BasketModel.php");

class NoProducts extends Exception
{
    public function __construct()
    {
        parent::__construct("No products");
    }
}

class BasketController
{
    private $model;

    public function __construct()
    {
        $this->model = new BasketModel();
    }

    public function addProduct(array &$attributes): void
    {
        $this->model->insert($attributes);
    }

    public function getProductsByuser_id(int &$id): array
    {
        $result = $this->model->getById($id);

        if($result == null)
        {
            throw new NoProducts();
        }

        return $result;
    }
}
