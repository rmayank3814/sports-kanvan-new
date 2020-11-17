<div style="margin-top:100px">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 both-space">
            <div class="card mt-3 mb-5 border-0 card-opacity shadow ">
                <div class="card-body rounded-sm">
                    <div class="text-box">
                    <h3 class="heading-title text-center mt-4 mb-5">VERIFY YOUR DETAILS</h3>
                    <?=form_open('payment/verify_details',array('method'=>'post','novalidate'=>"novalidate")); ?>

                            <div class="col-md-6 mb-3">
                                First Name: <?php echo $user_data[0]['fname']?>  <br/>
                                Last Name: <?php echo $user_data[0]['lname'] ?> <br/>
                                Email Id: <?php echo $user_data[0]['email'] ?>   <br/>
                                Mobile No: <?php echo $user_data[0]['mobile'] ?>   <br/>
                                Gender: <?php echo $user_data[0]['gender'] ?>     <br/>
                                DOB: <?php echo $user_data[0]['dob'] ?>      <br/>
                                Shift: <?php echo $user_data[0]['shift'] ?>       <br/>
                                Emergency: <?php echo $user_data[0]['emergency'] ?>    <br/>
                                Address-1: <?php echo $user_data[0]['address1'] ?> <br/>
                                Address-2: <?php echo $user_data[0]['address2'] ?>        <br/>
                                Plan: <?php echo $user_data[0]['plan'] ?>    <br/>
                                Package: <?php echo $user_data[0]['package'] ?><br/>
                            </div>
    
                    <div class="d-flex justify-content-center mt-3 mb-4">
                        <a href="<?=base_url('pages/registration')?>">Back</a>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-4">
                        <button type="submit" class="btn btn-blue btn-sm m-auto" title="pay" name="pay_button">Pay</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
