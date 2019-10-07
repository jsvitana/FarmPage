<html>
<head>
	<meta charset="UTF-8">
	<title>Database</title>
	<link rel="stylesheet" href="./../CSS/MainPage.css" />
	<style>
		#addData {
			margin-left: auto;
			margin-right: auto;
			width: 120px;
		}
	</style>
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

	<a target="main" href="./HTML/NavAreas/Insert.php"><div class="nav" id="addData">Add Data +</div></a>

	<script>	
		function getMessage()
		{
			alert("Here you can see many aspects of your farm");
		}
	</script>
	

	<a href="./index.html"><div id="log">Log Out</div></a>
	
	<table>
	<tr>
		<td><a target="main" href="./HTML/NavAreas/Summary.php"><div class="nav">Summary</div></a></td>
		<td><a target="main" href="./HTML/NavAreas/Finances.php"><div class="nav">Finances</div></a></td>
		<td><a target="main" href="./HTML/NavAreas/Hay.php"><div class="nav">Hay</div></a></td>
		<td><a target="main" href="./HTML/NavAreas/Cattle.php"><div class="nav">Cattle</div></a></td>
		<td><a target="main" href="./HTML/NavAreas/Equipment.php"><div class="nav">Equipment</div></a></td>
		<!--<td><a target="main" href="./NavAreas/About.html"><div class="nav">About</div></a></td>-->
	</tr>
	</table>
	
	<iframe name="main" src="./HTML/NavAreas/Summary.php" />
	
	<script>
		function change()
		{
			document.getElementById("main").src = "./index.html";
		}
	</script>
	
</body>
</html>