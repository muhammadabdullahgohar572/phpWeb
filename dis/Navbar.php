<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="../abdullagpnglogo-_convert.io_.svg" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .custom-navbar-bg {
        background-color: #7e246c;
    }

    .custom-navbar-bg .navbar-brand,
    .custom-navbar-bg .nav-link,
    .custom-navbar-bg .navbar-toggler-icon {
        color: white !important;
    }

    .custom-navbar-bg .dropdown-menu {
        background-color: aliceblue;
        color: black;
        border: none;
    }

    .custom-navbar-bg .dropdown-menu .dropdown-item {
        color: black !important;
    }

    .custom-navbar-bg .dropdown-menu .dropdown-item:hover {
        background-color: #6b205b;
        color: white !important;
    }

    .btn1:hover {
        background-color: #ff00a2;
        transition: background-color 0.3s ease;
        cursor: pointer;
        color: white;
    }

    .navbar-nav .nav-item a.nav-link {
        font-size: 14px;
        /* Set the font size smaller */
    }

    .btn1 {
        color: white;
        margin-right: 10px;
        background-color: #3a0830;
        color: aliceblue;
        border: none;
        border-radius: 10px;
        font-size: 13px;
        transition: background-color 0.3s ease;
        cursor: pointer;
        font-weight: 600;
        padding: 15px;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar-bg fixed">
        <div class="container-fluid p-4">
            <a class="navbar-brand" href="./index.php"><img src="../img/logo.png" alt="logo" width="200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Car1.php">Search A Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Corporate.php">Corporate Enquiries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Ourcleint.php">Our Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contactus.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a class="login-btn btn1" href="./Login.php">Login</a>
                    <a class="signup-btn btn1" href="./signup.php">Signup</a>
                </form>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>