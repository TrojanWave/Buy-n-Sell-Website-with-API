<?php

if (isset($_SESSION["active"]) && $_SESSION["active"] == 1) {
  // code...
}else {
  header('Location: login.html');
}

 ?>
