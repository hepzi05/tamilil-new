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
            <?php include "navbar.php"; ?>
        </div>
        <!-- Navbar End -->

        <br><br><br><br>

        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="border p-3">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" placeholder="Firstname" name="billingFirstname" class="form-control"></input>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Lastname</label>
                                <input type="text" placeholder="Lastname" name="billingLastname" class="form-control"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Phone</label>
                                <input type="text" placeholder="Phone" name="AuxBillingPhone" class="form-control"></input>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Email</label>
                                <input type="text" placeholder="Email" name="AuxBillingEmailAddress" class="form-control"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Address1</label>
                                <input type="text" placeholder="Address1" name="AuxBillingAddress1" class="form-control"></input>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">City</label>
                                <input type="text" placeholder="City" name="AuxBillingCity" class="form-control"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">State Code</label>
                                <input type="text" placeholder="E.g USA, IN" name="billingStateCode" class="form-control"></input>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Postal code</label>
                                <input type="text" placeholder="Postal code" name="billingPostalCode" class="form-control"></input>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Country</label>
                                <input type="text" placeholder="Country" name="billingCountry" class="form-control"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Who is guard information</label>
                                <select class="form-select" name="AddFreeWhoisguard">
                                    <option value="True">True</option>
                                    <option value="False">FALSE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Premium domain</label>
                                <select class="form-select" name="IsPremiumDomain" disabled>
                                    <option value="True">True</option>
                                    <option value="False">FALSE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="border p-3">
                    <div class="card p-3 mb-3">
                        <div class="card-body">
                            <div class="float-start">
                                <span id="domain" class="fw-bold">bharathi.com</span><br>
                                <span>3 years</span>
                            </div>
                            <span class="float-end mt-2 fw-bold">$23</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Coupon" name="promotionCode" />
                    </div>
                    <button class="btn btn-success float-end">Checkout</button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <?php include "footer.php"; ?>
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