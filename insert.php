<?php
		$conn = mysqli_connect("localhost", "root", "", "testDB");
		
		// Checking the connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		$sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your data has been successfully stored in your database!!</h3>";

			echo ("<p><b>First Name:</b> ".$first_name."</p>");
			echo("<p><b>Last Name:</b> ".$last_name."</p>");
			echo("<p><b>Gender:</b> ".$gender."</p>");
			echo("<p><b>Address:</b> ".$address."</p>");
			echo("<p><b>Email:</b> ".$email."</p>");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Closeing the connection
		mysqli_close($conn);
?>
