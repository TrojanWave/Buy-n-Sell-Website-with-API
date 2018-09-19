<?php

function getWishList(){
  require('API/db/dbconn.php');
  $sql_wish_list = "SELECT * FROM wish_list ORDER BY id DESC";
  $result_wish_list = $conn->query($sql_wish_list);

  if ($result_wish_list->num_rows > 0) {
      return $result_wish_list;
  }
}

 ?>
