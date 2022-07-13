<?php
	
$servername = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($servername,$username,$password);

if(mysqli_connect_errno()){
	echo "Connection Failed";
}else{
	echo "Connection Success!";
}
?>
