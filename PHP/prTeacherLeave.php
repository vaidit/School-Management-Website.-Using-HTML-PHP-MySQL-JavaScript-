<?php
  require 'dbh.php';
  require 'header.php';
  $sql = "SELECT * FROM teacherleave";
  $res = mysqli_query($conn,$sql);
  if($res)
  {
    $x=0;
  }
  else printf("error: %s\n", mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Leave Requests</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <p><a href="prhome.php">Home</a> > <a href="prTeacherLeave.php">Teacher Leave Requests</a></p>
</div>
  <div class="mainbod">
      <table class="table">
        <caption class="table-header"><h3>Teacher Leave Requests</h3></caption>
        <tr>
          <td ><strong>T-ID</strong></td>
          <td ><strong>Reason</strong></td>
          <td ><strong>From date</strong></td>
          <td ><strong>To date</strong></td>
        </tr>

          <?php
          while($row = mysqli_fetch_assoc($res)) {
            {
              echo '<tr><td>'.$row['tid'] . "</td><td>" . $row['reason']."</td><td>".$row['fdate']."</td><td>".$row['tdate']."</td></tr>";
            };
          ?>
          <?php
          };
          ?>

      </table>
      <a href="prhome.php"><button class="btn-backB">Back </button></a>
      </div>
       <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>

    </body>
</html>
