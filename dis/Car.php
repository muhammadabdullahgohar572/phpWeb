<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.text {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 1rem;
}

@media screen and (min-width:768px) {
    .text {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 1rem;
    }
}
</style>

<body>

    <div
        style="font-weight:700 ; text-align: center; margin: 2rem 0; color: #7e246c; font-weight: 900; font-size: 1.5rem;">
        <h3 style="font-weight: 800; font-size: 40px;">What type of car are you looking for?</h3>
    </div>
    <div style="max-width: 1200px; margin: 0 auto; padding: 2rem 1rem;">
        <div style="" class="text">
            <!-- Budget -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car1.png" alt="">

                <h2 style="color: #7e246c; font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Budget</h2>
                <p style="color: #4a5568;">Daihatsu Mira or similar</p>
            </div>

            <!-- Standard -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car2.png" alt="">

                <h2 style="color: #7e246c ;font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Standard</h2>
                <p style="color: #4a5568;">Toyota Corolla or similar</p>
            </div>

            <!-- Luxury -->
            <div
                style=" background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car3.png" alt="">

                <h2 style="color: #7e246c; font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Luxury</h2>
                <p style="color: #4a5568;">Mercedes Benz or similar</p>
            </div>

            <!-- SUV -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car4.png" alt="">

                <h2 style="font-size: 1.25rem; color: #7e246c;font-weight: bold; margin-bottom: 0.5rem;">SUV</h2>
                <p style="color: #4a5568;">Land Cruiser or similar</p>
            </div>

            <!-- Vans & Coasters -->
            <div
                style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1); text-align: center;">
                <img src="../img/Car5.png" alt="">
                <h2 style="font-size: 1.25rem;color: #7e246c; font-weight: bold; margin-bottom: 0.5rem;">Vans & Coasters
                </h2>
                <p style="color: #4a5568;">Toyota Coaster or similar</p>
            </div>
        </div>
    </div>

</body>

</html>