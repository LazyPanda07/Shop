<?php

error_reporting(0);

include_once($_SERVER["DOCUMENT_ROOT"] . "/controllers/BasketController.php");

if (!isset($_SESSION["user_id"])) {
    exit();
}

$basketController = new BasketController();

try {
    $products = $basketController->getProductsByUserId($_SESSION["user_id"]);

    print(json_encode($products));
} catch (NoProducts $e) {
    $_SESSION["exception"] = $e->getMessage();
}
