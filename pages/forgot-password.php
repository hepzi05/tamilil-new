<!DOCTYPE html>
<html lang="en">

<head>
    <?php #include "html-head.php"; 
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your website in tamil : Tamilil.com</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@300;400;700&family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-theme justify-content-between px-4 px-lg-5 py-3">
                <a href="../index.php" class="navbar-brand p-0">
                    <img src="../assets/img/tamili-logo-white.png" class="brand-logo" alt="Logo">
                </a>
                <div class="float-end">
                    <a href="../#domain" class="btn btn-theme">Get Started</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Login Start -->
        <div class="container-xxl pb-5" id="hosting" style="padding-top:7.5rem;">
            <div class="container px-lg-5 mt-4">
                <div class="row wow fadeInUp">
                    <div class="col-lg-3 col-md-4 col-sm-12"></div>
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <div class="row border border-2 border-primary rounded-2">
                            <div class="col-ld-6 col-md-8 col-sm-12 bg-theme p-3 fw-bold text-light">Forgot password</div>
                            <button class="col-ld-6 col-md-4 col-sm-12 bg-theme p-3 fw-bold text-light text-end border-0" onclick="document.location='login.php'">LOG
                                IN?</button>
                            <div class="form-group d-flex flex-row mt-5 ms-5">
                                <label class="fw-bold text-secondary mt-2">Username</label>
                                <input type="text" class="form-control w-50 ms-2" id="name" placeholder="Username" />
                            </div>
                            <h4 class="text-secondary text-center mt-2">Or</h4>
                            <div class="form-group d-flex flex-row mt-2 ms-5">
                                <label class="fw-bold text-secondary mt-2">Email</label>
                                <input type="email" class="form-control w-50 ms-5" id="email" placeholder="email" />
                            </div>
                            <div class="text-center">
                                <button type="submit" class="border border-0 rounded-2 bg-theme p-2 fw-bold text-light mt-4 mb-4">
                                    Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12"></div>
                </div>
            </div>
        </div>
        <!-- Login End -->

        <!-- Footer Start -->
        <?php include "./components/footer.php"; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/counterup/counterup.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/nav.js"></script>
</body>

</html>