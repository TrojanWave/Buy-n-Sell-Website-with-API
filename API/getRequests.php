<?php
function getRequestsByCatagory($catagory){
  require('db/dbconn.php');
  $sql_request_by_catagory = "SELECT * FROM requests WHERE ad_catagory = '$catagory' ORDER BY id DESC";
  $result_request_by_catagory = $conn->query($sql_request_by_catagory);

  if ($result_request_by_catagory->num_rows > 0) {
      return $result_request_by_catagory;
  }
}

function getRequests(){
  require('db/dbconn.php');
  $sql_requests = "SELECT * FROM requests ORDER BY id DESC";
  $result_requests = $conn->query($sql_requests);

  if ($result_requests->num_rows > 0) {
      return $result_requests;
  }
}

 ?>