<?php
    session_start();
    if(isset($_POST['submit'])){
        $domain = $_POST['search'];
        $_SESSION['searchedDomain'] = $domain;
        header("Location: pages/domain_check.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head><?php include "./pages/components/html-head.php"; ?></head>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading.......</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar -->
        <div class="container-xxl position-relative p-0">
            <?php include "pages/navbar.php"; ?>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-6 pt-5 text-center text-lg-start">
                            <h1 class="tamil display-4 text-white mb-4 animated slideInLeft">இனிய தமிழில்</h1>
                            <h3 class="text-white animated slideInLeft">உங்கள் கனவு </h3>
                            <h1 class="text-white mb-4 animated slideInLeft">இணைய தளம்</h1>
                            <a href="#domain" class="btn btn-secondary py-sm-3 px-sm-5 me-3 animated slideInLeft">Get Started Now</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="assets/img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Domain Search Start -->
        <div id="domain" class="container-xxl domain mb-5" id="domain" style="margin-top: 90px;">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="mb-3">உங்கள் இணைய முகவரியை தெரிவு செய்யுங்கள்</h1>
                        </div>
                        <form method="POST">
                            <div class="position-relative w-100 my-3 wow fadeInUp" data-wow-delay="0.3s">
                                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" name="search" id="search" type="text" placeholder="உங்கள் அபிமான இணைய முகவரியை பதிவிடுங்கள்" />
                                <button onclick="setData()" name="submit" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">தேடுக</button>
                            </div>
                        </form>
                        <div class="row g-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.com</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.net</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.org</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.us</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.eu</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.co.uk</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Domain Search End -->

        <!-- Footer Start -->
        <?php include "./pages/components/footer.php"; ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/lib/wow/wow.min.js"></script>
    <script src="./assets/lib/easing/easing.min.js"></script>
    <script src="./assets/lib/waypoints/waypoints.min.js"></script>
    <script src="./assets/lib/counterup/counterup.min.js"></script>
    <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/nav.js"></script>
    <script>
        function setData() {
            const data = document.getElementById("search").value;
            localStorage.setItem('searchedDomain', data);
        }
    </script>
</body>
</html>