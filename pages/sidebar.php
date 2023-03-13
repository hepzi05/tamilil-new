<?php

session_start();

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
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
        <nav class="navbar navbar-expand-lg navbar-light bg-theme justify-content-between px-4 px-lg-5 py-1">
            <a href="../index.php" class="p-0">
                <img src="../assets/img/tamili-logo-white.png" class="brand-logo" alt="Logo">
            </a>
            <div class="float-end">
                <form method="POST">
                    <button class="btn btn-theme btn-sm me-4" name="logout">Sign out</button>
                </form>
            </div>
        </nav>
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
                            <a class="nav-link fw-bold" href="expired-expiring.php">
                                <!-- <span data-feather="users"></span> -->
                                Expired/Expiring
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="domain-list.php">
                                <!-- <span data-feather="file"></span> -->
                                Domain list
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="ssl-certificate.php">
                                <!-- <span data-feather="shopping-cart"></span> -->
                                SSL Certificate
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold dropdown-toggle" href="profile.php" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <span data-feather="users"></span> -->
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li> <a class="dropdown-item" href="profile.php">Personal Info</a></li>
                                <li><a class="dropdown-item" href="address-book.php">Address Book</a></li>
                            </ul>
                            <!-- <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div> -->
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