<?php
session_start();

if(isset($_POST["searchButton"])){
    $_SESSION["searchedDomain"] = $_POST["search"];
}

if(isset($_POST['choose'])){
    header("Location: domain-thankyou.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head><?php #include "html-head.php"; 
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
                    <a href="pages/login.php" class="btn btn-theme me-4">Login</a>
                    <a href="#domain" class="btn btn-theme">Get Started</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Domain Search Start -->
        <div class="container-xxl domain mb-5" id="domain" style="padding-top:7.5rem;">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <form method="post">
                        <div class="col-lg-10">
                            <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                <h1 class="mb-3">உங்கள் இணைய முகவரியை தெரிவு செய்யுங்கள்</h1>
                            </div>
                            <div class="position-relative w-100 my-3 wow fadeInUp" data-wow-delay="0.3s">
                                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" id="search" name="search" type="text" value="<?php echo ($_SESSION['searchedDomain']); ?>" placeholder="முருகன்.com">
                                <button name="searchButton" onclick="searchDomain()" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">தேடுக</button>
                            </div>
                            <div class="card wow fadeInUp mt-3 mb-3 shadow">
                                <div class="card-body">
                                    <h5 class="fw-bold"><?php echo ($_SESSION["searchedDomain"]); ?></h5>
                                    <p class="text-success fw-bold" id="searchedAvailable"></p>
                                    <button onclick="setReg()" name="choose" id="choose" style="visibility: hidden;" class="btn btn-primary float-end">பதிக</button>
                                </div>
                            </div>
                            <!-- <div class="wow fadeInUp">
                                <h4 class="fw-bold">Related domain</h5>
                                    <div class="card wow fadeInUp mt-3">
                                        <div class="card-body">
                                            <h5 class="fw-bold">domain1.com</h5>
                                            <p class="text-success fw-bold">Available</p>
                                            <button onclick="setReg()" name="submit" class="btn btn-primary float-end">பதிக</button>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp mt-3">
                                        <div class="card-body">
                                            <h5 class="fw-bold">domain2.com</h5>
                                            <p class="text-success fw-bold">Available</p>
                                            <button onclick="setReg()" name="submit" class="btn btn-primary float-end">பதிக</button>
                                        </div>
                                    </div>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Domain Search End -->

        <!-- Footer Start -->
        <?php include "components/footer.php"; ?>
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
    <script>

        DomainCheck();

        function searchDomain() {
            localStorage.setItem('searchedDomain', document.getElementById('search').value);
        }

        function DomainCheck() {
            var search = localStorage.getItem("searchedDomain");

            // Check domaim pricing
            $.post({
                url: "../api/domain/check/check-domain.php",
                data: {
                    domain: search
                },
                success: function(result) {
                    const response = JSON.parse(result);

                    const data = localStorage.getItem('searchedDomain').split('.');

                    if (response[data[1]]["AVAILABLE"] == "false") {
                        document.getElementById("searchedAvailable").innerText = "Not Available";
                        document.getElementById("choose").style.visibility = 'hidden';
                        document.getElementById("searchedAvailable").style.color = 'red';
                    } else {
                        document.getElementById("searchedAvailable").innerText = "Available";
                        document.getElementById("choose").style.visibility = 'visible';
                        document.getElementById("searchedAvailable").style.color = 'green';
                    }

                },
                error: function(error) {
                    console.log(JSON.stringify(error), "error");
                }
            })
        }
    </script>
</body>

</html>