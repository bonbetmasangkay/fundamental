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

    		//read to database
    		$query = "select * from users where user_name = '$user_name' limit 1";

    		$result = mysqli_query($con, $query);

    		if($result)
    		{
    			if($result && mysqli_num_rows($result) > 0)
    		    {
    		    	$user_data = mysqli_fetch_assoc($result);

    		    	if($user_data['password'] === $password)
    		    	{
    		    	   $_SESSION['user_id']	= $user_data['user_id'];
    		    	   header("Location: index.php");
    		    	   die;
    		    	}
    		    }
    		}
    		echo "wrong username or password!";
    	}else
    	{
    		echo "wrong username or password!";
    	}

    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
      <style>
	body {
 		background-image: url('software developer programming.jpg');
  		background-size: cover;
}
</style>
<body>

	<style type="text/css">
        #text {
        	height: 50px;
        	border-radius: 10px;
        	padding: 7px;
        	border: solid thin #aaa;
        	width: 100%
        }

        #button {
        	padding: 10px;
        	width: 100px;
        	color: yellow;
        	background-color: black;
        	border: none;
        }

        #box {

		background-color: brown;
		margin: auto;
		width: 400px;
		padding: 40px;
        }

    </style>

    <div id="box">
		
		<form method="post">
			<div style="font-size: 100px;margin: 10px;color: yellow;">BonDrei</div>
			<div style="font-size: 30px;margin: 10px;color: yellow;">Login</div>


			Username<input id="text" type="text" name="user_name" placeholder="Please enter your username" required><br><br>
			Password<input id="text" type="password" name="password" placeholder="Please enter your password" required><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="login.php">Click to Signup</a><br><br>

		</form>
	</div>
</body>
</html>
  