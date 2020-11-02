<style>
.spaces {
    margin-left: 20px;
}
.tabbable-panel {
  border:1px solid #eee;
  padding: 10px;
}
ul.nav.nav-tabs {
    display: flex;
    justify-content: center;
}
.tabbable-line > .nav-tabs {
  border: none;
  margin: 0px;
}
.tabbable-line > .nav-tabs > li {
  margin-right: 26px;
  font-weight: bold;
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: #737373;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
  border-bottom: 3px solid rgb(80,144,247);
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
  border-bottom: 3px solid #32465B;
  position: relative;
}
/* .tabbable-line > .nav-tabs > li.active > a {
  border: 0;
  color: #333333;
} */
/* .tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
} */
.tabbable-line > .tab-content {
  margin-top: 31px;
  /* background-color: #fff;
  border: 0;
  border-top: 1px solid #eee; */
  /* padding: 15px 0; */
}
/* .portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
} */

</style>

<div class="container" style="margin-top:120px">
    <div class="row">
        <div class="col-md-12">
			<div class="tabbable-panel mb-5">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active ">
							<a href="#tab_default_1" data-toggle="tab" >Profile </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab" class="spaces">Medical </a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab" class="spaces">Training Fitness</a>
						</li>
                        <li>
							<a href="#tab_default_4" data-toggle="tab" class="spaces">Personal Training</a>
						</li>
                        <li>
							<a href="#tab_default_5" data-toggle="tab" class="spaces">Fitness Community</a>
						</li>
						<li>
							<a href="#tab_default_6" data-toggle="tab" class="spaces">Indemnity Agreement</a>
						</li>
					</ul>

