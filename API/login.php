<?php

function validateLogin($email, $pwd){
  require('db/dbconn.php');
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if ($row["pwd"] == $pwd) {
          if ($row["active"] == 1) {
            ///////// Let the user log in /////////////
            $_SESSION["active"] = 1;
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_email"] = $row["email"];
          }else {
            ///////// User has an account but not activated ///////////
            $_SESSION["return"] = "Your account is not activated yet. Please click the activation link we sent to your E-mail.";
            header('Location: messageView.php');
          }
        }else {
          /////////// Password is wrong ////////////
          $_SESSION["return"] = "The Password you entered is wrong !";
          header('Location: messageView.php');
        }
      }
  }
  else {
    ///////// Account doesn't exist ////////////
    $_SESSION["return"] = "The email you entered is wrong or you haven't signed up yet.";
    header('Location: messageView.php');
  }
  $conn->close();
}
 ?>
