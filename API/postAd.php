<?php
require('API/db/dbconn.php');

$price = $_POST["price"];
$title = $_POST["title"];
$item_condition = $_POST["item_condition"];
$description = $_POST["description"];

if (isset($_POST["nego"])) {
    $nego = 1;
}else {
    $nego = 0;
}

$contact = $_POST["contact"];
$user_id = $_SESSION["user_id"];

$sql = "INSERT INTO adverts (price, ad_title, item_condition, ad_description, nego, contact, user_id, ad_catagory, locations_id)
VALUES ('$price', '$title', '$item_condition', '$description', '$nego', '$contact', '$user_id', '$catagory', '$area')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["advert_id"] = $conn->insert_id;


    $_SESSION["ad_title"] = $title;
    $_SESSION["ad_location"] = $location;
    header('Location: postAdStep5.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    /*
    $_SESSION["return"] = "Something went wrong !$catagory";
    header('Location: messageView.php');*/
}

$conn->close();

?>
