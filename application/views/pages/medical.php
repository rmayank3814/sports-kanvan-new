<style>
.hidden{
    display:none;
}

</style>


<div class="image-about-banner" style="margin-top:100px">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
        <form>
         <div class="panel panel-default">
         <h3 class="text-center mt-3 mb-4">MEDICAL DETAILS</h3>
         <?php echo form_open('pages/medical' ,array('id'=> 'medical_form','method' =>'post', 'novalidate' =>'novalidate')); ?>
        <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Are you currently under a doctor’s care? </label>
                    <div class="optional-radio-button">
                    <label class="radio-inline">
                        <input type="radio" id="doctor_yes" name="option1" value="yes">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" id="doctor_no" name="option1" value="no" checked> No
                    </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="physical_examination">When was the last time you had a physical examination? <span class="error-medical"> *</span></label>
                    <input type="text" name="physical_examination" id="physical_examination" class="form-control" />
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
                    <label>Do you take any medications on a regular basis? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option4" id="regular_yes" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option4" id="regular_no" value="no" checked> No
                        </label>
                   </div>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="form-group">
                    <label>Do you smoke? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option6" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option6" value="no" checked> No
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
                    <label>Have you been recently hospitalized?<span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option5" id="hospitalized_yes" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option5" id="hospitalized_no" value="no" checked> No
                        </label>
                  </div>
                </div>
            </div>
            <div class="col-lg-6">
                    <div class="form-group">
                       <label>Muscle pain or an injury (explain on back of Form)? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option31" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option31" value="no"  checked> No
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
                    <label>Have you ever had an exercise stress test <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option2" id="stress_yes" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option2" id="stress_no" value="no" checked> No
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option2" id="stress_dont_know" value="don't know"> Don’t Know
                        </label>
                    </div>
                </div>
             </div>
            <div class="col-lg-6">
            <div class="form-group">
                <label>Are you pregnant? <span class="error-medical"> *</span></label>
                <div class="optional-radio-button">
                    <label class="radio-inline">
                        <input type="radio" name="option7" value="yes">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="option7" value="no" checked> No
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
                            <input type="radio" name="option3" value="normal">Normal
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option3" value="abnormal"> Abnormal
                        </label>
                  </div>
                 </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                    <label>Do you drink alcohol more than three times/week? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option8" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option8" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Is your stress level high? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option9" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option9" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                    <label>Are you moderately active on most days of the week? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option10" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option10" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>High blood pressure? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option11" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option11" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                    <label>High cholesterol? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option12" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option12" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Diabetes? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option13" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option13" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                    <label>Have parents or siblings who, prior to age 55 had <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option14" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option14" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>A heart attack? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option15" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option15" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                    <label>Have parents or siblings who, prior to age 55 had *</label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option16" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option16" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>A heart attack? <span class="error-medical"> *</span></label>
                    <div class="optional-radio-button">
                        <label class="radio-inline">
                            <input type="radio" name="option17" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="option17" value="no" checked> No
                        </label>
                    </div>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                      <label>A stroke? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option18" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option1" value="no"  checked> No
                            </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>Known heart disease? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option17" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option17" value="no"  checked> No
                            </label>
                        </div>  
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                    <label>Rheumatic heart disease? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option18" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option18" value="no"  checked> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>A heart murmur? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option19" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option19" value="no"  checked> No
                            </label>
                        </div>  
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                    <label>Chest pain with exertion? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option20" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option20" value="no"  checked> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>Irregular heart beat or palpitations? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option21" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option21" value="no"  checked> No
                            </label>
                        </div>  
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                    <label>Lightheadedness or do you faint? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option22" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option22" value="no"  checked> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>Unusual shortness of breath? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option23" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option23" value="no"  checked> No
                            </label>
                        </div>  
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                    <label>Cramping pains in legs or feet? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option24" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option24" value="no"  checked> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>Emphysema? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option25" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option25" value="no"  checked> No
                            </label>
                        </div>  
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                    <label>Other metabolic disorders (thyroid, kidney, etc.)? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option26" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option26" value="no"  checked> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>Epilepsy? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option27" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option27" value="no"  checked> No
                            </label>
                        </div>  
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                    <label>Asthma? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option28" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option28" value="no"  checked> No
                       </label>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                       <label>Back pain: upper, middle, lower? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                            <label class="radio-inline">
                            <input type="radio" name="option29" value="yes">Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="option29" value="no"  checked> No
                            </label>
                        </div>  
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                    <label>Other joint pain (explain on back of form)? <span class="error-medical"> *</span></label>
                        <div class="optional-radio-button">
                        <label class="radio-inline">
                           <input type="radio" name="option30" value="yes">Yes
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="option30" value="no"  checked> No
                       </label>
                        </div>  
                    </div>
                </div>
               
        </div>
         
        <div class="row">
            <div class="col-lg-6">
            <div class="form-group">
                <label>Sign Name (Type your name) *</label>
                <input type="text" name="sign" id="sign" value="<?php echo $sign ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label>Date *</label>
                <input type="date" name="medical_date" id="medical_date" value="<?php echo $date ?>" class="form-control" />
                <label>Sign Name (Type your name) <span class="error-medical"> *</span></label>
                <input type="text" name="sign" id="sign" class="form-control" />
            </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                <label>Date <span class="error-medical"> *</span></label>
                <input type="date" name="medical_date" id="medical_date" class="form-control" />
            </div>
                </div>
        </div>
            </div>
            <br />
            <div class="d-flex justify-content-center">
                <button class="btn btn-blue btn-sm m-auto" name="medical" type="submit">Submit</button>
            </div>
            <br />
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
<script src= "https://code.jquery.com/jquery-1.12.4.min.js"> </script>
<script type="text/javascript"> 
    $(document).ready(function() { 
        $('#doctor_yes').click(function() { 
            $('#explain').show(); 
        }); 
        $('#doctor_no').click(function() { 
            $('#explain').hide(); 
        });
        $('#stress_yes').click(function() { 
            $('#result').show(); 
        }); 
        $('#stress_no').click(function() { 
            $('#result').hide(); 
        });
        $('#stress_dont_know').click(function() { 
            $('#result').hide(); 
        }); 
        $('#regular_yes').click(function() { 
            $('#medication').show(); 
        }); 
        $('#regular_no').click(function() { 
            $('#medication').hide(); 
        }); 
        $('#hospitalized_yes').click(function() { 
            $('#relation').show(); 
        }); 
        $('#hospitalized_no').click(function() { 
            $('#relation').hide(); 
        }); 
    });

</script> 
