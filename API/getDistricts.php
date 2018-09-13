<?php
function getDistricts(){
  require('db/dbconn.php');
  $sql_districts = "SELECT district FROM locations GROUP BY district";
  $result_districts = $conn->query($sql_districts);

  if ($result_districts->num_rows > 0) {
      return $result_districts;
  }
}

 ?>
