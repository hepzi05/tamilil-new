<?php

session_start();

// if (empty($_SESSION["user-details"])) {
//     header("Location: login.php");
// }

if (isset($_POST["logout"])) {
    session_destroy();
    session_unset();
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your website in tamil : Tamilil.com</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mukta+Malar:wght@300;400;700&family=Quicksand:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet" />
    <meta name="theme-color" content="#7952b3">
    <style>
    .bg-custom-primary {
        background-color: #0d6efd !important;
    }
    </style>
</head>

<body>

    <header class="navbar bg-primary sticky-top flex-md-nowrap p-1 shadow">
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-theme justify-content-between px-4 px-lg-5 py-3"> -->
        <a href="index.php" class="p-0">
            <img src="../assets/img/tamili-logo-white.png" class="brand-logo" alt="Logo">
        </a>
        <div class="float-end">
            <a href="./login.php" class="btn btn-theme btn-sm me-4" name="logout">Sign out</a>
</div>
        <!-- </nav> -->
        <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-light fw-bold" href="#">Company name</a> -->
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- <div class="navbar-nav">
            <form method="POST">
                <div class="nav-item text-nowrap bg-danger">
                    <button class="btn btn-danger nav-link px-3 text-light" name="logout">
                        Sign out
                    </button>
                </div>
            </form>
        </div> -->
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column" id="ulCategory">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="dashboard.php">
                                <!-- <span data-feather="home"></span> -->
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="domain_list.php">
                                <!-- <span data-feather="file"></span> -->
                                Domain list
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="ssl_certificate.php">
                                <!-- <span data-feather="shopping-cart"></span> -->
                                SSL Certificate
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="profile.php">
                                <!-- <span data-feather="users"></span> -->
                                Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
    <script src="dashboard.js"></script>
    <script src="feather.js"></script>

    <script>
    $(document).ready(function() {
        $("#ulCategory>li").click(function() {
            $("#ulCategory>li").removeClass("active");
            $(this).addClass("active");
        })
    });
    </script>
</body>

</html>