<!DOCTYPE html>
<?php


session_start();
session_unset();

session_destroy();

header("location: ./Login.php");


?><html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out


    </title>
</head>

<body>
    <?php require "./Navbar.php" ?>


</body>

</html>