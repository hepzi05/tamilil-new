<?php
require "sidebar.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    <input type="text" placeholder="Search for your next domain" class="w-100 mt-5 py-3 px-3 border border-0 shadow-lg rounded-3" />
    <div class="pt-3 pb-2 mb-3 border-bottom mt-4">
        <div>
            <h3 class="text-secondary">Domain List</h3>
            <br><br>
            <table class="table" id="table_id">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Is locked</th>
                        <th>Auto renew</th>
                        <th>Premium</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>
</main>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" />
<script>
    $(document).ready(function() {
    $('#table_id').DataTable();
});
    // function checkLogin() {
    const username = "siddhamedicine";

    console.log(username, "user");

    $.post({
        url: "../api/get-domain-lists/get-domain-lists.php",
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

                var table = document.getElementById("tbody");
                table.innerHTML = "";
                response.map((item,index) => {
                    console.log(item);
                    table.innerHTML += " <tr> <td>" + (index+1)  + "</td> <td>" + item.attributes.NAME + "</td> <td>" + item.attributes.CREATED + "</td> <td class="+(item.attributes.ISLOCKED === "true"?"text-success":"text-danger")+">" + item.attributes.ISLOCKED + "</td> <td>" + (item.attributes.AUTORENEW === "true" ? "on" : "off") + "</td> <td>" +( item.attributes.ISPREMIUM === "true"?"yes":"no") + "</td> </tr> ";
                })

            } else {
                alert("No response");
            }
        },
        error: function(error) {
            console.log(JSON.stringify(error), "error");
        }

    });

    // }
</script>