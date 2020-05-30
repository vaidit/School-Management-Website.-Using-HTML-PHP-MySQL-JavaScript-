<?php
  require 'dbh.php';
  require 'header.php';
  // session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
      <p><a href="prhome.php">Home</a> > <a href="prAddStudent.php">Add Student</a></p>
  </div>
      <div class="teacher">
        <form class="teacher-id" action="prAddStudentBack.php" method="post">

            <h4>Enter Student ID number:</h4> 
            <input class="input-text1" type="text" name="sid" placeholder="Student ID number" required>  

            <h4>Enter Student Name:</h4> 
            <input class="input-text1" type="text" name="sname" placeholder="Student Name" required>  

            <h4>Enter Student Standard:</h4> 
            <input class="input-text1" type="text" name="std" placeholder="Student Std" required>  

            <h4>Enter Student Phone Number:</h4> 
            <input class="input-text1" type="text" name="phoneno" placeholder="Student Phone No" required>  

            <h4>Enter Student Email ID:</h4> 
            <input class="input-text1" type="text" name="email" placeholder="Student Email" required>  

            <h4>Enter Student Password:</h4> 
            <input class="input-text1" type="text" name="pwd" placeholder="Student Password" required>  

            <button class="btn-submit" type="submit" name="addsub">Submit</button>
        </form>
            <a href="prhome.php"><button class="btn-backB">Back </button></a>

        
      </div>
      <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>
  </body>
</html>
