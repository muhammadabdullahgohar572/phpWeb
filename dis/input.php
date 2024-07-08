<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    #map {
        height: 400px;
        width: 100%;
    }
    </style>
</head>

<body>

    <div class="container mt-5 pt-5">
        <h2 class="my-4">Plan Your Travel</h2>
        <form id="travel-form">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="pickup-location" class="form-label">Pick-Up Location</label>
                <input type="text" class="form-control" id="pickup-location" required>
            </div>
            <div class="mb-3">
                <label for="drop-location" class="form-label">Drop-Off Location</label>
                <input type="text" class="form-control" id="drop-location" required>
            </div>
            <div class="mb-3">
                <label for="datetime" class="form-label">Date and Time</label>
                <input type="datetime-local" class="form-control" id="datetime" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="map" class="my-4"></div>
    </div>


</body>

</html>