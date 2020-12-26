<?php

error_reporting(0);

include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/BasketController.php");

if (!isset($_SESSION["user_id"])) {
    exit();
}

$basket_controller = new BasketController();

try {
    $products = $basket_controller->getProductsByUserId($_SESSION["user_id"]);

    print(json_encode($products));
} catch (NoProducts $e) {
    $_SESSION["exception"] = $e->getMessage();
}
