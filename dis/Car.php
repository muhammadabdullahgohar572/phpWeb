<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .text {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1rem;
    }

    @media screen and (min-width: 768px) {
        .text {
            grid-template-columns: repeat(5, 1fr);
        }
    }

    .car1H,
    .car2H,
    .car3H,
    .car4H,
    .car5H {
        display: none;
        width: 150px;
        height: 150px;
    }

    .car1,
    .car2,
    .car3,
    .car4,
    .car5 {
        width: 150px;
        height: 150px;
    }

    .car1:hover,
    .car2:hover,
    .car3:hover,
    .car4:hover,
    .car5:hover {
        display: none;
    }

    .car1:hover+.car1H,
    .car2:hover+.car2H,
    .car3:hover+.car3H,
    .car4:hover+.car4H,
    .car5:hover+.car5H {
        display: block;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <div
        style="font-weight:700 ; text-align: center; margin: 2rem 0; color: #7e246c; font-weight: 900; font-size: 1.5rem;">
        <h3 style="font-weight: 800; font-size: 40px;">What type of car are you looking for?</h3>
    </div>
    <div style="max-width: 1200px; margin: 0 auto; padding: 2rem 1rem;">
        <div class="text">
            <!-- Budget -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car1.png" alt="" class="car1">
                <img src="../img/Hover/Car-1.png" alt="" class="car1H">
                <h2 style="color: #7e246c; font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Budget</h2>
                <p style="color: #4a5568;">Daihatsu Mira or similar</p>
            </div>

            <!-- Standard -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car2.png" alt="" class="car2">
                <img src="../img/Hover/Car-2.png" alt="" class="car2H">
                <h2 style="color: #7e246c ;font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Standard</h2>
                <p style="color: #4a5568;">Toyota Corolla or similar</p>
            </div>

            <!-- Luxury -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car3.png" alt="" class="car3">
                <img src="../img/Hover/Car-3.png" alt="" class="car3H">
                <h2 style="color: #7e246c; font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Luxury</h2>
                <p style="color: #4a5568;">Mercedes Benz or similar</p>
            </div>

            <!-- SUV -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car4.png" alt="" class="car4">
                <img src="../img/Hover/Car-4.png" alt="" class="car4H">
                <h2 style="font-size: 1.25rem; color: #7e246c;font-weight: bold; margin-bottom: 0.5rem;">SUV</h2>
                <p style="color: #4a5568;">Land Cruiser or similar</p>
            </div>

            <!-- Vans & Coasters -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car5.png" alt="" class="car5">
                <img src="../img/Hover/Car-5.png" alt="" class="car5H">
                <h2 style="font-size: 1.25rem;color: #7e246c; font-weight: bold; margin-bottom: 0.5rem;">Vans & Coasters
                </h2>
                <p style="color: #4a5568;">Toyota Coaster or similar</p>
            </div>
        </div>
    </div>

</body>

</html>