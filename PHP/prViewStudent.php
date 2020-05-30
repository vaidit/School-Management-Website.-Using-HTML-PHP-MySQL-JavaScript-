<?php
  require 'dbh.php';
  require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
      <p><a href="prhome.php">Home</a> > <a href="prViewStudent.php">Search Student</a></p>
  </div>
      <div class="teacher">
        <form class="teacher-id" action="prViewStudentBack.php" method="post">

          <h4>Enter Student ID:</h4> 
          <input class="input-text1" type="text" name="sid" placeholder="Student ID">  
          <button class="btn-submit" name="button">Submit</button>
      </form>
          <a href="prhome.php"><button class="btn-backB">Back </button></a>

    </div>
    <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
    </div>

    </body>
  </html>
