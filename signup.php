<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
     <style>
	body {
 		background-image: url('software developer programming.jpg');
  		background-size: cover;
}
</style>
<body>

	<style type="text/css">
	
	#text{
        
		height: 50px;
		border-radius: 10px;
		padding: 7px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: yellow;
		background-color: black;
		border: none;
	}

	#box{

		background-color: green;
		margin: auto;
		width: 400px;
		padding: 40px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 100px;margin: 10px;color: yellow;">BonDrei</div>
			<div style="font-size: 20px;margin: 10px;color: yellow;">Signup</div>

			Email<input id="text" type="text" name="user_name" placeholder="Please enter your email" required><br><br>
			Password<input id="text" type="password" name="password" placeholder="Please enter your password" required><br><br>
			Confirm Password<input id="text" type="password" name="password" placeholder="Confirm Password" required><br><br>
			
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Login Now</a><br><br>
		</form>
	</div>
</body>
</html>

