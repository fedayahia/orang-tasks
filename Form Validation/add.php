<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST["fullname"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $phonenumber = htmlspecialchars($_POST["phonenumber"]);
    $role = "user"; 

 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

   
    if ($password !== $password2) {
        die("Error: Passwords do not match.");
    }


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["error"] === UPLOAD_ERR_OK) {

        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_name = time() . "_" . basename($_FILES["profile_image"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $allowed_types = ["jpg", "jpeg", "png"];
        if (!in_array($imageFileType, $allowed_types)) {
            die("Error: Only JPG, JPEG, and PNG files are allowed.");
        }

    
        if ($_FILES["profile_image"]["size"] > 2 * 1024 * 1024) {
            die("Error: File is too large. Maximum allowed size is 2MB.");
        }

     
        if (!move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            die("Error: There was an issue uploading your image.");
        }
    } else {
        die("Error: No file uploaded or file upload failed. Error Code: " . $_FILES["profile_image"]["error"]);
    }

    $sql = "INSERT INTO signup (fullname, email, password, phonenumber, img) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fullname, $email, $hashed_password, $phonenumber, $target_file);

    if ($stmt->execute()) {
        $user_id = $conn->insert_id;

   
        $role_sql = "INSERT INTO roles (id, type) VALUES (?, ?)";
        $role_stmt = $conn->prepare($role_sql);
        $role_stmt->bind_param("is", $user_id, $role);

        if ($role_stmt->execute()) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_email'] = $email;
            header("Location: admin.php");
            exit();
        } else {
            die("Error inserting role: " . $role_stmt->error);
        }
    } else {
        die("Error inserting user: " . $stmt->error);
    }
}
?>
