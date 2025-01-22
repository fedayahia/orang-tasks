<!-- 8. Creating Cookies include cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure],
 [httponly] . Then Retrieve all cookies value after that delete the cookies .  -->
<?php
// Step 1: Create a cookie 
if (!isset($_COOKIE['user'])) {
    $cookie_name = "user";
    $cookie_value = "Feda' yahia";
    $expiry_time = time() + (86400 * 30); // 30 days from now
    $cookie_path = "/"; // Available across the entire domain
    $domain = ""; // Leave blank for current domain
    $secure = false; // Set to true if using HTTPS
    $httponly = true; // Accessible only through HTTP (not JavaScript)

    setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);

    echo "Cookie 'user' has been set!<br>";
}

// Step 2: Retrieve the cookie
if (isset($_COOKIE['user'])) {
    echo "Cookie 'user' is set!<br>";
    echo "Value: " . $_COOKIE['user'] . "<br>";
} else {
    echo "Cookie 'user' is not set!<br>";
}

// Step 3: Delete the cookie 
if (isset($_COOKIE['user'])) {
    setcookie("user", "", time() - 3600, "/");
    echo "Cookie 'user' has been deleted!<br>";
}
?>