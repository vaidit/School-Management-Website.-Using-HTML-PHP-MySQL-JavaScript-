<?php
  require 'dbh.php';
  require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="../CSS/main.css" rel="stylesheet" type="text/css" />  
</head>
<body>
  <div class="linkhead">
    <p><a href="studenthome.php">Home</a> > <a href="studentCngPwd.php">Change Password</a></p>
  </div>
  <div class="teacher" >
    <form class="teacher-id" action="studentCngPwdBack.php" method="post">
      <h4>Enter your Current Password:</h4> 
      <input class="input-text1" type="password" name="cpwd" placeholder="Current Password"> <br> <br>
      <h4>Enter New Password:</h4> 
      <input class="input-text1" type="password" name="npwd" placeholder="New Password"> 
      <h4>Re-enter your New Password:</h4> 
      <input class="input-text1" type="password" name="rnpwd" placeholder="Re-enter New Password"> 
      <button class="btn-submit" name="button">Submit</button>
    </form>
     <a href="studenthome.php" style="color:white"><button class="btn-backB"> Back</button></a>
  </div>
 
  <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>
</body>
</html>
