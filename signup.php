<html>
<head>
<title>Luminous</title>
<link rel="stylesheet" type="text/css" href="css/signupcss.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="rate.php"><li>Rating</li></a>
				<a href="complaints.php"><li>Complaints</li></a>
				<a href="login.php"><li>Log in</li></a>
			</ul>
		</div>
	</div>
	<div id="blank"></div>
	<div id="content">
		<div id="left">
			<form method="post" action="signup.php">
				<h3 style="font-size:">Sign Up</h3>
				<p>First Name</p><input type="text" name="fname" placeholder="First Name" />
				<p>Last Name</p><input type="text" name="lname" placeholder="Last Name" />
				<p>User Name</p><input type="text" name="username" placeholder="User Name" />				
				<p>Email</p><input type="text" name="email" placeholder="E-mail" />
				<p>Password</p><input type="password" name="password" placeholder="Password" />
				<p>Phone</p><input type="text" name="phone" placeholder="Phone" />
<?php
if(isset($_POST['submit']))
{
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass="";
	$con=mysql_connect($mysql_host,$mysql_user,$mysql_pass);
	
	if($con)
	{
		mysql_select_db('hack',$con);
		$sql="INSERT INTO user_info (fname,lname,username,email,password,phone) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[phone]')";
		$work=mysql_query($sql,$con);
		if(!$work)
		{
			echo("<span style='float:left;'>User name already exist!</span>");
		}
		else
		{
			echo("<span style='float:left;'>Account Created</span>");
		}
		mysql_close($con);
	}
}
?>				
				<input type="submit" name="submit" style="width:150px;margin-left:25px;margin-top:15px;" />
			</form>
		</div>
		<div id="right">
			<h3>"Let's Join our hands against<i><b> Corruption</b>"</i></h3>
		</div>
	</div>
	<div id="copy"><p>&copy;Luminous. All Rights Reserved</p></div>
</div>
</body>
</html>