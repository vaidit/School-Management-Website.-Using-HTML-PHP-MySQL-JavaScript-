<?php
  require 'dbh.php';
  require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Leave Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="../CSS/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="linkhead">
    <p><a href="studenthome.php">Home</a> > <a href="studentLeave.php">Leave Request</a></p>
  </div>
  <div class="teacher">
    <form class="teacher-id" action="studentLeaveBack.php" method="post">
      <h4>Enter Teacher ID number(Receiver):</h4>
      <input class="input-text1" type="text" name="tid" placeholder="Teacher ID number"> 
      <h4>Reason For Leave</h4>
      <textarea class="input-text1" name="reason" rows="4" cols="70" placeholder="Message"></textarea> 
      <h4>From(Date):</h4>
      <input class="input-text1" type="date" name="fdate"> 
      <h4>To(Date):</h4> 
      <input class="input-text1" type="date" name="tdate">  

      <button class="btn-submit" name="lvsub">Submit</button>
    </form>
    <div buttons>
      <!-- <button class="btn-submit" action="studentLeaveBack.php" name="button">Submit</button> -->
    <a href="studenthome.php" style="color:white"><button class="btn-back">Back </button></a></div>

  <!--   <a href="studenthome.php"><button class="btn-backB">Back</button></a> -->
  </div>
  <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>
</body>
</html>
