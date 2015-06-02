<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<h1>Adding Members Form- Lab 06</h1>
<p>
    	
            <form name="statusForm" action="member_add.php" method="post">
                First Name:
                <p><input type="text" name="fname"></p>
                Last Name:
                <p><input type="text" name="lname"></p>
                Gender:
                <input type="radio" name="gender" value="m" checked> Male 
                <input type="radio" name="gender" value="f">Female <br>
                <br />
                Email:
                <p><input type="text" name="email"></p>
                Phone:
                <p><input type="text" name="phone"></p>
                
                <br/>
                <input type="submit" value="Post">
                <input type="reset" value="Reset">
            </form>
            <p><a href ="vip_member.php"> Return home</a></p>
</body>

</html>