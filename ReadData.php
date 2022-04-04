<html>
<head>
<title>Read Data</title>
</head>
<body>

<?php

echo "<h1>Reading Data</h1>";


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

echo "<BR><BR>";
echo "READ AND PRINT DATA WITHOUT TABLE: <BR><BR>";

$sql_read = "SELECT id, name, address FROM employeeinfo";
$result = mysqli_query($conn, $sql_read);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      echo $row["id"]." : ".$row["name"]." : ".$row["address"]."<br>";

  }
} 

else {
  echo "0 results";
}


echo "<BR><BR>";
echo "READ AND PRINT DATA WITHIN TABLE: <BR><BR>";

$sql_read = "SELECT id, name, address FROM employeeinfo";
$result = mysqli_query($conn, $sql_read);

if (mysqli_num_rows($result) > 0) {
  echo "<TABLE BORDER='1'>";
	  echo "<TR>";
      echo "<TH>ID NUMBER</TH><TH>NAME</TH><TH>ADDRESS</TH>";
	  echo "</TR>";
  
  while($row = mysqli_fetch_assoc($result)) {
	  echo "<TR>";
      echo "<TD>".$row["id"]."</TD><TD>".$row["name"]."</TD><TD>".$row["address"]."</TD>";
	  echo "</TR>";
  }

  echo "</TABLE>";
} 

else {
  echo "0 results";
}








mysqli_close($conn);

echo "<br><br><u>THANK YOU</u><BR>";


?>



</body>
</html>