<div style="margin-top:100px">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 both-space">
            <div class="card mt-3 mb-5 border-0 card-opacity shadow ">
                <div class="card-body rounded-sm">
                    <div class="text-box">
                    <h3 class="heading-title text-center mt-4 mb-5">VERIFY YOUR DETAILS</h3>
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
                        <a href="<?=base_url('index.php/pages/registration')?>">Back</a>
                    </div>
                    <?=form_open('https://test.cashfree.com/billpay/checkout/post/submit',array('method'=>'post','novalidate'=>"novalidate")); ?>

                    <?php
                        $appId = '414927f63dbde5ac6b273e26929414';
                        $orderId = 123233;
                        $orderAmount = '1';
                        $orderCurrency = 'INR';
                        $customerName = $user_data[0]['fname'].''.$user_data[0]['lname'];
                        $customerPhone = $user_data[0]['mobile'];
                        $customerEmail = $user_data[0]['email'];
                        $orderNote = "test";
                        $secretKey = "1b2d5925293f713f0458ff9329d9745b0f4d9300";
                        $returnUrl = base_url('payment/cashfree/return_url');
                        $notifyUrl = base_url('payment/cashfree/notify_url');

                        $postData = array(
                            "appId" => $appId,
                            "orderId" => $orderId,
                            "orderAmount" => $orderAmount,
                            "orderCurrency" => $orderCurrency,
                            "orderNote" => $orderNote,
                            "customerName" => $customerName,
                            "customerPhone" => $customerPhone,
                            "customerEmail" => $customerEmail,
                            // "secretKey" => $secretKey,
                            "returnUrl" => $returnUrl,
                            "notifyUrl" => $notifyUrl,
                        );

                        $signature = getSignature($postData);

                        function getSignature($postData){
                        ksort($postData);
                        $signatureData = "";
                        $secretKey = "1b2d5925293f713f0458ff9329d9745b0f4d9300";
                        foreach ($postData as $key => $value){
                            $signatureData .= $key.$value;
                            }
                        $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
                        $signature = base64_encode($signature);
                        return $signature;
                        }

                        ?>
                        <input type="hidden" name="appId" value="<?=$appId?>"/>
                        <input type="hidden" name="orderId" value="<?=$orderId?>"/>
                        <input type="hidden" name="orderAmount" value="<?=$orderAmount?>"/>
                        <input type="hidden" name="orderCurrency" value="<?=$orderCurrency?>"/>
                        <input type="hidden" name="orderNote" value="<?=$orderNote?>"/>
                        <input type="hidden" name="customerName" value="<?=$customerName?>"/>
                        <input type="hidden" name="customerEmail" value="<?=$customerEmail?>"/>
                        <input type="hidden" name="customerPhone" value="<?=$customerPhone?>"/>
                        <input type="hidden" name="secretKey" value="<?=$secretKey?>"/>
                        <input type="hidden" name="returnUrl" value="<?=$returnUrl?>"/>
                        <input type="hidden" name="notifyUrl" value="<?=$notifyUrl?>"/>
                        <input type="hidden" name="signature" value="<?=$signature?>"/>                    

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
