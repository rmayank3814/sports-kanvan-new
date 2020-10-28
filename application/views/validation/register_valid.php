<?php

session_start();
$errorArray= [];
       
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST['email'];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$passconf = $_POST["passconf"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$shift = $_POST['shift'];
$emergency = $_POST["emergency"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];



//-------------- First name validation ---------------

if (isset($fname) && !empty($fname)) {
    if(!preg_match("/^[A-Za-z]+$/",$fname)){
        $errorArray['fname_error'] = "* Only alphabets are allowed!";
    }
} else {
    $errorArray['fname_error'] = "* First name is mandatory field.";
}

//-------------- Last name validation -----------------

if (isset($lname) && !empty($lname)) {
    if(!preg_match("/^[A-Za-z]+$/",$lname)){
        $errorArray['lname_error'] = "* Only alphabets are allowed!";
    }    
} else {
    $errorArray['lname_error'] = "* Last name is mandatory field.";
}

//----------------------- Email validation ----------------

if(isset($email) && !empty($email)){
    if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)){
        $errorArray['email_error'] = "* Enter the valid email id!";
    }
}else{
    $errorArray['email_error'] = "* Email is mandatory field.";
}

//--------------- Gender validation --------------------

if(isset($gender) && empty($gender)){
    $errorArray['gender_error'] = "* Gender is mandatory field.";
}

//--------------- Password Validayion --------------------

if(isset($password) && !empty($password)){
    if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/",$pwd)){
        $errorArray['pwd_error'] = "* Enter the strong password!";
    }
}else{
    $errorArray['pwd_error'] = "* Password is mandatory field.";
}

//-------------------- Confirm Password ---------------------

if(isset($passconf) && !empty($passconf)){
    if($cpwd != $pwd){
        $errorArray['cpwd_error'] = "* Enter the correct password!";
    }
}else{
    $errorArray['cpwd'] = "* Confirm Password is mandatory field.";
}

//------------------- Mobile number validation -------------------

if(isset($mobile) && !empty($mobile)){
    if(!preg_match("/^[0]?[6789]\d{9}$/",$mobile)){
        $errorArray['mobile_error'] = "* Enter the valid mobile number!";
    }
}else{
    $errorArray['mobile_error'] = "* Mobile number is mandatory field.";
}


?>