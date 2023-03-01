<!DOCTYPE html>
<html lang="en">
<head><?php include"html-head.php"; ?></head>
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
            <?php include"navbar.php"; ?>
        </div>
        <!-- Navbar End -->

        
        <div class="container col-lg-6 pb-5" style="padding-top:7.5rem;">
            <h3>WEB Page Contents</h3>
            <form action="">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Web page name">
                <label for="floatingInput">Web page name<span>*</span></label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Title<span>*</span></label>
            </div>
            <section class="section1 ">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image<span>*</span></label>
                    <input class="form-control" type="file" id="formFile">
                    <p><small><em>Only .png, .jpeg, .jpg</em></small></p>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Content<span>*</span></label>
                </div>
            </section><br>
            <div class="btn btn-primary">Submit</div>
        </form>
        </div>

        <!-- Footer Start -->
        <?php include"footer.php"; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/nav.js"></script>
</body>

</html>