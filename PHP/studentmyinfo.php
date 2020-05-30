<?php
require 'dbh.php';
require 'header.php';

$sql = "SELECT * FROM student WHERE sid='".$_SESSION["sid"]."'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>
  

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>My Info</title>
  <link href="../CSS/main.css" rel="stylesheet" type="text/css" />
  
</head>
<body>
  <div class="linkhead">
      <p><a href="studenthome.php">Home</a> > <a href="studentmyinfo.php">My Info</a>
    </div>
    <div class="mainbod">
      <table>
        <caption class="table-header"><h3>Student Details</h3></caption>
          <tr>
            <td scope="col">Name</td>
            <td> <?php echo $row["sname"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Student ID</td>
            <td> <?php echo $row["sid"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Standard</td>
            <td> <?php echo $row["std"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Phone Number</td>
            <td> <?php echo $row["phoneNo"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Email ID</td>
            <td> <?php echo $row["email"]; ?></td>
          </tr>
    </table>

    <a href="studenthome.php"><button class="btn-back">Back </button></a>

    </div>

    <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>
  </body>
</html>
