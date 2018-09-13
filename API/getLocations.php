<?php
function getLocations(){
  require('db/dbconn.php');
  $sql_locations = "SELECT * FROM locations";
  $result_locations = $conn->query($sql_locations);

  if ($result_locations->num_rows > 0) {
      return $result_locations;
  }
}

function getLocationsOfDistrict($district){
  require('db/dbconn.php');
  $sql_locations = "SELECT * FROM locations WHERE district = '$district'";
  $result_locations = $conn->query($sql_locations);

  if ($result_locations->num_rows > 0) {
      return $result_locations;
  }
}

 ?>
