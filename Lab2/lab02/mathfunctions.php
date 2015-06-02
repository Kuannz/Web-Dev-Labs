<html>
<head>
<title>math functions</title>
<meta http-equiv="Content-type" Content="text/html; charset=utf-8" />
</head>
<body>
<h1></h1>
<?php

$number = $_GET['number'];
factorial($number);
	function factorial ($n){
		$result = 1;
		$factor = $n;
		while($factor >1){
		$result = $result * $factor;
		$factor--;
		}
		return $result;
	}
?>


</body>
</html>
