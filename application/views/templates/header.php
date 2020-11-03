<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kanvan Sports </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url();?>main/images/logo/kanvan-sports-logo.png" type="image/png" sizes="159x73">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">

    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo base_url();?>main/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/others/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/others/css/owl.theme.default.min.css">
    
    <!--Font family-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-family/font-family.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/fonts/Font-Awesome/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
     <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> 
     
  
</head>
    <body>
        <div class="hero-anime">
            <div class="navigation-wrap start-header start-style ">
                <div class="container">
                    <div class="">
                        <div class="col">
                            <nav class="navbar navbar-expand-md navbar-light">
                                <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>main/images/logo/kanvan-sports-logo.png" alt="kanvan logo"><span class="logo-title" title="Kanvan sports">Kanvan Sports</span></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto px-3 py-4 py-md-0">
                                    <?php if(!isset($_SESSION) || (empty($_SESSION['id']))) { ?>
                                       <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>">Home</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/about">About Us</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/contact">Contact Us</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/Blog">Blog</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/registration">Sign Up</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/login">Sign In</a>
                                        </li>
                                 
                                    <?php } else { ?>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link"  alt="kanvan logo" href="<?php echo base_url();?>">Home</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="<?php echo base_url();?>index.php/pages/forms">Sport Forms</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >My Account</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo base_url();?>index.php/pages/profile"> View Profile</a>
                                                <a class="dropdown-item" href="<?php echo base_url();?>index.php/pages/change_password"> Change Password</a>
                                                <a class="dropdown-item" href="<?php echo base_url();?>index.php/pages/logout">Logout</a>
                                            </div>
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

<div class="top_space">
<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>
<?php } ?>
<?php if($this->session->flashdata('failed')){ ?>
<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>
<?php } ?>
</div>