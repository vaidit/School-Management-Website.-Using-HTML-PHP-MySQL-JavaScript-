<?php
  require 'dbh.php';
  require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
  <link href="../CSST/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
   <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
      <p><a href="prhome.php">Home</a> > <a href="prCngPwd.php">Change Password</a></p>
  </div>
      <div class="teacher">
        <form class="teacher-id" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

          <h4>Enter your Current Password:</h4>
          <input class="input-text1" type="password" name="cpwd" placeholder="Current Password">
          <h4>Enter New Password:</h4>
          <input class="input-text1" type="password" name="npwd" placeholder="New Password">
          <h4>Re-enter your New Password:</h4>
          <input class="input-text1" type="password" name="rnpwd" placeholder="Re-enter New Password">
          <button class="btn-submit" name="button">Submit</button>
      </form>
          <a href="prhome.php"><button class="btn-backB">Back </button></a>

    </div>
    <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
    </div>
    </body>
  </html>


  <?php
  if(isset($_POST['button']))
  {
    $cpwd = $_POST['cpwd'];

    if(isset($_SESSION["sid"]))
    {
      $sql = "SELECT password FROM teacher WHERE tid='".$_SESSION["pid"]."'";
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
          echo "<script>alert('Password Changed Successfully'); window.location.href='../PHP/prhome.php';</script>";

        }
        else
        {
          echo "<script>alert('Password Not Match'); window.location.href='../PHP/prhome.php';</script>";
        }
      }
    }
  }
  ?>
