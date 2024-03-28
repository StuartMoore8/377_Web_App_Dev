<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="Dates-Sign-Up.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" maxlength="20" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" minlength="8" required><br><br>

        <br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "Dates";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$mode = $_POST['mode'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement to insert data into the Dates table
$sql = "INSERT INTO Dates (email, username, password, mode) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $email, $username, $hashed_password, $mode);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "Sign up successful! You can now log in.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
