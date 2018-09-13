<?php
require_once('db/dbconn.php');
require_once('getVerificationCode.php');

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $location = $_POST["location"];
  $pwd = $_POST["password"];
  $email_verification_code = generateRandomString(5);

  $sql = "INSERT INTO users (first_name, last_name, email, locations_id, email_verification_code, pwd)
  VALUES ('$fname', '$lname', '$email', '$location', '$email_verification_code', '$pwd')";

  if ($conn->query($sql) === TRUE) {
      $_SESSION["return"] = "New account created. Check your email for verification email.";
      echo "success";
  } else {
      $_SESSION["return"] = "Something went wrong";
      echo "f";
  }

$conn->close();
?>
