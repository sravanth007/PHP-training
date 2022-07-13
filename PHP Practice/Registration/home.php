<html>
<head>
	<title> Sign Up </title>
<center>
<h2> Register Here </h2>
<form action="home.php" method="post">
<table border="1" width="300" height="150">
	<tr><td>Name:</td>
		<td><input type="text" name="name"><br><br></td>
	</tr>
	<tr><td>Password:</td> 
		<td><input type="password" name="password"><br><br></td>
	</tr>
	<tr><td>Email ID:</td>
		<td><input type="text" name="email"><br><br></td>
	</tr>
	<tr><td colspan="5" align="center"> <input type="Submit" name="signup" value="signup"><br><br>
	<div>
		<!<input type="submit" name=Display" value="Display">
		<input type="submit" name="Edit" value="Edit">
		<input type="submit" name="Delete" value="Delete">
	</div>
	</tr></td>
	
</form>
</center>
</head>
</html>



<?php

$conn = mysqli_connect('localhost','root','');
$selected_db = mysqli_select_db($conn,'test');

if(isset($_POST['signup']))
{
	$name= $_POST['name'];
	$password= $_POST['password'];
	$email= $_POST['email'];
	
	$query= "INSERT INTO user(name,password,email) VALUES('$name','$password','$email')";
	if(mysqli_query($conn,$query)){
		echo "<h3> You have registered successfully!!! </h3>";
	}
	$sql = "SELECT * from user";
	$result = $conn-> query($sql);
	if($result-> num_rows >0)
	{
		while($row= $result-> fetch_assoc())
		{
			echo "<tr><td>". $row["id"] ."</td><td>" .$row["name"] ."</td><td>". $row["password"] ."</td><td>" .$row["email"] ."</td></tr>";
			
		}
	}
}

?>












