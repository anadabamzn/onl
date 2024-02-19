
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Add more fields as needed

    // Define file to store data
    $file = 'client_information.txt';

    // Format data
    $data = "Name: $name
Email: $email
"; // Add more fields as needed

    // Write data to file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redirect to thank you page or any other page
    header("Location: thank_you.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <h2>Enter Your Information</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <!-- Add more fields as needed -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
