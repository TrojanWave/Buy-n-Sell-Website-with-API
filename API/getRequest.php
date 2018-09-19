<?php

function getRequest($id){
  require('API/db/dbconn.php');
  $sql_request = "SELECT * FROM requests WHERE id = '$id'";
  $result_request = $conn->query($sql_request);

  if ($result_request->num_rows > 0) {
      return $result_request;
  }
}

 ?>
