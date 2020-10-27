<style>
.hidden{
    display:none;
}
</style>


<div class="image-about-banner">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
         <div class="panel panel-default">
         <h3 class="text-center mt-3 mb-4">MEDICAL DETAILS</h3>
         <?php echo form_open('pages/medical'); ?>
        <div class="panel-body">
            <div class="form-group">
                <label>Are you currently under a doctor’s care? <label>
                <label class="radio-inline">
                    <input type="radio" id="doctor_yes" name="option1" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" id="doctor_no" name="option1" value="no" checked> No
                </label>
            </div>
            <div class="form-group hidden"  id="explain">
                <label>If yes, explain *</label>
                <input type="text" name="explain" class="form-control"/>
            </div>
            <div class="form-group">
                <label>When was the last time you had a physical examination?  *</label>
                <input type="text" name="physical_examination" class="form-control" />
            </div>
            <div class="form-group" >
                <label>Have you ever had an exercise stress test: *<label>
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
            <div class="form-group hidden" id="result">
                <label>If yes, were the results: *<label>
                <label class="radio-inline">
                    <input type="radio" name="option3" value="normal">Normal
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option3" value="abnormal"> Abnormal
                </label>
            </div>
            <div class="form-group">
                <label>Do you take any medications on a regular basis? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option4" id="regular_yes" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option4" id="regular_no" value="no" checked> No
                </label>
            </div>
            <div class="form-group hidden" id="medication">
                <label>If yes, please list medications and reasons for taking *</label>
                <input type="text" name="relationship" class="form-control" />
            </div>
            <div class="form-group">
                <label>Have you been recently hospitalized? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option5" id="hospitalized_yes" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option5" id="hospitalized_no" value="no" checked> No
                </label>
            </div>
            <div class="form-group hidden" id="relation">
                <label>If yes, explain: *</label>
                <input type="text" name="relationship" class="form-control" />
            </div>
            <div class="form-group">
                <label>Do you smoke? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option6" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option6" value="no" checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Are you pregnant? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option7" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option7" value="no" checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Do you drink alcohol more than three times/week? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option8" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option8" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Is your stress level high? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option9" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option9" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Are you moderately active on most days of the week? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option10" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option10" value="no"> No
                </label>
            </div>
            <!-- <h4>Do you have: </h4> -->
            <div class="form-group">
                <label>High blood pressure? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option11" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option11" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>High cholesterol? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option12" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option12" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Diabetes? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option13" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option13" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Have parents or siblings who, prior to age 55 had *<label>
                <label class="radio-inline">
                    <input type="radio" name="option14" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option14" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>A heart attack? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option15" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option15" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>A stroke? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option16" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option16" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Known heart disease? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option17" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option17" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Rheumatic heart disease? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option18" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option18" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>A heart murmur? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option19" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option19" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Chest pain with exertion? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option20" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option20" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Irregular heart beat or palpitations? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option21" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option21" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Lightheadedness or do you faint? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option22" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option22" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Unusual shortness of breath? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option23" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option23" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Cramping pains in legs or feet? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option24" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option24" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Emphysema? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option25" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option25" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Other metabolic disorders (thyroid, kidney, etc.)? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option26" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option26" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Epilepsy? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option27" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option27" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Asthma? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option28" value="yes">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option28" value="no"  checked> No
                </label>
            </div>
            <div class="form-group">
                <label>Back pain: upper, middle, lower? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option29" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option29" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Other joint pain (explain on back of form)? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option30" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option30" value="no"> No
                </label>
            </div>
            <div class="form-group">
                <label>Muscle pain or an injury (explain on back of Form)? *<label>
                <label class="radio-inline">
                    <input type="radio" name="option31" value="yes" checked>Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="option31" value="no"> No
                </label>
            </div>

            <!-- <h5>To the best of my knowledge, the above information is true.</h5> -->

            <div class="form-group">
                <label>Sign Name (Type your name) *</label>
                <input type="text" name="sign" id="sign" class="form-control" />
            </div>
            <div class="form-group">
                <label>Date *</label>
                <input type="date" name="medical_date" id="medical_date" class="form-control" />
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
    });
    $(document).ready(function() { 
        $('#doctor_no').click(function() { 
            $('#explain').hide(); 
        }); 
    });
    
    $(document).ready(function() { 
        $('#stress_yes').click(function() { 
            $('#result').show(); 
        }); 
    });
    $(document).ready(function() { 
        $('#stress_no').click(function() { 
            $('#result').hide(); 
        }); 
    }); 
    $(document).ready(function() { 
        $('#stress_dont_know').click(function() { 
            $('#result').hide(); 
        }); 
    }); 

    $(document).ready(function() { 
        $('#regular_yes').click(function() { 
            $('#medication').show(); 
        }); 
    });
    $(document).ready(function() { 
        $('#regular_no').click(function() { 
            $('#medication').hide(); 
        }); 
    });

    $(document).ready(function() { 
        $('#hospitalized_yes').click(function() { 
            $('#relation').show(); 
        }); 
    });
    $(document).ready(function() { 
        $('#hospitalized_no').click(function() { 
            $('#relation').hide(); 
        }); 
    });

</script> 
