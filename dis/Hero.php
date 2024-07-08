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

.bodyy {
    position: relative;
    width: 100%;

    background-color: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;











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
                <form>
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