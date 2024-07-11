<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="../abdullagpnglogo-_convert.io_.svg" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.enquiry-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.enquiry-form h1 {
    margin-bottom: 20px;
    color: #6b205b;

}

.enquiry-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

.enquiry-form input,
.enquiry-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.enquiry-form button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #6b205b;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.enquiry-form button:hover {
    background-color: #ff00a2;
    transition: background-color 0.3s ease;
    cursor: pointer;
    color: white;
}
</style>

<body>
    <?php require "./Navbar.php" ?>

    <div class="enquiry-form">
        <h1>Corporate Enquiries</h1>
        <p>Please fill out the form below and our representatives will be in touch with you shortly</p>
        <form action="#" method="post">
            <label for="name">Name*</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address*</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone*</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="location">Location*</label>
            <input type="text" id="location" name="location" required>

            <label for="cars">No of Cars*:</label>
            <input type="number" id="cars" name="cars" required>

            <label for="days">No of Days*:</label>
            <input type="number" id="days" name="days" required>

            <label for="purpose">Purpose of Enquiry*:</label>
            <input type="text" id="purpose" name="purpose" required>

            <label for="details">Details*</label>
            <textarea id="details" name="details" maxlength="300" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
    <div>
        <?php require "./Footer.php" ?>

    </div>
</body>

</html>