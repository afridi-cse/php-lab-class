<html>
<head>
<title>Student Info Table Create</title>
</head>
<body>

Hello how are you?
<br>
<b>Welcome to create student info table</b>
<br>


<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "phpLabClass";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if($conn)
{

	echo "Database connected successfully";

}

else
{

	die("Could not connect to database");
}




$create_student_info_table = "CREATE TABLE student_info(
                                                `name` VARCHAR(100),
                                                `ID` INT(9) PRIMARY KEY, 
                                                `department` VARCHAR(100), 
                                                `address` VARCHAR(100),
                                                `section` INT,
                                                `mobile` INT,
                                                `email` VARCHAR(100))";


if (mysqli_query($conn, $create_student_info_table)) 
{
	echo "<BR>Query ran successfully";
} 

else 
{
	echo "ERROR running query: " . mysqli_error($conn);
}


mysqli_close($conn);

echo "<br><br><u>THANK YOU</u><BR>";



?>



</body>
</html>