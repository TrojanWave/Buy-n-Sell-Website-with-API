<?php

function getAdsHomeRight($catagory){
  require('API/db/dbconn.php');
  $sql_right_panel = "SELECT * FROM adverts WHERE ad_catagory = '$catagory' ORDER BY id DESC LIMIT 8";
  $result_right_panel = $conn->query($sql_right_panel);

  if ($result_right_panel->num_rows > 0) {
      return $result_right_panel;
  }
}

function getAdsHomeRightAll(){
  require('API/db/dbconn.php');
  $sql_right_panel = "SELECT * FROM adverts ORDER BY id DESC LIMIT 8";
  $result_right_panel = $conn->query($sql_right_panel);

  if ($result_right_panel->num_rows > 0) {
      return $result_right_panel;
  }
}

 ?>
