<?php
  if(isset($_POST["lvsub"]))
  {
  require 'dbh.php';
  session_start();
  $sid = $_SESSION["sid"];
  $tid = $_POST["tid"];
  $reason = $_POST["reason"];
  $fdate = date_format(date_create($_POST["fdate"]),"Y/m/d");
  $tdate = date_format(date_create($_POST["tdate"]),"Y/m/d");

////////////////////////
$sqls = "SELECT * FROM studentleave WHERE sid=".$sid;
$ress = mysqli_query($conn,$sqls);
if(mysqli_num_rows($ress) == 0)
{
  $sql = "INSERT INTO studentleave VALUES($sid,$tid,'$reason','$fdate','$tdate')";
  if(mysqli_query($conn,$sql))
  {
    echo "<script>alert('Leave Request Sent'); window.location.href='../PHP/studenthome.php';</script>";
  }
  else echo "<script>alert('22Request submission unsuccessful'); window.location.href='../PHP/studenthome.php';</script>";
}
else{
  $sql1 = "UPDATE studentleave SET tid=".$tid.",reason ='".$reason."',fdate = '".$fdate."',tdate ='".$tdate."' WHERE sid =$sid";
  if(mysqli_query($conn,$sql1))
  {
    echo "<script>alert('Leave Request Submitted Successfully'); window.location.href='../PHP/studentHome.php';</script>";
  }
  else echo "<script>alert('11Request submission unsuccessful'); window.location.href='../PHP/studentHome.php';</script>";
}}
else echo "<script>alert('Not valid Request'); window.location.href='../PHP/studenthome.php';</script>";

  //
  // $sql = "INSERT INTO studentleave VALUES($sid,$tid,'$reason','$fdate','$tdate')";
  // if(mysqli_query($conn,$sql))
  // {
  //   echo "<script>alert('Leave Request Sent'); window.location.href='../PHP/studenthome.php';</script>";
  // }
  // else echo "<script>alert('Request submission unsuccessful'); window.location.href='../PHP/studenthome.php';</script>";
  // }
  // else echo "<script>alert('Not valid Request'); window.location.href='../PHP/studenthome.php';</script>";
?>
