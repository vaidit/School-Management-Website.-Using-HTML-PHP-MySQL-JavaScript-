<?php
  require 'dbh.php';
  require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Homepage</title>
	<link href="../CSS/mainT.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  	<div class="header2">
    	<div class="welcome">
      		<p>Welcome,  
        		<?php echo $_SESSION["tname"].".";  ?>
      		</p>
    	</div>
      	<div class="marquee">
        	<marquee >Marks upload deadline approaching soon!!!
        	</marquee>
      	</div>
      	<div class="linkhead">
      		<p><a href="teacherhome.php">Home</a></p>
    	</div>
  	</div>
    
  	<!-- <div class="container"> -->
  	<div class="mainarea">
 		<div class="Info-1">
    		<div class="tile">
      			<div class="icon">
            		<a href="teacherAboutMe.php">
            			<img class="image" src="../images/about.png">
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
            		<a href="teacherstudentLeave.php">
            			<img class="image" src="../images/leave1.png">
	            		<div class="option2">
	                		<h5>Pending Student Leaves</h5>
	            		</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-3">
    		<div class="tile">
      			<div class="icon">
            		<a href="teacherMarks.php">
            			<img class="image" src="../images/marks (2).png">
						<div class="option3">
            				<h5>Enter Marks</h5>
        				</div>
            		</a>
        		</div>	
    		</div>
  		</div>
  		<div class="Info-4">
    		<div class="tile">
      			<div class="icon">
            		<a href="teacherLeave.php">
            			<img class="image" src="../images/request.png">
	            		<div class="option4">
	                		<h5>Teacher Leave Requests</h5>
	            		</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-5">
    		<div class="tile">
      			<div class="icon">
            		<a href="teacherstudentmsg.php">
            			<img class="image" src="../images/message-teacher.png">
	            		<div class="option5">
	                		<h5>Student Messages</h5>
	            		</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-6">
    		<div class="tile">
      			<div class="icon">
            		<a href="teacherCngPwd.php">
            			<img class="image" src="../images/change-password.png">
            			<div class="option6">
            				<h5>Change Password</h5>
        				</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-7">
    		<div class="tile">
      			<div class="icon">
            		<a href="teacherViewStudent.php">
            			<img class="image" src="../images/seach.png">
            			<div class="option7">
            				<h5>View Students</h5>
        				</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-8">
    		<div class="tile">
      			<div class="icon">
            		<a href="teacherAddStudent.php">
            			<img class="image" src="../images/add.png">
            			<div class="option8">
            				<h5>Add Student</h5>
        				</div>
            		</a>
        		</div>
    		</div>
  		</div>
   		<div class="Info-9">
    		<div class="tile">
      			<div class="icon">
            		<a href="teacherUpdtStudent.php">
            			<img class="image" src="../images/update.png">
            			<div class="option9">
            				<h5>Update Student Details</h5>
        				</div>
            		</a>
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
