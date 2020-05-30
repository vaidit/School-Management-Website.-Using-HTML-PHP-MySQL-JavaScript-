<?php
require 'dbh.php';
session_start();
$sid = $_SESSION['sid'];
$tid = $_POST['tid'];
$msg = $_POST['studentmsg'];

if(empty($sid) || empty($tid) || empty($msg))
{
  header("Location: studentMsg.php?error=emptyfields");
  exit();
}
else{
  $sql = "SELECT tid FROM teacher WHERE tid=".$tid;
  $res = mysqli_query($conn,$sql);
  if (mysqli_num_rows($res) > 0) {
        $sqls = "SELECT tid FROM studentmsg WHERE sid=".$sid;
        $ress = mysqli_query($conn,$sqls);
        if(mysqli_num_rows($ress) == 0)
        {
          $sql1 = "INSERT INTO studentmsg VALUES(".$sid.",".$tid.",'".$msg."')";
          $res1 = mysqli_query($conn,$sql1);
          if($res1)
          {
            echo "<script>alert('Message sent Successfully'); window.location.href='../PHP/studenthome.php';</script>";
          }
          else echo "<script>alert('Message Not Sent'); window.location.href='../PHP/studentMsg.php';</script>";

        }
        else{
          $sql1 = "UPDATE studentmsg SET tid=$tid,msg = '".$msg."' WHERE sid =$sid";
          if(mysqli_query($conn,$sql1))
          {
            echo "<script>alert('Message sent Successfully'); window.location.href='../PHP/studenthome.php';</script>";
          }
          else echo "<script>alert('Message Not Sent'); window.location.href='../PHP/studentMsg.php';</script>";
        }
        }
}
?>
