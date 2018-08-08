<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png"      href="<?php echo base_url('assets/images/logo.png');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/fonts/iconic/css/material-design-iconic-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
        
	<div class="limiter">
		<div class="container-login100">
                        
                      
			<div class="wrap-login100">
                                <?php 
                                    $attributes = array('class' => 'login100-form validate-form');
                                    echo form_open('admin_controller/login',$attributes);
                                ?>
				<form class="login100-form validate-form">
					
					<span class="login100-form-title p-b-48">
                                            <img src="<?php echo base_url('assets/images/logo.png');?>" alt="jep logo" height="100" width="100">
					</span>
                                        <span class="login100-form-title p-b-26">
					    Admin Panel
					</span>
                                        <span>
                                            
                                                 <?php
                                                    if(!empty($success_msg)){
                                                        echo '<p class="text text-success">'.$success_msg.'</p>';
                                                    }elseif(!empty($error_msg)){
                                                        echo '<p class="text text-danger">'.$error_msg.'</p>';
                                                    }
                                              ?> 
                                            
                                        </span>
					<div class="wrap-input100 validate-input" data-validate = "Please Enter a valid Username">
                                           
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                                                        <button class="login100-form-btn" type="submit" name="loginSubmit">
								Login
							</button>
						</div>
					</div>

					<!-- <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					     </div>
                                         -->
			
                            <?php echo form_close();?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/daterangepicker/moment.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/main.js');?>"></script>

</body>
</html>