<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM employees WHERE id = '$id'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);
            $salary = mysqli_real_escape_string($conn, $_POST['salary']);
            $OffDays = mysqli_real_escape_string($conn, $_POST['OffDays']);
      
            $updateQuery = "UPDATE employees SET Name = '$name', Address = '$address', Salary = '$salary', OffDays ='$OffDays' WHERE id = '$id'";

            if (mysqli_query($conn, $updateQuery)) {
                header('Location: Landing.php');
                exit;  
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Employee not found.";
        exit;  
    }
} else {
    echo "Invalid employee ID.";
    exit;  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
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
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
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
    <h1>Update Employee</h1>

    <form action="update.php?id=<?php echo $id; ?>" method="POST">
        <input type="text" name="name" placeholder="Full Name" value="<?php echo htmlspecialchars($row['Name']); ?>" required>
        <input type="text" name="address" placeholder="Address" value="<?php echo htmlspecialchars($row['Address']); ?>" required>
        <input type="number" name="salary" placeholder="Salary" value="<?php echo htmlspecialchars($row['Salary']); ?>" required>
        <input type="number" name="OffDays" placeholder="Off Days" value="<?php echo htmlspecialchars($row['OffDays']); ?>" required> 
        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
