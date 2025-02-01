<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM signup WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Employee not found.";
        exit;
    }
} else {
    echo "No employee id specified.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .employee-details {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .employee-details p {
            font-size: 18px;
            color: #555;
        }
        .employee-details img {
            max-width: 100%;
            border-radius: 8px;
        }
        .back-btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="employee-details">
        <h1>Users Details</h1>
        <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
        <p><strong>Name:</strong> <?php echo $row['fullname']; ?></p>
        <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $row['phonenumber']; ?></p>
        <p><strong>Date Created:</strong> <?php echo $row['date_join']; ?></p>
        
        <?php if (!empty($row['img'])): ?>
            <p><strong>User Image:</strong></p>
            <img src="<?php echo $row['img']; ?>" alt="User Image" />
        <?php else: ?>
            <p><strong>User Image:</strong> No image available.</p>
        <?php endif; ?>

        <a href="admin.php" class="back-btn">Back to Employee List</a>
    </div>
</body>
</html>
