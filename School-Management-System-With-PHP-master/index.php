<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Please Login !";
	  $color="green";
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	    <script src="source/js/loginValidate.js"></script>
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>School Management System</title>
    </head>
    <body>
    	<div class="container col-md-6 col-sm-8">
    		<div class="jumbotron">
		        <center>
			          <img src="source/logo.jpg" />
			          <hr/>
		            <?php echo "<h3><font color='$color'>$login_message</font></h3>";?>
		            <form class="form"  action="service/check.access.php" onsubmit="return loginValidate();" method="post">
		            	<div class="form-group">
		           	 		<input required type="text" class="form-control" id="myid" name="myid" placeholder="USERNAME" autofocus=""/>
		           	 	</div>
		            	
		            	<div class="form-group">
		           	 		<input required type="password" class="form-control" id="mypassword" name="mypassword" placeholder="PASSWORD"/>
		            	</div>
		            	<input class="btn btn-info col-md-3" type="submit" value="Login" />
		            </form>
		        </center>
	    	</div>
        </div>
    </body>
</html>
