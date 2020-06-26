<?php
  include("dbconnect.php");
  if (isset($_POST['btn-save'])) {
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $CPassword = $_POST['CPassword'];

    if (empty($UserName)|| empty($Email)|| empty($Password)||empty($CPassword)) {
      echo "Please fill in the blanks";
      }

      elseif ($Password!=$CPassword) {
      echo "Password Not Match";
      }

      else {
        $Pass = md5($Password);
        $sql = "insert into users (UName,Email,Password)values('$UserName','$Email','$Pass')";
        $result = mysqli_query($dbconnect,$sql);
        if ($result) {
          echo "You record have been saved into he DB";
        }
        else {
          echo "Please Check Your query";
        }
      }
    }
 ?>
