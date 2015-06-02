<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Using file functions</title>
</head>
<body>
<h1>Web Development - Lab05</h1>
<?php
	require_once ("settings.php");
	$dbconn = mysqli_connect($host, $user, $pswd , $dbnm);
	if (!$dbconn) {
		print'PHP could not connect to database server';
		exit;
	}
			$sql = "SELECT car_id, make, model, price FROM cars";
			$result = mysqli_query($dbconn, $sql) or die(mysqli_error());
			echo "<table border='1'>";
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
						echo "<td>", $row["car_id"] , "</td>";
						echo "<td>", $row["make"] , "</td>";
						echo "<td>", $row["model"] , "</td>";
						echo "<td>$", $row["price"] , "</td>";
					echo "</td>";
				}
			} else {
				echo "0 results";
			}
			echo "</table>";
				
	mysqli_close($dbconn);
?>
</body>
</html>