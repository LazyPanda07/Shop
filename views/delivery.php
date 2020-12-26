<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/OrdersController.php");

session_start();

$ordersController = new OrdersController();
$source = apache_request_headers()["Referer"];

if (!isset($_SESSION["user_id"])) {
    $_SESSION["exception"] = (new UnAuthorized())->getMessage();

    header("Location: {$source}");

    exit();
}

$_POST["user_id"] = $_SESSION["user_id"];

try {
    print($ordersController->addOrder($_POST));
} catch (Exception $e) {
    $_SESSION["exception"] = $e->getMessage();
}


header("Location: {$source}");
