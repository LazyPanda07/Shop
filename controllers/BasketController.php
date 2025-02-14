<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/models/BasketModel.php");

class NoProducts extends Exception
{
    public function __construct()
    {
        parent::__construct("No products");
    }
}

class UnAuthorized extends Exception
{
    public function __construct()
    {
        parent::__construct("You must authorize");
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

    public function getProductsByUserId(int &$id): array
    {
        $result = $this->model->getByField("user_id", $id);

        if ($result == null) {
            throw new NoProducts();
        }

        return $result;
    }

    public function deleteProduct(int &$id): void
    {
        $this->model->deleteById($id);
    }
}
