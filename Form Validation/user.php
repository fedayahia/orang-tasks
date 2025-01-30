<?php
session_start();
if (!isset($_SESSION["user_name"]) || !isset($_SESSION["user_email"])) {
    header("Location: login.php");
    exit();
}

$user_name = $_SESSION["user_name"]; 
$user_email = $_SESSION["user_email"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logout-btn {
            background-color: #dc3545;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome, <?php echo htmlspecialchars($user_email); ?></h1>
    <h1>Welcome, <?php echo htmlspecialchars($user_name); ?>!</h1>
    <a href="sign-up.php" class="logout-btn">Logout</a>
</div>

</body>
</html>
