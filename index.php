<html>
<head>
<title>Luminous</title>
<link rel="stylesheet" type="text/css" href="css/indexcss.css" />
<script>
var wss_i = 0;
var wss_array = ["Your Voice can change the world-Obama","The world will not be destroyed by those who do evil,but by those who watch them without doing anything-Albert Einstein","The worst disease in the world today is corruption. And there is a cure: transparency","Power does not corrupt. Fear corrupts....perhaps the fear of loss of power"];
var wss_elem;
function wssNext(){
	wss_i++;
	wss_elem.style.opacity = 0;
	if(wss_i > (wss_array.length - 1)){
		wss_i = 0;
	}
	setTimeout('wssSlide()',1000);
}
function wssSlide(){
	wss_elem.innerHTML = wss_array[wss_i];
	wss_elem.style.opacity = 1;
	setTimeout('wssNext()',5000);
}
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="head"><h1>Lumen</h1></div>
		<div id="menu">
			<ul>
				<a href="#"><li>Home</li></a>
				<a href="rate.php"><li>Rating</li></a>
				<a href="complaints.php"><li>Complaints</li></a>
				<a href="login.php"><li>Log in</li></a>
			</ul>
		</div>
	</div>
	<div id="blank"></div>
	<div id="slider">
		<div id="slider1"></div>
	</div>
	<div id="q">
		<div style="width:100%;height:35px;float:left;"><div style="width:35px;height:35px;float:left;background-color:blue;margin-left:35px;"><img src="image/q1.jpg"></img></div></div>
		<div id="quote"></div>
		<div style="width:100%;height:35px;float:left;"><div style="width:35px;height:35px;float:right;background-color:blue;margin-right:35px;"><img src="image/q1.jpg"></img></div></div>
	</div>
	<script>wss_elem = document.getElementById("quote"); wssSlide(); </script>
	<div id="content"></div>
	<div id="copy"><p>&copy;Luminous. All Rights Reserved</p></div>
	
</div>
</body>