<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ./Login.php");
    exit;
}

$showAlert = false;
$showError = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../server/Severconnect.php";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($phone) && !empty($message)) {
        $sql = "INSERT INTO `contact` (`name`, `phone`, `company`, `message`) VALUES ('$name', '$phone', '$company', '$message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        } else {
            $showError = "Failed to submit your message. Please try again later.";
        }
    } else {
        $showError = "Please fill in all the required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="../abdullagpnglogo-_convert.io_.svg" />
    <title>Contact Us</title>
    <style>
    body {
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .contact-container {
        padding: 50px;
        background-color: white;
        justify-content: space-between;
        border-radius: 10px;
        margin: 20px;
    }

    .contact-title {
        text-align: center;
        color: #7e246c;
        margin-bottom: 30px;
    }

    .contact-info,
    .contact-form {
        margin-bottom: 20px;
    }

    .contact-info h3,
    .contact-form h3 {
        color: #7e246c;
        margin-bottom: 10px;
    }

    .contact-info p,
    .contact-form p {
        margin: 5px 0;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .contact-form button {
        background-color: #7e246c;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .contact-form button:hover {
        background-color: #5e1b54;
    }

    .map-container {
        text-align: center;
        margin-top: 30px;
    }

    .map-container iframe {
        width: 200px;
        height: 300px;
        border: none;
        border-radius: 10px;
    }

    @media screen and (min-width: 765px) {
        .contact-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            justify-content: space-around;
        }

        .map-container iframe {
            width: 80%;
            height: 400px;
            border: none;
            border-radius: 10px;
        }
    }
    </style>
</head>

<body>
    <?php require "./Navbar.php" ?>
    <?php if ($showAlert) {
        echo '<div class="alert alert-success" role="alert"><b>Success!</b> Your message has been sent successfully.</div>';
    } ?>
    <?php if ($showError) {
        echo '<div class="alert alert-danger" role="alert">' . $showError . '</div>';
    } ?>
    <div class="contact-container">
        <div>
            <h2 class="contact-title">CONTACT US</h2>
            <div class="contact-info">
                <h3>ADDRESS</h3>
                <p>Suite No. 106, 1st Floor, Clifton Broadway Building, Clifton, Karachi, Postal Code: 75600, Pakistan
                </p>
                <h3>CALL</h3>
                <p>0092 3000 RENTLY</p>
                <p>OR</p>
                <p>0092 300 0736859</p>
            </div>
            <div class="contact-form">
                <h3>GET IN TOUCH</h3>
                <form method="post" action="./contactus.php">
                    <p><input type="text" name="name" placeholder="Name*" required></p>
                    <p><input type="email" name="email" placeholder="Email Address*" required></p>
                    <p><input type="tel" name="phone" placeholder="Phone*" required></p>
                    <p><input type="text" name="company" placeholder="Company (optional)"></p>
                    <p><textarea name="message" placeholder="Message*" maxlength="300" rows="5" required></textarea></p>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
        <div class="map-container">
            <h3>Find Us Here</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.008205716726!2d67.02435541496435!3d24.827391984058038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e6d25b9f6f7%3A0xe6d62c29a5072ba4!2sClifton%20Broadway!5e0!3m2!1sen!2s!4v1624437084430!5m2!1sen!2s"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div>
        <?php require "./Footer.php" ?>
    </div>
</body>

</html>