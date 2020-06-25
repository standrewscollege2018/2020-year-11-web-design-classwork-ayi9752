<link rel="stylesheet" href="style.css">
<div class="contaienr">


<?php
 include("dbconnect.php");
 include("narbar.php");
if (!isset($_POST['search'])) {
    header("location:search.php");
}
 $search = $_POST['search'];
 $result_sql = "SELECT * FROM student WHERE FirstName LIKE '%$search%'";
 $result_qry = mysqli_query($dbconnect,$result_sql);
 if (mysqli_num_rows($result_qry)== 0) {
   echo "No result find ";

 } else {
 $result_aa = mysqli_fetch_assoc($result_qry);
do {
  $FirstName = $result_aa['FirstName'];
 ?>
<div class="names">
  <p><?php echo "$FirstName"; ?></p>
</div>
<?php
} while ($result_aa = mysqli_fetch_assoc($result_qry));
}
 ?>
 </div>

<!--  $result_sql = "SELECT * FROM student WHERE studentID=2"; -->
