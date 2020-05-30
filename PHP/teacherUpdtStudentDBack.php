<?php
require 'dbh.php';
require 'header.php';
if(isset($_POST['updsub']))
{
  $sname = $_POST['sname'];
  $std = $_POST['std'];
  $phone = $_POST['phoneno'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $sql =  "UPDATE student SET sname='".$sname."',std=".$std.",email='".$email."',phoneNo=".$phone.",password='".$pwd."' WHERE sid=".$_SESSION["sid"];
  $res = mysqli_query($conn,$sql);
  if ( false===$res ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo "<script>alert('Student Details Updated'); window.location.href='../PHP/teacherHome.php';</script>";
}
  }

else echo "Error";

?>
