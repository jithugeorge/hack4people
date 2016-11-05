<html>
<head>
<title>login</title>
<link type="text/css" rel="stylesheet" href="css/logincss.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="rate.php"><li>Rating</li></a>
				<a href="complaints.php"><li>Complaints</li></a>
				<a href="#"><li>Log in</li></a>
			</ul>
		</div>
	</div>
	<div id="blank"></div>
	<div id="content">
		<form method="post" action="login.php">
			<div id="img"></div>
			<p style="margin-top:30px;margin-left:150px;">Username</p><input type="text" name="username" placeholder="User Name" style="margin-left:150px;" />
			<p style="margin-left:150px;">Password</p><input type="password" name="password" placeholder="Password" style="margin-left:150px;" /><br />
			<input type="submit" name="submit" value="Login" style="margin-left:150px;margin-top:20px;" />
			<div style="width:120px;height:30px;margin-left:150px;;">
			<?php
			
			if(isset($_POST['submit']))
			{
				$name=$_POST['username'];
				$pass=$_POST['password'];
				
				$mysql_host='localhost';
				$mysql_user='root';
				$mysql_pass="";
				$con=mysql_connect($mysql_host,$mysql_user,$mysql_pass);
	
				if($con)
				{
					mysql_select_db('hack',$con);
					$sql="SELECT `password` FROM `user_info` WHERE `username`='$name'";
					
					$work=mysql_query($sql,$con);
					if(!$work)
					{
						echo("<span style='float:left;'>login failed!</span>");
					}
					else
					{	mysql_close($con);
						session_start();
						$_SESSION['username']=$name;
						$redir='index.php';
						header('Location: '.$redir);
					}
				}
			}
			?>
			</div>
			<a href="signup.php"><div style="height:45px;width:200px;background-color:#ececec;margin-top:-40px;margin-left:300px;float:left"><p style="margin-left:60px;margin-top:10px;">Sign UP</p></div></a>
		</form>
	</div>
	<div id="copy"><p>&copy;Luminous. All Rights Reserved</p></div>
</div>
</body>
</html>