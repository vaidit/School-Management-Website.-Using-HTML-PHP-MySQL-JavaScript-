<?php
require 'dbh.php';
require 'header.php';

$sql = "SELECT * FROM marks WHERE sid='".$_SESSION["sid"]."'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$total = $row["english"] +$row["SS"] +$row["physics"] +$row["chemistry"] +$row["maths"];
$per = ($total/500)*100;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>My marks</title>
  <link href="../CSS/main.css" rel="stylesheet" type="text/css" />
</head>
    <?php
    if(mysqli_num_rows($res)>0)
      {
    ?>
    <div class="linkhead">
      <p><a href="studenthome.php">Home</a> > <a href="studentmarks.php">Marks</a></p>
    </div>
    <div class="mainbod">
      <table>
        <caption class="table-header"><h3></h3>Student ID</caption>
          <tr>
            <td scope="col"><em>Subjects</em></td>
            <td scope="col"> <em>Marks</em></td>
          </tr>
          <tr>
            <td>Maths</td>
            <td> <?php echo $row["maths"]; ?></td>
          </tr>
          <tr>
            <td>Physics</td>
            <td> <?php echo $row["physics"]; ?></td>
          </tr>
          <tr>
            <td>Chemistry</td>
            <td> <?php echo $row["chemistry"]; ?></td>
          </tr>
          <tr>
            <td>SS</td>
            <td> <?php echo $row["SS"]; ?></td>
          </tr>
          <tr>
            <td>English</td>
            <td> <?php echo $row["english"]; ?></td>
          </tr>
        </table>
          <br>
        <table class="table">
          <tr>
            <td scope="row">Total(out of 500)</td>
            <td> <?php echo $total; ?></td>
          </tr>
          <tr>
            <td scope="row">Percentage</td>
            <td> <?php echo $per; ?></td>
          </tr>
    </table>

    <a href="studenthome.php" style="color:white"><button class="btn-backB">Back</button></a>

    </div>

    <?php
    }
    else {
    ?>

    <h1>No Records Found</h1>
<!--     <button class="btn-back"> <a href="studenthome.php" style="color:white">Back</a></button>
 -->  <?php } ?>
  <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>

  </body>
</html>
