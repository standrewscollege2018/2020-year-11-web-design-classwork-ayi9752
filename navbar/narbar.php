<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class="contaienr">
    <form class="" action="result.php" method="post">
      <input required type="text" name="search" placeholder="Enter First name you looking for">
      <button type="submit" name="button">Search</button>
    </form>
    <?php
    include("dbconnect.php");
    $tutor_sql = "SELECT * FROM tutorgroup";
    $tutor_qry = mysqli_query($dbconnect,$tutor_sql);
    $tutor_aa = mysqli_fetch_assoc($tutor_qry);
    do {
    $TutorGroupID = $tutor_aa['TutorGroupID'];
    $TutorCode = $tutor_aa['TutorCode'];
     ?>
  <?php echo "<a href = 'tutorgroup.php?TutorGroupID=$TutorGroupID'>$TutorCode</a>";
   } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
   ?>

    </div>
  </body>
</html>
