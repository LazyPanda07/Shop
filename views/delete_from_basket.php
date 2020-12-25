<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/BasketController.php");

session_start();

$basket_controller = new BasketController();
$source = apache_request_headers()["Referer"];

if (!isset($_SESSION["user_id"]))
{
    $_SESSION["exception"] = (new UnAuthorized())->getMessage();

    exit();
}

$basket_controller->deleteProduct($_POST["id"]);

header("Location: {$source}");
