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
		<th colspan="4">Finances</th>
		<tr>
			<td><b>Type:</td>
			<td><b>Hay</b></td>
			<td><b>Repairs</b></td>
			<td><b>Cattle</b></td>
		</tr>
		<?php 		
			$sql = "SELECT * FROM farm_database.finances";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()) {
				echo "<tr><td><b>" . $row["quarter"] . " " . $row["year"] . "</b></td>" . 
				"<td>$" . $row["financeHay"] . "</td>" . 
				"<td>$" . $row["financeRepairs"] . "</td>" . 
				"<td>$" . $row["financeCattle"] . "</td>" . "</tr>";
			}
		?>
		
	</table>
</body>
</html>