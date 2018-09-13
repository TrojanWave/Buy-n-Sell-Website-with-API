<?php
require_once('keepSession.php');
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


        /*

        ///////////////// Get last Id ////////////////////////////////
        $sql_get_id = "SELECT MAX(id) FROM users";
        $result = $conn->query($sql_get_id);
        while ($row = $result->fetch_assoc()) {
            $user_id = $row["id"];
        }


        ///////////////// Sending Verification code //////////////////
        $msg ="Click the bellow link to activate your Buy n Sell account. <br>
            http://buynsell.com/API/verifyEmail.php?code=".$email_verification_code."&s=".$user_id;
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);
        // send email
        mail($email,"Buy n Sell email ",$msg);

        */

      header('Location: ../messageView.php');
  } else {
      $_SESSION["return"] = "Something went wrong";
  }

$conn->close();
?>
