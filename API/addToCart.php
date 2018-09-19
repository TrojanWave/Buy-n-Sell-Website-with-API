<?php
require('keepSession.php');
require('loginCheck.php');
require('db/dbconn.php');

	$returnUrl = $_SESSION["returnUrl"];

    checkLogin($returnUrl);
    
    ////////////// Add to cart /////////////
    $advert_id = $_GET["id"];
    $user_id = $_SESSION["user_id"];

    $sql = "INSERT INTO shopping_cart (user_id, advert_id) VALUES ('$user_id', '$advert_id')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../'.$returnUrl);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        /*
        $_SESSION["return"] = "Something went wrong !$catagory";
        header('Location: messageView.php');*/
    }
    
    $conn->close();

?>