<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }

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
    <div class="containr">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/Slider/1674283145609-clifton-karachi.jpg" alt="Image 1">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Here’s How You Can Rent a Car in Gulistan-e-Johar</h5>
                    <p class="card-text">Gulistan-e-Johar is one of the most populous neighborhoods of Karachi. You
                        should look into reli...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card1">
                <div class="card1-body">
                    <img src="../img/Slider/1676880265059-Can Rent a Car in Gulistan-e-Johar.jpg" alt="Image 2">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Here’s How You Can Rent a Car in Gulistan-e-Johar</h5>
                    <p class="card-text">Gulistan-e-Johar is one of the most populous neighborhoods of Karachi. You
                        should look into reli...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-body">
                    <img src="../img/Slider/1676397966214-car-rental-north-karachi.jpg" alt="Image 3">
                    <p class="text-muted">Feb 15, 2023</p>
                    <h5 class="card-title">Here’s How You Can Rent a Car in Gulistan-e-Johar</h5>
                    <p class="card-text">Gulistan-e-Johar is one of the most populous neighborhoods of Karachi. You
                        should look into reli...</p>
                    <button class="read-more-btn">Read more</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>