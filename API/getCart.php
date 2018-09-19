<?php

function getCart(){
  require('API/db/dbconn.php');
  $sql_shopping_cart = "SELECT * FROM shopping_cart ORDER BY id DESC";
  $result_shopping_cart = $conn->query($sql_shopping_cart);

  if ($result_shopping_cart->num_rows > 0) {
      return $result_shopping_cart;
  }
}

 ?>
