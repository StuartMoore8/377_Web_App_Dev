<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #444444;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav ul li {
            margin-right: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        .dropdown {
            position: relative;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            right: -100px;
            background-color: #333;
            min-width: 240px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #111;
        }

        h1 {
            color: white;
        }

        h5 {
            color: white;
        }

        p {
            color: white;
        }
    </style>
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About the creator</a></li>
    </ul>
    <div class="dropdown">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlS7eNSy0G_FmGzVi14nYpDgEgOuueBmvi9u3w6A0X_A&s" alt="User Menu" width="40" height="40">
        <div class="dropdown-content">
            <a href="Dates-Sign-Up.php">Sign Up</a>
            <a href="Dates-Log-In.php">Log In</a>
        </div>
    </div>
</nav>

<h1>Welcome to "How long has it been since"</h1>
    
<h5>If you would like to save one of your times</h5>
<h5>you need to sign up</h5>

</body>
</html>
