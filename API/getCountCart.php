<?php
include_once '../db/dbconn.php';

function getCountWishList(){
  $sql_cart_count = "SELECT * FROM shopping_cart WHERE user_id = '$user_id';
  $result_cart_count = $conn->query($sql_cart_count);

  if ($result_cart_count->num_rows > 0) {
      return $result_cart_count->num_rows + 0;
  }
}

 ?>
