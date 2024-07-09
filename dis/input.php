<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: bold;
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
                <label for="Number" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="Number" required>
            </div>
            <div class="mb-3">
                <label for="datetime" class="form-label">Date and Time</label>
                <input type="datetime-local" class="form-control" id="datetime" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>