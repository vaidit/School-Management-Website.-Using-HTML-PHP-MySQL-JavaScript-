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
        		<?php echo $_SESSION["pname"].".";  ?>
      		</p>
    	</div>
      	<div class="marquee">
        	<marquee >Marks upload deadline approaching soon!!!
        	</marquee>
      	</div>
      	<div class="linkhead">
      		<p><a href="prhome.php">Home</a></p>
    	</div>
  	</div>
    
  	<!-- <div class="container"> -->
  	<div class="mainarea">
 		<div class="Info-1">
    		<div class="tile">
      			<div class="icon">
            		<a href="prAboutme.php">
            			<img class="image" src="../images/about.png">
            			<div class="Option1">
            				<h5>My Info</h5>
        				</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-2">
    		<div class="tile">
      			<div class="icon">
            		<a href="prTeacherLeave.php">
            			<img class="image" src="../images/leave1.png">
	            		<div class="Option2">
	                		<h5>Pending Teacher Leaves</h5>
	            		</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-3">
    		<div class="tile">
      			<div class="icon">
            		<a href="prMsgStudent.php">
            			<img class="image" src="../images/message-teacher.png">
						<div class="Option3">
            				<h5>Messages From Students</h5>
        				</div>
            		</a>
        		</div>	
    		</div>
  		</div>
  		<div class="Info-4">
    		<div class="tile">
      			<div class="icon">
            		<a href="prViewTeacher.php">
            			<img class="image" src="../images/seach.png">
	            		<div class="Option4">
	                		<h5>Search Teachers</h5>
	            		</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-5">
    		<div class="tile">
      			<div class="icon">
            		<a href="prAddTeacher.php">
            			<img class="image" src="../images/add.png">
	            		<div class="Option5">
	                		<h5>Add Teacher</h5>
	            		</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-6">
    		<div class="tile">
      			<div class="icon">
            		<a href="prUpdtTeacher.php">
            			<img class="image" src="../images/update.png">
            			<div class="Option6">
            				<h5>Update Teacher Details</h5>
        				</div>
            		</a>
        		</div>
    		</div>
  		</div>
  		<div class="Info-7">
    		<div class="tile">
      			<div class="icon">
            		<a href="prViewStudent.php">
            			<img class="image" src="../images/seach.png">
            			<div class="Option7">
            				<h5>Search Students</h5>
        				</div>
            		</a>
        		</div>
    		</div>
  		</div>
      <div class="Info-8">
        <div class="tile">
            <div class="icon">
                <a href="prAddStudent.php">
                  <img class="image" src="../images/add.png">
                  <div class="Option8">
                    <h5>Add Student Detail</h5>
                </div>
                </a>
            </div>
        </div>
      </div>
      <div class="Info-9">
        <div class="tile">
            <div class="icon">
                <a href="prCngPwd.php">
                  <img class="image" src="../images/change-password.png">
                  <div class="Option9">
                    <h5>Change Password</h5>
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
