<?php
include_once '../db/dbconn.php';

  $code = $_GET["code"];
  $user = $_GET["s"];

  $sql = "SELECT email_verification_code FROM users WHERE id = '$user'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          if ($code == $row["email_verification_code"]) {
            //success
            $sql = "UPDATE users SET active=1 WHERE id = '$user'";

            if ($conn->query($sql) === TRUE) {
              //success
            }
          }
      }
  }
  $conn->close();
?>
