<?php
require 'dbh.php';
require 'header.php';
?>

<!DOCTYPE html>
<head>
  <title>Update Details</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher Details</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
<html lang="en" dir="ltr">
<body>
  <div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
      <p><a href="prhome.php">Home</a> > <a href="prUpdtTeacher.php">Update Teacher</a></p>
  </div>

      <div class="teacher">

        <form class="teacher-id" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <h4><strong>Teacher ID:</strong> <?php echo "<strong>".$_SESSION["ntid"]."</strong>" ?></h4>



            <h4>Enter Teacher Name:</h4>
            <input class="input-text1" type="text" name="tname" placeholder="Teacher Name" required>

            <h4>Enter Teacher Subject:</h4>
            <input class="input-text1" type="text" name="subject" placeholder="Teacher subject" required>

            <h4>Enter Teacher Phone Number:</h4>
            <input class="input-text1" type="text" name="phoneno" placeholder="Teacher Phone No" required>

            <h4>Enter Teacher Email ID:</h4>
            <input class="input-text1" type="text" name="email" placeholder="Teacher Email" required>

            <h4>Enter Teacher Password:</h4>
            <input class="input-text1" type="text" name="pwd" placeholder="Teacher Password" required>

            <button class="btn-submit" type="submit" name="updsub">Submit</button>
        </form>
         <a href="prhome.php"><button class="btn-backB">Back </button></a>

      </div>
      <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
      </div>

  </body>
</html>

<?php
if(isset($_POST['updsub']))
{
  $tname = $_POST['tname'];
  $subject = $_POST['subject'];
  $phone = $_POST['phoneno'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $sql =  "UPDATE teacher SET tname='".$tname."',subject='".$subject."',email='".$email."',phoneNo=".$phone.",password='".$pwd."' WHERE tid=".$_SESSION["ntid"];
  $res = mysqli_query($conn,$sql);
  if ( false===$res ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo "<script>alert('Teacher Details Updated Successfully!!'); window.location.href='../PHP/prhome.php';</script>";
}
  }

else echo "Error";

?>
