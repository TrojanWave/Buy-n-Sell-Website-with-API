<?php
include_once '../db/dbconn.php';

function getCountWishList(){
  $sql_wish_list_count = "SELECT * FROM wish_list WHERE user_id = '$user_id';
  $result_wish_list_count = $conn->query($sql_wish_list_count);

  if ($result_wish_list_count->num_rows > 0) {
      return $result_wish_list_count->num_rows + 0;
  }
}

 ?>
