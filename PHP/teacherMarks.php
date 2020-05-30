<?php
require 'dbh.php';
require 'header.php';
$sql1 = "SELECT subject FROM teacher WHERE tid='".$_SESSION["tid"]."'";
$res1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($res1);
$sub = $row["subject"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
      <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">

  <title>Add Marks</title>
  <link href="../CSS/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="linkhead">
      <p><a href="teacherhome.php">Home</a> > <a href="teacherMarks.php">Add Marks</a></p>
    </div>
      <div class="mainbod">
        <h1 class="table-header">Subject :<?php echo $sub; ?></h1> <br>
        <form class="teacher-id" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
              <table class="table">
                <tr>
                    <td ><strong>S-ID</strong></td>
                    <td ><strong>Marks</strong></td>
                </tr>
                <tr>
                    <td><input class="input-text1" type="text" name="sid" placeholder="S-ID"></td>
                    <td ><input class="input-text1" type="text" name="mk" placeholder="marks"></td>
                </tr>
              </table>
              <button class="btn-submit" name="button">Submit</button>
            </form>
             <div buttons>

    <a href="teacherhome.php" style="color:white"><button class="btn-back">Back </button></a></div>
          </div>
          <br>

          <!-- <button class="btn btn-dark" style="margin-left:90px;" onclick="teacherhome.php">Back </button>
           -->
          <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>


    </div>
    </body>
</html>

<?php
if(isset($_POST['button']))
{
  $sid = $_POST["sid"];
  $mk = $_POST["mk"];
  $sql = "SELECT sid FROM marks WHERE sid=$sid";
  $res = mysqli_query($conn,$sql);
  if(mysqli_num_rows($res) == 0)
  {
    $sql1 = "INSERT INTO marks (sid,$sub) VALUES ($sid,$mk)";
    if(mysqli_query($conn,$sql1))
    {
      echo "<script>alert('Markes Added'); window.location.href='../PHP/teacherMarks.php';</script>";
    }
    else printf("error: %s\n", mysqli_error($conn));
  }
  else if(mysqli_num_rows($res) > 0) {
    {
      $sql1 = "UPDATE marks SET $sub = $mk WHERE sid =$sid";
      if(mysqli_query($conn,$sql1))
      {
        echo "<script>alert('Markes Added'); window.location.href='../PHP/teacherMarks.php';</script>";
      }
      else printf("error: %s\n", mysqli_error($conn));
    }
  }

}
?>
