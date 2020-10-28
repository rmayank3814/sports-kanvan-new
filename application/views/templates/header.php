<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kanvan Sports </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url();?>main/images/sports-kanvan-logo.png" type="image/png" sizes="159x73">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo base_url();?>main/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/others/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/others/css/owl.theme.default.min.css">
    <!--Font family-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-family/font-family.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/fonts/Font-Awesome/css/all.min.css">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
     <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> 
    <!-- <script src="<?php echo base_url();?>others/js/jquery-validation.js "></script>
    <script src="<?php echo base_url();?>others/js/jquery-3.1.1.js "></script> -->
</head>
    <body>
        <div class="hero-anime">
            <div class="navigation-wrap start-header start-style ">
                <div class="container">
                    <div class="">
                        <div class="col">
                            <nav class="navbar navbar-expand-md navbar-light">
                                <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>main/images/sports-kanvan-logo.png" alt="kanvan logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto px-3 py-4 py-md-0">
                                    <?php if(!isset($_SESSION) || (empty($_SESSION['id']))) { ?>
                                       <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>">Home</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/about">About us</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/contact">Contact us</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/registration">Register</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/login">Login</a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>">Home</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/medical">Medical</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/ptc">PTC</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/community">Community</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/agreement">Agreement</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/tfa">TFA</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/change_password">Change Password</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/logout">Logout</a>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            