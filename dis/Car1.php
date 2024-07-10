<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="../abdullagpnglogo-_convert.io_.svg" />

    <title>Car Rental Offers</title>

</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.car-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 20px;
}

.car-card {
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    margin: 20px;
    max-width: 400px;
    flex: 1;
    box-sizing: border-box;
}

.car-card img {
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ccc;
}

.car-card h3 {
    color: #7e246c;
    text-align: center;
    padding: 10px 0;
    margin: 0;
}

.price-info {
    text-align: center;
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

.original-price {
    text-decoration: line-through;
    color: #ccc;
}

.discounted-price {
    color: #7e246c;
    font-size: 24px;
    margin: 0;
}

.with-driver-btn,
.self-drive-btn {
    background-color: #7e246c;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px 0;
    width: 100%;
}

.self-drive-btn {
    background-color: #5e1b54;
}

.with-driver-btn:hover,
.self-drive-btn:hover {
    background-color: #5e1b54;
}

.free-cancellation {
    color: #5e1b54;
    font-weight: bold;
    margin: 10px 0 0;
}

.self-drive-price {
    color: #7e246c;
    font-size: 18px;
    margin: 0;
}

.car-details {
    padding: 20px;
    text-align: center;
}

.car-details p {
    margin: 5px 0;
}

.car-details a {
    color: #7e246c;
    text-decoration: none;
    font-weight: bold;
}

.car-details a:hover {
    text-decoration: underline;
}

/* Responsive adjustments */
@media screen and (max-width: 768px) {
    .car-card {
        flex: 1 1 calc(50% - 40px);
    }
}

@media screen and (max-width: 480px) {
    .car-card {
        flex: 1 1 100%;
    }
}
</style>

<body>
    <?php require "./Navbar.php" ?>

    <div class="car-container">
        <div class="car-card">
            <img src="https://via.placeholder.com/400x200" alt="Mercedes CLA200">
            <h3>MERCEDES CLA200</h3>
            <div class="price-info">
                <p class="original-price">28,000 PKR/day</p>
                <p class="discounted-price">25,000 PKR/day</p>
                <button class="with-driver-btn">With Driver</button>
            </div>
            <div class="car-details">
                <p><strong>4 Seats</strong></p>
                <p><strong>Automatic</strong></p>
                <p>With Driver (10hrs/day)</p>
                <p>Overtime: PKR 350/hr</p>
                <p>Refill fuel at the end of the day or pay PKR 50/KM</p>
                <p>Excluding fuel & overtime charges</p>
                <a href="#">View Detail</a>
            </div>
        </div>
        <div class="car-card">
            <img src="https://via.placeholder.com/400x200" alt="Honda BRV">
            <h3>HONDA BRV</h3>
            <div class="price-info">
                <p class="original-price">10,000 PKR/day</p>
                <p class="discounted-price">8,000 PKR/day</p>
                <button class="with-driver-btn">With Driver</button>
                <p class="free-cancellation">FREE CANCELLATION</p>
                <p class="self-drive-price">7,000 PKR/day</p>
                <button class="self-drive-btn">Self Drive</button>
            </div>
            <div class="car-details">
                <p><strong>7 Seats</strong></p>
                <p><strong>Automatic</strong></p>
                <p>With Driver (10hrs/day)</p>
                <p>Self Drive (24hrs)</p>
                <p>Overtime: PKR 300/hr</p>
                <p>Refill fuel at the end of the day or pay PKR 40/KM</p>
                <p>Excluding fuel & overtime charges</p>
                <a href="#">View Detail</a>
            </div>
        </div>
    </div>
</body>

</html>