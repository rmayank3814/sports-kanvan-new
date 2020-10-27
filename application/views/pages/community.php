<div class="image-about-banner">
    <div class="" id="section-quote">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 both-space">
                    <h3><b>LET’S BUILD AN AMAZING FITNESS COMMUNITY: PLUS-TWO</b></h3>
                    <p>We want to build an awesome fitness community here, so we’re asking for your input. Who are your “Plus-­Two” friends, family, co-­workers, or neighbors who could benefit from personal training?</p>
                    <p>Your two referrals (a.k.a. your “Plus-­Two”) will each receive a FREE transformation coaching session for 3 days where Kanvan Sports will help them outline their goals and a path to get there.</p>
                    <p>So, who comes to mind when you think of your Plus‐Two?</p>
                    <div class="card mt-5 mb-5 border-0 card-opacity  ">
                        <div class="card-body rounded-sm">
                            <div class="text-box">
                            <?php echo form_open('pages/community',['class' => 'needs-validation'],['method' => 'post']);  ?>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="label-input" for="name">YOUR NAME:<span class="text-danger font-weight-medium">*</span></label>
                                            <input class="form-control" type="text" name="name" id="name" value="<?php echo $name;?>" required>
                                            <div class="invalid-feedback">
                                                Valid dob is required.
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center mt-3 mb-4">PLUS ONE:</h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="label-input" for="full_name1">Full Name <span class="text-danger font-weight-medium">*</span></label>
                                            <input class="form-control" type="text" name="full_name1" id="full_name1" value="<?php echo $full_name1;?>" required>
                                            <div class="invalid-feedback">
                                                Valid Name is required.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="label-input" for="contact1">Contact Number <span class="text-danger font-weight-medium">*</span></label>
                                            <input class="form-control" type="number" name="contact1" id="contact1" value="<?php echo $contact1;?>" required>
                                            <div class="invalid-feedback">
                                                Valid contact is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="label-input" for="relationship1">Relationship <span class="text-danger font-weight-medium">*</span></label>
                                            <input class="form-control" type="text" name="relationship1" id="relationship1" value="<?php echo $relationship1;?>" required>
                                            <div class="invalid-feedback">
                                                Valid relationship is required.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="label-input" for="email1">E-­mail (optional) <span class="text-danger font-weight-medium">*</span></label>
                                            <input class="form-control" type="email" name="email1" id="email1" value="<?php echo $email1;?>" required>
                                            <div class="invalid-feedback">
                                                Valid Sign Name is required.
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="text-center mt-3 mb-4">PLUS TWO:</h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="label-input" for="full_name2">Full Name <span class="text-danger font-weight-medium">*</span></label>
                                            <input class="form-control" type="text" name="full_name2" id="full_name2" value="<?php echo $full_name2;?>" required>
                                            <div class="invalid-feedback">
                                                Valid Name is required.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="label-input" for="contact2">Contact Number <span class="text-danger font-weight-medium">*</span></label>
                                            <input class="form-control" type="number" name="contact2" id="contact2" value="<?php echo $contact2;?>" required>
                                            <div class="invalid-feedback">
                                                Valid contact number is required.
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="relationship2">Relationship <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="text" name="relationship2" id="relationship2" value="<?php echo $relationship2;?>" required>
                                    <div class="invalid-feedback">
                                        Valid Relationship is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="email2">E-­mail (optional) <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="email" name="email2" id="email2" value="<?php echo $email2;?>" required>
                                    <div class="invalid-feedback">
                                        Valid Sign Name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mt-3 mb-3">
                                <button class="btn btn-blue btn-sm m-auto" name="community_button" type="submit">Submit</button>
                            </div>
                            <?php echo form_close(); ?>
                            <h6 class="text-center pt-4 pb-4"> THANKS FOR HELPING SPREAD THE GIFT OF IMPROVED HEALTH AND FITNESS!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
