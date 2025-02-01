<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // تحضير الاستعلام
    $query = mysqli_prepare($conn, "SELECT * FROM signup WHERE id = ?");
    if ($query === false) {
        // التحقق من وجود خطأ في التحضير
        die("Error preparing query: " . mysqli_error($conn));
    }

    // ربط المتغيرات للاستعلام
    mysqli_stmt_bind_param($query, 'i', $id);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve the updated data
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $date_created = mysqli_real_escape_string($conn, $_POST['date_created']);

            // تحضير الاستعلام للتحديث
            $updateQuery = mysqli_prepare($conn, "UPDATE signup SET fullname = ?, Email = ?, Phonenumber = ?, date_join = ? WHERE id = ?");
            if ($updateQuery === false) {
                die("Error preparing update query: " . mysqli_error($conn));
            }

            // ربط المتغيرات للاستعلام
            mysqli_stmt_bind_param($updateQuery, 'ssssi', $name, $email, $phone, $date_created, $id);

            if (mysqli_stmt_execute($updateQuery)) {
                header('Location: admin.php');
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
        input[type="text"], input[type="email"], input[type="date"] {
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
    <h1>Edit </h1>

    <form method="POST" action="edit.php?id=<?= $id; ?>">

        <input type="hidden" name="id" value="<?= isset($row['id']) ? $row['id'] : ''; ?>">

        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="<?= isset($row['id']) ? $row['id'] : ''; ?>" disabled>

        <label for="user_image">User Image:</label>
        <img src="<?= isset($row['img']) ? $row['img'] : ''; ?>" alt="User Image" width="100" height="100" />

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= isset($row['Name']) ? $row['Name'] : ''; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= isset($row['Email']) ? $row['Email'] : ''; ?>" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value="<?= isset($row['Phone']) ? $row['Phone'] : ''; ?>" required>

        <label for="date_created">Date Created:</label>
        <input type="date" id="date_created" name="date_created" value="<?= isset($row['Date_Created']) ? $row['Date_Created'] : ''; ?>" required>

        <button type="submit">Update Employee</button>
    </form>
</div>
</body>
</html>
