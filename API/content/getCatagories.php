<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buynsell";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $sql_catagories = "SELECT * FROM ad_catagories";
  $result_catagories = $conn->query($sql_catagories);


 ?>
