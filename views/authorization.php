<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/UsersController.php");

session_start();

$usersController = new UsersController();

try {
    $_SESSION["userId"] = $usersController->authorization($_POST["email"], $_POST["password"]);
    $_SESSION["email"] = $_POST["email"];
} catch (Exception $th) {
    print($th->getMessage());
}

print($_SESSION["email"]);

header("Location: /index.php");
