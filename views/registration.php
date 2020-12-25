<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/UsersController.php");

session_start();

$usersController = new UsersController();
$source = apache_request_headers()["Referer"];

if ($_POST["password"] != $_POST["repeat_password"]) {
    $_SESSION["exception"] = (new WrongPassword())->getMessage();

    header("Location: {$source}");

    exit();
}

unset($_POST["repeat_password"]);

try {
    $usersController->registration($_POST);
} catch (UserAlreadyExists $e) {
    $_SESSION["exception"] = $e->getMessage();
}

header("Location: {$source}");
