<?php
include "config.php";

$sql = "SELECT * FROM Employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Total Salary</th>
                    <th>Absent Days</th>
                    <th>Net Salary</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = $result->fetch_assoc()) {
        $dailyWage = $row["Salary"] / 30;
        $netSalary = $row["Salary"] - ($row["OffDays"] * $dailyWage);

        echo "<tr>
                <td>{$row['Name']}</td>
                <td>{$row['Salary']}</td>
                <td>{$row['OffDays']}</td>
                <td>{$netSalary}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No employees found.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f7fa;
    margin: 20px;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.table thead {
    background-color: #007bff;
    color: white;
}

.table th, .table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

.container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

    </style>
</head>
<body>
    
</body>
</html>