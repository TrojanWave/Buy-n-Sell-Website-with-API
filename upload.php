<?php
	require('API/keepSession.php');
	require('API/db/dbconn.php');

// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	$target_file = "uploads/".$_SESSION["ad_title"].$_SESSION["ad_location"]." ".$_FILES['upl']['name'];
	$target_file_name = $_SESSION["ad_title"].$_SESSION["ad_location"]." ".$_FILES['upl']['name'];

	if(move_uploaded_file($_FILES['upl']['tmp_name'], $target_file)){
		echo '{"status":"success"}';

		/////////////////////// Add a database record ////////////////////////
				///////////////// Get last Id /////////////////////
        $advert_id = $_SESSION["advert_id"];
		
				//////////////// Add db table record /////////////
			$sql = "INSERT INTO advert_images (file_name, advert_id)
			VALUES ('$target_file_name', '$advert_id')";

			if ($conn->query($sql) === TRUE) {
			} else {
			}

			$conn->close();
		exit;
	}
}

echo '{"status":"error"}';
exit;