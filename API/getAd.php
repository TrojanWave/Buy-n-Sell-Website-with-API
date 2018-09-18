<?php

function getAd($id){
  require('API/db/dbconn.php');
  $sql_ad = "SELECT * FROM adverts WHERE id = '$id'";
  $result_ad = $conn->query($sql_ad);

  if ($result_ad->num_rows > 0) {
      return $result_ad;
  }
}

 ?>
