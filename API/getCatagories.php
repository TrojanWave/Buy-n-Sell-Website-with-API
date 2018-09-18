<?php
function getCatagories(){
  require('db/dbconn.php');
  $sql_catagories = "SELECT * FROM ad_catagories";
  $result_catagories = $conn->query($sql_catagories);

  if ($result_catagories->num_rows > 0) {
      return $result_catagories;
  }
}

function getCatagoryName($id){
  require('db/dbconn.php');
  $sql_catagory = "SELECT * FROM ad_catagories WHERE id = '$id'";
  $result_catagory = $conn->query($sql_catagory);

  if ($result_catagory->num_rows > 0) {
      while ($row_catagory = $result_catagory->fetch_assoc()) {
        return $row_catagory["name"];
      }
  }
}

 ?>
