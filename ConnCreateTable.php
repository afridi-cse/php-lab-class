<html>
<head>
<title>PHP Begins</title>
</head>
<body>

Hello how are you?
<B>This is a test</B>
<i>Whats up </i>





<?php

echo "<h1>HELLO</h1>";
echo "<br><br><i>Whats up </i>";

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

/*
Employee contact

Current address
Home address
Phone home
Mobile 
email
*/


$sql_createTbl = "CREATE TABLE student(`ID` INT, `current_address` VARCHAR(100), 
				  `home_address` VARCHAR(100), `phone_number` INT, `mobile` INT, `email` VARCHAR(100))";

$sql_createTbl2 ="CREATE TABLE add_info(

id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)"; 

if (mysqli_query($conn, $sql_createTbl)) 
{
	echo "<BR>Query ran successfully";
} 

else 
{
	echo "ERROR running query: " . mysqli_error($conn);
}


mysqli_close($conn);

echo "<br><br><u>THANK YOU</u><BR>";



/*
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
*/

?>



</body>
</html>