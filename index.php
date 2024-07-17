<?php


// Create database connection using config file
include_once("config.php");// location of database 

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM contact ORDER BY reg DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>
    <tr>
        <th>Reg</th> <th>Name</th> <th>Gender</th> <th>Address</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['reg']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['gender']."</td>";
        echo "<td>" .$user_data['address']."</td>";
        echo "<td><a href='edit.php?reg=$user_data[reg]'>Edit</a> | <a href='delete.php?reg=$user_data[reg]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
