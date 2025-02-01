<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updateOption = $_POST["updateOption"];
    $amount = floatval($_POST["amount"]);
    $operation = $_POST["operation"];
    $employeeId = isset($_POST["employeeId"]) ? intval($_POST["employeeId"]) : null;

    if ($amount <= 0) {
        die("Amount must be greater than zero.");
    }

    $operator = ($operation === "increase") ? "+" : "-";

    if ($updateOption === "all") {
        $sql = "UPDATE Employees SET Salary = Salary $operator $amount";
    } elseif ($updateOption === "specific" && $employeeId) {
        $sql = "UPDATE Employees SET Salary = Salary $operator $amount WHERE id = $employeeId";
    } else {
        die("Invalid update option or missing Employee ID.");
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: landing.php");
        exit();
    } else {
        echo "<p style='color: red;'>Error updating salary: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Salary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Update Salary</h2>
        <form action="updsalary.php" method="post">
            <label class="form-label">Select Update Option:</label>
            <select class="form-select mb-3" name="updateOption" required>
                <option value="all">All Employees</option>
                <option value="specific">Specific Employee</option>
            </select>

            <label class="form-label">Employee ID (Only if updating a specific employee):</label>
            <input type="number" class="form-control mb-3" name="employeeId">

            <label class="form-label">Amount:</label>
            <input type="number" class="form-control mb-3" name="amount" step="0.01" required>

            <label class="form-label">Operation:</label>
            <select class="form-select mb-3" name="operation" required>
                <option value="increase">Increase</option>
                <option value="decrease">Decrease</option>
            </select>

            <button type="submit" class="btn btn-primary">Update Salary</button>
        </form>
    </div>
</body>
</html>