<div class="tab-content">
	<div class="tab-pane active" id="tab_default_1">
		<div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 both-space">
                    <div class="card mt-5 mb-5 border-0 card-opacity shadow ">
                        <div class="card-body rounded-sm">
                            <div class="text-box">
                            <h3 class="text-center mt-4 mb-5">PERSONAL DETAILS</h3>
                            <?php echo form_open('pages/profile',array('method'=>'post','novalidate'=>"novalidate",'enctype' => "multipart/form-data")); ?>
                            <?php echo validation_errors(); ?>
                            <?php if($profile_image == ''){
                                $profile_image = 'avatar.png';
                            } ?>
                            <div class="text-center">
                                <img src="<?php echo base_url();?>/main/images/<?php echo $profile_image; ?>" class="avatar rounded-circle profile_size img-thumbnail" alt="avatar">
                                <h6>Upload a different photo...</h6>
                                <input type="file" name="profile_image" >
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
                                    <input class="form-control" type="text" name="email" id="email" value="<?php echo $email ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="label-input" for="mobile">Mobile: <span class="text-danger font-weight-medium">*</span></label>
                                    <input class="form-control" type="text" name="mobile" id="mobile" value="<?php echo $mobile ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="label-input">Gender: </label>
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
                            <div class="d-flex justify-content-center mt-3 mb-4">
                                <button type="submit" class="btn btn-blue btn-sm m-auto" name="update_profile">Update</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane" id="tab_default_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h3 class="card text-center mt-5 mb-5">MEDICAL DETAILS</h3>
            <?php echo form_open('pages/profile',array('method' => 'post','novalidate'=>'novalidate')); ?>
            <?php echo validation_errors(); ?>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                     <div class="form-group">
                    <label>1) Are you currently under a doctor’s care?<span class="error-medical"> *</span> </label>
                    <div class="optional-radio-button">
                    <label class="radio-inline">
                        <input type="radio" id="doctor_yes" name="option1" <?php if(trim(strtolower($doctor_care)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" id="doctor_no" name="option1" <?php if(trim(strtolower($doctor_care)) == trim(strtolower('no'))) { echo 'Checked' ;}?> value="no"> No
                    </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>2) When was the last time you had a physical examination? <span class="error-medical"> *</span></label>
                    <input type="date" name="physical_examination" value = "<?php echo $physical_examination ?>" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group hidden"  id="explain">
                    <label for="explain">If yes, explain <span class="error-medical"> *</span></label>
                    <input type="text" name="explain" id="explain" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                    <label>3) Do you take any medications on a regular basis? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option4" id="regular_yes" <?php if(trim(strtolower($medication)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option4" id="regular_no" <?php if(trim(strtolower($medication)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                   </div>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="form-group">
                    <label>4) Do you smoke? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option6" <?php if(trim(strtolower($smoke)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option6" <?php if(trim(strtolower($smoke)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
            
        </div>
        
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group hidden" id="medication">
                    <label>If yes, please list medications and reasons for taking <span class="error-medical"> *</span></label>
                    <input type="text" name="relationship" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
        
             <div class="col-lg-6">
                <div class="form-group">
                    <label>5) Have you been recently hospitalized?<span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option5" id="hospitalized_yes" <?php if(trim(strtolower($hospitalized)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option5" id="hospitalized_no" <?php if(trim(strtolower($hospitalized)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                  </div>
                </div>
            </div>
            <div class="col-lg-6">
                    <div class="form-group">
                       <label>6) Muscle pain or an injury (explain on back of Form)? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option31" <?php if(trim(strtolower($muscle_pain)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option31" <?php if(trim(strtolower($muscle_pain)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group hidden" id="relation">
                    <label>If yes, explain: <span class="error-medical"> *</span></label>
                    <input type="text" name="relationship" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group" >
                    <label>7) Have you ever had an exercise stress test <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option2" id="stress_yes" <?php if(trim(strtolower($stress_test)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option2" id="stress_no" <?php if(trim(strtolower($stress_test)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option2" id="stress_dont_know" <?php if(trim(strtolower($stress_test)) == trim(strtolower("don't know"))) { echo 'Checked';} ?> value="don't know"> Don’t Know
                        </label>
                    </div>
                </div>
             </div>
            <div class="col-lg-6">
            <div class="form-group">
                <label>8) Are you pregnant? <span class="error-medical"> *</span></label>
                <div class="optional-radio-button">
                    <label class="radio-inline">
                        <input type="radio" name="option7" <?php if(trim(strtolower($pregnant)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="option7" <?php if(trim(strtolower($pregnant)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                    </label>
                </div>
            </div>
            </div>   
        </div> 
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group hidden" id="result">
                    <label>If yes, were the results <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option3" <?php if(trim(strtolower($result)) == trim(strtolower('normal'))) { echo 'Checked';} ?> value="normal">Normal
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option3"  <?php if(trim(strtolower($result)) == trim(strtolower('abnormal'))) { echo 'Checked';} ?> value="abnormal"> Abnormal
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>9) Do you drink alcohol more than three times/week? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option8" <?php if(trim(strtolower($drink_alcohal)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option8" <?php if(trim(strtolower($drink_alcohal)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>10) Is your stress level high? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option9" <?php if(trim(strtolower($stress_level)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option9" <?php if(trim(strtolower($stress_level)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                    <label>11) Are you moderately active on most days of the week? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option10" <?php if(trim(strtolower($moderately)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option10" <?php if(trim(strtolower($moderately)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>12) High blood pressure? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option11" <?php if(trim(strtolower($high_bp)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option11" <?php if(trim(strtolower($high_bp)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>13) High cholesterol? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option12" <?php if(trim(strtolower($cholesterol)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option12" <?php if(trim(strtolower($cholesterol)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>14) Diabetes? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option13" <?php if(trim(strtolower($diabetes)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option13" <?php if(trim(strtolower($diabetes)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>15) Have parents or siblings who, prior to age 55 had *</label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option14" <?php if(trim(strtolower($siblings)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option14" <?php if(trim(strtolower($siblings)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>16) A heart attack? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option17" <?php if(trim(strtolower($heart_attack)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option17" <?php if(trim(strtolower($heart_attack)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                        </label>
                    </div>  
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                      <label>17) A stroke? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option18" <?php if(trim(strtolower($stroke)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option18" <?php if(trim(strtolower($stroke)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>18) Known heart disease? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option15" <?php if(trim(strtolower($heart_disease)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option15" <?php if(trim(strtolower($heart_disease)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>19) Rheumatic heart disease? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option16" <?php if(trim(strtolower($rheumatic)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option16" <?php if(trim(strtolower($rheumatic)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>20) A heart murmur? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option19" <?php if(trim(strtolower($murmur)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option19" <?php if(trim(strtolower($murmur)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>21) Chest pain with exertion? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option20" <?php if(trim(strtolower($chest_pain)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option20" <?php if(trim(strtolower($chest_pain)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>22) Irregular heart beat or palpitations? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option21" <?php if(trim(strtolower($palpitation)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option21" <?php if(trim(strtolower($palpitation)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>23) Lightheadedness or do you faint? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option22" <?php if(trim(strtolower($lightheadedness)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option22" <?php if(trim(strtolower($lightheadedness)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>24) Unusual shortness of breath? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option23" <?php if(trim(strtolower($breath)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option23" <?php if(trim(strtolower($breath)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>25) Cramping pains in legs or feet? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option24" <?php if(trim(strtolower($cramping)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option24" <?php if(trim(strtolower($cramping)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>26) Emphysema? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option25" <?php if(trim(strtolower($emphysema)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option25" <?php if(trim(strtolower($emphysema)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>27) Other metabolic disorders (thyroid, kidney, etc.)? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option26" <?php if(trim(strtolower($metabolic)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option26" <?php if(trim(strtolower($metabolic)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>28) Epilepsy? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option27" <?php if(trim(strtolower($epilepsy)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option27" <?php if(trim(strtolower($epilepsy)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>29) Asthma? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option28" <?php if(trim(strtolower($astma)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option28" <?php if(trim(strtolower($astma)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>30) Back pain: upper, middle, lower? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option29" <?php if(trim(strtolower($back_pain)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option29" <?php if(trim(strtolower($back_pain)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                            </label>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>31) Other joint pain (explain on back of form)? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option30" <?php if(trim(strtolower($joint_pain)) == trim(strtolower('yes'))) { echo 'Checked';} ?> value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option30" <?php if(trim(strtolower($joint_pain)) == trim(strtolower('no'))) { echo 'Checked';} ?> value="no"> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>32) Sign Name (Type your name) <span class="error-medical"> *</span></label>
                        <input type="text" name="sign" id="sign" value="<?php echo $sign ?>" class="form-control" />
                    </div>
                </div>
            </div>    
            <div class="d-flex justify-content-center mt-4 mb-5">
                <button class="btn btn-blue btn-sm m-auto" name="medical_update" type="submit">Update</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
</div>
</div>

<div class="tab-pane" id="tab_default_3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 both-space">

                <div class="card mt-5 mb-5 border-0 card-opacity shadow ">
                    <div class="card-body rounded-sm">
                        <div class="text-box">
                            <h3 class="text-center mt-3 mb-5">TRAINING FITNESS ASSESSMENT</h3>
                            <?php echo form_open('pages/profile',array('class' => 'needs-validation','method' => 'post','novalidate' => 'novalidate'));  ?>
                            <?php echo validation_errors();?>
                            <h5 class="mt-3 mb-4">Measurements: </h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="height">Height <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="height" id="height" value="<?php echo $height; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid height is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="weight">Weight <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="weight" id="weight" value="<?php echo $weight; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid weight is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="race">Race <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="race" id="race" value="<?php echo $race; ?>" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid entry.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="fat"> Body Fat <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="fat" id="fat" value="<?php echo $fat; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Body Fat is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="biceps">Biceps <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="biceps" id="biceps" value="<?php echo $biceps; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid biceps is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="upper">Upper Thigh <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="upper" id="upper" value="<?php echo $upper; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid upper is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="mid">Mid-thigh<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="mid" id="mid" value="<?php echo $mid; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Mid-thigh is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="buttocks">Buttocks <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="buttocks" id="buttocks" value="<?php echo $buttocks; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Buttocks is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="hips">Hips <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="hips" id="hips" value="<?php echo $hips; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Hips is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="waist">Waist <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="waist" id="waist" value="<?php echo $waist; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="chest">Chest <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="chest" id="chest" value="<?php echo $chest; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Chest is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="calves">Calves <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="calves" id="calves" value="<?php echo $calves; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="handed">Right/Left Handed <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="handed" id="handed" value="<?php echo $handed; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Right/Left is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="posture">Posture<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="posture" id="posture" value="<?php echo $posture; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Posture is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="body">Body Type <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="body" id="body" value="<?php echo $body; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Body is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="parent">Parent Body Type<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="parent" id="parent" value="<?php echo $parent; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Parent Body Type is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for=" loss">Weight Loss Desired <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="loss" id="loss" value="<?php echo $loss; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Weight Loss is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="problem">Problem Areas<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="problem" id="problem" value="<?php echo $problem; ?>"  required>
                                        <div class="invalid-feedback">
                                            Valid Problem Areas is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="rockport">Rockport 1-Mile Walking Test <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="rockport" id="rockport" value="<?php echo $rockport; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Rockport is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="step">3-Minute Step Test<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="step" id="step" value="<?php echo $step; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="resting">Resting Heart Rate<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="resting" id="resting" value="<?php echo $resting; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="cardio">Cardio.-Resp. Fitness Desired<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="cardio" id="cardio" value="<?php echo $cardio; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="strength">Strength/Endurance Desired<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="strength" id="strength" value="<?php echo $strength; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="flexibility">Flexibility Desired<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="flexibility" id="flexibility" value="<?php echo $flexibility; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="devoted">Time Devoted to Exercise<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="devoted" id="devoted" value="<?php echo $devoted; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="current">Current Caloric Intake<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="current" id="current" value="<?php echo $current; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="label-input" for="energy">Total Energy Required to Maintain Weight<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="energy" id="energy" value="<?php echo $energy; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid fill is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-3 mb-4">
                                    <button class="btn btn-blue btn-sm m-auto" name="tfa_update" type="submit">Submit</button>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab-pane" id="tab_default_4">
	<div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 both-space">
                <h3 class="text-center mt-5 mb-4">PERSONAL TRAINING CONTRACT / AGREEMENT</h3>
                <p class=" mt-3 mb-4">Congratulations on your decision to improve your health by participating in a professional exercise program!</p>
                <p class="">With the help of our Fitness trainer, you greatly improve your ability to accomplish your training goals faster, safer, and with maximum benefits. The education you will learn during these training sessions can be used for a lifetime.</p>
                <p>In order to maximize progress, it will be necessary for you to follow program guidelines during supervised and, if applicable, unsupervised training days. Remember, exercise and healthy eating are EQUALLY important!</p>
                <p>It is recommended that all program participants work with given Fitness Trainer or personal trainer during the week at given time. However, due to scheduling conflicts and financial considerations, a combination of supervised and unsupervised
                    workouts is possible.</p>
                <h5 class="pt-3 mb-3">TRAINING TERMS & CONDITIONS</h5>
                <ol>
                    <li><b>1.</b> Kanvan Fitness Trainer or Personal training sessions that are not rescheduled or cancelled 24 hours in advance will result in forfeiture of the session and a loss of the financial investment at the rate of one session.</li>
                    <li><b>2.</b> Clients arriving late will receive the remaining scheduled session time, unless other arrangements have been previously made with the trainer.</li>
                    <li><b>3.</b> No personal & group training refunds will be issued for any reason, including but not limited to relocation, illness, and unused sessions.
                    </li>
                </ol>
                <p></p>
                <p></p>
                <div class=" mt-5 mb-5 border-0 card-opacity  ">
                    <div class="card-body rounded-sm">
                        <div class="text-box">
                        <?php echo form_open('pages/profile',array('class' => 'needs-validation','method' => 'post','novalidate'=>'novalidate'));  ?>
                        <?php echo validation_errors();?>
                                <h3 class="text-center mt-3 mb-4">Description of program:</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="investment">Total investment <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="number" name="investment" id="investment" value="<?php echo $investment; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Total Investment is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="method">Method of payment <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="method" id="method" value="<?php echo $method; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Payment method is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="print1">Print Name <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="print1" id="print1" value="<?php echo $print1 ; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Print Name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="sign1">Sign Name <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="sign1" id="sign1" value="<?php echo $sign1 ; ?>" required>
                                        <div class="invalid-feedback">
                                            Valid Sign Name is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-5 mb-3">
                                    <button class="btn btn-blue btn-sm m-auto" name="ptc_update" type="submit">Submit</button>
                                </div>
                                <?php echo form_close(); ?>
                            <h6 class="text-center pt-4 pb-4"> WE ARE EXCITED TO BEGIN WORKING WITH YOU!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab-pane" id="tab_default_5">
	<div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 both-space mt-4">
                    <h3 class="text-center mt-3 mb-5">LET’S BUILD AN AMAZING FITNESS COMMUNITY: PLUS-TWO</h3>
                    <p>We want to build an awesome fitness community here, so we’re asking for your input. Who are your “Plus-­Two” friends, family, co-­workers, or neighbors who could benefit from personal training?</p>
                    <p>Your two referrals (a.k.a. your “Plus-­Two”) will each receive a FREE transformation coaching session for 3 days where Kanvan Sports will help them outline their goals and a path to get there.</p>
                    <p>So, who comes to mind when you think of your Plus‐Two?</p>
                    <div class=" mt-5 mb-5 border-0 card-opacity  ">
                        <div class="card-body rounded-sm">
                            <div class="text-box">
                                <?php echo form_open('pages/profile',array('class' => 'needs-validation','method' => 'post','novalidate'=>'novalidate'));  ?>
                                <?php echo validation_errors();?>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="label-input" for="name1">YOUR NAME:<span class="text-danger font-weight-medium">*</span></label>
                                            <input class="form-control" type="text" name="name1" id="name1" value="<?php echo $name1;?>" required>
                                            <div class="invalid-feedback">
                                                Valid Your Name is required.
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

                            <div class="d-flex justify-content-center mt-5 mb-3">
                                <button class="btn btn-blue btn-sm m-auto" name="community_update" type="submit">Submit</button>
                            </div>
                            <?php echo form_close(); ?>
                            <h6 class="text-center pt-4 pb-1"> THANKS FOR HELPING SPREAD THE GIFT OF IMPROVED HEALTH AND FITNESS!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab-pane" id="tab_default_6">
	<div class="container mt-5 mb-5">
    <div class="col-md-12 both-space">
                <h4 class="text-center">ASSUMPTION OF RISK,WAIVER AND RELEASE OF LIABILITY AND INDEMNITY AGREEMENT</h4><br/><br/>
                <h5>DECLARATIONS:</h5>
                <p>This Agreement is entered into between Kanvan Sports (“FitnessTrainer”) and the undersigned (“Client”). The provision of personal training services by Trainer to Client, and Client’s use of any premises, facilities or equipment are
                    contingent upon this Agreement.</p>
                <p>We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship
                    an order.</p>
                <h5>ASSUMPTION OF RISK:</h5>
                <p> You agree that if you engage in any physical exercise or activity, including personal training, or enter our premises or use any facility or equipment on our premises for any purpose, you do so at your own
                    risk and assume the risk of any and all injury and/or damage you may suffer, whether while engaging in physical exercise or not. This includes injury or damage sustained while and/or resulting from using any premises or facility,
                    or using any equipment, whether provided to you by Trainer or otherwise, including injuries or damages arising out of the negligence of Trainer, whether active or passive, or any of Trainer’s affiliates, employees, agents, representatives,
                    successors, and assigns.</p>
            <p>Your assumption of risk includes, but is not limited to, your use of any exercise equipment (mechanical or otherwise), sports fields, courts, or other areas, locker rooms, sidewalks, parking lots, stairs, pools, whirlpools, saunas, steam
                rooms, lobby or other general areas of any facilities, or any equipment.</p>

            <div>
                <p>You assume the risk of your participation in any activity, class, program, instruction, or event, including but not limited to weightlifting, walking, jogging, running, aerobic activities, aquatic activities, tennis, basketball, volleyball,
                    racquetball, or any other sporting or recreational endeavor.</p>
                <p>You agree that you are voluntarily participating in the aforementioned activities and assume all risk of injury, illness, damage, or loss to you or your property that might result, including, without limitation, any loss or theft of
                    any personal property, whether arising out of the negligence of Trainer or otherwise.</p>
            </div>
            <h5>RELEASE:</h5>
            <p>You agree on behalf of yourself (and all your personal representatives, heirs, executors, administrators, agents, and assigns) to release and discharge Trainer (and Trainer’s affiliates, related entities, employees, agents, representatives,
                successors, and assigns) from any and all claims or causes of action (known or unknown) arising out of the negligence of Trainer, whether active or passive, or any of Trainer’s affiliates, employees, agents, representatives, successors,
                and assigns.</p>
            <p>This waiver and release of liability includes, without limitation, injuries which may occur as a result of (a) your use of any exercise equipment or facilities which may malfunction or break, (b) improper maintenance of any exercise equipmentd
            </p>
            <h5>INDEMNIFICATION:</h5>
            <p>By execution of this agreement, you hereby agree to indemnify and hold harmless Trainer from any loss, liability, damage, or cost Trainer may incur due to the provision of personal training by Trainer to you.

            </p>
            <h5>ACKNOWLEDGMENTS:</h5>
            <p>You expressly agree that the foregoing release, waiver, assumption of risk and indemnity agreement is intended to be as broad and inclusive as permitted by the law in the State of California and that if any portion thereof is held invalid,
                it is agreed that the balance shall, notwithstanding, continue in full legal force and effect.</p>

        <p>You acknowledge that Trainer offers a service to his/her clients encompassing the entire recreational and/or fitness spectrum. Trainer is not in the business of selling weightlifting equipment, exercise equipment, or other such products to
            the public, and the use of such items is incidental to the service provided by Trainer.</p>
        <p>You acknowledge and agree that Trainer does not place such items into the stream of commerce. This release is not intended as an attempted release of claims of gross negligence or intentional acts. You acknowledge that you have carefully read
            this waiver and release and fully understand that it is a release of liability, express assumption of risk and indemnity agreement.

        </p>
        <p>You are aware and agree that by executing this waiver and release, you are giving up your right to bring a legal action or assert a claim against trainer for trainer’s negligence, or for any defective product used while receiving personal
            training from trainer. You have read and voluntarily signed the waiver and release and further agree that no oral representations, statements, or inducement apart from the foregoing written agreement have been made.</p>


        <?php echo form_open('pages/profile',array('class' => 'needs-validation','method' => 'post','novalidate'=>'novalidate'));  ?>
        <?php echo validation_errors();?>
        <div class="mt-5 mb-3">
        <div class='row'>
            <div class="col-lg-4 ">
                <label for="print2">Print Name <span class="text-danger font-weight-medium">*</span></label>
                <input type="text" id="print2" name="print2" value="<?php echo $print2;?>"><br>
                <div class="invalid-feedback">
                    Valid Print Name is required.
                </div>
            </div>
            <div class="col-lg-4">
                <label for="sign2">Sign Name <span class="text-danger font-weight-medium">*</span></label>
                <input type="text" id="sign2" name="sign2" value="<?php echo $sign2;?>"><br>
                <div class="invalid-feedback">
                    Valid Sign Name is required.
                </div>
            </div>
            <div class="col-lg-4">
                <label for="name2">Full Name <span class="text-danger font-weight-medium">*</span></label>
                <input type="text" id="name2" name="name2" value="<?php echo $name2;?>"><br>
                <div class="invalid-feedback">
                    Valid Full Name is required.
                </div>
            </div>
        </div>
        </div>
            <div class="d-flex justify-content-center mt-5 mb-3">
                <button class="btn btn-blue btn-sm m-auto" name="agreement_update" type="submit">Submit</button>
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
</div>

<script type="text/javascript">
      $("body").on("click",".btn-image-upload",function(e){
       $(this).parents("form").ajaxForm(options);
      });


     var options = { 
       complete: function(response) 
       {
         if($.isEmptyObject(response.responseJSON.error)){
            alert('Image Upload Successfully.');
            $(".preview").css("display","block");
            $(".preview").find("img").attr("src",".main/images/"+response.responseJSON.success);
         }else{
            alert(response.responseJSON.error);
         }
       }
     };

   </script>