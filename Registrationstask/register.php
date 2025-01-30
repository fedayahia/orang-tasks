<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        flex-direction: column;
    }

    .login-btn {
        background-color: #28a745;
        color: white;
        width: 70%;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-bottom: 20px;
        text-decoration: none;
    }

    .login-btn:hover {
        background-color:#218838;
    }

    .container {
        background: linear-gradient(135deg, #74ebd5, #acb6e5);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center; 
    }

    input {
        width: 80%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #28a745;
        color: white;
        font-weight: bold;
        cursor: pointer;
        border: none;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }

    .register-link {
        margin-top: 10px;
        font-size: 14px;
    }

    .register-link a {
        color: #007bff;
        text-decoration: none;
    }

    .register-link a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <div class="container">
        <?php
        require_once "config.php";

        if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password2 = $_POST["password2"];

            $errors = array();

            if (empty($name) OR empty($email) OR empty($password) OR empty($password2)){
                array_push($errors,"All fields are required");
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors,"Email is not valid");
            }

            if(strlen($password) < 8){
                array_push($errors,"Password must be at least 8 characters long");
            }

            if ($password !== $password2){
                array_push($errors,"Passwords do not match");
            }

            if (count($errors) > 0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                // Password encryption
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                // Data protection
                $name = $conn->real_escape_string($name);
                $email = $conn->real_escape_string($email);
                $password_hash = $conn->real_escape_string($password_hash);

                $sql = "INSERT INTO users (name, email, password,role) VALUES ('$name', '$email', '$password_hash','user')";
                if ($conn->query($sql) === TRUE) {
                    echo "Successfully registered";
                } else {
                    die("Error: " . $conn->error);
                }
            }
        }
        ?>
        <form action="register.php" method="post">
            

            <br>
            <input type="text" name="name" placeholder="Name" required>
            <br>
            <input type="email" name="email" placeholder="Your Email" required> 
            <br>
            <input type="password" name="password" placeholder="Password" required> 
            <br>
            <input type="password" name="password2" placeholder="Confirm Password" required> 
            <br>
        
            <input type="submit" name="submit" value="Register">
            <br>
        
            <a href="login.php" class="login-btn">Login</a>
            <br>
        </form>
        <div class="register-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div> 

</body>
</html>
