<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    $_SESSION["user_id"] = $user_id;
}

if (isset($_SESSION["active"])) {
    $active = $_SESSION["active"];
    $_SESSION["active"] = $active;
}

if (isset($_SESSION["user_email"])) {
    $active = $_SESSION["user_email"];
    $_SESSION["user_email"] = $active;
}

 ?>
