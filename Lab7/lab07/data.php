<!--file data.php -->
<?php
	// get name and password passed from client
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];



	$host = "scms-lamp.aut.ac.nz";
	$stuID = "1249807";
	$conn = @mysqli_connect($host, $stuID, $stuID ) or die("Cant connect to database");
	      
	@mysqli_select_db($conn, $stuID) or die("Cant select the database");
	 if (!$conn) {
	    echo "<p>Database connection failure</p>";
	    } else {
		    
				$query = "select * from lab7 where name = '$name';";
				
				$result = mysqli_query($conn, $query);
				
				if(!$result) {
					echo "<p>Something is wrong with ",	$query, "</p>";
				} else {
		        
	
				
					while ($row = mysqli_fetch_assoc($result)){
						
						echo "email: ",$row["name"];
						
					}
					
				
					mysqli_free_result($result);
				} // if successful query operation
				
				// close the database connection
				mysqli_close($conn);
			} // if successful database connection	



	// sleep for 10 seconds to slow server response down
	sleep(1);
	// write back the password concatenated to end of the name
	ECHO ($name." : ".$pwd);
?>
