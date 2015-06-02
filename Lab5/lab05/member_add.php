<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php 
    
	require_once ("settings.php");
	$dbconn = mysqli_connect($host, $user, $pswd , $dbnm);
	if (!$dbconn) {
		print'PHP could not connect to database server';
		exit;
	}
	
	$val = mysqli_query($dbconn, "select 1 from vipmembers");
	
	if(!$val)
	{
	   //DO SOMETHING! IT EXISTS!
	   $table_sql = "CREATE TABLE IF NOT EXISTS vipmembers (
  member_id int(11) NOT NULL AUTO_INCREMENT,
  fname varchar(40) NOT NULL,
  lname varchar(40) NOT NULL,
  gender varchar(1) NOT NULL,
  email varchar(40) NOT NULL,
  phone varchar(20) NOT NULL
)";
		mysqli_query($dbconn, $table_sql) or die(mysql_error());
	} 
    
    $fname = $_POST['fname']; 
    $lname = $_POST['lname']; 
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO vipmembers VALUES ('', '$fname', '$lname', '$gender', '$email', '$phone')";
		$post_Query = mysqli_query($dbconn, $sql) or die(mysqli_error());
		if($post_Query)
		{
			echo "User added";
		}
    
	mysqli_close($dbconn);

?>
</body>
</html>