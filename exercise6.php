<!DOCTYPE html>
<html>
<head>
	<title>exercise6</title>
</head>
<body>

<?php
		$servername = "localhost";
		$username = "root";
		$password = "" ;
		$dbname = "my_test_database";
		$tableName = "Vildan";


		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		   die("Connection failed: "  . mysqli_connect_error());
		}
		$sql = "INSERT INTO $tableName (Darko, Max) VALUES(10,15)";
		if  (mysqli_query($conn, $sql)) {
		   echo "Table insert $dbname  successfully! \n";
		} else {
		   echo "Error creating table insert $dbname: " . mysqli_error($conn);
		}
		mysqli_close($conn);

?>

</body>
</html>