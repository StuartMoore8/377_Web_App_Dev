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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "db_connection.php";

    $mode = $_POST["mode"];

    if ($mode >= 1 && $mode <= 3) {
        $user_id = 1;
        $email = "example@example.com";

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
    header("Location: Save-Mode.php");
    exit();
}
?>
