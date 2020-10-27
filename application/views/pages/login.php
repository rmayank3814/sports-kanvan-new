
 <style>
        .box {
            display: flex;
            background-color: white;
            align-items: center;
            justify-content: center;
        }
        
        .login-form {
            /* min-width: 250px;
            max-width: 400px; */
            border-radius: 24px;
            padding: 15px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        
        .login-form h1 {
            text-align: center;
            font-size: 2.5rem;
            / margin-top: 35px; /
        }
        
        .login-form input[type="email"] {
            margin-top: 30px;
        }
        
        .login-form input[type="password"] {
            margin-top: 10px;
        }
        
        input {
            outline: none;
        }
        
        .links {
            margin-top: 10px;
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }
        
        .links>a:first-of-type {
            margin-right: 5px;
        }
        
        .links>a {
            background-color: #E0E0E0;
            border-radius: 24px;
            font-weight: 400;
            color: black;
            line-height: 12px;
            flex: 1;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            transition: 0.25s;
        }
        
        .links>a:hover {
            opacity: 0.6;
        }
        
        .login-form input[type="submit"] {
            background-color: #E0E0E0;
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            width: 100%;
            color: white;
            border: none;
            margin-top: 35px;
            cursor: pointer;
            padding: 10px;
            font-size: 1.3rem;
            font-weight: bold;
            border-radius: 24px;
            transition: 0.25s;
        }
        
        .login-form input[type="submit"]:hover {
            opacity: 0.8;
        }
        
        .login-form input[type="email"]:focus,
        .login-form input[type="password"]:focus {
            border: 2px #21D4FD solid;
        }
        
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            border: none;
            border-radius: 24px;
            font-size: 1rem;
            font-family: 'Raleway', sans-seriff;
            background-color: gainsboro;
            padding: 15px;
        }
        .error{
            color:red;
        }
    </style>
    </style>
<br>
<div class="image-about-banner">
    <div class="col-lg-12 col-sm-8">
        <div class="box">
            <?php echo form_open('pages/login',['class' => 'login-form mb-5'],['method' => 'post']);  ?>
                <h1>Login</h1>

                <div class = error>  <?php echo validation_errors();?> </div>

                <input type="email" name="email" placeholder="Email Id" value="<?php echo set_value('email'); ?>" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="submit" name="login" value="Login">
                <div class="links">
                    <a href="<?php echo base_url();?>index.php/pages/forgot_password">Forgot Password</a>
                    <a href="<?php echo base_url();?>index.php/pages/registration">Sign Up</a>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

                