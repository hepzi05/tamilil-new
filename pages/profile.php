<?php
require "sidebar.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="text-secondary">Profile Info</h4>
    </div>
    <div class="row">
        <?php $user = $_SESSION['user-details']; ?>
        <div class="col-md-2 col-sm-auto col-lg-2 mt-5">
            <img src="https://static.nc-img.com/uiusermanagement/basic-info.3283f958dfae2bddea4cc921923260b6.png"
                alt="pic" class="bg-primary rounded-pill w-100">
            <h6 class="mt-3 fw-bold text-secondary text-center">Basic Info</h6>
        </div>
        <div class="col-md-10 col-sm-auto col-lg-10">
            <p class="mt-4">Enter your name, username and primary email address. You can change your primary email
                address at any time.</p>
            <div class="d-flex flex-wrap flex-md-nowrap border-bottom mt-5">
                <h6 class="fw-bold">Name :</h6>
                <h6 class="ms-2"><?php echo $user['FIRSTNAME'] . " " . $user['LASTNAME']; ?></h6>
            </div>
            <div class="d-flex flex-wrap flex-md-nowrap border-bottom mt-5">
                <h6 class="fw-bold">Username :</h6>
                <div>
                    <h6 class="ms-2"><?php echo $user['USERNAME']; ?></h6>
                    <span class="ms-2">Since Dec 25, 2022 (56 days ago)</span>
                </div>
            </div>
            <div class="d-flex flex-wrap flex-md-nowrap border-bottom mt-5">
                <h6 class="fw-bold">Primary Email :</h6>
                <h6 class="ms-2"><?php echo $user['EMAIL']; ?></h6>
                <button class="btn btn-sm bg-secondary text-white mx-auto mb-2" data-toggle='modal'
                        data-target='#exampleModalCenter2'>Edit</button>
            </div>
        </div>
    </div>
    <?php require "./change-email.php" ?>
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-4 border-bottom">
        <h4 class="text-secondary">Security</h4>
    </div>
    <div>
        <div class="row mb-5">
            <div class="col-md-2 col-sm-auto col-lg-2 mt-5">
                <img src="https://static.nc-img.com/uiusermanagement/access.905e676bd22e5b84d93208d016b1a7b9.png"
                    alt="pic" class="bg-success rounded-pill w-100">
                <h6 class="mt-3 fw-bold text-secondary text-center">Access</h6>
            </div>
            <div class="col-md-10 col-sm-auto col-lg-10">
                <p class="mt-4">Here you can change your password at any time.</p>
                <div class="d-flex flex-wrap flex-md-nowrap border-bottom mt-5">
                    <h6 class="fw-bold">Change Password</h6>
                    <button class="btn btn-sm bg-secondary text-white mx-auto mb-2" data-toggle='modal'
                        data-target='#exampleModalCenter'>Change</button>
                </div>
            </div>
        </div>
    </div>
    <?php require "./change-password.php" ?>
</main>