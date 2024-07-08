<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.carousel-margin-top {
    position: absolute;
}

.container {
    background-color: white;
    display: flex;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
}



.btn1 {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn1:hover {
    background-color: #084415;
}


@media screen and (min-width:765px) {
    .bodyy {
        position: relative;
        width: 30%;
        /* background-color: #f1f1f1; */
        left: 450px;
        top: 280px;
    }

    input[type="text"],
    input[type="datetime-local"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-left: 25px;
    }
}

@media screen and (max-width:375px) {
    .bodyy {
        position: relative;
        width: 100%;
        /* background-color: #f1f1f1; */
        left: 0px;
        top: 200px;
        padding: 10px;
    }

    input[type="text"],
    input[type="datetime-local"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-left: 0px;
    }
}

@media screen and (max-width:425px) {
    .bodyy {
        position: relative;
        width: 100%;
        /* background-color: #f1f1f1; */
        left: 0px;
        top: 200px;
    }
}
</style>

<body>
    <div>

        <div id="carouselExample" class="carousel slide carousel-margin-top">
            <div class="carousel-inner">

                <div class="carousel-item">
                    <img src="../img/1687433357411-rently.png" class="d-block w-100 mt-10" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="../img/hero.jpeg" class="d-block w-100 mt-10" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="bodyy">
            <div class="container">
                <form class="test">
                    <label for="pickup-location">Pick-Up Location:</label>
                    <input type="text" id="pickup-location" name="pickup-location" required>

                    <label for="datetime">Date and Time:</label>
                    <input type="datetime-local" id="datetime" name="datetime" required>

                    <label for="drop-location">Drop-Off Location:</label>
                    <input type="text" id="drop-location" name="drop-location" required>

                    <button type="submit" class="btn1">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>