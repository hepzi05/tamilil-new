<?php
require "sidebar.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
            <h4 class="text-secondary">Add Primary Address</h4>
        </div>
    </div>
    <h4 class="text-secondary mt-4">Basic Information</h4>

    <h4 class="text-secondary mt-4">Street Information</h4>
    <div class="row">
        <div class="col-ld-9 col-md-9 col-sm-12">
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary">Address*</label>
                <input type="text" class="form-control w-75" id="add1" placeholder="Address Line 1" />
            </div>
            <div class="mt-3">
                <input type="text" class="form-control w-75" id="add2" placeholder="Address Line 2" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary">State/Province</label>
                <input type="text" class="form-control w-75" id="state" placeholder="State/Province" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary">City*</label>
                <input type="text" class="form-control w-75" id="city" placeholder="City" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary">ZIP/Postal Code</label>
                <input type="text" class="form-control w-75" id="zip" placeholder="ZIP/Postal Code" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary">Country*</label>
                <input type="text" class="form-control w-75" id="country" placeholder="Country" />
            </div>
        </div>
        <div class="col-ld-3 col-md-3 col-sm-12"></div>
        <div class="row"></div>
    </div>

    <h4 class="text-secondary mt-4">Contact Information</h4>

</main>