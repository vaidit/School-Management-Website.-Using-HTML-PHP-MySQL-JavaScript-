<?php
require 'dbh.php';
require 'header.php';

$sid = $_POST["sid"];
$sql = "SELECT * FROM student WHERE sid='".$sid."'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>View Student Details</title>
    <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <p><a href="teacherhome.php">Home</a> > <a href="teacherViewStudent.php">View Student</a> > <a href="#">View Student Details</a></p>
</div>
    <div class="mainbod">
      <table class="table">
        <caption class="table-header"><h3>Student Details</h3></caption>
          <tr>
            <td scope="col">Name</td>
            <td scope="col"> <?php echo $row["sname"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Student ID</td>
            <td scope="col"> <?php echo $row["sid"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Standard</td>
            <td scope="col"> <?php echo $row["std"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Phone Number</td>
            <td scope="col"> <?php echo $row["phoneNo"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Email ID</td>
            <td scope="col"> <?php echo $row["email"]; ?></td>
          </tr>
    </table>
    <a href="teacherhome.php" style="color:white"><button class="btn-backB">Back</button></a>


    </div>
    <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>


  </body>
</html>
