<?php
session_start();
if (isset($_POST['selectYearPlan'])) {
    $pricing = $_POST["pricingData"];

    $_SESSION["pricingInfo"] = $pricing;
    header("Location: content-request.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head><?php #include"html-head.php"; 
        ?>
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
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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

        <!-- Pricing Start -->
        <div class="container-xxl pb-5" id="hosting" style="padding-top:7.5rem;">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp"
                    data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3" style="color: #0d6efd;" id="domain"></h1>
                    <h4>மிக அருமையான தேர்வு</h4>
                    <p>இனி, உங்கள் இணைய முகவரிக்கான</p>
                    <h2>இணைய அகத்தை</h2>
                    <h4>உருவாக்குங்கள்!</h4>
                </div>
                <form method="POST">
                    <input type="hidden" name="pricingData" />
                    <div class="row gy-5 gx-4" id="pricingBlock"></div>
                </form>
            </div>
        </div>
        <!-- Pricing End -->

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
    document.getElementById("domain").innerText = localStorage.getItem("searchedDomain");

    function setData(data) {
        console.log(data);
        document.getElementById("pricingData").value(data);
    }

    // Check domaim pricing
    $.post({
        url: "../api/domain-pricing/domain-pricing.php",
        data: {
            domain: localStorage.getItem("searchedDomain")
        },
        success: function(result) {
            const data = JSON.parse(result);
            var element = document.getElementById("pricingBlock");
            var html = "";

            data.data.map((item, index) => {
                console.log(item);
                html +=
                    '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s"><div class="position-relative shadow rounded border-top border-2 border-primary"><div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;"><i class="fa fa-bag-shopping text-white"></i></div><div class="text-center border-bottom p-4"><p class="text-primary mb-1">Latest Offer - <strong>' +
                    item.DURATION +
                    ' YEAR</strong></p><h1 class="mb-3"><small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>' +
                    item.PRICE +
                    '<small class="align-bottom" style="font-size: 16px; line-height: 40px;"></small></h1><button class="btn btn-primary px-4 py-2" name="selectYearPlan" onClick="setData(' +
                    JSON.stringify(item) + ')">Select</button></div></div></div>';
            });

            element.innerHTML = html;
        },
        error: function(error) {
            console.log(JSON.stringify(error), "error");
        }
    })
    </script>
</body>

</html>