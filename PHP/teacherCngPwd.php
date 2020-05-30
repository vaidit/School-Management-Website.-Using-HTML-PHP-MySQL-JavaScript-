<?php
  require 'dbh.php';
  require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Change Password</title>
    <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <p><a href="teacherhome.php">Home</a> > <a href="teacherCngPwd.php">Change Password</a></p>
</div>
      <div class="teacher">
        <form class="teacher-id" action="teacherCngPwdBack.php" method="post">

          <h4>Enter your Current Password:</h4> 
          <input class="input-text1" type="password" name="cpwd" placeholder="Current Password"> 
          <h4>Enter New Password:</h4> 
          <input class="input-text1" type="password" name="npwd" placeholder="New Password"> 
          <h4>Re-enter your New Password:</h4> 
          <input class="input-text1" type="password" name="rnpwd" placeholder="Re-enter New Password"> 
          <button class="btn-submit" name="button">Submit</button>
      </form>
      <div buttons>
      <!-- <button class="btn-submit" action="studentLeaveBack.php" name="button">Submit</button> -->
    <a href="teacherhome.php" style="color:white"><button class="btn-backB">Back </button></a></div>
    </div>
    <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>
    </body>
  </html>
