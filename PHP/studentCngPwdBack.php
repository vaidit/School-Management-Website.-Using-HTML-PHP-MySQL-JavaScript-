<?php
  session_start();
  require 'dbh.php';

  $cpwd = $_POST['cpwd'];

  if(isset($_SESSION["sid"]))
  {
    $sql = "SELECT password FROM student WHERE sid='".$_SESSION["sid"]."'";
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
        $sql =  "UPDATE student SET password='".$npwd."' WHERE password='".$cpwd."'";
        $res = mysqli_query($conn,$sql);
        echo "<script>alert('Password Changed Successfully'); window.location.href='../PHP/studenthome.php';</script>";
      }
      else
      {
        echo "<script>alert('Password Not Match'); window.location.href='../PHP/studenthome.php';</script>";
      }
    }
  }
?>
