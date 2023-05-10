<?php

    @include 'config.php';

    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password'])
    }

    $select = " SELECT * FROM userform WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);

    $insert = "INSERT INTO user_form(email, password) VALUES('$email', '$pass')"
    mysqli_query($conn, $insert);
    header('location:signin.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Atestat</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-CSS-Image-Slider.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-mycarousel.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Product-Details.css">
    <link rel="stylesheet" href="assets/css/responsive-blog-card-slider.css">
    <link rel="stylesheet" href="assets/css/Responsive-Image-with-Transparent-Text.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="margin: 2%;">
        <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse font-monospace text-center" id="navcol-1" style="position: sticky;">
                <ul class="navbar-nav text-lowercase me-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">home</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="#">browse</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">blog</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul><img class="me-auto" width="78" height="62" src="assets/img/original-4c0a7620ac414850e71992eb202159fc.webp"><strong style="margin-left: 180px;"><a href="#">Log In</a></strong>
            </div>
        </div>
    </nav>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Nume"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Prenume"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Sign In</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/responsive-blog-card-slider-01-swiper-bundle.min.js"></script>
    <script src="assets/js/responsive-blog-card-slider-02-responsive-blog-card-slider.js"></script>
</body>

</html>