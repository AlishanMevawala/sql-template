<?php 
$conn = new mysqli("localhost", "amevawala1", "Shanubaby1!", "amevawala1");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if (!defined("BASE_URL")) {
	define("BASE_URL", "https://amevawala1.dmitstudent.ca/dmit2503/sql-template/");
}
?>