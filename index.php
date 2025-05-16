<!DOCTYPE html>
<html lang="en">
<head>
    <title>BookEase</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/36a236c794.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <style>
    body {
        font-family: 'Source Sans Pro', sans-serif;
    }

    .head_bg {
        background-color: #003366;
    }

    .logo_wid {
        width: 500px;
    }

    .btn-primary {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-primary:hover {
        background-color: #004494;
    }

    .btn-warning {
        background-color: #ffcc00;
        border-color: #ffcc00;
        color: #000;
    }

    .btn-warning:hover {
        background-color: #e6b800;
    }

    .carousel-caption h2 {
        background-color: rgba(0, 51, 102, 0.7);
        padding: 10px;
        border-radius: 5px;
    }

    .carousel-caption p {
        background-color: rgba(255, 204, 0, 0.7);
        color: #000;
        padding: 5px;
        border-radius: 3px;
    }

    h4 {
        color: #003366;
        font-weight: 600;
    }

    .card-img-overlay {
        background-color: rgba(0, 51, 102, 0.6);
    }

    .card-title a {
        color: #ffcc00;
        text-decoration: none;
    }

    .pop_img {
        width: 100%;
        border: 2px solid #003366;
        border-radius: 5px;
    }

    .mrg {
        margin-top: 2rem;
    }

    .my-3 {
        color: #003366;
    }
    </style>
</head>
<body>

<!-- Header -->
<header class="head_bg text-white">
    <div class="container">
        <div class="row align-items-center justify-content-between py-4">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                <img src="prject_img/BE-logo.png" class="img-fluid logo_wid" alt="Logo">
            </div>

            <!-- Removed Search Bar -->

            <div class="col-lg-4 col-md-3 d-none d-md-flex justify-content-end">
                <a href="adminlogin.php" class="btn btn-primary text-white">ADMIN LOGIN</a>
                <a href="userlogin.php" class="btn btn-warning ms-2">STUDENT LOGIN</a>
            </div>

            <div class="col-6 d-md-none text-end">
                <button class="head_micon btn text-white">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="prject_img/bookdisplaysmall.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption">
                <h2>Online Library for STI College Novaliches</h2>
                <p>Welcome to our e-library. Discover knowledge at your heart's content.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="prject_img/bookcoverssmall2.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption">
                <h2>BookEase | e-library for STI College Novaliches</h2>
                <p>Join fellow students. Get knowledge from online books.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="prject_img/bookstackssmall.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption">
                <h2>The Ultimate Guide to BookEase</h2>
                <p>Not sure what to read next? Explore our library.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Registration Button -->
<div class="container text-center my-4">
    <a href="registration.php" class="btn btn-warning btn-lg">Register Here</a>
</div>

<!-- Genre Section -->
<div class="container mrg">
    <div class="row mb-3">
        <div class="col-12">
            <h4>CATEGORIES</h4>
        </div>
    </div>
    <div class="row">
        <?php
        $con = mysqli_connect("localhost", "root", "", "ebooks");
        $r = mysqli_query($con, "SELECT * FROM category");
        while ($row = mysqli_fetch_array($r)) {
        ?>
        <div class="col-sm-2">
            <div class="card bg-dark text-white">
                <img src="cphoto/<?php echo $row[2]; ?>" class="card-img" alt="Category Image">
                <div class="card-img-overlay d-flex align-items-end">
                    <h5 class="card-title"><?php echo htmlspecialchars($row[1]); ?></h5>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Popular Books -->
<div class="container mrg">
    <div class="row mb-3">
        <div class="col-12">
            <h4>Popular Books</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-6">
            <img src="prject_img/50.jpg" class="pop_img" alt="Book 1">
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-6">
            <img src="prject_img/60.jpg" class="pop_img" alt="Book 2">
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-6">
            <img src="prject_img/30.jpg" class="pop_img" alt="Book 3">
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-6">
            <img src="prject_img/20.jpg" class="pop_img" alt="Book 4">
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-6">
            <img src="prject_img/11.jpg" class="pop_img" alt="Book 5">
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-6">
            <img src="prject_img/40.jpg" class="pop_img" alt="Book 6">
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
