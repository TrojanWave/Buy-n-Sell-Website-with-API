<?php

function getAdsHomeLeft(){
  require('API/db/dbconn.php');
  $sql_left_panel = "SELECT * FROM adverts ORDER BY id DESC LIMIT 3";
  $result_left_panel = $conn->query($sql_left_panel);

  if ($result_left_panel->num_rows > 0) {
      return $result_left_panel;
  }
}

 ?>
