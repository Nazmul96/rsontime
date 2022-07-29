<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login |  Coming Soon - Admin & Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>/backend/admin/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url();?>/backend/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url();?>/backend/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url();?>/backend/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-pattern">
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <div class="text-center">
                                        <a href="index.html" class="">
                                            <img src="<?php echo base_url();?>/backend/admin/assets/images/logo-dark.png" alt="" height="24" class="auth-logo logo-dark mx-auto">
                                            <img src="<?php echo base_url();?>/backend/admin/assets/images/logo-light.png" alt="" height="24" class="auth-logo logo-light mx-auto">
                                        </a>
                                    </div>
                                    <!-- end row -->
                                    <h4 class="font-size-18 text-muted mt-2 text-center"><?php echo lang('login.welcome_back');?></h4>
                                    <p class="mb-5 text-center"><?php echo lang('login.sign_in_continue');?></p>
                                    <form class="form-horizontal" action="<?php echo base_url();?>/admin/login" method="post">
                                    <?php
                                        if(session()->getFlashdata('success')){
                                        echo "<h4 style='color:red;text-align:center;'>".session()->getFlashdata('success')."</h4>";
                                        }
                                    ?>    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="email"><?php echo lang('login.email');?></label>
                                                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                                                    <small style="color:red;" class="text-danger">
                                                  <?php if (isset($validation)) {
                                                            echo $validation->getError('email');
                                                            } ?>
                                                  </small>  
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="userpassword"><?php echo lang('login.password');?></label>
                                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                  <small style="color:red;" class="text-danger">
                                                  <?php if (isset($validation)) {
                                                            echo $validation->getError('password');
                                                            } ?>
                                                  </small> 
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="customControlInline">
                                                            <label class="form-label" class="form-check-label" for="customControlInline"><?php echo lang('login.remember_me');?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="text-md-end mt-3 mt-md-0">
                                                            <a href="forgot_password.php" class="text-muted"><i class="mdi mdi-lock"></i><?php echo lang('login.forgot_password');?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid mt-4">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo lang('login.log_in');?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-white-50">Don't have an account ? <a href="registration.php" class="fw-medium text-primary"> Register </a> </p>
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> <?php echo lang('login.coming_soon');?><i class="mdi mdi-heart text-danger"></i> <?php echo lang('login.rs_software');?></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/node-waves/waves.min.js"></script>

        <script src="<?php echo base_url();?>/backend/admin/assets/js/app.js"></script>

    </body>
</html>
