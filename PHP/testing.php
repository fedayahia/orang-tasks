<?php
$servername = "localhost";
$username = "testuser";
$password = "password";
$dbname = "testuser"; // تأكد أن هذا هو اسم قاعدة البيانات الصحيح

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعلام SQL لجلب البيانات
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if (!$result) {
    die("خطأ في استعلام SQL: " . $conn->error);
}

// عرض البيانات
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "لا توجد بيانات";
}

// إغلاق الاتصال
$conn->close();
?>
