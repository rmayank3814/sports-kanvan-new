
<?php

$appId = '414927f63dbde5ac6b273e26929414';
$orderId = '12345';
$orderAmount = '1';
$orderCurrency = 'INR';
$customerName = 'Aakash';
$customerPhone = '9643293056';
$customerEmail = "aakash@gmail.com";
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
"returnUrl" => $returnUrl,
"notifyUrl" => $notifyUrl,
);

$signature = getSignature($postData);

function getSignature($postData){
 ksort($postData);
 $signatureData = "";
 foreach ($postData as $key => $value){
      $signatureData .= $key.$value;
    }
 $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
 $signature = base64_encode($signature);
 return $signature;
}


function return_url(){
    echo "return_url";
    print_r($_GET);
       
    print_r($_POST);
}

function notify_url(){
    echo "notify_url";
    print_r($_GET);
       
    print_r($_POST);
}
?>

<form id="redirectForm" method="post" action="https://test.cashfree.com/billpay/checkout/post/submit">
    <input type="hidden" name="appId" value="<?=$appId?>"/>
    <input type="hidden" name="orderId" value="<?=$orderId?>"/>
    <input type="hidden" name="orderAmount" value="<?=$orderAmount?>"/>
    <input type="hidden" name="orderCurrency" value="<?=$orderCurrency?>"/>
    <input type="hidden" name="orderNote" value="<?=$orderNote?>"/>
    <input type="hidden" name="customerName" value="<?=$customerName?>"/>
    <input type="hidden" name="customerEmail" value="<?=$customerEmail?>"/>
    <input type="hidden" name="customerPhone" value="<?=$customerPhone?>"/>
    <input type="hidden" name="returnUrl" value="<?=$returnUrl?>"/>
    <input type="hidden" name="notifyUrl" value="<?=$notifyUrl?>"/>
    <input type="hidden" name="signature" value="<?=$signature?>"/>
  </form>
  <script>document.getElementById("redirectForm").submit();</script>
</div>
