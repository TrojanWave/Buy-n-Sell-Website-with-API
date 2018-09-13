<?php
session_start();
include_once '../db/dbconn.php';
include_once '../login/keepSession.php';

$price = $_SESSION["price"];
$title = $_SESSION["title"];
$description = $_SESSION["description"];
$nego = $_SESSION["nego"];
$location = $_SESSION["location"];
$contact = $_SESSION["contact"];
$catagory = $_SESSION["catagory"];

  $sql = "INSERT INTO adverts (price, ad_title, ad_description, nego, contact, user_id, ad_catagory, locations_id)
  VALUES ('$price', '$title', '$description', '$nego', '$contact', '$user_id', '$catagory', '$location')";

  if ($conn->query($sql) === TRUE) {
      $_SESSION["return"] = "Your Ad is posted";
  } else {
      $_SESSION["return"] = "Something went wrong";
  }

$conn->close();

?>
