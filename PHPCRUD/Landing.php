<?php
include 'config.php';

$maxSalaryQuery = "SELECT MAX(Salary) AS maxSalary FROM employees";
$minSalaryQuery = "SELECT MIN(Salary) AS minSalary FROM employees";
$totalEmployeesQuery = "SELECT COUNT(id) AS totalEmployees FROM employees";
$totalSalaryQuery = "SELECT SUM(Salary) AS totalSalary FROM employees";

$maxSalaryResult = mysqli_query($conn, $maxSalaryQuery);
$minSalaryResult = mysqli_query($conn, $minSalaryQuery);
$totalEmployeesResult = mysqli_query($conn, $totalEmployeesQuery);
$totalSalaryResult = mysqli_query($conn, $totalSalaryQuery);

$maxSalary = mysqli_fetch_assoc($maxSalaryResult)['maxSalary'];
$minSalary = mysqli_fetch_assoc($minSalaryResult)['minSalary'];
$totalEmployees = mysqli_fetch_assoc($totalEmployeesResult)['totalEmployees'];
$totalSalary = mysqli_fetch_assoc($totalSalaryResult)['totalSalary'];

$searchID = '';
if (isset($_POST['searchID']) && !empty($_POST['searchID'])) {
    $searchID = mysqli_real_escape_string($conn, $_POST['searchID']);
    $sql = "SELECT id, Name, Address, Salary, OffDays FROM employees WHERE id = '$searchID'";
} else {
    $sql = "SELECT id, Name, Address, Salary, OffDays FROM employees";
}

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "<div class='alert alert-danger'>Error fetching users: " . mysqli_error($conn) . "</div>";
    exit();
}

echo "<h1>View Employees</h1>";

echo "<div class='search-container'>
        <form method='POST' action=''>
            <input type='text' name='searchID' placeholder='Search by Employee ID' value='" . htmlspecialchars($searchID) . "'>
            <button type='submit'>Search</button>
        </form>
      </div>";

      echo "<div class='buttons-container'>
      <a href='create.php' class='btn create-btn'><i class='fa fa-plus' aria-hidden='true'></i> Add New Employee</a>
      <a href='updsalary.php' class='btn create-btn'>Update Salary</a>
       <a href='calsalary.php' class='btn create-btn'>Calculate Salary</a>
    </div>";

echo "<div class='cards-container'>
        <div class='card'>
            <h3>Highest Salary</h3>
            <p>" . $maxSalary . "</p>
        </div>
        <div class='card'>
            <h3>Lowest Salary</h3>
            <p>" . $minSalary . "</p>
        </div>
        <div class='card'>
            <h3>Total Employees</h3>
            <p>" . $totalEmployees . "</p>
        </div>
        <div class='card'>
            <h3>Total Salaries</h3>
            <p>" . $totalSalary . "</p>
        </div>
      </div>";

echo "<table class='employee-table'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Off Days</th>
            <th>Actions</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $id = (int)$row['id'];
    $fullName = htmlspecialchars($row['Name']);
    $address = htmlspecialchars($row['Address']);
    $salary = htmlspecialchars($row['Salary']);
    $offday = htmlspecialchars($row['OffDays']);

    echo "<tr>
            <td>" . $id . "</td>
            <td>" . $fullName . "</td>
            <td>" . $address . "</td>
            <td>" . $salary . "</td>
            <td>" . $offday . "</td>
            <td>
                <a href='read.php?id=" . $id . "' class='btn action-btn'>
                    <i class='material-icons'>visibility</i>
                </a>
                <a href='update.php?id=" . $id . "' class='btn action-btn'>
                    <i class='material-icons'>edit</i>
                </a>
                <a href='delete.php?id=" . $id . "' class='btn action-btn' onclick='return confirm(\"Are you sure you want to delete?\");'>
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
    <title>Landing Page</title>
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

        .search-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-container input {
            padding: 10px;
            font-size: 16px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .search-container button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #0056b3;
        }

        .cards-container {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
        }

        .card {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 5px;
            width: 22%;
            text-align: center;
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .card p {
            font-size: 24px;
            font-weight: bold;
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

        .action-btn {
            color: #007bff;
            margin-right: 10px;
        }

        .action-btn:hover {
            color: #0056b3;
        }
        .buttons-container {
    display: flex;
    gap: 10px;
    justify-content: right;
    margin-bottom: 20px;
}

    </style>
</head>
<body>
</body>
</html>
