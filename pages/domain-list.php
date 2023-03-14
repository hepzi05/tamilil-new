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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>
    <?php require "./view-domainlist.php" ?>
</main>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" />
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
<script>
    function setEdit(id){
document.location.replace("./edit-domainlist.php?id="+id);
    }

    $(document).ready(function() {
    $('#table_id').DataTable();
});
    // function checkLogin() {
    const username = JSON.parse(sessionStorage.getItem('user'))['USERNAME'];

    $.post({
        url: "../api/domain/lists/domain-lists.php",
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
                response.map((item,index) => {
                    console.log(item,"item");
                    table.innerHTML += " <tr> <td>" + (index+1)  + "</td> <td>" + item.attributes.NAME + "</td> <td>" + item.attributes.CREATED + "</td> <td class="+(item.attributes.ISLOCKED === "true"?"text-success":"text-danger")+">" + item.attributes.ISLOCKED + "</td> <td>" + (item.attributes.AUTORENEW === "true" ? "on" : "off") + "</td> <td>" +( item.attributes.ISPREMIUM === "true"?"yes":"no") + "</td><td><div><i class='fa fa-solid fa-eye text-primary' title='View' data-toggle='modal' data-target='#exampleModalCenter' onclick='setView("+item.attributes.NAME+")'></i><i class='fa fa-solid fa-pen text-success ms-3' title='Edit' onclick='setEdit("+item.attributes.ID+")'></i></div></td> </tr> ";
                })

            }
        },
        error: function(error) {
            console.log(JSON.stringify(error), "error");
        }

    });

    // }
</script>