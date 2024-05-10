<?php
$host = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'Dates';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM Dates WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div style="text-align: center; font-size: 50px;">Login successful.</div>';
    echo '<script>loggedIn();</script>';
    echo '<script>
            setTimeout(function(){
                window.location.href = "index.php";
            }, 750);
          </script>';
    } else {
        echo '<div style="text-align: center; font-size: 50px;">Login unsuccessful.</div>';
        echo '<div style="text-align: center; font-size: 50px;">Try logging in again.</div>';
        echo '<script>
                setTimeout(function(){
                    window.location.href = "Dates-log-in.php";
                }, 750);
              </script>';
}

$conn->close();
?>
