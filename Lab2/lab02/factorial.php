<html>
<head>
<title>factorial</title>
<meta http-equiv="Content-type" Content="text/html; charset=utf-8" />
</head>
<body>

 <?php



	include "mathfunctions.php";


	$inputNumber = $_GET['number'];

	$isNumber = is_numeric($inputNumber);

	if($isNumber){
		
		echo factorial($inputNumber);
	}
	else{
		echo "is not a number";
	}




?>

</html>
