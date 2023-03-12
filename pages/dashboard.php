<?php
require "sidebar.php";
?>

<?php $user=$_SESSION['user-details'];?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div>
            <h4 class="text-secondary">Hello <?php echo $user['FIRSTNAME']?></h4>
            <span>Last logged in on Feb 19, 2023, 07:18 AM (EST)</span>
        </div>
        <div>
            <span class="fw-bold">Account Balance</span>
            <p id="balance"></p>
        </div>
    </div>
    <h5 class="text-center mt-5"><b>Find your dream domain.</b>Your digital success story starts here.</h5
        class="text-center">
    <div class="text-center">
        <input type="text" placeholder="Search for your next domain"
            class="w-75 mt-5 py-3 px-3 border border-0 shadow-lg rounded-3" />
    </div>
</main>
<script>
const username = "<?php echo $user['USERNAME']?>"

$.post({
    url: "../api/users/account-balance/balance.php",
    data: {
        username: username,
    },
    success: function(result) {
        const response = JSON.parse(result);
        document.getElementById("balance").innerHTML = "$ " + response['ACCOUNTBALANCE'];
    },
    error: function(error) {
        console.log(JSON.stringify(error), "error");
    }

});
</script>