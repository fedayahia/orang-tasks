<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>
<?php
// تعريف المتغيرات الافتراضية
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

// التحقق بعد إرسال النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // التحقق من الاسم
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = test_input($_POST["name"]);
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
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    <!-- عرض النموذج -->
    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color:red;">* <?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color:red;">* <?php echo $emailErr; ?></span>
        <br><br>
        Message: <textarea name="message" rows="5" cols="40"><?php echo $message; ?></textarea>
        <span style="color:red;">* <?php echo $messageErr; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <!-- عرض المدخلات -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$messageErr) {
        echo "<h3>Your Input:</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Message: $message<br>";
    }
    ?>
</body>
</html>
