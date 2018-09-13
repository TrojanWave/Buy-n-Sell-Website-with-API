<?php
include_once '../db/dbconn.php';

function getAdsHomeLeft(){
  $sql_left_panel = "SELECT * FROM adverts LIMIT 3";
  $result_left_panel = $conn->query($sql_left_panel);

  if ($result_left_panel->num_rows > 0) {
      return $result_left_panel;
  }
}

 ?>
