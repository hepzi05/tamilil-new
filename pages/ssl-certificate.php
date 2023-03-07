<?php
require "sidebar.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
            <h4 class="text-secondary">SSL Certificates</h4>
        </div>
    </div>

    <!-- <input type="text" placeholder="Search" class="mt-4 w-25 py-2 px-3 border border-dark rounded-3" /> -->
    <div class="mt-5">
        <table id="table_id" class="table" width="100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Purchased For</th>
                    <th>Expire Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>

</main>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" />
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $('#table_id').DataTable();
});
</script>
<script>
const username = "siddhamedicine";

console.log(username, "user");

$.post({
    url: "../api/get-ssl-certificate/get-ssl-certificate.php",
    data: {
        username: username,
    },
    success: function(result) {
        console.log(result, "result");
        const response = JSON.parse(result);
        console.log(JSON.parse(result), "success");
        if (response.length>0) {
            console.log(response, "response");
            // window.location.replace("dashboard.php");

            var table = document.getElementById("tbody");
            table.innerHTML = "";
            response.map((item, index) => {
                table.innerHTML += "<tr><td>" + (index + 1) + "</td><td>" + item.attributes
                    .SSLType + "</td><td>" + item.attributes.Status + "</td><td>" + item.attributes
                    .HostName + "</td><td>" + item.attributes.ExpireDate + "</td><td><div><i class='fa fa-solid fa-eye text-primary' title='View'></i><i class='fa fa-solid fa-pen text-success ms-3' title='Edit'></i></div></td></tr>"
            })
        }
    },
    error: function(error) {
        console.log(JSON.stringify(error), "error");
    }

});
</script>