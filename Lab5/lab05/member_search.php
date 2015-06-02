<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>VIP member search- Lab 06</h1>
<form name="statusForm" action="" method="get">
            Last Name: 
            <input type="text" name="lname">
            <input type="submit" value="Search">
        </form>
        <br />
<?php
	require_once ("settings.php");
	$dbconn = mysqli_connect($host, $user, $pswd , $dbnm);
	if($_GET)
	{
		$lname = $_GET["lname"];
	
	if (!$dbconn) {
		print'PHP could not connect to database server';
		exit;
	}
			$sql = "SELECT member_id, fname, lname, email FROM vipmembers where lname like '$lname'";
			$result = mysqli_query($dbconn, $sql) or die(mysqli_error());
			echo "<table border='1'>";
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
						echo "<td>", $row["member_id"] , "</td>";
						echo "<td>", $row["fname"] , "</td>";
						echo "<td>", $row["lname"] , "</td>";
					echo "</td>";
				}
			} else {
				echo "0 results";
			}
			echo "</table>";
			
	}
	mysqli_close($dbconn);
?>

<p><a href ="vip_member.php"> Return home</a></p>
</body>
</html>