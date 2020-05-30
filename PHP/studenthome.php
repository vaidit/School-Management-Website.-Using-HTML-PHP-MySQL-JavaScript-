<?php
  require 'dbh.php';
  require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Homepage</title>
	<link href="../CSS/main.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">

</head>
<body>
  	<div class="header2">
    	<div class="welcome">
      		<p>Welcome,
        		<?php echo $_SESSION["sname"].".";  ?>
      		</p>
    	</div>
      <div class="marquee">
        <marquee >Welcome To Your School Website
        </marquee>
      </div>
      <div class="linkhead">
      <p><a href="studenthome.php">Home</a></p>
    </div>
  	</div>

  	<!-- <div class="container"> -->
  <div class="mainarea">
     		<div class="Info-1">
        		<div class="tile">
          			<div class="icon">
                		<a href="studentmyinfo.php"><img class="image" src="../images/about1.jpg">
                      <div class="option1">
                        <h5>My Info</h5>
                      </div>

                    </a>
            		</div>

        		</div>
      		</div>
      		<div class="Info-2">
        		<div class="tile">
          			<div class="icon">
                		<a href="studentTinfo.php"><img class="image" src="../images/search-teacher.png">
                     <div class="option2">
                    <h5>Search Teachers</h5></div>
                </div>
                    </a>

        		</div>
      		</div>
      		<div class="Info-3">
        		<div class="tile">
          			<div class="icon">
                <a href="studentmarks.php"><img class="image" src="../images/marks (2).png"><div class="option3">
                    <h5>Marks</h5>
                </div></a>
            		</div>

        		</div>
      		</div>
      		<div class="Info-4">
        		<div class="tile">
          			<div class="icon">
                		<a href="studentLeave.php"><img class="image" src="../images/request.png"><div class="option4">
                    <h5>Leave Request</h5>
                </div></a>
            		</div>

        		</div>
      		</div>
      		<div class="Info-5">
        		<div class="tile">
          			<div class="icon">
                		<a href="studentMsg.php"><img class="image" src="../images/message-teacher.png"><div class="option5">
                    <h5>Message Teacher</h5>
                </div></a>
            		</div>

        		</div>
      		</div>
      		<div class="Info-6">
        		<div class="tile">
          			<div class="icon">
                		<a href="studentCngPwd.php"><img class="image" src="../images/change-password.png"><div class="option6">
                    <h5>Change Password</h5>
                </div></a>
            		</div>

        		</div>
      		</div>
    	</div>

  	<!-- </div> -->
    <div class="footer">
        <p>&copy2020 Smit & Vaidit.<br>All Rights Reserved.</br></p>


    </div>
</body>
</html>
