<!-- Modal -->
<?php $user=$_SESSION['user-details']?>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title fw-bold" id="exampleModalCenterTitle2">Change Password</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
             <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Current Email ID*</label>
                <input type="email" class="form-control w-75" id="currentemail" value="<?php echo $user['EMAIL']?>" disabled />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">New Email ID*</label>
                <input type="email" class="form-control w-75" id="newemail" placeholder="New Email Address" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Current Password*</label>
                <input type="password" class="form-control w-75" id="pwd" placeholder="Current Password" />
            </div>
             </div>
             <div class="modal-footer">
                <button id="saveemail" class="btn btn-primary">Change Email</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             </div>
         </div>
     </div>
 </div>