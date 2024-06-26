<?php
$servername="localhost";
$username="id20940039_root";
$password="@Katasandi123";
$dbname="id20940039_projectmolyshop";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}
?>
