 <!--form quote--><br><br>
<style>
.error1{
    color:red;
}
</style>

 <div class="image-about-banner" style="margin-top:100px">
    <div class="">
        <div class="py-5 section-bg-quote mb-5" id="section-quote">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 both-space">
                        <div class="card mt-5 mb-5 border-0 card-opacity shadow ">
                            <div class="card-body rounded-sm">
                                <div class="text-box">
                                <h3 class="text-center mt-3 mb-4">PERSONAL DETAILS</h3>
                                <div class="error1">   <?php echo validation_errors(); ?> </div>
                                <?php echo form_open('pages/registration',['id'=> 'first_form']); ?>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="fname">First Name <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="fname" id="fname">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="lname">Last Name <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="lname" id="lname">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="email">Email Id: <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="email" id="email">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="mobile">Mobile: <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="mobile" id="mobile">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="password">Password: <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="password" name="password" id="password">
                                        <div class="invalid-feedback">
                                            Valid password is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="passconf">Password Confirmation: <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="password" name="passconf" id="passconf">
                                        <div class="invalid-feedback">
                                            Valid confirm password is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input">Gender: </label>
                                        <select class="custom-select d-block w-100" name="gender" id="gender">
                                            <option value="">---Select--</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>other</option>
                                            </select>
                                        <div class="invalid-feedback">
                                            Please select a valid entry.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="relationship">Relationship: <span class="text-danger font-weight-medium">*</span></label>
                                        <input type="text" class="form-control" name="relationship" id="relationship">
                                        <div class="invalid-feedback">
                                            Please enter a valid entry.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="dob">Birth Date: <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="date" name="dob" id="dob">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="age">Age: <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="age" id="age">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="shift">Shift <span class="text-danger font-weight-medium">*</span></label>
                                        <select class="custom-select d-block w-100" name="shift" id="shift">
                                            <option value="">---Select--</option>
                                            <option>Morning</option>
                                            <option>Evening</option>
                                            </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="time">Timing <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="time" name="time" id="time">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="emergency">Emergency Contact:<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="emergency" id="emergency">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="address">Address: <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="address" id="address">
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-blue btn-sm m-auto"  name="registration" value="Submit"  type="submit" >Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
