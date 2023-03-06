<?php
require "sidebar.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    <input type="text" placeholder="Search for your next domain" class="w-100 mt-5 py-3 px-3 border border-0 shadow-lg rounded-3" />
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-4">
        <div>
            <h3 class="text-secondary">Domain List</h3>
            <br><br>
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Created</td>
                        <td>Expires</td>
                        <td>Is locaked</td>
                        <td>Auto renew</td>
                        <td>Premium</td>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>
</main>

<script>
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

                response.map(item => {
                    console.log(item);
                    table.innerHTML += " <tr> <td>" + item.attributes.ID + "</td>" + item.attributes.NAME + "<td></td> <td>" + item.attributes.CREATED + "</td> <td>" + item.attributes.ISEXPIRED + "</td> <td>" + item.attributes.ISLOCKED + "</td> <td>" + item.attributes.ISPREMIUM + "</td> <td>" + item.attributes.ISPREMIUM + "</td> </tr> ";
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