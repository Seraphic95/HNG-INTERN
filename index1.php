<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "internship";

// Create connection and check connection
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");

//Selecting from the database
$query =  "select * from intern_info";
$result = mysqli_query($connect,$query);
$count = mysqli_num_rows($result);


?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Hotels.ng</title>
	</head>

	<style>
		h3{
			text-align: absolute;
			font-size: 34px;
		}
	</style>

	<body>

		<h3>Preliminary Training Section</h3>

		<div style="text-align:absolute; font-size:24px; word-spacing:10px; white-space:nowrap;">
			<?php
				if($count > 0){
					while ($user = mysqli_fetch_assoc($result)){
			?>

			<p><b>Username: </b> <?php echo $user['username'] . " " .  $user['email']; ?> </p>
			<?php 
					}
				} else { echo "no value";

			} ?> 
		</div> 

</body>
</html>
