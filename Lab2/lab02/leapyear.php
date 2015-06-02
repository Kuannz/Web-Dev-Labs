<html>
<head>
<title>leapYear</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1> Conditional Operator </h1>

<?php
$inputNumber = $_GET['year'];
$isNumber = is_numeric($inputNumber);
if($isNumber){
    if (($inputNumber % 4 == 0) && ($inputNumber % 100 != 0) || ($inputNumber % 400 == 0)){
    
       echo "the year you entered is a leap year";}
    else {
	echo "this is not a leap year";}
}





?>




</body>
</html>