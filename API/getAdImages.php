<?php

function getImages($id, $count){
  require('API/db/dbconn.php');
  $sql_left_panel = "SELECT * FROM advert_images WHERE advert_id = '$id' LIMIT $count";
  $result_left_panel = $conn->query($sql_left_panel);

  if ($result_left_panel->num_rows > 0) {
      return $result_left_panel;
  }else{
      return 1;
  }
}

 ?>
