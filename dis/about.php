<!DOCTYPE html>
<?php


session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {

    header("location: ./Login.php");
    exit;
}


?><html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="../abdullagpnglogo-_convert.io_.svg" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
</head>
<style>
body {

    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: 0 auto;
    overflow: hidden;
    padding: 20px;
    background-color: #fff;
}

.section-title {
    text-align: center;
    margin-bottom: 20px;
    font-size: 2em;
    color: #333;
    font-weight: 500;

    color: #7e246c;
}

.section-content {
    margin-bottom: 20px;
}

h2 {
    font-size: 1.5em;
    color: #333;
}

p {
    margin-bottom: 10px;
    color: #666;
}

ul {
    margin: 10px 0;
    padding: 0;
    list-style-type: none;
}

ul li {
    margin: 5px 0;
}

.highlight {
    font-weight: bold;
    color: #333;
}
</style>


<body>
    <?php require "./Navbar.php" ?>

    <img src="../img/About/1610379133729-1 (2).jpg" width="100%" height="100%" alt="">


    <div class="container">
        <h1 class="section-title">About Us</h1>

        <div class="section-content">
            <h2>Rently</h2>
            <p><span class="highlight">Rently</span> is proud to be the best emerging car rental provider in Pakistan,
                recognized at the 15th Consumer Choice Awards.</p>
            <p>Renting cars used to be a hassle with inconsistent rates and low-quality assurance. Rently is here to
                change that as the first on-demand car rental service in Pakistan, offering a seamless experience on a
                single platform.</p>
        </div>

        <div class="section-content">
            <h2>What We Do</h2>
            <p>Rently brings car-rental services to your fingertips for a modern and convenient customer experience. Get
                the car you want, exactly when you need it.</p>
            <p>We offer both on-demand and pre-scheduled vehicles for any occasion, including:</p>
            <ul>
                <li>Corporate Office Staff</li>
                <li>Tours and Trips</li>
                <li>Weddings</li>
                <li>Families</li>
                <li>Individuals</li>
            </ul>
            <p>Our versatility is one of our greatest strengths. Rently provides a wide range of the latest models and
                well-maintained cars, suited for everyone and all occasions. Whether you need a car with a chauffeur or
                prefer to drive yourself, Rently has you covered.</p>
        </div>

        <div class="section-content">
            <h2>Our Mission</h2>
            <p><span class="highlight">Car rental simplified</span></p>
            <p>Rently was established with a primary focus on you, our customers. We aim to evolve the car-rental
                industry into a customer-centric and advanced solution with a fresh, honest approach. When booking a
                hire vehicle, Rently provides hand-picked vehicles and trustworthy drivers, all from the convenience of
                your home.</p>
            <p>At Rently, every car and driver undergoes rigorous 'Rently Selection Tests' before becoming operational.
                Quality is the cornerstone of Rently services, ensuring your safety and comfort in every mile.</p>
        </div>

        <div class="section-content">
            <h2>Our Vision</h2>
            <p>From an innovative idea that revolutionized the car rental industry, Rently's vision extends beyond
                providing car rental services in Karachi. We aim to set new standards in using technology to transform
                traditional services and inspire more entrepreneurs to join this progress.</p>
        </div>

        <div class="section-content">
            <h2>Rently at OPEN Silicon Valley Annual Forum</h2>
            <p>The Organization of Pakistani Entrepreneurs (OPEN) is a renowned network of professionals, investors, and
                entrepreneurs. The Silicon Valley OPEN annual forum promotes entrepreneurial innovation for
                technological growth.</p>
            <p>Rently was honored to pitch at this prestigious summit, attended by influential government officials,
                investors, scientists, and representatives from leading tech companies like Google, Facebook, and Apple,
                bringing us one step closer to realizing our vision.</p>
        </div>

        <div class="section-content">
            <h2>Rently's Brand Ambassador</h2>
            <p>In March 2022, Rently proudly announced Mahira Khan as its first brand ambassador. Listed as one of
                Forbes' most influential stars and among BBC's 100 most influential women globally, Mahira Khan
                represents Rently on a larger scale. We are proud to partner with such an inspirational personality who
                supports greater causes.</p>
        </div>

        <div class="section-content">
            <p>We continue to work towards making our mission and vision a reality with your trust and our dedication.
            </p>
        </div>


    </div>
    <div>
        <?php require "./Footer.php" ?>

    </div>
</body>

</html>