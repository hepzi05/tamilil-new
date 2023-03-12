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
    <div class="row">
        <div class="col-ld-9 col-md-9 col-sm-12">
            <h4 class="text-secondary mt-4">Basic Information</h4>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Address Name</label>
                <input type="text" class="form-control w-75" id="firstname" value="Primary Address" disabled />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">First Name*</label>
                <input type="text" class="form-control w-75" id="firstname" placeholder="First Name" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Last Name*</label>
                <input type="text" class="form-control w-75" id="lastname" placeholder="Last Name" />
            </div>

            <h4 class="text-secondary mt-4">Street Information</h4>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Address*</label>
                <input type="text" class="form-control w-75" id="add1" placeholder="Address Line 1" />
            </div>
            <div class="mt-3">
                <input type="text" class="form-control w-75 float-end" id="add2" placeholder="Address Line 2" />
            </div>
            <div class="clearfix"></div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">State/Province</label>
                <input type="text" class="form-control w-75" id="state" placeholder="State/Province" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">City*</label>
                <input type="text" class="form-control w-75" id="city" placeholder="City" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">ZIP/Postal Code</label>
                <input type="number" class="form-control w-75" id="zip" placeholder="ZIP/Postal Code" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Country*</label>
                <input type="text" class="form-control w-75" id="country" placeholder="Country" />
            </div>

            <h4 class="text-secondary mt-4">Contact Information</h4>

            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Phone Numer*</label>
                <input type="number" class="form-control w-75" id="phone" placeholder="Phone Numer" />
            </div>
            <div class="fom-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Fax Number</label>
                <input type="number" class="form-control w-75" id="fax" placeholder="Fax Number" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Email Address</label>
                <input type="email" value="bharathi@gmail.com" class="form-control w-75" id="email" disabled />
            </div>
            <div class="mt-5 mb-5 text-center">
                <button id="save" class="btn btn-primary">Save Changes</button>
                <button id="cancel" class="btn btn-danger ms-3">Cancel</button>
            </div>
        </div>
        <div class="col-ld-3 col-md-3 col-sm-12"></div>
        <div class="row"></div>
    </div>

</main>