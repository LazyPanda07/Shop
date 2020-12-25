<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/models/UsersModel.php");

class CantFindUser extends Exception
{
    public function __construct()
    {
        parent::__construct("Can not find user");
    }
}

class WrongPassword extends Exception
{
    public function __construct()
    {
        parent::__construct("Wrong password");
    }
}

class UserAlreadyExists extends Exception
{
    public function __construct()
    {
        parent::__construct("User already exists");
    }
}

class WrongRepeatPassword extends Exception
{
    public function __construct()
    {
        parent::__construct("password not equal repeat_password");
    }
}

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel();
    }

    public function authorization(&$email, &$password): int
    {
        $tem = $this->model->getByField("email", $email);

        if ($tem == null) {
            throw new CantFindUser();
        }

        $tem = $tem[0];

        $password_hash = hash("sha256", $password);

        if ($tem["password"] == $password_hash) {
            return $tem["id"];
        }

        throw new WrongPassword();
    }

    public function registration(array &$attributes): array
    {
        $attributes["password"] = hash("sha256", $attributes["password"]);

        return $this->model->getById($this->model->insert($attributes));
    }
}
