<?php
//create conn to db
$dbserver 	= "localhost";
$dbusername 	= "root";
$dbpassword 	= "";
$db 			= "MORTSGame";

$conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);

//check conn to db
if ($conn->connect_error)
{
	die("Connection failed: ".$conn->connect_error);
}

//assign values from form to variables
$username = $_POST['username'];
$password = $_POST['password'];

//CHECK IF USER IS UNIQUE



//INSERT DATA INTO DATABASE
$sql = "INSERT INTO users (username, password)
VALUES ('$username', '$password')";

//EXECUTE QUERY
if($conn->query($sql) === TRUE)
{
	echo "Account has been added successfully.";
}
else
{
	echo "Error: ".$sql."<br/>".$conn->error;
}
?>
