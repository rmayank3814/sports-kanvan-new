<style>
.no-outline {
  	border-top-style: hidden;
  	border-right-style: hidden;
  	border-left-style: hidden;
  	border-bottom-style: hidden;
  	color:green;
  	font-weight:bold;
        width:30px;
}

.no-outline:focus {
  	outline: none;
}

#amount-display{
  	color:green;
  	font-weight:bold;
}
</style>

<div style="margin-top:100px">

    <div class="py-5 global-container" id="section-quote">

        <div class="container">

            <div class="row d-flex justify-content-center">

                <div class="col-md-10 both-space">

                    <div class="card mt-4 mb-5 border-0 card-opacity shadow ">

                        <div class="card-body rounded-sm">

                            <div class="text-box">

                            <h3 class="heading-title text-center mt-4 mb-5">PERSONAL DETAILS</h3>

                            <?=form_open('pages/registration',array('method'=>'post','novalidate'=>"novalidate", 'id' =>'registration_form')); ?>

                            <?=validation_errors(); ?>

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

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <div class="form-group">

                                        <label for="exampleFormControlSelect1">Package select <span class="error-medical"> *</span></label>

                                        <select class="form-control" name="plan" id="plan">

                                        <option value="">---Select Plan---</option>

                                        <option value="Individual">Individual</option>

                                        <option value="Couple">Couple</option>

                                        <option value="Family Package">Family Package</option>

                                        </select>

                                    </div>   

                                </div>

                                <div class="col-md-6 mb-3">

                                    <div class="form-group">

                                        <label for="plan">Select Package <span class="error-medical"> *</span></label>

                                        <select class="form-control" name="package" id="package">

                                            <option>---Select---</option>

                                            <option value="1-Month">1-Month</option>

                                            <option value="3-Month">3-Month</option>

                                            <option value="6-Month">6-Month</option>

                                            <option value="1-Year">1-Year</option>

                                        </select>

                                    </div>  

                                </div>
                          
                            </div>

                                <div id="amount-display">

                                    <sup class="error-medical"> *</sup>The total cost of your plan with package = &#8377;<input readonly="readonly" type="text" class="no-outline" name="orderAmount" id="pack-plan-amount-id" /> .
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

$(document).ready(function() {

    $('#amount-display').hide();

	$('#plan').on('change', function(event) {

        

		var plan = $(this).val();

        var package = $('#package').val();

        

        $.ajax({

            type : 'POST', 

            url: "<?=base_url("index.php/pages/getPlanPackageAmount");?>",

            dataType : 'json',

            data : {"plan": plan,"package": package },

            success: function(amtVal) {

                $('#amount-display').show();

                $('#pack-plan-amount-id').val(amtVal);

            },

            error: function(){

                alert("error");

            }

        });

	});

    $('#package').on('change', function(event) {

        

        var plan = $('#plan').val();

        var package = $(this).val();

        

        $.ajax({

            type : 'POST', 

            url: "<?=base_url("index.php/pages/getPlanPackageAmount");?>",

            dataType : 'json',

            data : {"plan": plan,"package": package },

            success: function(amtVal){

                    $('#amount-display').show();

                    $('#pack-plan-amount-id').val(amtVal);

                },

            error: function(){

                alert("error");

            }

        });

	});

});

</script>