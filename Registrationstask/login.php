<?php
session_start();
require_once "config.php";

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if($result){
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user){
            if(password_verify($password, $user["password"])){
                $_SESSION["user_name"] = $user["name"];
                
                if ($user["role"] == "admin") {
                    header("Location: admin.php");
                } else {
                    header("Location: index.php");
                }
                exit(); 
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email does not exist</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Database query failed</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<style>
     body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background: linear-gradient(135deg, #74ebd5, #acb6e5);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center; 
}

input {
    width: 80%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #28a745;
    color: white;
    font-weight: bold;
    cursor: pointer;
    border: none;
}

input[type="submit"]:hover {
    background-color: #218838;
}
</style>
<body>
<div class="container">
    <form action="login.php" method="post">
        <br>
        <input type="email" name="email" placeholder="Your Email" required> 
        <br>
        <input type="password" name="password" placeholder="Password" required> 
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>
