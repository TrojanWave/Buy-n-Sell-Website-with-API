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

 ?>
