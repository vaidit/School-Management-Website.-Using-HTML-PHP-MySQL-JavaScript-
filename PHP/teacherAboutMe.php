<?php
require 'dbh.php';
require 'header.php';

$sql = "SELECT * FROM teacher WHERE tid='".$_SESSION["tid"]."'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <TITLE>My Info</TITLE>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <p><a href="teacherhome.php">Home</a> > <a href="teacherAboutMe.php">My Info</a></p>
</div>
    <div class="mainbod">
      <table class="table">
        <caption class="table-header"><h3>Teacher Details</h3></caption>
          <tr>
            <td scope="col">Name</td>
            <td scope="col"> <?php echo $row["tname"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Teacher ID</td>
            <td scope="col"> <?php echo $row["tid"]; ?></td>
          </tr>
          <tr>
            <td scope="col">Subject</td>
            <td scope="col"> <?php echo $row["subject"]; ?></td>
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
        <a href="teacherhome.php"><button class="btn-backB">Back </button></a>

    </div>
     <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>
  </body>
</html>
