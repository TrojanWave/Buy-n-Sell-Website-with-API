<?php
function getDistricts(){
  require_once('db/dbconn.php');
  $sql_districts = "SELECT * FROM locations";
  $result_districts = $conn->query($sql_districts);

  if ($result_districts->num_rows > 0) {
      return $result_districts;
  }
}

 ?>
