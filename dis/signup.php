<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
    body {
       
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .signup-container {
        padding: 50px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        max-width: 500px;
        margin: 50px auto;
    }

    .signup-title {
        text-align: center;
        color: #7e246c;
        margin-bottom: 30px;
    }

    .signup-form {
        display: flex;
        flex-direction: column;
    }

    .signup-form input[type="text"],
    .signup-form input[type="email"],
    .signup-form input[type="password"],
    .signup-form input[type="tel"],
    .signup-form select {
        width: 100%;
        padding: 10px;
        margin: 5px 0 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .signup-form button {
        background-color: #7e246c;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .signup-form button:hover {
        background-color: #5e1b54;
    }
    </style>
</head>


<body>
    <?php require "./About.php" ?>
    <div class="signup-container">
        <h2 class="signup-title">Signup</h2>
        <form class="signup-form">
            <input type="email" name="email" placeholder="Email*" required>
            <input type="text" name="username" placeholder="Username*" required>
            <input type="password" name="password" placeholder="Password*" required>
            <input type="password" name="confirm-password" placeholder="Confirm Password*" required>
            <input type="tel" name="mobile" placeholder="Mobile No*" required>
            <select name="gender" required>
                <option value="" disabled selected>Gender*</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <button type="submit">Signup</button>
        </form>
    </div>
</body>

</html>