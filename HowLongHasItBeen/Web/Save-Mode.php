<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Mode</title>
</head>
<body>
    <h1>Save Mode</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="mode">Select Mode:</label><br>
        <select id="mode" name="mode" required>
            <option value="1">Mode 1</option>
            <option value="2">Mode 2</option>
            <option value="3">Mode 3</option>
        </select><br><br>

        <input type="submit" value="Save Mode">
    </form>
</body>
</html>



<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    require_once "db_connection.php";

    // Get mode value from the form
    $mode = $_POST["mode"];

    // Validate mode value (optional, since HTML form has 'required' attribute)
    if ($mode >= 1 && $mode <= 3) {
        // Update the mode in the database for the current user (assuming user is logged in)
        // Replace 'user_id' and 'email' with appropriate session or login information
        $user_id = 1; // Example user ID
        $email = "example@example.com"; // Example email

        $sql = "UPDATE Dates SET mode = :mode WHERE user_id = :user_id AND email = :email";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':mode', $mode, PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "Mode updated successfully.";
        } else {
            echo "Error updating mode.";
        }
    } else {
        echo "Invalid mode value.";
    }
} else {
    // Redirect to the Save Mode page if accessed directly without form submission
    header("Location: Save-Mode.php");
    exit();
}
?>
