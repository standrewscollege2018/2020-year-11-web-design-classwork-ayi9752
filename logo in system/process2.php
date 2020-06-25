<?php
  include("dbconnect.php");
  if (isset($_POST['btn-save'])) {
    $UName = $_POST['UserName'];
    $Pass = $_POST['Password'];
    if (empty($UName)|| empty($Pass)){
      echo "Please fill in the blanks";
    }
    else {
      $query = "select * from users where UName = '$UName'";
      $result =mysqli_query($dbconnect,$query);

      if ($row=mysqli_fetch_assoc($result)) {
        $db_password = $row['Password'];

      if (md5($Pass)== $db_password) {
          header("location:admin.php");
        }
      else {
          echo "Wrong Password";
        }
      }

      else {
        echo "Please check";
      }
    }
  }

 ?>
