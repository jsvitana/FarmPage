<html>
<head>
	<meta charset="UTF-8">
	<title>Database</title>
	<link rel="stylesheet" href="./../CSS/MainPage.css" />
</head>
<body style="overflow:hidden;">
	
	<h2 id="welcome"></h2>
	
	<script>
		var userName = localStorage.getItem("userName")
		document.getElementById("welcome").innerHTML = "<u>Welcome <mark>" + userName + "</mark></u>";
	</script>
	
	<br>
		<div id="titleHead" onclick="getMessage()"><b>Farm Database</b></div>
	<br>

	<script>	
		function getMessage()
		{
			alert("Here you can see many aspects of your farm");
		}
	</script>
	

	<a href="./index.html"><div id="log">Log Out</div></a>
	
	<table>
	<tr>
		<td><a target="main" href="./NavAreas/Summary.html"><div class="nav">Summary</div></a></td>
		<td><a target="main" href="./HTML/NavAreas/Finances.php"><div class="nav">Finances</div></a></td>
		<td><a target="main" href="./NavAreas/Hay.html"><div class="nav">Hay</div></a></td>
		<td><a target="main" href="./NavAreas/Cattle.html"><div class="nav">Cattle</div></a></td>
		<td><a target="main" href="./NavAreas/Equipment.html"><div class="nav">Equipment</div></a></td>
		<!--<td><a target="main" href="./NavAreas/About.html"><div class="nav">About</div></a></td>-->
	</tr>
	</table>
	
	<iframe name="main" src="./NavAreas/Summary.html" />
	
	<script>
		function change()
		{
			document.getElementById("main").src = "./index.html";
		}
	</script>
	
</body>
</html>