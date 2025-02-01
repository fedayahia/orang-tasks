<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : null;
    $address = isset($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) : null;
    $salary = isset($_POST['salary']) ? mysqli_real_escape_string($conn, $_POST['salary']) : null;
    $offDays = isset($_POST['OffDays']) ? mysqli_real_escape_string($conn, $_POST['OffDays']) : null;

    if ($name && $address && $salary && $offDays) {
        $query = "INSERT INTO employees (Name, Address, Salary, OffDays) VALUES ('$name', '$address', '$salary', '$offDays')";

        if (mysqli_query($conn, $query)) {
            header('Location: Landing.php');  
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Please fill in all fields.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .container {
            width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input[type="text"], input[type="number"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 80%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Add New Employee</h1>
    <form action="create.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="number" name="salary" placeholder="Salary" required>
        <input type="number" name="OffDays" placeholder="Off Days" required> 
        <button type="submit">Register</button>
    </form>
</div>
</body>
</html>
