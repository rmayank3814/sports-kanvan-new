<div style="margin-top:100px">
    <div class="py-5 global-container" id="section-quote">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 both-space">
                    <div class="card mt-5 mb-5 border-0 card-opacity shadow ">
                        <div class="card-body rounded-sm">
                            <div class="text-box">
                            <h3 class="heading-title text-center mt-4 mb-5">PERSONAL DETAILS</h3>
                            <?php echo form_open('pages/registration',array('method'=>'post','novalidate'=>"novalidate", 'id' =>'registration_form')); ?>
                            <?php echo validation_errors(); ?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="fname">First Name: <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="text" name="fname" id="fname">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="lname">Last Name: <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="text" name="lname" id="lname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="email">Email Id: <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="text" name="email" id="email" required>
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="mobile">Mobile: <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="text" name="mobile" id="mobile" required>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="password">Password: <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="password" name="password" id="password" required>
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="passconf">Confirm Password: <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="password" name="passconf" id="passconf" required>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="label-input">Gender: </label>
                                    <select class="custom-select d-block w-100" name="gender" id="gender" required>
                                        <option value="">---Select---</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>other</option>
                                        </select>
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="label-input">Birth Date: <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="date" id="dob" name="dob"> 
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="shift">Shift <span class="text-danger font-weight-medium">*</span></label>
                                    <select class="custom-select d-block w-100" name="shift" id="shift" required>
                                        <option value="">---Select---</option>
                                        <option>Morning(5am-11am)</option>
                                        <option>Evening(5pm-9pm)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="emergency">Emergency Contact:<span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="text" name="emergency" id="emergency" required>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="address1">Address 1:<span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="text" name="address1" id="address1" required>
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="address2">Address 2:</label>
                                    <input class="form-control" type="text" name="address2" id="address2">
                                    
                                </div>
                                
                            </div>
                            <div class="d-flex justify-content-center  mt-3 mb-4">
                                <button class="btn btn-blue btn-sm m-auto" title="submit" name="registration" type="submit">Submit</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- </div> -->
