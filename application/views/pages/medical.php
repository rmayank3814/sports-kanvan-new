<!-- <div style="margin-top:100px"> -->
<div class="global-container">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
         <h3 class="heading-title text-center mt-5 mb-5">MEDICAL DETAILS</h3>
         <?php echo form_open('pages/medical',array('method' => 'post','novalidate'=>'novalidate')); ?>
         <?php //echo validation_errors(); ?>
        <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>1) Are you currently under a doctor’s care?<span class="error-medical"> *</span> </label>
                    <div class="optional-radio-button">
                    <label class="radio-inline">
                        <input type="radio" id="doctor_yes" name="option1" value="yes">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" id="doctor_no" name="option1" value="no"> No
                    </label>
                    <?php echo form_error('option1', '<div class="error ml-2">', '</div>'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>2) When was the last time you had a physical examination? <span class="error-medical"> *</span></label>
                    <input type="date" name="physical_examination" class="form-control" />
                    <?php echo form_error('physical_examination', '<div class="error">', '</div>'); ?>
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
                            <input type="radio" name="option4" id="regular_yes" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option4" id="regular_no" value="no"> No
                        </label>
                        <?php echo form_error('option4', '<div class="error ml-2">', '</div>'); ?>
                   </div>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="form-group">
                    <label>4) Do you smoke? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option6" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option6" value="no"> No
                        </label>
                        <?php echo form_error('option6', '<div class="error ml-2">', '</div>'); ?>
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
                            <input type="radio" name="option5" id="hospitalized_yes" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option5" id="hospitalized_no" value="no"> No
                        </label>
                        <?php echo form_error('option5', '<div class="error ml-2">', '</div>'); ?>
                  </div>
                </div>
            </div>
            <div class="col-lg-6">
                    <div class="form-group">
                       <label>6) Muscle pain or an injury (explain on back of Form)? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option31" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option31" value="no"> No
                            </label>
                            <?php echo form_error('option31', '<div class="error ml-2">', '</div>'); ?>
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
                            <input type="radio" name="option2" id="stress_yes" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option2" id="stress_no" value="no"> No
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option2" id="stress_dont_know" value="don't know"> Don’t Know
                        </label>
                        <?php echo form_error('option2', '<div class="error ml-2">', '</div>'); ?>
                    </div>
                </div>
             </div>
            <div class="col-lg-6">
            <div class="form-group">
                <label>8) Are you pregnant? <span class="error-medical"> *</span></label>
                <div class="optional-radio-button">
                    <label class="radio-inline">
                        <input type="radio" name="option7" value="yes">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="option7" value="no"> No
                    </label>
                    <?php echo form_error('option7', '<div class="error ml-2">', '</div>'); ?>
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
                            <input type="radio" name="option3" value="normal">Normal
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option3" value="abnormal"> Abnormal
                        </label>
                        <?php echo form_error('option3', '<div class="error ml-2">', '</div>'); ?>
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
                            <input type="radio" name="option8" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option8" value="no"> No
                        </label>
                        <?php echo form_error('option8', '<div class="error ml-2">', '</div>'); ?>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>10) Is your stress level high? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option9" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option9" value="no"> No
                        </label>
                        <?php echo form_error('option9', '<div class="error ml-2">', '</div>'); ?>
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
                            <input type="radio" name="option10" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option10" value="no"> No
                        </label>
                        <?php echo form_error('option10', '<div class="error ml-2">', '</div>'); ?>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>12) High blood pressure? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option11" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option11" value="no"> No
                        </label>
                        <?php echo form_error('option11', '<div class="error ml-2">', '</div>'); ?>
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
                            <input type="radio" name="option12" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option12" value="no"> No
                        </label>
                        <?php echo form_error('option12', '<div class="error ml-2">', '</div>'); ?>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>14) Diabetes? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option13" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option13" value="no"> No
                        </label>
                        <?php echo form_error('option13', '<div class="error ml-2">', '</div>'); ?>
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
                            <input type="radio" name="option14" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option14" value="no"> No
                        </label>
                        <?php echo form_error('option14', '<div class="error ml-2">', '</div>'); ?>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>16) A heart attack? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option17" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option17" value="no"> No
                        </label>
                        <?php echo form_error('option17', '<div class="error ml-2">', '</div>'); ?>
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
                            <input type="radio" name="option18" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option18" value="no"> No
                            </label>
                            <?php echo form_error('option18', '<div class="error ml-2">', '</div>'); ?>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>18) Known heart disease? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option15" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option15" value="no"> No
                            </label>
                            <?php echo form_error('option15', '<div class="error ml-2">', '</div>'); ?>
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
                           <input type="radio" name="option16" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option16" value="no"> No
                       </label>
                       <?php echo form_error('option16', '<div class="error ml-2">', '</div>'); ?>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>20) A heart murmur? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option19" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option19" value="no"> No
                            </label>
                            <?php echo form_error('option19', '<div class="error ml-2">', '</div>'); ?>
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
                           <input type="radio" name="option20" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option20" value="no"> No
                       </label>
                       <?php echo form_error('option20', '<div class="error ml-2">', '</div>'); ?>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>22) Irregular heart beat or palpitations? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option21" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option21" value="no"> No
                            </label>
                            <?php echo form_error('option21', '<div class="error ml-2">', '</div>'); ?>
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
                           <input type="radio" name="option22" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option22" value="no"> No
                       </label>
                       <?php echo form_error('option22', '<div class="error ml-2">', '</div>'); ?>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>24) Unusual shortness of breath? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option23" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option23" value="no"> No
                            </label>
                            <?php echo form_error('option23', '<div class="error ml-2">', '</div>'); ?>
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
                           <input type="radio" name="option24" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option24" value="no"> No
                       </label>
                       <?php echo form_error('option24', '<div class="error ml-2">', '</div>'); ?>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>26) Emphysema? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option25" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option25" value="no"> No
                            </label>
                            <?php echo form_error('option25', '<div class="error ml-2">', '</div>'); ?>
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
                           <input type="radio" name="option26" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option26" value="no"> No
                       </label>
                       <?php echo form_error('option26', '<div class="error ml-2">', '</div>'); ?>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>28) Epilepsy? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option27" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option27" value="no"> No
                            </label>
                            <?php echo form_error('option27', '<div class="error ml-2">', '</div>'); ?>
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
                           <input type="radio" name="option28" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option28" value="no"> No
                       </label>
                       <?php echo form_error('option28', '<div class="error ml-2">', '</div>'); ?>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>30) Back pain: upper, middle, lower? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option29" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option29" value="no"> No
                            </label>
                            <?php echo form_error('option29', '<div class="error ml-2">', '</div>'); ?>
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
                           <input type="radio" name="option30" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option30" value="no"> No
                       </label>
                       <?php echo form_error('option30', '<div class="error ml-2">', '</div>'); ?>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>32) Sign Name (Type your name) *</label>
                        <input type="text" name="sign" id="sign" value="<?php //echo $sign ?>" class="form-control" />
                        <?php echo form_error('sign', '<div class="error ml-1">', '</div>'); ?>
                    </div>
                </div>
            </div>    
            <br />
            <div class="d-flex justify-content-center mt-4 mb-5">
                <button class="btn btn-blue btn-sm m-auto" name="medical" title="submit" type="submit">Submit</button>
            </div>
            <br />
        </div>
        </form>
    </div>
</div>
</div>
</div>
<!-- </div> -->
           
