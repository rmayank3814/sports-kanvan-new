

<!--form quote-->
<div class="image-about-banner" style="margin-top:100px">
<div class="py-5 " id="section-quote">
    <div class="container">
        <!-- Row -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 both-space">

                <div class="card mt-5 mb-5 border-0 card-opacity shadow ">
                    <div class="card-body rounded-sm">
                        <div class="text-box">
                            <h3 class="text-center mt-3 mb-4">Change Password</h3>
                            <?php echo form_open('pages/change_password',array('class' => 'needs-validation','method' => 'post','novalidate'=>'novalidate')); ?>
                            <?php echo validation_errors();?>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
									<label class="label-input" for="old_pass">Old Password <span class="text-danger font-weight-medium">*</span></label>
				                 	<input class="form-control"  type="password" name="old_pass" placeholder="Old Password"/><br /><br />
                                        <div class="invalid-feedback">
                                            Valid Old Password is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
									<label  class="label-input" for="new_pass">New Password <span class="text-danger font-weight-medium">*</span></label>
				                  	<input class="form-control"  type="password" name="new_pass" placeholder="New Password"/><br/><br />
                                        <div class="invalid-feedback">
                                            Valid New Password is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
									<label  class="label-input" for="confirm_pass">Confirm Password <span class="text-danger font-weight-medium">*</span></label>
					                <input class="form-control" type="password" name="confirm_pass" placeholder="Confirm Password"/><br/><br />
                                    <div class="invalid-feedback">
                                        Valid Confirm Password is required.
                                    </div>
                                </div>
                            </div> 
                            <div class="d-flex justify-content-center mb-4">
								<input type="submit" name="change_password" value="Change Password" /><br />
                            </div>
							<?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
