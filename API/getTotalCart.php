<?php
include_once '../db/dbconn.php';

function getAdsHomeRight($catagory){
  $sql_cart_total = "SELECT advert_id FROM shopping_cart WHERE user_id = '$user_id'";
  $result_cart_total = $conn->query($sql_cart_total);

  $cart_total = 0;

  if ($result_cart_total->num_rows > 0) {
    while($row_cart_total = $result_cart_total->fetch_assoc()) {
      $advert_id = $row_cart_total["advert_id"];
      $sql_cart_total_ad = "SELECT price FROM adverts WHERE id = '$advert_id'";

      $result_cart_total_ad = $conn->query($sql_cart_total_ad);

      if ($result_cart_total_ad->num_rows > 0) {
        while ($row_cart_total_ad = $result_cart_total_ad->fetch_assoc()) {
          $total = $total + $row_cart_total_ad["price"];
        }
      }
    }
  }

    return $cart_total;

}

 ?>
