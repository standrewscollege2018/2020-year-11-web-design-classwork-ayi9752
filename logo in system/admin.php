<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="welcome_user">
    <?php
    session_start();
    echo "welomce " ,$_SESSION['user'];

     ?>
    </div>
  </body>
</html>
