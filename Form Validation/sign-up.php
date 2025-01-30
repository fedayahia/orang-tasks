<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($_POST["phonenumber"]) || !preg_match("/^\d{10}$/", $_POST["phonenumber"])) {
        $errors[] = "Mobile number must be exactly 10 digits.";
    }

    $fullname = trim($_POST["fullname"]);
    if (empty($fullname) || !preg_match("/^[A-Za-z\s]+$/", $fullname)) {
        $errors[] = "Full Name must contain only letters and spaces.";
    }

    if (empty($_POST["password"]) || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[^\s]{8,}$/", $_POST["password"])) {
        $errors[] = "Password must be at least 8 characters long, contain upper and lower case letters, a number, a special character, and no spaces.";
    }

    if ($_POST["password"] !== $_POST["password2"]) {
        $errors[] = "Passwords do not match.";
    }

    if (isset($_FILES["profileImage"]) && $_FILES["profileImage"]["error"] == 0) {
        $image_name = $_FILES["profileImage"]["name"];
        $image_tmp = $_FILES["profileImage"]["tmp_name"];
        $image_size = $_FILES["profileImage"]["size"];
        $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_extensions = ["jpg", "jpeg", "png", "gif"];

        if (!in_array($image_ext, $allowed_extensions)) {
            $errors[] = "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }

        if ($image_size > 2 * 1024 * 1024) {
            $errors[] = "Image size must be less than 2MB.";
        }

        if (!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }

        $new_image_name = "IMG_" . uniqid() . "." . $image_ext;
        $image_path = "uploads/" . $new_image_name;

        if (!move_uploaded_file($image_tmp, $image_path)) {
            $errors[] = "Failed to upload image.";
        }
    } else {
        $errors[] = "Please upload an image.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $phonenumber = $conn->real_escape_string($_POST['phonenumber']);
        $fullname = $conn->real_escape_string($fullname);
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $image_path = $conn->real_escape_string($image_path);

       
        $role = 'user'; 
        $role_query = "INSERT INTO roles (type) VALUES ('$role')";
        if ($conn->query($role_query) === TRUE) {
            $role_id = mysqli_insert_id($conn);

            $sql = "INSERT INTO signup (email, phonenumber, fullname, password, img, id_role) 
                    VALUES ('$email', '$phonenumber', '$fullname', '$password_hash', '$image_path', '$role_id')";

            if ($conn->query($sql) === TRUE) {
                header("Location: login.php");
                exit();
            } else {
                echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
            }
        } else {
            echo "<p style='color: red;'>Role insertion failed: " . $conn->error . "</p>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; }
        form { background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); width: 350px; text-align: center; }
        h2 { margin-bottom: 15px; color: #333; }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; font-size: 16px; }
        input:focus { border-color: #007bff; outline: none; }
        input[type="submit"] { background: #007bff; color: white; font-size: 18px; cursor: pointer; border: none; transition: 0.3s; }
        input[type="submit"]:hover { background: #0056b3; }
        .register-link { display: block; margin-top: 10px; font-size: 14px; text-align: center; }
        .register-link a { color: #007bff; text-decoration: none; }
        .register-link a:hover { text-decoration: underline; }
        .login-btn { display: inline-block; background: #28a745; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none; font-size: 16px; transition: 0.3s; }
        .login-btn:hover { background: #218838; }
        p { font-size: 14px; margin-top: 5px; }
        p[style="color: red;"] { color: #dc3545; font-weight: bold; }
        p[style="color: green;"] { color: #28a745; font-weight: bold; } 
    </style>
</head>
<body>
<form action="sign-up.php" method="post" enctype="multipart/form-data">
    <input type="email" name="email" placeholder="Your Email" required> 
    <input type="number" name="phonenumber" placeholder="Mobile Number" required>
    <input type="text" name="fullname" placeholder="Full Name" required>
    <input type="password" name="password" placeholder="Password" required> 
    <input type="password" name="password2" placeholder="Confirm Password" required> 
    <input type="file" name="profileImage" accept="image/*" required>
    <input type="submit" name="submit" value="Register">
    <a href="login.php" class="login-btn">Login</a>
    <a href="login.php" class="register-link">Already have an account? Login</a>
</form>
</body>
</html>
