<?php
session_start();
include_once '../db/dbconn.php';
include_once '../login/keepSession.php';

$title = $_POST["title"];
$description = $_POST["description"];
$min_price = $_POST["min_price"];
$max_price = $_POST["max_price"];
$contact = $_POST["contact"];
$catagory = $_POST["catagory"];

$sql = "INSERT INTO requests (title, description, price_min, price_max, contact, user_id, ad_catagory)
VALUES ('$title', '$description', '$min_price', '$max_price', '$contact', '$user_id', '$catagory')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["return"] = "Your Ad is posted";
} else {
    $_SESSION["return"] = "Something went wrong";
}

$conn->close();
 ?>
