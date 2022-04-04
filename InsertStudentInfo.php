<html>
<head>
<title>Insert Student Info </title>
</head>
<body>

<?php

echo "<h1>Insert Student Info From Form To Database</h1>";


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


if(isset($_POST['submit']))
{
	$id = $_POST['idnumber'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$section = $_POST['section'];
	$department = $_POST['dept'];

	echo "<BR>ID: ".$id;
	echo "<BR>Name: ".$name;
	echo "<BR>Department: ".$department;
	echo "<BR>Section: ".$section;
	echo "<BR>Mobile: ".$mobile;
	echo "<BR>Address: ".$address;
	echo "<BR>Email: ".$email;

	
	
   $student_info_insert = "INSERT INTO `student_info` 
   						(ID, name, department, section, mobile, address, email) 
						VALUES
						('$id','$name','$department','$section','$mobile','$address','$email')";
		
	
	if (mysqli_query($conn, $student_info_insert)) 
	{
		echo "<BR>Student Info Inserted to Database Successfully";
	} 

	else 
	{
		echo "ERROR Data could not be inserted: " . mysqli_error($conn);
	}


	mysqli_close($conn);

	echo "<br><br><u>THANK YOU</u><BR>";
	
}


/*
$sql_insert = "INSERT INTO `employee_contact` (id, current_address, home_address, mobile, email)
        VALUES(101, 'Road # 15 Dhanmondi, Dhaka', 'Khulna', '019876543', 'salam@gmail.com')";

$sql_insert2 = "INSERT INTO `add_info` (id, firstname, lastname) 
                 VALUES (6,'Barack', 'Obama')";
			
if (mysqli_query($conn, $sql_insert2)) 
{
	echo "<BR>Data inserted successfully";
} 

else 
{
	echo "ERROR Data could not be inserted: " . mysqli_error($conn);
}


mysqli_close($conn);

echo "<br><br><u>THANK YOU</u><BR>";
*/

?>

<form method="POST">

<br>PLEASE ENTER YOUR DATA<br><br>
<table>

<tr>
<td>ID: </td><td><input type="text" name="idnumber" Required></td>
</tr>
<tr>
<td>Name: </td><td><input type="text" name="name" ></td>
</tr>
<tr>
<td>Address: </td><td><input type="text" name="address" ></td>
</tr>
<tr>
<td>Mobile: </td><td><input type="text" name="mobile" ></td>
</tr>
<tr>
<td>Email: </td><td><input type="text" name="email" ></td>
</tr>
</table>

Section: <br>
<input type="radio" name="section" value="1" checked>1<br>
<input type="radio" name="section" value="2">2<br>

Department<br>
<select name="dept">
	<option value="CSE">CSE</option>
	<option value="EEE">EEE</option>
	<option value="BBA">BBA</option>
	<option value="CIVIL">CIVIL</option>
	<option value="ENGLISH">ENGLISH</option>
	<option value="MBA">MBA</option>
</select>

<br><br><input type="Submit" name="submit" value="Enter your data">
</form>


</body>
</html>