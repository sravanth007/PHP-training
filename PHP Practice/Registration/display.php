<?php

$conn = mysqli_connect('localhost','root','');
$selected_db = mysqli_select_db($conn,'test');

$sql = "SELECT * from user";
	$result = mysqli_query($conn,$sql);
	
while($row = mysqli_fetch_assoc($result))
	{
		echo '<tr>';
		echo '<td>' .$row['id']. '</td>';
		echo '<td>' .$row['name'].  '</td>';
		echo '<td>' .$row['password']. '</td>';
		echo '<td>' .$row['email']. '</td>';
		//echo "<button type='button' class='btn btn-info'> Display </button>";
		echo '</tr>';
		}
	
?>