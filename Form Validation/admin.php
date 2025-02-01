<?php
include 'config.php';

// Fetching user data
$sql = "SELECT * FROM `signup`";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "<div class='alert alert-danger'>Error fetching users: " . mysqli_error($conn) . "</div>";
    exit();
}

echo "<h1>View Users</h1>";

echo "<div class=\"create-btn-container\">
        <a href='create.php' class=\"btn create-btn\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Add New Employee</a>
      </div>";

echo "<table class='employee-table'>
        <tr>
            <th>ID</th>
            <th>User Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Phone Number</th>
            <th>Actions</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    // Sanitize the data for output
    $userImage = htmlspecialchars($row['img']);
    $fullName = htmlspecialchars($row['fullname']);
    $email = htmlspecialchars($row['email']);
    $dateJoin = htmlspecialchars($row['date_join']);
    $phoneNumber = htmlspecialchars($row['phonenumber']);
    $id = (int)$row['id'];  // Ensure the ID is treated as an integer

    // Output user data in a table
    echo "<tr>
            <td>" . $id . "</td>
            <td><img src='" . $userImage . "' alt='User Image' width='50'></td>
            <td>" . $fullName . "</td>
            <td>" . $email . "</td>
            <td>" . $dateJoin . "</td>
            <td>" . $phoneNumber . "</td>
            <td>
                <a href='read.php?id=" . $id . "' class='btn delete-btn'>
                    <i class='material-icons'>visibility</i>
                </a>
                <a href='edit.php?id=" . $id . "' class='btn delete-btn'>
                    <i class='material-icons'>edit</i>
                </a>
                <a href='delete.php?id=" . $id . "' class='btn delete-btn' onclick='return confirm(\"Are you sure you want to delete?\");'>
                    <i class='material-icons'>delete</i>
                </a>
            </td>
          </tr>";
}

echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Employees Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .create-btn-container {
            text-align: right;
            margin-bottom: 20px; 
        }

        .create-btn {
            background-color: #007bff;
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .create-btn:hover {
            background-color: #0056b3;
        }

        .employee-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .employee-table th, .employee-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .employee-table th {
            background-color: #007bff;
            color: white;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: #0056b3; 
        }

        .delete-btn {
            color: #e74c3c;
        }

        .delete-btn:hover {
            color: #c0392b;
        }
    </style>
</head>
<body>
  
</body>
</html>





