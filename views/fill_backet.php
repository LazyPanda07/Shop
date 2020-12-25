<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/BasketController.php");

session_start();

$basket_controller = new BasketController();
$source = apache_request_headers()["Referer"];

$_POST["user_id"] = $_SESSION["user_id"];

$basket_controller->addProduct($_POST);

header("Location: {$source}");
