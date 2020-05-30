<?php
require 'dbh.php';
session_start();
if(isset($_POST['addsub']))
{
  $sid = $_POST['sid'];
  $sname = $_POST['sname'];
  $std = $_POST['std'];
  $phone = $_POST['phoneno'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
    $sql = "INSERT INTO student VALUES('$sid','$sname','$std','$email','$phone','$pwd')";
    if(mysqli_query($conn,$sql))
      {
        echo "<script>alert('Student Successfully Added'); window.location.href='../PHP/teacherHome.php';</script>";
      }
      else
      {
        echo "<script>alert('Error_Occured in Adding Student'); window.location.href='../PHP/teacherHome.php';</script>";
      }
}

else echo "error";
?>
