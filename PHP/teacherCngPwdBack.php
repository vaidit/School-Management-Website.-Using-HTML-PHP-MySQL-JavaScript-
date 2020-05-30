<?php
  session_start();
  require 'dbh.php';

  $cpwd = $_POST['cpwd'];

  if(isset($_SESSION["tid"]))
  {
    $sql = "SELECT password FROM teacher WHERE tid='".$_SESSION["tid"]."'";
  }
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($res);
  if(mysqli_num_rows($res) > 0)
  {
    if($cpwd == $row["password"])
    {
      $npwd = $_POST['npwd'];
      $rnpwd = $_POST['rnpwd'];
      if($npwd == $rnpwd)
      {
        $sql =  "UPDATE teacher SET password='".$npwd."' WHERE password='".$cpwd."'";
        $res = mysqli_query($conn,$sql);
        echo "<script>alert('Password Changed Successfully'); window.location.href='../PHP/teacherHome.php';</script>";
        echo "Password Changed Successfully";
      }
      else
      {
        echo "<script>alert('Password Not Match'); window.location.href='../PHP/teacherCngPwd.php';</script>";
      }
    }
  }
  else echo "<script>alert('Not Successful'); window.location.href='../PHP/teacherHome.php';</script>";
?>
