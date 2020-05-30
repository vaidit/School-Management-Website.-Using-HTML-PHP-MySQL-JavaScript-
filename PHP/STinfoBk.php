<?php
if(isset($_POST["tsub"]))
{
  require 'dbh.php';
  require 'header.php';
  $tid = $_POST['teacherid'];
  $sql = "SELECT * FROM teacher WHERE tid='".$tid."'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($res);
  
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Teacher Details</title>
  <link href="../CSS/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="linkhead">

    <p><a href="studenthome.php">Home</a> > <a href="studentTinfo.php">Search Teacher</a> > <a href="#">Teachers Details</a></p>
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
    <button class="btn-backB"> <a href="studenthome.php" style="color:white">Back</a></button></div>
  </div>
  <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>
</body>
</html>
