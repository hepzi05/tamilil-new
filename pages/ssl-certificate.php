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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Purchased for</th>
                    <th>Time remaining</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td>Shinchan</td>
                    <td>Yellow</td>
                </tr> -->
            </tbody>
        </table>
    </div>

</main>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" />
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
        if (response) {
            console.log(response, "response");
            // window.location.replace("dashboard.php");
        } else {
            alert("No response");
        }
    },
    error: function(error) {
        console.log(JSON.stringify(error), "error");
    }

});
</script>