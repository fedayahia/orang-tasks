<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    padding: 50px;
}

h1 {
    color: #333;
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.sign-btn, .login-btn {
    display: inline-block;
    text-decoration: none;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    margin: 10px;
    font-size: 1.2rem;
    transition: background-color 0.3s;
}

.sign-btn {
    background-color: #28a745;
}

.sign-btn:hover {
    background-color: #218838;
}

.login-btn {
    background-color: #007bff;
}

.login-btn:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
    <h1>Hello There!</h1>
    <a href="sign-up.php" class="sign-btn">sign-up</a>
    <a href="login.php" class="login-btn">login</a>
</body>
</html>