<?php
require "sidebar.php";
?>
<?php $user=$_SESSION['user-details']?>
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
        <div>
            <h4 class="text-secondary">Add Primary Address</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-ld-9 col-md-9 col-sm-12">
            <h4 class="text-secondary mt-4">Basic Information</h4>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Address Name*</label>
                <input type="text" class="form-control w-75" id="addressname" value="Primary Address" required/>
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">First Name*</label>
                <input type="text" class="form-control w-75" value="<?php echo $user['FIRSTNAME']?>" id="firstname" placeholder="First Name" required/>
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Last Name*</label>
                <input type="text" class="form-control w-75" value="<?php echo $user['LASTNAME']?>" id="lastname" placeholder="Last Name" required/>
            </div>

            <h4 class="text-secondary mt-4">Street Information</h4>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Address*</label>
                <input type="text" class="form-control w-75" id="add1" placeholder="Address Line 1" required/>
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
                <input type="text" class="form-control w-75" id="city" placeholder="City" required/>
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">ZIP/Postal Code</label>
                <input type="number" class="form-control w-75" id="zip" placeholder="ZIP/Postal Code" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Country*</label>
                <input type="text" class="form-control w-75" id="country" placeholder="Country" required/>
            </div>

            <h4 class="text-secondary mt-4">Contact Information</h4>

            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Phone Numer*</label>
                <input type="number" class="form-control w-75" id="phone" placeholder="Phone Numer" required/>
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Email Address</label>
                <input type="email" value="<?php echo $user['EMAIL']?>" class="form-control w-75" id="email" disabled />
            </div>
            <div class="mt-5 mb-5 text-center">
                <button id="save" class="btn btn-primary" onclick="saveChanges()">Save Changes</button>
                <button id="cancel" class="btn btn-danger ms-3" onclick="setCancel()">Cancel</button>
            </div>
        </div>
        <div class="col-ld-3 col-md-3 col-sm-12"></div>
        <div class="row"></div>
    </div>

</main>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
</script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js"
    integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous">
</script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
    integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
</script>
<script>
function setCancel() {
    window.location.replace("address-book.php");
}

function saveChanges() {
    const username = JSON.parse(sessionStorage.getItem('user'))['USERNAME'];
    const addressName = document.getElementById("addressname").value
    const email = document.getElementById("email").value
    const firstname = document.getElementById("firstname").value
    const lastname = document.getElementById("lastname").value

    const address1 = document.getElementById("add1").value 
    const address2 = document.getElementById("add2").value 
    const city = document.getElementById("city").value
    const zip = document.getElementById("zip").value
    const country = document.getElementById("country").value
    const phone = document.getElementById("phone").value
    const state = document.getElementById("state").value


    $.post({
        url: "../api/users/address/add-address.php",
        data: {
            username: username,
            addressName: addressName,
            email: email,
            firstname: firstname,
            lastname: lastname,
            address1: address1,
            address2: address2,
            city: city,
            zip: zip,
            country: country,
            phone: phone,
            state: state
        },
        success: function(result) {
            console.log(result, "result");
            if(result.status===401){
                alert(result.message);
                return;
            }
                alert("Saved your changes");
        },
        error: function(error) {
            console.log(JSON.stringify(error), "error");
        }

    });

}
</script>