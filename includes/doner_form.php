<!-- Modal -->
<div class="modal fade" id="becomeDoner" tabindex="-1" aria-labelledby="becomeDonerLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="becomeDonerLabel">Becomer A Doner</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="#" class="row g-3">
          <div class="col-lg-12">
            <div class="modal-body">
                
                <div class="col-md-6">
                    <!-- <label for="fname" class="form-label">First Name</label> -->
                    <input type="text" class="form-control fname" id="fname" name="fname" placeholder="First Name" autofocus>
                </div>
                <div class="col-md-6">
                    <!-- <label for="lname" class="form-label">Last Name</label> -->
                    <input type="text" class="form-control lname" id="lname" name="lname" placeholder="Last Name">
                </div>
                
                <div class="col-md-6">
                    <!-- <label for="display_name" class="form-label">Display Name</label> -->
                    <input type="text" class="form-control display_name" id="display_name" name="display_name" placeholder="Display Name">
                </div>
                <div class="col-md-6">
                    <!-- <label for="email" class="form-label">Email</label> -->
                    <input type="email" class="form-control email" id="email" name="email" placeholder="Email ID">
                </div>
                <div class="col-md-5">
                    <!-- <label for="contact_no" class="form-label">Mobile No</label> -->
                    <input type="text" class="form-control contact_no" id="contact_no" name="contact_no" placeholder="Mobile Number">
                </div>
                <div class="col-md-4">
                    <!-- <label for="gender" class="form-label">Gender</label> -->
                    <select id="gender" class="form-select gender" name="gender">
                        <option selected>Gender...</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <!-- <label for="blood_group" class="form-label">Blood Group</label> -->
                    <select id="blood_group" class="form-select blood_group" name="blood_group">
                        <option selected>Group...</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">O+</option>
                        <option value="6">O-</option>
                        <option value="7">AB+</option>
                        <option value="8">AB-</option>
                    </select>
                </div>

                <div class="col-12">
                    <!-- <label for="contact_address" class="form-label"></label> -->
                    <textarea class="form-control contact_address" id="contact_address" name="contact_address" rows="3" placeholder="Your Address"></textarea>
                </div>
                <div class="col-12">
                    <!-- <label for="additional_info" class="form-label">Additional Information</label> -->
                    <textarea class="form-control additional_info" id="additional_info" name="additional_info" rows="5" placeholder="Additional Information (optional)"></textarea>
                </div>
                
                <div class="col-md-6">
                    <!-- <label for="password" class="form-label">Password</label> -->
                    <input type="password" class="form-control password" id="password" name="password" placeholder="Password">
                </div>
                <div class="col-md-6">
                    <!-- <label for="confirm_password" class="form-label">Confirm Password</label> -->
                    <input type="password" class="form-control confirm_password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
          </form>
        </div>
      </div>
</div>