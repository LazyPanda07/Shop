<?php

session_start();

if ($_POST["login"] == "qwe" && $_POST["password"] == "123123") {
    $_SESSION["userId"] = "qwe";
    $_SESSION["login"] = $_POST["login"];
} else {
    unset($_SESSION["userId"]);
    unset($_SESSION["login"]);
}

header("Location: index.php");
