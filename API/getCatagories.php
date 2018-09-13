<?php
function getCatagories(){
  require_once('db/dbconn.php');
  $sql_catagories = "SELECT * FROM ad_catagories";
  $result_catagories = $conn->query($sql_catagories);

  if ($result_catagories->num_rows > 0) {
      return $result_catagories;
  }
}

 ?>
