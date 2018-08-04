<?php
$user="root";
$pass="";
$host = "localhost";
$db = "MPSC";

$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn){
	echo $conn->error();
}
?>