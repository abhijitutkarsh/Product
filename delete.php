<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "sample";
	$conn = mysqli_connect($server, $user, $pass, $database);
	if(mysqli_connect_error())
	{
		echo "<p>OOppss..some error are occurring...kindly try again later...exiting...</p>";
		exit();
	}
?>
<html>
<head>
	<title>PHP and MySQLi Delete Record from Table Example</title>
</head>
<body>
<?php
	$Name = $_GET['Name'];
	$sqlQry = "delete from sample.table where Name='$Name'";
	$res = $conn->query($sqlQry);
	if($res)
	{
		echo "<p>Record with Name = $Name, is deleted successfully.</p>";
	}
	else 
	{
		echo "<p>Error in deleting the record..exiting...</p>";
		exit();
	}
?>
</body>
</html>