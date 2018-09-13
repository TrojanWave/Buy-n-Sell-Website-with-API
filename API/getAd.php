<?php
include_once '../db/dbconn.php';

function getAd($ad_id){
  $sql_ad = "SELECT * FROM adverts WHERE id = '$ad_id'";
  $result_ad = $conn->query($sql_ad);

  if ($result_ad->num_rows > 0) {
      return $result_ad;
  }
}

 ?>
