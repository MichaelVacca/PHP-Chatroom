<?php
session_start();

include 'database.php';
//Send message that user wrote
$message = $_POST['msg'];

//Get the sessions username 
$name= $_SESSION['name'];



$sql = "INSERT INTO messages (message,name) VALUES ('$message','$name')";

//Security versus SQL injection
$stmt = $conn -> prepare("INSERT INTO messages (message,name) VALUES (?,?)");
$stmt->bind_param("ss", $messagePrepared, $namePrepared);




$messagePrepared = $message;
$namePrepared = $name;

$stmt->execute();

header("Location:home.php");



?>