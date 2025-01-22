<!-- create a form and send email and password , in the action page you will determine if the data is sent by get or
post  -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<?php
function test_input($data) {
    $data = trim($data);            
    $data = stripslashes($data);      
    $data = htmlspecialchars($data); 
    return $data;
}

$email = $password = "";
$method = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $method = "POST";
    if (isset($_POST["email"])) {
        $email = test_input($_POST["email"]);
    }
    if (isset($_POST["password"])) {
        $password = test_input($_POST["password"]);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $method = "GET";
    if (isset($_GET["email"])) {
        $email = test_input($_GET["email"]);
    }
    if (isset($_GET["password"])) {
        $password = test_input($_GET["password"]);
    }
}
if ($method) {
    echo "<h3>Data Received via $method Method:</h3>";
    echo "E-mail: $email<br>";
    echo "Password: $password<br>";
} else {
    echo "<h3>No data received.</h3>";
}
?>
<form action="Super_Global_Variables.php" method="GET">
E-mail: <input type="text" name="email"><br>
pasword: <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html> -->

<!-- 1. make asearch engine website that contain URL as input text and button named (GO) if you click on Go
 will redirect you to the written URL  -->

 <!-- <!DOCTYPE html> 
<html>
<head>
    <title>Asearch engine website</title>
</head>
<body>

<form action="Super_Global_Variables.php" method="POST">
<input type="text" name="keywords" placeholder="Search...">
        <button name="key">Go</button>
    </form>
<?php
$search_URL="http://google.com/search?q=";
    if (isset($_POST["keywords"])) {
        $key = $_POST["keywords"];
        header("location:".$search_URL. $key.'');
    }
?>
</body>
</html> -->
<!-- TRUE ANS -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine</title>
</head>
<body>

<h2>Enter a URL to search:</h2>

<form action="" method="POST">
    <input type="text" name="url" placeholder="Enter URL (e.g., http://example.com)">
    <button type="submit" name="go">GO</button>
</form>

<?php
if (isset($_POST["go"])) {
    $url = $_POST["url"];
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: $url");
        exit();
    } else {
        echo "<p style='color:red;'>Please enter a valid URL starting with http:// or https://</p>";
    }
}
?>
</body>
</html> -->

<!-- 2. make aCalculator that contain Basic Mathematical operations(+,-,*,/) -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title> Calculator</title>
</head>
<body>
    <h2> Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required><br><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br><br>
        <button type="submit" name="operation" value="add">+</button>
        <button type="submit" name="operation" value="subtract">-</button>
        <button type="submit" name="operation" value="multiply">*</button>
        <button type="submit" name="operation" value="divide">/</button><br><br><br><br>
        <input type="submit" value="Calculate">
    </form>


    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation =$_POST['operation'];
}


        if ($operation == 'add') {
            $result = $num1 + $num2;
        } elseif ($operation == 'subtract') {
            $result = $num1 - $num2;
        } elseif ($operation == 'multiply') {
            $result = $num1 * $num2;
        } elseif ($operation == 'divide') {
           
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
        }

     
        echo "<h3>Result: " . $result . "</h3>";
    
    ?>
</body>
</html> -->

<!-- 3. Create a To Do List Page.  -->
<!-- <?php
session_start(); 

// // دالة تنسيق البيانات المدخلة
// function test_input($data) {
//     $data = trim($data);            
//     $data = stripslashes($data);      
//     $data = htmlspecialchars($data); 
//     return $data;
// }
if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = array(); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["todo"])) {
    $todo = test_input($_POST["todo"]);
    if (!empty($todo)) {
        $_SESSION['todos'][] = $todo;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
</head>
<body>

<form action="Super_Global_Variables.php" method="POST">
    To do list: <input type="text" name="todo"><br>
    <input type="submit" value="Submit">
</form>

<?php
if (!empty($_SESSION['todos'])) {
    echo "<ul>";
    foreach ($_SESSION['todos'] as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo "</ul>";
} 
?>
</body>
</html> -->


<!-- 4. determine the project name, and script name . -->
<!-- 5. Determine page requested time. -->

<!-- <?php
$script_name = $_SERVER['SCRIPT_NAME'];
$project_name = basename(dirname($_SERVER['SCRIPT_NAME'])); 
$script_nam = basename($_SERVER['SCRIPT_NAME']);
$script_time =$_SERVER['REQUEST_TIME'];
echo "Project Name: " . $project_name . "<br>";
echo "Script Name: " . $script_name . "<br>";
echo $script_nam. "<br>";
echo $script_time. "<br>";
echo "Request Time (in seconds since Unix Epoch): " . $_SERVER['REQUEST_TIME'] . "<br>";

echo "Request Time (formatted): " . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']) . "<br>";
?>

 -->
 <!-- 6. makeawebsite counter on refresh ?  -->

 <?php

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;  }

$_SESSION['counter']++;
echo "<h2>Refresh Count: " . $_SESSION['counter'] . "</h2>";
?>

<!-- 7. Number of visitors ? -->
<?php
$file = 'visitor_count.txt';
if (!file_exists($file)) {
    file_put_contents($file, '0');
}
$count = (int)file_get_contents($file);
if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = true;
    $count++;
    file_put_contents($file, $count);
}
echo "Number of visitors: " . $count;
?>
