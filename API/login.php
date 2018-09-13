<?php
include_once '../db/dbconn.php';

function validateLogin($email, $pwd){
  $sql = "SELECT pwd FROM users WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if ($row["pwd"] == $pwd) {
          return 1;
        }else {
          return 0;
        }
      }
  }
  else {
    return 2;
  }
  $conn->close();
}
 ?>
