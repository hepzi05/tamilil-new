<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title fw-bold" id="exampleModalCenterTitle">Change Password</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
             <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">New Password*</label>
                <input type="password" class="form-control w-75" id="newpwd" placeholder="New Password" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Confirm Password*</label>
                <input type="password" class="form-control w-75" id="confirmpwd" placeholder="Confirm Password" />
            </div>
            <div class="form-group d-flex flex-row justify-content-between mt-4">
                <label class="fw-bold text-secondary mt-2">Old Password*</label>
                <input type="password" class="form-control w-75" id="oldpwd" placeholder="Old Password" />
            </div>
             </div>
             <div class="modal-footer">
                <button id="save" class="btn btn-primary">Save Changes</button>
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             </div>
         </div>
     </div>
 </div>