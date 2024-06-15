<?php
echo "Welcome to the World of Coders";

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username ,$password);
if(!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}?>