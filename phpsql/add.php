<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;
    $salary = isset($_POST['salary']) ? $_POST['salary'] : null;

    if ($name && $address && $salary) {
        $query = "INSERT INTO Employees (Name, Address, Salary) VALUES ('$name', '$address', '$salary')";

        if (mysqli_query($conn, $query)) {
            echo "Data inserted successfully.";
            header('Location: select.php');  
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>
