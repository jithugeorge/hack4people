<html>
<head>
<title>Luminous</title>
<link rel="stylesheet" type="text/css" href="css/ratecss.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="#"><li>Rating</li></a>
				<a href="complaints.php"><li>Complaints</li></a>
				<a href="login.php"><li>Log in</li></a>
			</ul>
		</div>
	</div>
	<div id="blank"></div>
	<div id="content">
		<h4 style="text-align:center;text-decoration:underline;">INSTITUTIONS</h4>
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
					$query="SELECT * FROM `rate_info`";
					$result=mysql_query($query,$con) or die("failed to run query");
					
					while($institution=mysql_fetch_assoc($result))
					{
						echo "<div style='width:1200px;height:130px;background-color:#e8ffc1;box-shadow:10px 10px 10px solid black;margin-left:80px;margin-top:10px;margin-bottom:10px;float:left;'>";
						echo "<div><h3 style='margin-top:65px;margin-left:20px;float:left;'>".$institution['instname']."</h3></div>";
						$total=$institution['r1']+($institution['r2']*2)+($institution['r3']*3)+($institution['r4']*4)+($institution['r5']*5);
						$max=($institution['r1']+$institution['r2']+$institution['r3']+$institution['r4']+$institution['r5']);
						$rate=($total/$max);
						echo "<p style='margin-top:67px;margin-left:150px;width:215px;background-color:yellow;'>Rating: ".round($rate,2)." / 5</p>";
						echo "<input type='submit' name='submit' value='1' style='margin-top:0px;margin-left:600px;float:left;'/><input type='submit' name='submit' value='2' style='margin-top:0px;margin-left:10px;float:left;'/><input type='submit' name='submit' value='3' style='margin-top:0px;margin-left:10px;float:left;'/><input type='submit' name='submit' value='4' style='margin-top:0px;margin-left:10px;float:left;'/><input type='submit' name='submit' value='5' style='margin-top:0px;margin-left:10px;float:left;';/>";
						echo "</div>";
		
					}
				}
				
			}
			
		
		?>
	</div>
	<div id="copy"><p>&copy;Luminous. All Rights Reserved</p></div>
</div>
</body>
</html>