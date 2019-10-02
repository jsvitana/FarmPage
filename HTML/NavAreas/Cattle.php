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
		<th colspan="4">Cattle</th>
		<tr>
			<td><b>Tag Number</b></td>
			<td><b>Name</b></td>
			<td><b>Breed</b></td>
			<td><b>Color</b></td>
		</tr>
		<?php 		
			$sql = "SELECT * FROM farm_database.cattle";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()) {
				echo "<tr><td><b>" . $row["idcattle"] . "</b></td>" . 
				"<td>" . $row["name"] . "</td>" . 
				"<td>" . $row["breed"] . "</td>" . 
				"<td>" . $row["color"] . "</td>" . "</tr>";
			}
		?>
	</table>
	<img src="./../../Media/Images/IMG_1196.JPG" alt="Cows!">
</body>
</html>