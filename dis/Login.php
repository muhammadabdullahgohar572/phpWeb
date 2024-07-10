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
    </style>
</head>

<body>
    <?php require "./Navbar.php" ?>

    <div class="login-container">
        <h2 class="login-title">Login</h2>
        <form class="login-form">
            <input type="email" name="email" placeholder="Email*" required>
            <input type="password" name="password" placeholder="Password*" required>
            <button type="submit">Login</button>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="./signup.php">Sign up</a></p>
        </div>
    </div>
</body>

</html>