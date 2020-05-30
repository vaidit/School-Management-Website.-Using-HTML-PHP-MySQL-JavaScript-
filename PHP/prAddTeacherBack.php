<?php
require 'dbh.php';
session_start();
if(isset($_POST['addsub']))
{
  $tid = $_POST['tid'];
  $tname = $_POST['tname'];
  $subject = $_POST['subject'];
  $phone = $_POST['phoneno'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
    $sql = "INSERT INTO teacher(tid,tname,subject,email,phoneNo,password) VALUES('$tid','$tname','$subject','$email','$phone','$pwd')";
    if(mysqli_query($conn,$sql))
      {
        echo "<script>alert('Teacher Successfully Added'); window.location.href='../PHP/prhome.php';</script>";
      }
      else
      {
        echo "<script>alert('Error Occured in Adding Teacher'); window.location.href='../PHP/prhome.php';</script>";
      }
}

else echo "error";
?>
