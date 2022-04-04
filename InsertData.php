<html>
<head>
<title>Insert Data</title>
</head>
<body>

<?php

echo "<h1>Inserting Data</h1>";


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
$sql_createTbl = "CREATE TABLE employee_contact(`current_address` VARCHAR(100), 
				  `home_address` VARCHAR(100), `phone_number` INT, `mobile` INT, `email` VARCHAR(100))";
*/


/*
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
*/


$sql_insert = "INSERT INTO `student` (ID, current_address, home_address, mobile, email)
        VALUES(101, 'Road # 15 Dhanmondi, Dhaka', 'Khulna', '019876543', 'salam@gmail.com')";

$sql_insert2 = "INSERT INTO `add_info` (id, firstname, lastname) 
                 VALUES (152,'Barack', 'Obama')";
			
// mysqli_query($conn, $sql_insert2);
// mysqli_query($conn, $sql_insert);

if (mysqli_query($conn, $sql_insert)) 
{
	echo "<BR>Data inserted successfully";
} 

else 
{
	echo "ERROR Data could not be inserted: " . mysqli_error($conn);
}


mysqli_close($conn);

echo "<br><br><u>THANK YOU</u><BR>";


?>



</body>
</html>