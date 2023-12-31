<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
	<link rel="stylesheet" href="/home/apiiit-rkv/Desktop/PROJECT/css/style.css" />
	<title>Register</title>
</head>
<body>
<?php

$email =$_POST['email'];
$mobile_number =$_POST['mobile_number'];
$rating =$_POST['rating'];

$servername = "localhost";
$username = "madhavi";
$dbpassword = "Madhavi-678";
$db = "project";

$conn = new mysqli("localhost","madhavi","Madhavi-678","project");

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into feedback(email,mobile_number,rating) values('$email','$mobile_number','$rating');";

if ($conn->query($sql) === TRUE) 
{
	echo "ADDED:".$email.$mobile_number.$rating;
} 
else
 {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>
</body>
</html>
