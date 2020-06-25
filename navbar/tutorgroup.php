<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("dbconnect.php");
    include("narbar.php");

    if(!isset($_GET['TutorGroupID'])) {
      header("Location: narbar.php");
    }
    $TutorGroupID = $_GET['TutorGroupID'];
    $tutor_sql = "SELECT * FROM student WHERE TutorGroupID=$TutorGroupID";
    $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

    $tutor_aa = mysqli_fetch_assoc($tutor_qry);

    do {
      $FirstName = $tutor_aa['FirstName'];
      echo $FirstName;

    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))

     ?>
  </body>
</html>
