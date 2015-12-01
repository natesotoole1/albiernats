<?php
require 'vendor/autoload.php';
session_cache_limiter(false);
session_start();
$app = new \Slim\Slim(); //Sets up Slim framework

 //Connect to Database
 $database = mysqli_connect('localhost', 'root', 'root', 'Bearitos');
 if ($database->connect_errno)
     die("Connection failed: " . $database->connect_error);


$app->get('/addUser', function() {
	global $database;

	$email = $_GET['email'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$password = $_GET['password'];
	$CCProv = $_GET['CCProv'];
	$CCNum = $_GET['CCNum'];
	

	$response = $database->query("INSERT INTO Users (firstname, lastname, email,  password, CCNum, CCProv) VALUES ( '$firstname', '$lastname','$email', '$password', '$CCNum', '$CCProv')");
	echo $response;
});

$app->get('getLoginInfo'), function(){
	global $database;
	$email = $_GET['email'];
	$password = $_GET['password'];

	$response = $database->query("SELECT DISTINCT * FROM Users WHERE email ='$email' AND password = '$password' ");
	$response = $response->fetch_all();
	$response = json_encode($response);
	echo $response;
});
?>