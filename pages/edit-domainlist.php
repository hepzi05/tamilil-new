<?php
require "sidebar.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
            <h4 class="text-secondary">Edit Domain</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-ld-9 col-md-9 col-sm-12">
            <div class="mt-5 mb-5 text-center">
                <button id="save" class="btn btn-primary" onclick="setUpdate()">Update</button>
                <button id="cancel" class="btn btn-danger ms-3" onclick="setCancel()">Cancel</button>
            </div>
        </div>
        <div class="col-ld-3 col-md-3 col-sm-12"></div>
        <div class="row"></div>
    </div>
</main>
<script>
    function setCancel() {
    window.location.replace("domain-list.php");
}
</script>