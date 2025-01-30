<?php
session_start();
require_once "config.php"; 

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

   
    $sql = "SELECT * FROM signup WHERE email = ?";
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("s", $email); 

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = $result->fetch_assoc(); 

        if ($user) {
            if (password_verify($password, $user["password"])) {

                $_SESSION["user_name"] = $user["fullname"]; 
                $_SESSION["user_email"] = $user["email"];

                $user_id = $user["id"];
                $role_sql = "SELECT * FROM roles WHERE id = ?";
                $role_stmt = $conn->prepare($role_sql);
                $role_stmt->bind_param("i", $user_id);
                $role_stmt->execute();
                $role_result = $role_stmt->get_result();
                $role = $role_result->fetch_assoc();

                if (isset($role["type"]) && $role["type"] == "admin") {
                    header("Location: admin.php");
                } else {
                    header("Location: user.php");
                }
                exit();
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email does not exist</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Database query failed: " . mysqli_error($conn) . "</div>";
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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

h2 {
    margin-bottom: 15px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input:focus {
    border-color: #007bff;
    outline: none;
}

input[type="submit"] {
    background: #007bff;
    color: white;
    font-size: 18px;
    cursor: pointer;
    border: none;
    transition: 0.3s;
}

input[type="submit"]:hover {
    background: #0056b3;
}

.register-link {
    display: block;
    margin-top: 10px;
    font-size: 14px;
    text-align: center;
}

.register-link a {
    color: #007bff;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

p {
    font-size: 14px;
    margin-top: 5px;
}

p[style="color: red;"] {
    color: #dc3545;
    font-weight: bold;
}

p[style="color: green;"] {
    color: #28a745;
    font-weight: bold;
}

</style>
<body>
<div class="container">
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="Your Email" required> 
        <input type="password" name="password" placeholder="Password" required> 
        <input type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>
