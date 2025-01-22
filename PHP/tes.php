<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Complete Form</title>
</head>
<body>

    <h2>PHP Complete Form Example</h2>

    <!-- نموذج الإدخال -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span style="color:red;">* <?php echo $nameErr; ?></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span style="color:red;">* <?php echo $emailErr; ?></span>
        <br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" cols="40"><?php echo $message; ?></textarea>
        <span style="color:red;">* <?php echo $messageErr; ?></span>
        <br><br>

        <input type="submit" value="Submit">
        
    </form>

    <?php
    // التعريف بالمتغيرات
    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";

    // التحقق من المدخلات بعد إرسال النموذج
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // التحقق من الاسم
        if (empty($_POST["name"])) {
            $nameErr = "Name is required.";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and spaces are allowed.";
            }
        }

        // التحقق من البريد الإلكتروني
        if (empty($_POST["email"])) {
            $emailErr = "Email is required.";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format.";
            }
        }

        // التحقق من الرسالة
        if (empty($_POST["message"])) {
            $messageErr = "Message is required.";
        } else {
            $message = test_input($_POST["message"]);
        }
    }

    // دالة لتنظيف المدخلات
    function test_input($data) {
        $data = trim($data);            // إزالة المسافات
        $data = stripslashes($data);    // إزالة الباكتشر
        $data = htmlspecialchars($data); // تحويل الحروف الخاصة إلى رموز
        return $data;
    }

    // عرض المدخلات إذا كانت صحيحة
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$messageErr) {
        echo "<h3>Your Input:</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Message: $message<br>";
    }
    ?>
    
</body>
</html>