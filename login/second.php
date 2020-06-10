<?php

  if (!isset($_POST['number']) or $_POST['number']=="") {
    header("Location:https://www.youtube.com/");
  }



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    
    $number = $_POST['number'];
    if ($number == "50") {
      echo "good one";
    }
    elseif ($number <= "49") {
      echo "Too low";
    }
    else {
      echo "too high";
    }







     ?>

  </body>
</html>
