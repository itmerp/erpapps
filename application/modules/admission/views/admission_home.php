<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITM-Group of Institutions</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->    
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url(); ?>assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admisssion/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admisssion/fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admisssion/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admisssion/css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admisssion/css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<input type="hidden" value="<?php echo base_url(); ?>" id="baseurl"/>
	
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top" style="padding: 10px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <img src="<?php echo base_url(); ?>assets/img/itm_logo.png" alt="logo" />
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <!--<h1>Touché</h1>-->
                            <p>ITM Group of Institutions</p>
                            <a class="btn btn-custom btn-lg page-scroll" data-toggle="modal" data-target="#registration_modal">Get Started</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	
	<!-- Registration Modal -->
    <div id="registration_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Register</h4>
                </div>
                <div class="modal-body">
                    <form name="registerForm" id="registerForm" novalidate>
                        <div class="row">
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                            <div class="col-md-5">
                                <div class="form-group required_admisssion_registration_form">
                                    <input type="text" id="your_name" class="form-control" placeholder="Your Name">
                                    <p class="help-block text-danger error error-hide class_your_name">Please enter your name</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group required_admisssion_registration_form">
                                    <input type="text" id="your_email" class="form-control" placeholder="Your Email">
                                    <p class="help-block text-danger error error-hide class_your_email">Please enter your email</p>
									<p class="help-block text-danger error error-hide class_your_valid_email">Please enter valid email</p>
                                </div>
                            </div>
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                            <div class="col-md-5">
                                <div class="form-group required_admisssion_registration_form">
                                    <input type="text" id="mobile_number" class="form-control" placeholder="Mobile Number">
                                    <p class="help-block text-danger error error-hide class_mobile_number">Please enter mobile number</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group required_admisssion_registration_form">
                                    <input type="password" id="your_password" class="form-control" placeholder="Password">
                                    <p class="help-block text-danger error error-hide class_your_password">Please enter your password</p>
                                </div>
                            </div>
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                            <div class="col-md-5">
                                <div class="form-group required_admisssion_registration_form">
                                    <select id="choose_state" class="form-control">
                                        <option value="">Choose State</option>
										<option value="MAH">Maharashtra</option>
                                    </select>
                                    <p class="help-block text-danger error error-hide class_your_state">Please select state</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <select id="choose_city" class="form-control">
                                        <option value="">Choose City</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <!--<img src="<?php echo base_url(); ?>assets/img/captcha_img.png" class="img-responsive" alt="CAPTCHA TEXT"/>-->
									<?php echo $captcha_image; ?>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group required_admisssion_registration_form">
                                    <input type="test" id="get_captcha" class="form-control" placeholder="Enter Captcha">
                                    <p class="help-block text-danger error error-hide class_your_captcha">Please enter CAPTCHA</p>
									<p class="help-block text-danger error error-hide class_your_valid_captcha">Please enter correct CAPTCHA</p>
                                </div>
                            </div>
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                        </div>
						
						
						<div class="row">
                            <div class="col-md-12 text-center">
                                <button type="button" id="btn_reg" class="btn btn-custom btn-lg">Register</button>
								<div id="success"></div>	
                            </div>
                        </div>
						
						<div class="row margin-top-10">
                            <div class="col-md-12">
                                <input type="checkbox" id="agrement_checkbox" name="agrement_checkbox" />&nbsp;&nbsp;I agree to receive information regarding my submitted application by signing up on ITM Group of Institutions
                            </div>
                        </div>
					</form>
					
					<div class="row margin-top-10">
                        <div class="col-md-4">
							<span class="show_forgot_password" style="cursor:pointer;"><u>Forgot Password?</u></span>
                        </div>
						<div class="col-md-4">
                            &nbsp;
                        </div>
						<div class="col-md-4">
                            Already Registered? <span style="color:blue;cursor:pointer;" class="show_login_model">Login</span>
                        </div>
                    </div>
					
                </div>
            </div>

        </div>
    </div>
	
	
	<!-- Login Modal -->
    <div id="login_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Already Registered? Login</h4>
                </div>
                <div class="modal-body">
                    <form name="registerForm" id="registerForm" novalidate>
                        <div class="row">
                            <div class="col-md-1">
                                &nbsp;
                            </div>                            
                            <div class="col-md-5">
                                <div class="form-group required_admisssion_registration_form">
                                    <input type="email" id="your_email_login" class="form-control" placeholder="Your Email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
							<div class="col-md-5">
                                <div class="form-group required_admisssion_registration_form">
                                    <input type="password" id="your_password_login" class="form-control" placeholder="Password">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-1">
                                &nbsp;
                            </div>
                        </div>
						
						<div class="row margin-top-10">
                            <div class="col-md-12">
                                <input type="checkbox" id="agrement_checkbox" name="remember_login_checkbox" />&nbsp;&nbsp;Check to remember your login details
                            </div>
                        </div>                
						
						
						<div class="row">
                            <div class="col-md-12 text-center">
                                <button type="button" id="btn_login" class="btn btn-custom btn-lg">Login</button>
								<div id="success"></div>	
                            </div>
                        </div>					
						
					</form>
					
					<div class="row margin-top-10">
                        <div class="col-md-4">
							<span class="show_forgot_password" style="cursor:pointer;"><u>Forgot Password?</u></span>
                        </div>
						<div class="col-md-4">
                            &nbsp;
                        </div>
						<div class="col-md-4">
                            New User? <span style="color:blue;cursor:pointer;" class="show_register_model">Register</span>
                        </div>
                    </div>
					
                </div>
            </div>

        </div>
    </div>
	
	<!-- Forgot Password Modal -->
    <div id="forget_password_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <form name="registerForm" id="registerForm" novalidate>
                        <div class="row">
                            <div class="col-md-2">
                                &nbsp;
                            </div>                            
                            <div class="col-md-8">
                                <div class="form-group required_admisssion_registration_form">
                                    <input type="email" id="your_email_forgot_password" class="form-control" placeholder="Your Email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>							
                            <div class="col-md-2">
                                &nbsp;
                            </div>
                        </div>
						
						<div class="row">
                            <div class="col-md-12 text-center">
                                <button type="button" id="btn_forgot_password" class="btn btn-custom btn-lg">Submit</button>
								<div id="success"></div>	
                            </div>
                        </div>					
						
					</form>
					
					<div class="row margin-top-10">
                        <div class="col-md-4">
							Already Registered? <span style="color:blue;cursor:pointer;" class="show_login_model">Login</span>
                        </div>
						<div class="col-md-4">
                            &nbsp;
                        </div>
						<div class="col-md-4">
                            New User? <span style="color:blue;cursor:pointer;" class="show_register_model">Register</span>
                        </div>
                    </div>
					
                </div>
            </div>

        </div>
    </div>
    <!--<div id="footer" style="padding:0 0 0 0;">	 	
        <div class="container-fluid text-center copyrights">
            &copy;
        </div>
    </div>-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/contact_me.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/main.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admisssion/js/admission_home.js"></script>
</body>

</html>