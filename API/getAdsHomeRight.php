<?php
include_once '../db/dbconn.php';

function getAdsHomeRight($catagory){
  $sql_right_panel = "SELECT * FROM adverts WHERE ad_catagory = '$catagory' LIMIT 16";
  $result_right_panel = $conn->query($sql_right_panel);

  if ($result_right_panel->num_rows > 0) {
      return $result_right_panel;
  }
}

 ?>
