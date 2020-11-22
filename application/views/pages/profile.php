<div style="margin-top:100px">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 both-space">
            <div class="card mt-3 mb-5 border-0 card-opacity shadow ">
                <div class="card-body rounded-sm">
                    <div class="text-box">
                    <h3 class="heading-title text-center mt-4 mb-5">PERSONAL DETAILS</h3>
                    <?php echo form_open('pages/profile',array('method'=>'post','novalidate'=>"novalidate",'enctype' => "multipart/form-data")); ?>
                        <?php echo validation_errors(); ?>
                        <?php if($profile_image == ''){
                            $profile_image = 'avatar.png';
                        } ?>
                        <div class="text-center ">
                            <img src="<?php echo base_url();?>/main/images/<?php echo $profile_image; ?>" class="avatar rounded-circle profile_size img-thumbnail" alt="avatar">
                        </div>  
                        <div class="text-center pt-3 pb-5">
                            <input type="file" name="profile_image" />  
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="label-input" for="fname">First Name: <span class="text-danger font-weight-medium">*</span></label>
                                <input class="form-control" type="text" name="fname" id="fname"  value="<?php echo $fname ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-input" for="lname">Last Name: <span class="text-danger font-weight-medium">*</span></label>
                                <input class="form-control" type="text" name="lname" id="lname" value="<?php echo $lname ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="label-input" for="email">Email Id: <span class="text-danger font-weight-medium">*</span></label>
                                <input class="form-control" type="text" name="email" id="email" value="<?php echo $email ?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-input" for="mobile">Mobile: <span class="text-danger font-weight-medium">*</span></label>
                                <input class="form-control" type="text" name="mobile" id="mobile" value="<?php echo $mobile ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="label-input">Gender:<span class="text-danger font-weight-medium">*</span> </label>
                                <select class="custom-select d-block w-100" name="gender" id="gender">
                                    <option>---Select---</option>
                                    <option <?php if(trim(strtolower($gender)) === trim(strtolower("Male"))){ echo 'Selected'; } ?>>Male</option>
                                    <option <?php if(trim(strtolower($gender)) === trim(strtolower("Female"))){ echo 'Selected'; } ?>>Female</option>
                                    <option <?php if(trim(strtolower($gender)) === trim(strtolower("Other"))){ echo 'Selected'; } ?>>other</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-input">Birth Date: <span class="text-danger font-weight-medium">*</span></label>
                                <input class="form-control" type="date" id="dob" name="dob" value="<?php echo $dob ?>"> 
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="label-input" for="shift">Shift <span class="text-danger font-weight-medium">*</span></label>
                                <select class="custom-select d-block w-100" name="shift" id="shift">
                                    <option>---Select---</option>
                                    <option <?php if(trim(strtolower($shift)) === trim(strtolower("Morning(5am-11am)"))){ echo 'Selected'; } ?>>Morning(5am-11am)</option>
                                    <option <?php if(trim(strtolower($shift)) === trim(strtolower("Evening(5pm-9pm)"))){ echo 'Selected'; } ?>>Evening(5pm-9pm)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-input" for="emergency">Emergency Contact:<span class="text-danger font-weight-medium">*</span></label>
                                <input class="form-control" type="text" name="emergency" id="emergency" value="<?php echo $emergency ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="label-input" for="address1">Address 1:<span class="text-danger font-weight-medium">*</span></label>
                                <input class="form-control" type="text" name="address1" id="address1" value="<?php echo $address1 ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="label-input" for="address2">Address 2:</label>
                                <input class="form-control" type="text" name="address2" id="address2" value="<?php echo $address2 ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="plan">Select Plan <span class="error-medical"> *</span></label>
                                    <select class="form-control" name="plan" id="plan" disabled> 
                                        <option>---Select---</option>
                                        <option <?php if(trim(strtolower($plan)) === trim(strtolower("Individual"))){ echo 'Selected'; } ?>>Individual</option>
                                        <option <?php if(trim(strtolower($plan)) === trim(strtolower("Couple"))){ echo 'Selected'; } ?>>Couple</option>
                                        <option <?php if(trim(strtolower($plan)) === trim(strtolower("Family Package"))){ echo 'Selected'; } ?>>Family Package</option>
                                    </select>
                                </div>   
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="plan">Select Package <span class="error-medical"> *</span></label>
                                    <select class="form-control" name="package" id="package" disabled>
                                        <option>---Select---</option>
                                        <option <?php if(trim(strtolower($package)) === trim(strtolower("1-Month"))){ echo 'Selected'; } ?>>1-Month</option>
                                        <option <?php if(trim(strtolower($package)) === trim(strtolower("3-Month"))){ echo 'Selected'; } ?>>3-Month</option>
                                        <option <?php if(trim(strtolower($package)) === trim(strtolower("6-Month"))){ echo 'Selected'; } ?>>6-Month</option>
                                        <option <?php if(trim(strtolower($package)) === trim(strtolower("1-Year"))){ echo 'Selected'; } ?>>1-Year</option>
                                    </select>
                                </div>  
                            </div>
                        </div>
                    <div class="d-flex justify-content-center mt-3 mb-4">
                        <button type="submit" class="btn btn-blue btn-sm m-auto" title="update" name="update_profile">Update</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
