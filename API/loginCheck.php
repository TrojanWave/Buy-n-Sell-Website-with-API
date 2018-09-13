<?php

  function checkLogin($returnUrl){
    if (isset($_SESSION["active"]) && $_SESSION["active"] == 1) {
      if (isset($SESSION["returnUrl"])) {
        unset($_SESSION["returnUrl"]);
      }
    }else {
      $_SESSION["returnUrl"] = $returnUrl;
      header('Location: signIn.php');
    }
  }

 ?>
