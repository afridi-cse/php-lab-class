<html>
<head>
<title>Insert Data from FORM to DATABASE</title>
</head>
<body>

<?php

echo "<h1>Insert Data from FORM to DATABASE</h1>";


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
	$User_idnumber = $_POST['idnumber'];
	$User_fullname = $_POST['fullname'];
	$User_age = $_POST['age'];
	$User_gender = $_POST['gender'];
	$User_address = $_POST['address'];
	$User_dept = $_POST['dept'];
	//$User_transport = $_POST['vehicle1'];

	echo "<BR>ID: ".$User_idnumber;
	echo "<BR>Name: ".$User_fullname;
	echo "<BR>Age: ".$User_age;
	echo "<BR>Gender: ".$User_gender;
	echo "<BR>Address: ".$User_address;
	echo "<BR>Dept: ".$User_dept;

	if(empty($_POST['bike']))
	{
		echo "CHUCK NORRIS";
	}
	else
	{
		echo "<BR>Fav Transport:".$_POST['bike'];
	}
	
	//echo "<BR>Veh 2".$_POST['456'];
	//echo "<BR>Veh 3".$_POST['789'];


	/*
   $sql_insert = "INSERT INTO `employeeinfo` (id, name, age, gender, address, departrment) VALUES('
	    $User_idnumber','$User_fullname','$User_age','
		$User_gender','$User_address','$User_dept')";
		
	
	if (mysqli_query($conn, $sql_insert)) 
	{
		echo "<BR>Data inserted successfully, Kopi";
	} 

	else 
	{
		echo "ERROR Data could not be inserted: " . mysqli_error($conn);
	}


	mysqli_close($conn);

	echo "<br><br><u>THANK YOU</u><BR>";
	*/
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
<td>Name: </td><td><input type="text" name="fullname" ></td>
</tr>
</table>


Age: <input type="text" name="age" ><br>
Gender: <br>
<input type="radio" name="gender" value="Male">Male<br>
<input type="radio" name="gender" value="Female" checked>Female<br>
<input type="radio" name="gender" value="Other" >Other<br>
Address: <input type="text" name="address" ><br>
Department<br>
<select name="dept">
	<option value="Movie">Movies</option>
	<option value="Footballer">Footballer</option>
	<option value="Teacher">Faculty</option>
	<option value="Musician">Singer</option>
	<option value="Musician">Guitarist</option>
	<option value="Musician">Drummer</option>
</select>

<br>
Transport<br>
<input type="checkbox" name="bike" value="Bike">BIKE<br>
<input type="checkbox" name="car" value="Car">CAR<br>
<input type="checkbox" name="boat" value="Boat">BOAT<br>



<br><br><input type="Submit" name="submit" value="Enter your data">
</form>


</body>
</html>