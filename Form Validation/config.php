<?php
$servername = "localhost"; 
$username = "testuser";   
$password = "password";    
$dbname = "form_validation"; 

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die ("Connection failed: ".mysqli_connect_error());

}
?>