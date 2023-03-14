<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLongTitle">View Domain</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="trow">

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>

function setView(name) {
  alert("");
    // const username = JSON.parse(sessionStorage.getItem('user'))['USERNAME'];
// console.log(name,"name");
    // $.post({
    //     url: "../api/domain/info/domain-info.php",
    //     data: {
    //         username: username,
    //         domainname: name
    //     },
    //     success: function(result) {
    //         const response = JSON.parse(result);
    //         console.log(JSON.parse(result), "success");
    //         const table = document.getElementById('trow');
    //         // response.map((item, index) => {
    //         //     item.name !== "ADDRESSID" ? table.innerHTML += "<tr><td>" + item.name +
    //         //         "</td><td>" + item.value + "</td></tr>" : "";
    //         // })
    //     },
    //     error: function(error) {
    //         console.log(JSON.stringify(error), "error");
    //     }

    // });
}
</script>