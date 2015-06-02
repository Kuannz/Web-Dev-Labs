<html>
<head>
<title>Lab03 Task 2</title>
<h1>Lab03 Task 2 - Perfect Palindrome<h1>
</head>
<body>
<?php
  $input = preg_replace("/\W|_/", "", $_POST['input']);
 
  $inputupper = strtoupper($input);
  $inputrev = strrev($inputupper);
  
  if(strcmp($inputupper, $inputrev)) {
    echo "The input is not a palindrome";
  } else {
	  echo "The input is a palindrome";
  }
  
?>
</body>
</html>

