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
    do {
       if ($number % 5 == 0) {
        $number = $number -1;
        echo "<p>fizz</p>";
      } else if ($number % 3 == 0) {
        $number = $number -1;
        echo "<p>buzz</p>";
      }else {
        echo "<p>$number</p>";

        $number = $number -1;
      }
    } while ($number >=0);

echo "<p>blast off</p>";
     ?>

  </body>
</html>
