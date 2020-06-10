<?php
 include("dbconnect.php");
 $search = $_POST['search'];
 $result_sql = "SELECT * FROM student WHERE FirstName LIKE '%$search%'";
 $result_qry = mysqli_query($dbconnect,$result_sql);

 $result_aa = mysqli_fetch_assoc($result_qry);

 echo $result_aa['FirstName'];

//
 ?>
<!--  $result_sql = "SELECT * FROM student WHERE studentID=2"; -->
