<html>
<head>
<title>Luminous</title>
<link rel="stylesheet" type="text/css" href="css/complaintscss.css" />
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
		<div id="leftbar">
			<?php
		
			$mysql_host='localhost';
			$mysql_user='root';
			$mysql_pass="";
			$con=mysql_connect($mysql_host,$mysql_user,$mysql_pass);
			
			if($con)
			{
				$work=mysql_select_db('hack',$con);
				if($work)
				{
					$query="SELECT * FROM `user_info`";
					$result=mysql_query($query,$con) or die("failed to run query");
					
					while($user=mysql_fetch_assoc($result))
					{
						echo "<div style='width:800px;height:130px;background-color:#e8ffc1;box-shadow:10px 10px 10px solid black;margin-left:80px;margin-top:10px;margin-bottom:10px;float:left;'>";
						echo "<div><h3 style='margin-top:65px;margin-left:20px;float:left;'>".$user['complaint']."</h3></div>";
						echo "<input type='text' name='comment' placeholder='Comment' style='margin-top:95px;margin-left:350px;'/><input type='submit' name='submit' style='margin-top:95px';/>";
						echo "</div>";
		
					}
				}
				
			}
			
		
		?>
		</div>
		<div id="rightbar">
			<form method="post" action="complaints.php">
				<input type="textbox" name="complaint" placeholder="Type your complaint here" />
				<input type="submit" name="submit" value="Register Complaint" style="width:150px;height:60px;"/>
			</form>
			<div style="width:150px;height:50px;float:left;margin-top:50px;margin-left:45px;">
				<p style="margin-left:20px;">
				<?php

					if(isset($_POST['submit']))
				
					{
						session_start();
						$_SESSION['id']=32;
						if(!$_SESSION['id'])
						{
							echo "redirect to login page";
						}
						else
						{
							$mysql_host='localhost';
							$mysql_user='root';
							$mysql_pass="";
							$con=mysql_connect($mysql_host,$mysql_user,$mysql_pass);
							
							if($con)
							{
								mysql_select_db('hack',$con);
								$sql="UPDATE `user_info` SET `complaint` = '".$_POST['complaint']."' WHERE `user_info`.`id` = ".$_SESSION['id'].";";
								$work=mysql_query($sql,$con);
								if(!$work)
								{
									echo("<span style='float:left;'>Unable to register</span>");
								}
								else
								{
									echo("<span style='float:left;'>Registration Successfull</span>");
								}
								mysql_close($con);
							}
						}
				}
			
				?>
				</P>
			</div>
		</div>
	</div>
	<div id="copy"><p>&copy;Luminous. All Rights Reserved</p></div>
</div>
</body>
</html>