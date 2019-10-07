<html>
<head>
	<link rel="stylesheet" href="./../../CSS/tables.css" />
	<style>
		td
		{
			width: 25%;
		}
	</style>
</head>
<body>
	<?php 
		$dbhost = "127.0.0.1:3307"; //SET TO LOCALHOST
		$dbuser = "root";
		$dbpass = "";
		$db = "farm_database";

		//connect
		$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

		//check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	?>
	<table id="main">
		<th colspan="4">Equipment</th>
		<tr>
			<td><b>Type</b></td>
			<td><b>Make <br> Model</b></td>
			<td><b>Year</b></td>
		</tr>
		<?php 		
			$sql = "SELECT * FROM farm_database.equipment";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["type"] . "</td>" . 
				"<td>" . $row["make"] . "<br>" . $row["model"] . "</td>" . 
				"<td>" . $row["year"] . "</td>" . "</tr>";
			}
		?>
	</table>
</body>
</html>