<?php
require 'dbh.php';
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher Details</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
      <p><a href="prhome.php">Home</a> > <a href="prUpdtTeacher.php">Update Teacher</a></p>
  </div>
      <div class="teacher">
        <form class="teacher-id" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

          <h4><strong>Enter Teacher ID:</strong></h4>
          <input class="input-text1" type="text" name="tid" placeholder="Teacher ID">
          <button class="btn-submit" name="button">Submit</button>
      </form>
          <a href="prhome.php"><button class="btn-backB">Back </button></a>

    </div>

    <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
    </div>
    </body>
</html>


<?php
if(isset($_POST['button']))
{
  $tid = $_POST["tid"];
  $sql = "SELECT tid FROM teacher WHERE tid='".$_POST["tid"]."'";
  $res = mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0)
  {
    $_SESSION["ntid"] = $tid;
    header("Location: prUpdtTeacherBack.php");
  }
  else echo "<script>alert('Error, Try Agaain!!'); window.location.href='../PHP/prhome.php';</script>";;
}

?>
