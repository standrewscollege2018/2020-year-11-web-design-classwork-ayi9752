<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $number = 32;
    $guess = $_POST['first'];
    if ($guess == $numer) {
     header("location: first.php?reply=correct");
     elseif ($guess < 0 or $guess > 100) {
     header("location: first.php?reply=outrange")
     }elseif ($guess > $number) {
     header("location: first.php?reply=toohigh")
     }else {
     header("location: first.php?reply=toolow")
     }








     ?>

  </body>
</html>
