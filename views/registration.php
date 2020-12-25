<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/UsersController.php");

session_start();

$usersController = new UsersController();

if ($_POST["password"] != $_POST["repeat_password"]) {
    header("Location: /index.php", true, 400);
}

unset($_POST["repeat_password"]);

try {
    $usersController->registration($_POST);
} catch (Exception $th) {
    print($th->getMessage());
}

header("Location: /index.php");
