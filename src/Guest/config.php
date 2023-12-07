<?php

$servername="localhost";
$username="root";
$password="";
$dbname="online_fitness";

$connection= new mysqli($servername,$username,$password,$dbname);

if ($connection->connect_error){
	die("Connection failed: ". $connection->connect_error);
}

?>