<?php

$host="localhost";
$user="root";
$password="";
$database="s-motor";

$connect=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
	die("cannot".mysqli_connect_errno());
	}
	else{
		echo"can <br>";
	}
$sql = mysqli_query($connect, "SELECT * FROM `dirr`  ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);

echo "id = ".$print_data[0];
echo "<br>";
echo "forward =  ".$print_data[1];
echo "<br>";
echo "left =  ".$print_data[2];
echo "<br>";
echo "stop =  ".$print_data[3];
echo "<br>";
echo "right =  ".$print_data[4];
echo "<br>";
echo "backward =  ".$print_data[5];
