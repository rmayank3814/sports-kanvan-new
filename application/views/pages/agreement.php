<!-- <div style="margin-top:100px"> -->

    <div class="py-5 mt-3 global-container">
        <div class="container">
                <h4 class="heading-title text-center"><b>ASSUMPTION OF RISK,WAIVER AND RELEASE OF LIABILITY AND INDEMNITY AGREEMENT</b></h4><br/><br/>
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

        <?php echo form_open('pages/agreement',array('class' => 'needs-validation','method' => 'post','novalidate'=>'novalidate'));?>
        <div class="mt-5 mb-3">
        <div class='row'>
            <div class="col-lg-4 ">
                <?php echo form_error('print2', '<div class="error text-center pb-2">', '</div>'); ?>
                <label for="print2">Print Name <span class="text-danger font-weight-medium">*</span></label>
                <input type="text" id="print2" name="print2" value="<?php echo $print2 ;?>"><br>
            </div>
            <div class="col-lg-4">
                <?php echo form_error('sign2', '<div class="error text-center pb-2">', '</div>'); ?>
                <label for="sign2">Sign Name <span class="text-danger font-weight-medium">*</span></label>
                <input type="text" id="sign2" name="sign2" value="<?php echo $sign2 ;?>"><br>
            </div>
            <div class="col-lg-4">
                <?php echo form_error('name2', '<div class="error text-center pb-2">', '</div>'); ?>
                <label for="name2">Full Name <span class="text-danger font-weight-medium">*</span></label>
                <input type="text" id="name2" name="name2" value="<?php echo $name2 ;?>"><br>
            </div>
        </div>
        </div>
            <div class="d-flex justify-content-center mt-5 mb-3">
                <button class="btn btn-blue btn-sm m-auto" title="submit" name="agreement_button" type="submit">Submit</button>
            </div>
            
            <?php echo form_close(); ?>
        </div>
    </div>
<!-- </div> -->

