<?php
include_once('main.php');
?>
<html>
    <head>
          <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
		<script src = "JS/login_logout.js"></script>
	</head>
    <body>
        
        <nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
		      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                      
		      		</button>
		      		<a class="navbar-brand" href="index.php">School Management System</a>
		    	</div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      	<ul class="nav navbar-nav">
				        <li class="active"><a href="index.php">Home</a></li>
				        <li class="dropdown">
			          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Management<span class="caret"></span></a>
			          		<ul class="dropdown-menu">
					            <li><a href="manageStudent.php">Manage Student</a></li>
					            <li><a href="manageTeacher.php">Manage Teacher</a></li>
					            <li><a href="manageParent.php">Manage Parent</a></li>
					            <li><a href="manageStaff.php">Manage Staff</a></li>
			          		</ul>
			        	</li>
			       		<li><a href="course.php">Course</a></li>
			        	<li><a href="attendance.php">Attendance</a></li>
			        	<li><a href="examSchedule.php">Exam Schedule</a></li>
			        	<li><a href="salary.php">Salary</a></li>
			        	<li><a href="report.php">Report</a></li>
			        	<li><a href="payment.php">Payment</a></li>
			      	</ul>
			      	<ul class="nav navbar-nav navbar-right">
			        	 	<li><a href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			      	</ul>
			    </div>
		  	</div>
		</nav>
		<br/><br/>
		<div class="container">
			<div class="header"><h1>School Management System</h1></div>
			<div class="divtopcorner">
				<img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
			</div>
		</div>
	</body>
</html>
