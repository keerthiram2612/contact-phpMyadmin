<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<link rel="stylesheet" href="style.css">
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post"class="form">
		<table width="25%" border="0" class="table">
			<tr> 
				<td>Reg</td>
				<td><input type="text" name="reg"></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Gender</td>
				<td>
                        <input type="radio" name="gender" value="Male">Male</input>
                        <input type="radio" name="gender" value="Female">Female</input>
                </td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add" class="add"></td>
			</tr>
		</table>
	</form>
<?php
if(isset($_POST['Submit'])){
    $reg = $_POST['reg'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

include_once("config.php");

$result = mysqli_query($mysqli, "INSERT INTO contact(reg,name,gender,address)VALUES('$reg','$name','$gender','$address')");
echo "User added successfully.<a href='./index.php'>View users</a>";

}
 ?>
</body>