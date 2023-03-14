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
            <h4 class="text-secondary">Edit Address</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-ld-9 col-md-9 col-sm-12">
            <h4 class="text-secondary mt-4">Basic Information</h4>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Address Name*</label>
                <input type="text" class="form-control w-75" id="ADDRESSNAME" placeholder="Address Name" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">First Name*</label>
                <input type="text" class="form-control w-75" id="FIRSTNAME" placeholder="First Name" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Last Name*</label>
                <input type="text" class="form-control w-75" id="LASTNAME" placeholder="Last Name" />
            </div>

            <h4 class="text-secondary mt-4">Street Information</h4>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Address*</label>
                <input type="text" class="form-control w-75" id="ADDRESS1" placeholder="Address Line 1" />
            </div>
            <div class="mt-3">
                <input type="text" class="form-control w-75 float-end" id="ADDRESS2" placeholder="Address Line 2" />
            </div>
            <div class="clearfix"></div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">State/Province</label>
                <input type="text" class="form-control w-75" id="STATEPROVINCE" placeholder="State/Province" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">City*</label>
                <input type="text" class="form-control w-75" id="CITY" placeholder="City" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">ZIP/Postal Code</label>
                <input type="number" class="form-control w-75" id="ZIP" placeholder="ZIP/Postal Code" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Country*</label>
                <input type="text" class="form-control w-75" id="COUNTRY" placeholder="Country" />
            </div>

            <h4 class="text-secondary mt-4">Contact Information</h4>

            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Phone Numer*</label>
                <input type="text" class="form-control w-75" id="PHONE" placeholder="Phone Numer" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Email Address</label>
                <input type="email" value="<?php echo $user['EMAIL']?>" class="form-control w-75" id="EMAILADDRESS"
                    disabled />
            </div>
            <div class="mt-5 mb-5 text-center">
                <button id="save" class="btn btn-primary" onclick="setUpdate()">Update</button>
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
const params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
});
let id = params.addressid;

const username = JSON.parse(sessionStorage.getItem('user'))['USERNAME'];

$.post({
    url: "../api/users/address/address-info.php",
    data: {
        username: username,
        addressid: id,
    },
    success: function(result) {
        const response = JSON.parse(result);
        console.log(JSON.parse(result), "success");
        console.log(id);
        response.map((item, index) => {
            console.log(item);
            if (item.name != "ADDRESSID" && item.name != "USERNAME") {
                document.getElementById(item.name).value = item.value;
            }
        })
    },
    error: function(error) {
        console.log(JSON.stringify(error), "error");
    }

});


function setCancel() {
    window.location.replace("address-book.php");
}

function setUpdate() {
    const addressName = document.getElementById("ADDRESSNAME").value
    const email = document.getElementById("EMAILADDRESS").value
    const firstname = document.getElementById("FIRSTNAME").value
    const lastname = document.getElementById("LASTNAME").value

    const address1 = document.getElementById("ADDRESS1").value
    const address2 = document.getElementById("ADDRESS2").value
    const city = document.getElementById("CITY").value
    const zip = document.getElementById("ZIP").value
    const country = document.getElementById("COUNTRY").value
    const phone = document.getElementById("PHONE").value
    const state = document.getElementById("STATEPROVINCE").value

    $.post({
        url: "../api/users/address/update-address.php",
        data: {
            username: username,
            addressid: id,
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
            if (result.status === 401) {
                alert(result.message);
                return;
            }
            alert("Saved your changes");
            document.location.replace("./address-book.php");
        },
        error: function(error) {
            console.log(JSON.stringify(error), "error");
        }

    });

}
</script>