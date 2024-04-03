<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "vision";

$conn = new mysqli($sName, $uName, $pass, $db_name);

if($conn->connect_error){
  echo $conn->connect_error;
}