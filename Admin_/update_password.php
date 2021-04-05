<?php 
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
		body
		{
			background-image: linear-gradient(to bottom right,rgb(0,0,0,0.6),rgb(0,0,0,0.6)) ,url("images/pass.jpg");
    		background-repeat: no-repeat;
    			background-size: cover;
    		background-position: center;
			height:110vh;
		}
		.wrapper
		{
			
			height:380px;
    width:380px;
    background-color:white;
    margin-left:38%;
    color:black;
    padding:0px;
    position:absolute;
    margin-top:5%;
    overflow: hidden;
    border-radius: 20px;
	font-size: 20px;
	
		}
		.form-control
		{
			width: 300px;
		}

		
	</style>
</head>
<body>
	<div class="wrapper">
		<div style="text-align: center;">
			<h1 style="text-align: center; font-size: 35px;font-family: times new roman;">Change Your Password</h1><br><br>
		</div>
		<div style="padding-left: 30px; ">
		<form action="" method="post" >
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<button class="btn btn-default" type="submit" name="submit" >Update</button>
		</form>

	</div>
	
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE admin SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                alert("The Password Updated Successfully.");
              </script> 

				<?php
			}
		}
	?></div>
</body>
</html>