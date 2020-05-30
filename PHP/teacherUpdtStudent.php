<?php
require 'dbh.php';
require 'header.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student</title>
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body> 
<div class="linkhead">
  <link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
    <p><a href="teacherhome.php">Home</a> > <a href="teacherUpdtStudent.php">Update Student</a></p>
</div>  

	<div class="teacher">
        <form class="teacher-id" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

          <h4><strong>Enter Student ID:</strong></h4> 
          <input class="input-text1" type="text" name="sid" placeholder="Student ID"> 
          <button class="btn-submit" name="button">Submit</button>
      </form>
      <a href="teacherhome.php"><button class="btn-backB">Back </button></a>

    
    
    </div>
     <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>
        
        
    </div>
      
    </body>
</html>


<?php
if(isset($_POST['button']))
{
  $sid = $_POST["sid"];
  $sql = "SELECT sid FROM student WHERE sid='".$_POST["sid"]."'";
  $res = mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0)
  {
    $_SESSION["sid"] = $sid;
    header("Location: teacherUpdtStudentBack.php");
  }
  else echo "Error 404";
}

?>
