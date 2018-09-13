<?php
include_once '../db/dbconn.php';

function getCatagories($serchText){
  $sql_search = "SELECT * FROM adverts Where ad_title LIKE %$serchText%";
  $result_search = $conn->query($sql_search);

  if ($result_search->num_rows > 0) {
      return $result_search;
  }
  else {
    return 0;
  }
}

 ?>
