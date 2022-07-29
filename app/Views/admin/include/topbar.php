<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box text-center">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url();?>/backend/admin/assets/images/logo-sm.png" alt="logo-sm-dark" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url();?>/backend/admin/assets/images/logo-dark.png" alt="logo-dark" height="24">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url();?>/backend/admin/assets/images/logo-sm.png" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url();?>/backend/admin/assets/images/logo-light.png" alt="logo-light" height="24">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                         
                    </div>

                    <div class="d-flex">  
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>
                        <div class="dropdown d-none d-lg-inline-block ms-1 mt-3">
                            <a target="_blank" href="<?php echo base_url();?>/" class="btn btn-outline-danger   btn-rounded   waves-effect">
                                 Front End
                            </a>
                        </div>
                       
                         <?php 
                         $this->session = \Config\Services::session();
                         $session_data= $this->session->get('login_info');
                //              echo '<pre>';
                // print_r($session_data['profile_image']);
                // die();
                         ?>
                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user"src="<?php echo base_url('image/profile/'.$session_data['profile_image'])?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1"><?php echo $session_data['name'];?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo base_url();?>/admin/setting/index"><i class="ri-user-line align-middle me-1"></i> Profile</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?php echo base_url();?>/admin/logout"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div> 
                    </div>
                </div>
</header>