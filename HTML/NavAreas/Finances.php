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
		echo "Connected successfully";

		$sql = "SELECT * FROM farm_database.cattle
				WHERE name = 'Sue';";
		$result = $conn->query($sql);
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
			$sql = "SELECT COUNT(*) FROM farm_database.cattle";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
				$amountRows = $row["COUNT(*)"];
			}
			
			for ($i = 0; $i < $amountRows; $i++) {
				echo "the number is : $i <br>";
			}
		?>
		<tr>
			<td><b>Quarter 1:</b></td>
			<td><?php  while($row = $result->fetch_assoc()) {
    							echo "ID: " . $row["idcattle"] . "Name: " . $row["name"];
							} ?></td>
			<td>-1000</td>
			<td>-$100</td>
		</tr>
		
	</table>

</body>
</html>