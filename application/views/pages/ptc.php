<div class="image-about-banner" style="margin-top:120px">
<div class="" id="section-quote">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 both-space">
                <h3 class="text-center mt-5 mb-4">PERSONAL TRAINING CONTRACT / AGREEMENT</h3>
                <p class="text-center mt-3 mb-4">Congratulations on your decision to improve your health by participating in a professional exercise program!</p>
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
                    <li></li>
                    <li></li>
                </ol>
                <p></p>
                <p></p>
                <div class="card mt-5 mb-5 border-0 card-opacity  ">
                    <div class="card-body rounded-sm">
                        <div class="text-box">
                        <?php echo form_open('pages/ptc',['class' => 'needs-validation'],['method' => 'post']);  ?>
                                <h3 class="text-center mt-3 mb-4">Description of program:</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="investment">Total investment <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="number" name="investment" id="investment" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Valid dob is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="method">Method of payment <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="method" id="method" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Valid height is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="print">Print Name <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="print" id="print" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Valid Print Name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="sign">Sign Name <span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="text" name="sign" id="sign" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Valid Sign Name is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="label-input" for="date">Date<span class="text-danger font-weight-medium">*</span></label>
                                        <input class="form-control" type="date" name="date" id="date" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Valid date is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-3 mb-3">
                                    <button class="btn btn-blue btn-sm m-auto" name="ptc_button" type="submit">Submit</button>
                                </div>
                            </form>
                            <h6 class="text-center pt-4 pb-4"> WE ARE EXCITED TO BEGIN WORKING WITH YOU!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>