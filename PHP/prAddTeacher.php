<?php
  require 'dbh.php';
  require 'header.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
   <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
      <p><a href="prhome.php">Home</a> > <a href="prAddTeacher.php">Add Teacher</a></p>
  </div>
      <div class="teacher">

        <form class="teacher-id" action="prAddTeacherBack.php" method="post">

            <h4>Enter Teacher ID number:</h4> 
            <input class="input-text1" type="text" name="tid" placeholder="Teacher ID number" required>  

            <h4>Enter Teacher Name:</h4> 
            <input class="input-text1" type="text" name="tname" placeholder="Teacher Name" required>  

            <h4>Enter Teacher Subject:</h4> 
            <input class="input-text1" type="text" name="subject" placeholder="Teacher Subject" required>  

            <h4>Enter Teacher Phone Number:</h4> 
            <input class="input-text1" type="text" name="phoneno" placeholder="Teacher Phone No" required>  

            <h4>Enter Teacher Email ID:</h4> 
            <input class="input-text1" type="text" name="email" placeholder="Teacher Email" required>  

            <h4>Enter Teacher Password:</h4> 
            <input class="input-text1" type="text" name="pwd" placeholder="Teacher Password" required>  

            <button class="btn-submit" type="submit" name="addsub">Submit</button>
        </form>
            <a href="prhome.php"><button class="btn-backB">Back </button></a>

      </div>
      <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
    </div>
  </body>
</html>
