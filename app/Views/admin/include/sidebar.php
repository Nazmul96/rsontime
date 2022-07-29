   <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title"><?php echo lang('dashbaord.menu');?></li> 
                            <li>
                                <a href="<?php echo base_url();?>/admin/dashboard" class="waves-effect">
                                    <i class="mdi mdi-home-variant-outline"></i> 
                                    <span><?php echo lang('dashbaord.dashbaord');?></span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo base_url();?>/admin/subscriber/list" class="waves-effect">
                                    <i class="ri-group-line"></i>
                                    <span><?php echo lang('dashbaord.subscriber_list');?></span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo base_url();?>/admin/counter/index" class="waves-effect">
                                    <i class="ri-timer-line"></i>
                                    <span><?php echo lang('dashbaord.counter');?> </span>
                                </a>
                            </li> 
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-pages-line"></i>
                                    <span><?php echo lang('dashbaord.page');?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                <li> <a href="<?php echo base_url();?>/admin/pages/create">
                                    <?php echo lang('dashbaord.create_page');?></a> </li>
                                    <li> <a href="<?php echo base_url();?>/admin/pages/about_us"><?php echo lang('dashbaord.about_us');?></a></li>
                                    <li> <a href="<?php echo base_url();?>/admin/pages/contact_us"><?php echo lang('dashbaord.contact_us');?></a> </li>
                                    <li> <a href="<?php echo base_url();?>/admin/pages/gallery"><?php echo lang('dashbaord.add_gallery_image');?></a> </li>  
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>/admin/setting/email_setup" class="waves-effect">
                                <i class="far fa-envelope"></i>
                                    <span><?php echo lang('dashbaord.email_setup');?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>/admin/setting/index" class="waves-effect">
                                    <i class="ri-settings-4-line"></i>
                                    <span> <?php echo lang('dashbaord.settings');?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>/admin/visitor" class="waves-effect">
                                <i class="fas fa-bowling-ball"></i>
                                    <span> <?php echo lang('dashbaord.visitor_report');?></span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>/admin/mailchimp" class="waves-effect">
                                <i class="fas fa-bowling-ball"></i>
                                    <span><?php echo lang('dashbaord.mailchimp_settings');?></span>
                                </a>
                            </li>

                            <!-- <li>
                                <a href="<?php echo base_url();?>/admin/constant_contact" class="waves-effect">
                                <i class="fas fa-bowling-ball"></i>
                                    <span>constantcontact Settings</span>
                                </a>
                            </li> -->

                            <!-- <li>
                                <a href="<?php echo base_url();?>/admin/get_response" class="waves-effect">
                                <i class="fas fa-bowling-ball"></i>
                                    <span><?php echo lang('dashbaord.get_response');?></span>
                                </a>
                            </li> -->
                            <!-- 
                            <li>
                                <a href="<?php echo base_url();?>/admin/moosend" class="waves-effect">
                                <i class="fas fa-bowling-ball"></i>
                                    <span><?php echo lang('dashbaord.moosend_settings');?></span>
                                </a>
                            </li> -->
                            
                            <li>
                                <a href="<?php echo base_url();?>/admin/logout" class="waves-effect">
                                    <i class="ri-shut-down-line"></i>
                                    <span><?php echo lang('dashbaord.log_out');?></span>
                                </a>
                            </li>
 
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <div class="main-content">