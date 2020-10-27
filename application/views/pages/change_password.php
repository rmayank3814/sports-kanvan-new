<!-- <div class="image-about-banner" style="margin-top:100px">
    <div class="container">
        <div class="row">
		    <div class="col-lg-12">
			<div class="mb-4 mt-4" >
			<?php echo form_open('pages/change_password',['method' => 'post']); ?>
				<h2 class="mt-3 mb-5">Change Password</h2>
				<div><?php echo validation_errors();?> </div>
			<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
					<label>Old Password :</label>
					<input type="password" name="old_pass" placeholder="Old Pass"/><br /><br />
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<label>New Password :</label>
					<input type="password" name="new_pass" placeholder="New Password"/><br/><br />
			</div>
			</div>
					<label>Confirm Password :</label>
					<input type="password" name="confirm_pass" placeholder="Confirm Password"/><br/><br />
					<input type="submit" name="change_password" value="Change Password" /><br />

			    <?php echo form_close(); ?>
		    </div>
			</div>
	    </div>
    </div>
</div> -->




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
                            <?php echo form_open('pages/change_password',['method' => 'post']); ?>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
									<label class="label-input">Old Password :</label>
				                 	<input class="form-control"  type="password" name="old_pass" placeholder="Old Pass"/><br /><br />
                                        <!-- <div class="invalid-feedback">
                                            Valid height is required.
                                        </div> -->
                                    </div>
                                    <div class="col-md-6 mb-3">
									<label  class="label-input">New Password :</label>
				                  	<input class="form-control"  type="password" name="new_pass" placeholder="New Password"/><br/><br />
                                        <!-- <div class="invalid-feedback">
                                            Valid weight is required.
                                        </div> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
									<label  class="label-input">Confirm Password :</label>
					                <input class="form-control" type="password" name="confirm_pass" placeholder="Confirm Password"/><br/><br />
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
