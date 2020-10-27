
<div class="image-about-banner" style="margin-top:100px">
<div class="global-container pt-5 pb-5">
<div class="col-lg-6 col-sm-6">
	<div class="card login-form">
	<div class="card-body">
    <?php echo form_open('pages/login',['class' => 'login-form mb-5'],['method' => 'post']);  ?>
        <h3 class="card-title text-center">Login </h3>
        <div class = error>  <?php echo validation_errors();?> </div>
		<div class="card-text">
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo set_value('email'); ?>" required>
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<input type="password" class="form-control form-control-lg" id="pass" required>
                </div>
                <a href="<?php echo base_url();?>index.php/pages/forgot_password" style="float:right;padding-bottom:17px">Forgot password?</a>
				<button type="submit" href="<?php echo base_url();?>index.php/pages/registration" class="btn-block btn btn-blue btn-sm m-auto">Sign in</button>
				
				<div class="sign-up">
					Don't have an account? <a href="#">Sign up</a>
				</div>
			</form>
        </div>
        <?php echo form_close(); ?>
	</div>
</div>
</div>
</div>
</div>
                