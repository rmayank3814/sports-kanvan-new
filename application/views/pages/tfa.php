<!-- <div style="margin-top:100px"> -->
<div class="py-5 global-container" id="section-quote">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 both-space">

                <div class="card mt-5 mb-5 border-0 card-opacity shadow ">
                    <div class="card-body rounded-sm">
                        <div class="text-box">
                            <h3 class="heading-title text-center mt-3 mb-5">TRAINING FITNESS ASSESSMENT</h3>
                            <?php echo form_open('pages/tfa',array('class' => 'needs-validation','method' => 'post','novalidate' => 'novalidate'));  ?>
                            <?php echo validation_errors();?>
                            <h5 class="mt-3 mb-4">Measurements: </h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="height">Height <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="height" id="height" value="<?php //echo $height; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid height is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="weight">Weight <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="weight" id="weight" value="<?php //echo $weight; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid weight is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="race">Race <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="race" id="race" value="<?php //echo $race; ?>" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid entry.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="fat"> Body Fat <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="fat" id="fat" value="<?php //echo $fat; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Body Fat is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="biceps">Biceps <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="biceps" id="biceps" value="<?php //echo $biceps; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid biceps is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="upper">Upper Thigh <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="upper" id="upper" value="<?php //echo $upper; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid upper is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="mid">Mid-thigh<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="mid" id="mid" value="<?php //echo $mid; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Mid-thigh is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="buttocks">Buttocks <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="buttocks" id="buttocks" value="<?php //echo $buttocks; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Buttocks is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="hips">Hips <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="hips" id="hips" value="<?php //echo $hips; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Hips is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="waist">Waist <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="waist" id="waist" value="<?php //echo $waist; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="chest">Chest <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="chest" id="chest" value="<?php //echo $chest; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Chest is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="calves">Calves <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="calves" id="calves" value="<?php //echo $calves; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="handed">Right/Left Handed <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="handed" id="handed" value="<?php //echo $handed; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Right/Left is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="posture">Posture<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="posture" id="posture" value="<?php //echo $posture; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Posture is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="body">Body Type <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="body" id="body" value="<?php // echo $body; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Body is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="parent">Parent Body Type<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="parent" id="parent" value="<?php //echo $parent; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Parent Body Type is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for=" loss">Weight Loss Desired <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="loss" id="loss" value="<?php //echo $loss; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Weight Loss is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="problem">Problem Areas<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="problem" id="problem" value="<?php //echo $problem; ?>"  required>
                                        <div class="invalid-feedback">
                                            Valid Problem Areas is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="rockport">Rockport 1-Mile Walking Test <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="rockport" id="rockport" value="<?php //echo $rockport; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Rockport is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="step">3-Minute Step Test<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="step" id="step" value="<?php //echo $step; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="resting">Resting Heart Rate<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="resting" id="resting" value="<?php //echo $resting; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="cardio">Cardio.-Resp. Fitness Desired<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="cardio" id="cardio" value="<?php //echo $cardio; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="strength">Strength/Endurance Desired<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="strength" id="strength" value="<?php //echo $strength; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="flexibility">Flexibility Desired<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="flexibility" id="flexibility" value="<?php //echo $flexibility; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="devoted">Time Devoted to Exercise<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="devoted" id="devoted" value="<?php //echo $devoted; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="current">Current Caloric Intake<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="current" id="current" value="<?php //echo $current; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="label-input" for="energy">Total Energy Required to Maintain Weight<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="energy" id="energy" value="<?php //secho $energy; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-3 mb-4">
                                    <button class="btn btn-blue btn-sm m-auto" title="submit" name="tfa_button" type="submit">Submit</button>
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


