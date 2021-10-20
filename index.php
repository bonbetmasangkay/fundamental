<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Death Bed Christian Lalama (Cover)</title>
</head>
<style>
       body{
       	background-image: url('Death Bed.jpg');
       	background-size: cover;
       	background-repeat: no-repeat;
        background-attachment: fixed;
    }

</style>
<body>

	<style type="text/css">
    #text{
            height: 25px;
        	border-radius: 5px;
        	padding: 4px;
        	border: solid thin #aaa;
        	width: 100%

	</style>

     <div style="font-size: 30px;margin: 10px;text-align: center;"> Don't stay away, for too long<br>
     	Don't go to bed<br>
I’ll make a cup coffee for your head<br>
I'll get you up and going out of bed<br>
Ey, look, ever since you left<br>
Man I swear this sh*t don’t feel the same<br>
I been up long nights<br>
Just lookin back on who to blame<br>
Spending time up in my head<br>
Thought I was ghostin you
Now I can’t keep up with the fact<br>
That I’m not holdin you<br>
Yeah<br>
But I hope the next guy treats you better<br>
Takes you out for dates<br>
And let’s you wear his favourite sweaters<br>
I hope he makes you smile<br>
And let’s you know that you’re the one<br>
I hope he does the things<br>
That I wish I could’ve done<br>
Oh<br>
I wish I would’ve done, oh<br>
I wish I would’ve done<br>
I’ll get you up and going<br>
Yeah, but I still feel like texting you<br>
When I’m alone even though you ain’t mine no more<br>
I was going through sh*t<br>
Couldn’t give u my all<br>
How could I let you walk out the door<br>
My head been foggy<br>
Got so much sh*t on my mind<br>
But girl I did you wrong<br>
Now imma do the time<br>
Don’t stay away, for too long<br>
Don’t go to bed<br>
I’ll make a cup of coffee for your head<br>
I’ll get you up and going out of bed<br>
And I... </p><br></div>



	    <a href="logout.php">Logout</a>
	    <h1>Death Bed by Christian Lalama</h1>

	<br>
	    Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>