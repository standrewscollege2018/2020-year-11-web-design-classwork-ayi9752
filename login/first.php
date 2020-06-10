<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>
    <div class="middle">
    <form action="second.php"method="post">

      <p>Choose number from 100 to 1</p>
      <input required class="text-guess" type="text" name="number" placeholder="Enter your a number">
      <button class="buttom"type="submit" name="button">click me</button>
      <?php
       if (isset($_GET['reply'])) {
         if ($_get['reply'] == "correct") {
           echo "<h1 class='celebrate'>That's right</h1>";

         }

       }



       ?>
<h1></h1>
    </form>
  </div>
  </body>
</html>
