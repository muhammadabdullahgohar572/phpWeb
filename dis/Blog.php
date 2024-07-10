<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="../abdullagpnglogo-_convert.io_.svg" />
    <title> Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .card {
        border: none;
        margin: 20px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card img {
        border-radius: 10px 10px 0 0;
        width: 100%;
        height: auto;
    }

    .card-body {
        padding: 20px;
    }

    .card1 {
        border: none;
        margin: 20px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card1:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card1 img {
        border-radius: 10px 10px 0 0;
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .card1-body {
        padding: 20px;
    }

    .read-more-btn {
        background-color: #7e246c;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .read-more-btn:hover {
        background-color: #5e1b54;
    }

    .containr {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 10%;
    }

    .card-wrapper {
        flex: 1 1 calc(33.33% - 40px);
        box-sizing: border-box;
        margin: 10px;
    }

    /* Responsive adjustments */
    @media screen and (max-width: 768px) {
        .card-wrapper {
            flex: 1 1 calc(50% - 40px);
        }
    }

    @media screen and (max-width: 480px) {
        .card-wrapper {
            flex: 1 1 100%;
        }
    }
    </style>
</head>

<body>
    <?php require "./Navbar.php" ?>

    <div class="containr">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/Slider/1674283145609-clifton-karachi.jpg" alt="Explore Clifton, Karachi">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Discover How to Rent a Car in Gulistan-e-Johar</h5>
                    <p class="card-text">Explore the bustling streets of Gulistan-e-Johar, Karachi's vibrant
                        neighborhood. Find reliable car rental services to make your journey seamless and enjoyable...
                    </p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/Slider/1676880265059-Can Rent a Car in Gulistan-e-Johar.jpg"
                        alt="Travel through Gulistan-e-Johar">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Effortless Car Rentals in Gulistan-e-Johar</h5>
                    <p class="card-text">Navigate through one of Karachi's most populous areas with ease. Learn about
                        the best car rental options available for your travel needs...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/Slider/1676397966214-car-rental-north-karachi.jpg" alt="North Karachi Car Rentals">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Top Car Rental Services in Gulistan-e-Johar</h5>
                    <p class="card-text">Gulistan-e-Johar, a lively neighborhood in Karachi, offers various car rental
                        options. Discover the best services to ensure a comfortable and convenient trip...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
    </div>

    <div class="containr">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/Slider/1693984416156-rent-corolla-karachi.jpg" alt="Rent a Corolla in Karachi">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Easy Car Rentals in Gulistan-e-Johar</h5>
                    <p class="card-text">Explore the dynamic Gulistan-e-Johar neighborhood with our trusted car rental
                        services. Find out how to book your ride effortlessly...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/Slider/1676632675334-karachi-lahore-car-rental (1).jpg"
                        alt="Travel Karachi to Lahore">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Renting a Car in Gulistan-e-Johar Made Simple</h5>
                    <p class="card-text">Gulistan-e-Johar is a key area in Karachi. Discover how easy it is to rent a
                        car and enjoy your travels without any hassle...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/Slider/1.jpg" alt="Car Rentals in Karachi">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Best Car Rentals in Gulistan-e-Johar</h5>
                    <p class="card-text">Experience the convenience of renting a car in Gulistan-e-Johar. Learn about
                        the top services available for a smooth journey...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
    </div>


    <div class="containr">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/blog/1651837077097-self-drive-car-rental.jpg">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Easy Car Rentals in Gulistan-e-Johar</h5>
                    <p class="card-text">Explore the dynamic Gulistan-e-Johar neighborhood with our trusted car rental
                        services. Find out how to book your ride effortlessly...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/blog/1651840018711-buying-car-renting (1).jpg" alt="Travel Karachi to Lahore">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Renting a Car in Gulistan-e-Johar Made Simple</h5>
                    <p class="card-text">Gulistan-e-Johar is a key area in Karachi. Discover how easy it is to rent a
                        car and enjoy your travels without any hassle...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/blog/1651840373804-office-commute-karachi.jpg" alt="Car Rentals in Karachi">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Best Car Rentals in Gulistan-e-Johar</h5>
                    <p class="card-text">Experience the convenience of renting a car in Gulistan-e-Johar. Learn about
                        the top services available for a smooth journey...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
    </div>

    <div class="containr">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/blog/1674123844358-car-rental-cost-karachi.jpg">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Easy Car Rentals in Gulistan-e-Johar</h5>
                    <p class="card-text">Explore the dynamic Gulistan-e-Johar neighborhood with our trusted car rental
                        services. Find out how to book your ride effortlessly...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/blog/1674129020413-car-rental-from-airport.jpg" alt="Travel Karachi to Lahore">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Renting a Car in Gulistan-e-Johar Made Simple</h5>
                    <p class="card-text">Gulistan-e-Johar is a key area in Karachi. Discover how easy it is to rent a
                        car and enjoy your travels without any hassle...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/blog/1.jpg" alt="Car Rentals in Karachi">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Best Car Rentals in Gulistan-e-Johar</h5>
                    <p class="card-text">Experience the convenience of renting a car in Gulistan-e-Johar. Learn about
                        the top services available for a smooth journey...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>