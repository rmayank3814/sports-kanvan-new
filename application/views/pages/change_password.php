<div class="image-about-banner">
    <div class="container">
        <div class="row">
		    <div class="col-sm-12">
			<?php echo form_open('pages/change_password',['method' => 'post']); ?>
				<h2>Change Password</h2>
				<div><?php echo validation_errors();?> </div>
					<label>Old Password :</label>
					<input type="password" name="old_pass" placeholder="Old Pass"/><br /><br />
					<label>New Password :</label>
					<input type="password" name="new_pass" placeholder="New Password"/><br/><br />

					<label>Confirm Password :</label>
					<input type="password" name="confirm_pass" placeholder="Confirm Password"/><br/><br />
					<input type="submit" name="change_password" value="Change Password" /><br />

			    <?php echo form_close(); ?>
		    </div>
	    </div>
    </div>
</div>