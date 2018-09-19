<?php

function getCountCart($user_id){
  require('API/db/dbconn.php');
  $sql_shopping_cart_count = "SELECT * FROM shopping_cart WHERE user_id = '$user_id'";
  $result_shopping_cart_count = $conn->query($sql_shopping_cart_count);

  if ($result_shopping_cart_count->num_rows > 0) {
      return $result_shopping_cart_count->num_rows + 0;
  }
}

?>