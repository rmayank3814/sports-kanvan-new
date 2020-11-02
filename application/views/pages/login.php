<!-- <div style="margin-top:100px"> -->
<div class="global-container pt-5 pb-5">
<div class="col-lg-6 col-sm-6 col-xs-12">
	<div class="card login-form" >
	<div class="card-body">
    <?php echo form_open('pages/login',array('class' => 'login-form mb-5', 'id' => 'login_form','method' => 'post','novalidate'=>'novalidate')); ?>
        <h3 class="card-title text-center">Login </h3>
        <?php echo validation_errors();?>
		<div class="card-text">
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control form-control-lg" name="email" id="email" aria-describedby="emailHelp" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control form-control-lg" id="password" required>
                </div>
                <a href="<?php echo base_url();?>index.php/pages/forgot_password" style="float:right;padding-bottom:17px">Forgot password?</a>
				<br><br>
				<div class="d-flex justify-content-center">
				   <button type="submit" name="login" class="btn-block btn btn-blue btn-sm m-auto login-buttons">Sign in</button>
                </div>
				<div class="sign-up">
					Don't have an account? <a href="<?php echo base_url();?>index.php/pages/registration">Sign up</a>
				</div>
			</form>
        </div>
        <?php echo form_close(); ?>
	</div>
</div>
</div>
</div>
<!-- </div> -->
                