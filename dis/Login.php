<?php

$login = false;
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../server/Severconnect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login WHERE Email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;
            header("location: ./index.php");
            exit();
        } else {
            $err = "Invalid email or password.";
        }
    } else {
        $err = "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="../abdullagpnglogo-_convert.io_.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .login-container {
        padding: 50px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        max-width: 400px;
        margin: 100px auto;
    }

    .login-title {
        text-align: center;
        color: #7e246c;
        margin-bottom: 30px;
    }

    .login-form {
        display: flex;
        flex-direction: column;
    }

    .login-form input[type="email"],
    .login-form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-form button {
        background-color: #7e246c;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-form button:hover {
        background-color: #5e1b54;
    }

    .signup-link {
        text-align: center;
        margin-top: 20px;
        color: #7e246c;
    }

    .signup-link a {
        color: #7e246c;
        text-decoration: none;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }

    .alert {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .alert-success {
        color: white;
        background-color: #28a745;
    }

    .alert-danger {
        color: white;
        background-color: #dc3545;
    }
    </style>
</head>

<body>
    <?php require "./Navbar.php"; ?>

    <?php
    if ($login) {
        echo '<div class="alert alert-success" role="alert"><b>Success!</b> You are logged in.</div>';
    } elseif (!empty($err)) {
        echo '<div class="alert alert-danger" role="alert"><b>Error:</b> ' . $err . '</div>';
    }
    ?>

    <div class="login-container">
        <h2 class="login-title">Login</h2>
        <form class="login-form" method="post" action="./Login.php">
            <input type="email" name="email" placeholder="Email*" required>
            <input type="password" name="password" placeholder="Password*" required>
            <button type="submit">Login</button>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="./signup.php">Sign up</a></p>
        </div>
    </div>
    <div>
        <?php require "./Footer.php"; ?>
    </div>
</body>

</html>