<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kanvan Sports</title>
    <meta charset="UTF-8">
    <meta name="description" content="Kanvan Sports Events incorporated with multi Sports players, Gamers, Sports activist, Fitness players, Finest Yoga teachers & all those who can contribute their time, talent, potential & effort in order to help all our Indian Corporate people to feel the pleasure & inner satisfaction just by taking out 1-2 hours on weekends to become a healthy child again & feel the same enthusiasm & energy which were lost somewhere due to daily hectic life">
    <meta name="keywords" content="Kanvan Sports Events incorporated with multi Sports players, Gamers, Sports activist, Fitness players, Finest Yoga teachers & all those who can contribute their time, talent, potential & effort in order to help all our Indian ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url();?>main/images/logo/kanvan-sports-logo.png" type="image/png" sizes="152x145">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
    <!--Custom css-->
    <link rel="stylesheet" href="<?php echo base_url();?>main/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/others/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/others/css/owl.theme.default.min.css">
    
    <!--Font family-->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-family/font-family.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/fonts/Font-Awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>main/others/css/Font-awesome.css">
</head>
    <body>
        <div class="hero-anime">
            <div class="navigation-wrap start-header start-style ">
                <div class="container">
                        <div class="col">
                            <nav class="navbar navbar-expand-md navbar-light">
                                <a class="navbar-brand"  href="<?php echo base_url();?>"><img src="<?php echo base_url();?>main/images/logo/kanvan-sports-logo-1.svg" alt="kanvan sports logo"><span class="logo-title" title="Kanvan sports">Kanvan Sports</span></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto px-3 py-4 py-md-0">
                                    <?php if(!isset($_SESSION) || (empty($_SESSION['id']))) { ?>
                                       <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" title="home" href="<?php echo base_url();?>">Home</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" title="blog" href="<?php echo base_url();?>index.php/pages/Blog">Blog</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" title="sign in" href="<?php echo base_url();?>index.php/pages/registration">Sign Up</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" title="sign in" href="<?php echo base_url();?>index.php/pages/login">Sign In</a>
                                        </li>
                                 
                                    <?php } else { ?>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" title="home" href="<?php echo base_url();?>">Home</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <?php if($_SESSION['role_id'] == '1') { ?>
                                                <a class="nav-link" title="dashboard" href="<?php echo base_url();?>index.php/admin/index">Dashboard</a>
                                            <?php } else { ?>
                                            <a class="nav-link" title="sports form" href="<?php echo base_url();?>index.php/pages/forms">Sport Forms</a>
                                            <?php } ?>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link dropdown-toggle" title="my account" data-toggle="dropdown" href="#" >My Account</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" title="view profile" href="<?php echo base_url();?>index.php/pages/profile"> View Profile</a>
                                                <a class="dropdown-item" title="change password" href="<?php echo base_url();?>index.php/pages/change_password"> Change Password</a>
                                                <a class="dropdown-item" title="logout" href="<?php echo base_url();?>index.php/pages/logout">Logout</a>
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