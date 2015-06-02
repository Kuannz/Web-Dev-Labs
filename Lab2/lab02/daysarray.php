<html>
<head>
<title>Working with Data Types and operators</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>Arrays</h1>
<?php
	$days = array(
		"Sunday",
		"Monday",
		"Tuesday",
		"Wednesday",
		"Thursday",
		"Friday",
		"Saturday"
		);
		echo "<p> The days of the week in English are:   .</p>";
		foreach($days as $d){
		
		echo $d, ", ";
		}
		$days[0] = "Dimanche";
		$days[1] = "Lundi";
		$days[2] = "Mardi";
		$days[3] = "Mercredi";
		$days[4] = "Jeudi";
		$days[5] = "Vendredi";
		$days[6] = "Samedi";
		
		echo "<p> The days of the week in French are:   .</p>";
		foreach($days as $d){
		
		echo $d, ", ";
		}
		
		
?></body>
</html>