<?php
require 'dbh.php';
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Teacher</title>
  <link href="../CSS/main.css" rel="stylesheet" type="text/css" />
</head>
<body><div class="linkhead">
    <p><a href="studenthome.php">Home</a> > <a href="studentMsg.php">Message Teacher</a></p>
  </div>
  <div class="teacher">
    <form class="teacher-id" action="studentMsgBack.php" method="post">
      <h4>Your Student ID number:</h4>
      <?php echo "<h4>".$_SESSION['sid']."</h4>" ?> <br>
      <h4>Enter Teacher ID number(Receiver):</h4>
      <input class="input-text1" type="text" name="tid" placeholder="Teacher ID number">
      <h4>Enter Your Message:</h4>
      <textarea class="input-text" name="studentmsg" rows="5" cols="70" placeholder="Message"></textarea>
        <br><br>
      <button class="btn-submit" name="button">Submit</button>
    </form>
    <div buttons>
      <!-- <button class="btn-submit" action="studentLeaveBack.php" name="button">Submit</button> -->
    <a href="studenthome.php" style="color:white"><button class="btn-back">Back </button></a></div>
  </div>

 -->  <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>


    </div>
</body>
</html>
