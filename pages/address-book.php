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
    <input type="text" placeholder="Search for your next domain"
        class="w-100 mt-5 py-3 px-3 border border-0 shadow-lg rounded-3" />
    <div class="pt-3 pb-2 mb-3 border-bottom mt-4">
        <div>
            <div>
                <h3 class="text-secondary float-start">Address Book</h3>
                <a href="add-address.php"><button class="btn btn-primary float-end">
                        Add Address</button></a>
            </div>
            <div class="clearfix"></div>
            <br /><br />
            <table class="table" id="table_id">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Address Name</th>
                        <th>Primary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>
    <?php require "./view-address.php" ?>
</main>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" />
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
function setEdit(id) {
    window.location.replace("edit-address.php?addressid=" + id);
}

function setDelete(id) {
    let text = "Do you want to delete this address from address-book?";
    if (confirm(text)) {
        alert("Deleted successfully");
    }
}

$(document).ready(function() {
    $('#table_id').DataTable();
});
// function checkLogin() {
const username = JSON.parse(sessionStorage.getItem('user'))['USERNAME'];

console.log(username, "user");

$.post({
    url: "../api/users/address/address-lists.php",
    data: {
        username: username,
    },
    success: function(result) {
        console.log(result, "result");
        const response = JSON.parse(result);
        console.log(JSON.parse(result), "success");
        if (response.length > 0) {
            console.log(response, "response");
            // window.location.replace("dashboard.php");

            var table = document.getElementById("tbody");
            table.innerHTML = "";
            response.map((item, index) => {
                console.log(item);
                table.innerHTML += " <tr> <td>" + (index + 1) + "</td> <td>" + item.attributes
                    .ADDRESSNAME + "</td> <td>" + (item.attributes.ISDEFAULT === "true" ? "yes" :
                        "no") +
                    "</td><td><div><i class='fa fa-solid fa-eye text-primary' title='View' data-toggle='modal' data-target='#exampleModalCenter' onclick='setView(" +
                    item.attributes.ADDRESSID +
                    ")'></i><i class='fa fa-solid fa-pen text-success ms-3 ' title='Edit' onclick='setEdit(" +
                    item.attributes.ADDRESSID +
                    ")'></i><i class='fa fa-solid fa-trash text-danger ms-3' title='Delete' onclick='setDelete(" +
                    item.attributes.ADDRESSID + ")'></i></div></td> </tr> ";
            })
        }
    },
    error: function(error) {
        console.log(JSON.stringify(error), "error");
    }

});

// }
</script>