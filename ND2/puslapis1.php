<!DOCTYPE html>
<html>
<body>

<h1>Pirmas puslapis</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";


try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname;username=$username;password=$password");

$conn->setAttributes(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>


</body>
</html>
