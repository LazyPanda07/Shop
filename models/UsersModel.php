<?php

include_once("BaseModel.php");

class UsersModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName = "users";
    }
}
