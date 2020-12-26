<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/BasketController.php");

session_start();

$basketController = new BasketController();
$source = apache_request_headers()["Referer"];

if (!isset($_SESSION["user_id"]))
{
    $_SESSION["exception"] = (new UnAuthorized())->getMessage();

    exit();
}

$basketController->deleteProduct($_POST["id"]);

header("Location: {$source}");
