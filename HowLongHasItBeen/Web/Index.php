<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to "How long has it been since"</h1>
    <p>This is the home page of the website.</p>
    
    <h5>If you would like to save one of the dates that you get during your time on the website</h5>
    <h5>you can sign up or log in using one of the links below.</h5>
    <nav>
        <ul>
            <li><a href="Dates-Sign-Up.php">Sign Up</a></li>
            <li><a href="Dates-Log-In.php">Login</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h4>Mode</h4>
    <p>Current Mode: <?php echo $current_mode; ?></p> <!-- Assuming $current_mode holds the current mode value -->
    <nav>
        <ul>
            <li><a href="Save-Mode.php">Change Mode</a></li>
        </ul>
    </nav>
</body>
</html>
