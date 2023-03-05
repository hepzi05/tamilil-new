<!DOCTYPE html>
<html lang="en">

<head><?php include "./components/html-head.php"; ?></head>

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
                    <a href="./login.php" class="btn btn-theme me-4">Login</a>
                    <a href="../#domain" class="btn btn-theme">Get Started</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Signup Start -->
        <div class="container-xxl pb-5" id="hosting" style="padding-top:7.5rem;">
            <div class="container px-lg-5 mt-4">
                <div class="row wow fadeInUp">
                    <div class="col-lg-3 col-md-4 col-sm-12"></div>
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <div class="row border border-2 border-primary rounded-2">
                            <div class="col-ld-6 col-md-8 col-sm-12 bg-theme p-3 fw-bold text-light">Create An Account
                            </div>
                            <button
                                class="col-ld-6 col-md-4 col-sm-12 bg-theme p-3 fw-bold text-light text-end border-0"
                                onclick="document.location='login.php'">LOG
                                IN?</button>
                            <div class="mt-4">New to தமிழில்.com? Quickly signup for an account now.</div>
                            <form>
                                <div class="form-group d-flex flex-row justify-content-between mt-4">
                                    <label class="fw-bold text-secondary mt-2">Username</label>
                                    <input type="text" class="form-control w-50 me-5" id="name"
                                        placeholder="Username" />
                                </div>
                                <div class="mt-4">All new passwords must contain at least 8 characters. <br />
                                    We also suggest having at least one capital and one lower-case letter (Aa-Zz), one
                                    special symbol (#, &, % etc), and one number (0-9) in your password for the best
                                    strength.</div>
                                <div class="form-group d-flex flex-row justify-content-between mt-4">
                                    <label class="fw-bold text-secondary mt-2">Password</label>
                                    <input type="password" class="form-control w-50 me-5" id="password"
                                        placeholder="Password" />
                                </div>
                                <div class="form-group d-flex flex-row justify-content-between mt-4">
                                    <label class="fw-bold text-secondary mt-2">Confirm Password</label>
                                    <input type="password" class="form-control w-50 me-5" id="con_pass"
                                        placeholder="Password" />
                                </div>
                                <div class="form-group d-flex flex-row justify-content-between mt-4">
                                    <label class="fw-bold text-secondary mt-2">First Name</label>
                                    <input type="text" class="form-control w-50 me-5" id="firstname"
                                        placeholder="First Name" />
                                </div>
                                <div class="form-group d-flex flex-row justify-content-between mt-4">
                                    <label class="fw-bold text-secondary mt-2">Last Name</label>
                                    <input type="text" class="form-control w-50 me-5" id="lastname"
                                        placeholder="Last Name" />
                                </div>
                                <div class="form-group d-flex flex-row justify-content-between mt-4">
                                    <label class="fw-bold text-secondary mt-2">Email Address</label>
                                    <input type="email" class="form-control w-50 me-5" id="email"
                                        placeholder="Email Address" />
                                </div>
                                <div class="mt-4">By creating an account, you agree with our <a
                                        class="text-danger text-decoration-none" href="#">Terms of Service.</a></div>
                                <div class="text-center mb-5 mt-3">
                                    <button type="submit"
                                        class="border border-0 rounded-2 text-white bg-primary p-2 fw-bold mt-4">Create
                                        Account
                                        and
                                        Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12"></div>
                </div>
            </div>
        </div>
        <!-- Signup End -->

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