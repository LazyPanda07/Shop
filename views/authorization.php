<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/UsersController.php");

session_start();

$usersController = new UsersController();
$source = apache_request_headers()["Referer"];

try {
    $_SESSION["userId"] = $usersController->authorization($_POST["email"], $_POST["password"]);
    $_SESSION["email"] = $_POST["email"];
} catch (CantFindUser $e) {
    $_SESSION["exception"] = $e->getMessage();
} catch (WrongPassword $e) {
    $_SESSION["exception"] = $e->getMessage();
}

header("Location: {$source}");
