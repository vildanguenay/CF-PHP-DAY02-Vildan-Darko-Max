<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		$sql = "CREATE TABLE $tableName (Darko int, Max int, Primary Key (Max))";
		if  (mysqli_query($conn, $sql)) {
		   echo "Table $dbname created successfully! \n";
		} else {
		   echo "Error creating table $dbname: " . mysqli_error($conn);
		}
		mysqli_close($conn);

?>

</body>
</html>