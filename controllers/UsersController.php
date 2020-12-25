<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/models/UsersModel.php");

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel();
    }

    public function authorization(&$email, &$password): int
    {
        $tem = $this->model->getByField("email", $email)[0];

        print($password);

        $password_hash = hash("sha256", $password);

        if ($tem == null) {
            throw new Exception("Can't find user");
        }

        if($tem["password"] == $password_hash)
        {
            return $tem["id"];
        }

        throw new Exception("Wrong password");
    }

    public function registration(array &$attributes): array
    {
        $attributes["password"] = hash("sha256", $attributes["password"]);

        return $this->model->getById($this->model->insert($attributes));
    }
}
