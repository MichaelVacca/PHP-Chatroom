<?php
session_start();
include 'database.php';


//Get Data from login page
$username = $_POST['username'];
$password = $_POST['password'];



$sql="SELECT * from signup WHERE username='$username' AND password ='$password'";
$result=$conn->query($sql);

if(!$row=$result->fetch_assoc())
{
    header("Location:error.php");
}
 else { 
     
    //Set the sessio  name to be the username the client entered
    $_SESSION['name'] = $_POST['username'];
        header("Location:home.php");
}
?>