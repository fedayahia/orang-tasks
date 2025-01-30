<?php
include 'config.php';

$sql = "SELECT * FROM `signup`";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn)); 
}
echo "<h1>View users</h1>";

echo "<div class=\"create-btn-container\">
        <a href='create.php' class=\"btn create-btn\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Add New Employee</a>
      </div>";

echo "<table class='employee-table'>
        <tr>
            <th>ID</th>
        <th>user image</th>
            <th>Name</th>
            <th>email</th>
            <th>date created</th>
            <th>phone number</th>
            <th>Actions</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['img'] . "</td>
            <td>" . $row['fullname'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['date_join'] . "</td>
            <td>" . $row['phonenumber'] . "</td>
            <td>
                    <a href='read.php?id=" . $row['id'] . "' class='btn delete-btn'>
                    <i class='material-icons'>visibility</i>
                </a>
                     <a href='edit.php?id=" . $row['id'] . "' class='btn delete-btn'>
                    <i class='material-icons'>edit</i>
                </a>
             <a href='delete.php?id=" . $row['id'] . "' class='btn delete-btn'>
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

.a{
    text-decoration: none;
}
a:hover {
    color: #0056b3; 
}

    </style>
</head>
<body>
  
</body>
</html>
