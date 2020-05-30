<?php
require 'dbh.php';
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Search Teachers</title>
  <link href="../CSS/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="linkhead">
    <p><a href="studenthome.php">Home</a> > <a href="studentTinfo.php">Search Teachers</a></p>
  </div>
  <div class="teacher">
    <br>
    <form class="teacher-id" action="STinfoBk.php" method="post">
      <h4>Enter The Teacher ID:</h4>
      <input class="input-text" type="text" name="teacherid" placeholder="Teacher ID">
      <!-- <div buttons> -->
      <button class="btn-submit" name="tsub">Submit</button>
    </form>
    <a href="studenthome.php" style="color:white"><button class="btn-back">Back</button></div></a>
  <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>  
    </div>
</body>
</html>
