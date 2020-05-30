<?php
if(isset($_POST['loginsub']))
{
  session_start();
  require 'dbh.php';

  $uname = $_POST['uname'];
  $pword = $_POST['password'];

  if(empty($uname) || empty($pword))
  {
    header("Location: ../login.html?error=emptyfields");
    exit();
  }

  else{
    $sqls = "SELECT * FROM student WHERE sid='".$uname."' AND password='".$pword."'"; //for student
    $sqlt = "SELECT * FROM teacher WHERE tid='".$uname."' AND password='".$pword."'"; //for teacher
    $res1 = mysqli_query($conn,$sqls);
    $res2 = mysqli_query($conn,$sqlt);

    if (mysqli_num_rows($res1) > 0) {
          $row = mysqli_fetch_assoc($res1);
          $_SESSION["sid"] = $row["sid"];
          $_SESSION["sname"] = $row["sname"];

          header("Location: studenthome.php");
        }
    else if(mysqli_num_rows($res2) > 0)
    {
      $row = mysqli_fetch_assoc($res2);
      if($row['tid']==11000){
        $_SESSION["pid"] = $row["tid"];
        $_SESSION["pname"] = $row["tname"];
        header("Location: prhome.php");
      }
        else{
          $_SESSION["tid"] = $row["tid"];
          $_SESSION["tname"] = $row["tname"];
          header("Location: teacherhome.php");
        }

    }
    else {
          echo "<script>alert('Wrong ID/Password'); window.location.href='../login.html';</script>";
        }
      }
    }
?>


