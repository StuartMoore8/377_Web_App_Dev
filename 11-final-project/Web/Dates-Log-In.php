<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #444444;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      background-color: #999999;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #16811C;
    }

    input[type="text"],
    input[type="password"] {
      width: 95%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #999999;
      border-radius: 5px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #16811C;
      color: #fff;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0F6814;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .text-center {
      text-align: center;
    }

    .create-account-link {
      color: #16811C;
      text-decoration: none;
    }

    .create-account-link:hover {
      text-decoration: underline;
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
      right: -20px;
      background-color: #333;
      min-width: 180px;
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
        </div>
    </nav>
  <div class="container">
    <center><h1>Log in to HowLongHasItBeen</h1></center>
    
    <form action="Validate-log-in.php" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Log in">
      </div>
    </form>
    <center><h2>----- or ------</h2></center>
    <form action="Dates-Sign-up.php" method="get">
      <div class="form-group">
        <center>Dont already have an account?</center>
        <input type="submit" value="Sign up instead">
      </div>
    </form>
    <center><a href="Forgot-password.php">Forgot Password?</a></center>
  </div>
</body>

</html>
