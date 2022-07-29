<?php echo $this->extend('admin/layout')?>

<?php echo $this->section('content')?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->


<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"> <?php echo lang('setting.settings');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('setting.coming_soon');?></a>
                            </li>
                            <li class="breadcrumb-item active"><?php echo lang('setting.settings');?></li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="<?php echo base_url();?>/admin/setting/index" method="post" enctype="multipart/form-data">
           <div class="row">
               <div class="col-md-12">

                <div id="accordion">
                    <div class="card mb-4">
                        <div class="card-header" id="headingOne">
                            <h5 class="m-0 font-size-14">
                                <a data-bs-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne" class="text-dark">
                                   <?php echo lang('setting.general_setting');?>
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show"
                                aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-8">
                                                <?php echo lang('setting.show_title');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group  mb-4">
                                                   <?php if($General_setting[0]->settings_value=='yes') {?>    
                                                  <input class="form-check form-switch" type="checkbox" name="show_title" value="yes" id="switch1" switch="bool" checked>
                                                    <label class="form-label" for="switch1" data-on-label="" data-off-label=""></label>
                                                    <?php } else{?>
                                                    <input class="form-check form-switch" type="checkbox" name="show_title" value="yes" id="switch1" switch="bool">
                                                    <label class="form-label" for="switch1" data-on-label="" data-off-label=""></label>                        
                                                    <?php } ?>
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-8">
                                                <?php echo lang('setting.show_subtitle');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group  mb-4">
                                                <?php if($General_setting[1]->settings_value=='yes') {?>         
                                                    <input class="form-check form-switch" type="checkbox" name="show_subtitle" id="switch2" value="yes" switch="bool" checked>
                                                    <label class="form-label" for="switch2" data-on-label="" data-off-label=""></label>
                                                  <?php } else{?>
                                                            <input class="form-check form-switch" type="checkbox" name="show_subtitle" id="switch2" value="yes" switch="bool">
                                                    <label class="form-label" for="switch2" data-on-label="" data-off-label=""></label>        
                                                  <?php } ?>          
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-8">
                                                <?php echo lang('setting.show_description');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group mb-4">
                                                <?php if($General_setting[2]->settings_value=='yes') {?>        
                                                    <input class="form-check form-switch" type="checkbox" name="show_description" value="yes" id="switch3" switch="bool" checked>
                                                    <label class="form-label" for="switch3" data-on-label="" data-off-label=""></label>
                                                  <?php } else{?> 
                                                            <input class="form-check form-switch" type="checkbox" name="show_description" value="yes" id="switch3" switch="bool">
                                                    <label class="form-label" for="switch3" data-on-label="" data-off-label=""></label>       
                                                  <?php } ?>          
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-8">
                                                <?php echo lang('setting.show_social');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group mb-4">
                                                <?php if($General_setting[3]->settings_value=='yes') {?>          
                                                    <input class="form-check form-switch" type="checkbox" id="switch5" name="show_social" value="yes" switch="bool" checked>
                                                    <label class="form-label" for="switch5" data-on-label="" data-off-label=""></label>
                                                  <?php } else{?> 
                                                  <input class="form-check form-switch" type="checkbox" id="switch5" name="show_social" value="yes" switch="bool">
                                                    <label class="form-label" for="switch5" data-on-label="" data-off-label=""></label>         
                                                  <?php } ?>          
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-8">
                                                <?php echo lang('setting.show_menu');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group mb-4">
                                                <?php if($General_setting[4]->settings_value=='yes') {?>          
                                                    <input class="form-check form-switch" type="checkbox" id="switch6" name="show_menu" switch="bool" value="yes" checked>
                                                    <label class="form-label" for="switch6" data-on-label="" data-off-label=""></label>
                                                  <?php } else{?>  
                                                            <input class="form-check form-switch" type="checkbox" id="switch6" name="show_menu" switch="bool" value="yes">
                                                    <label class="form-label" for="switch6" data-on-label="" data-off-label=""></label>     
                                                  <?php } ?>          
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-8">
                                               <?php echo lang('setting.rtl_format');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group mb-4">
                                                <?php if($General_setting[5]->settings_value=='yes') {?>          
                                                    <input class="form-check form-switch" type="checkbox" id="switch7" name="rtl_format" switch="bool" value="yes" checked>
                                                    <label class="form-label" for="switch7" data-on-label="" data-off-label=""></label>
                                                  <?php } else{?>  
                                                            <input class="form-check form-switch" type="checkbox" id="switch7" name="rtl_format" switch="bool" value="yes">
                                                    <label class="form-label" for="switch7" data-on-label="" data-off-label=""></label>     
                                                  <?php } ?>          
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-8">
                                               <?php echo lang('setting.show_chat');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group mb-4">
                                                <?php if($General_setting[6]->settings_value=='yes') {?>          
                                                    <input class="form-check form-switch" type="checkbox" id="switch8" name="show_chat" switch="bool" value="yes" checked>
                                                    <label class="form-label" for="switch8" data-on-label="" data-off-label=""></label>
                                                  <?php } else{?>  
                                                            <input class="form-check form-switch" type="checkbox" id="switch8" name="show_chat" switch="bool" value="yes">
                                                    <label class="form-label" for="switch8" data-on-label="" data-off-label=""></label>     
                                                  <?php } ?>          
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>

                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header" id="headingTwo">
                            <h5 class="m-0 font-size-14">
                                <a class="collapsed text-dark" data-bs-toggle="collapse"
                                    data-parent="#accordion" href="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <?php echo lang('setting.profile_setting');?>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label><?php echo lang('setting.full_name');?></label>
                                       <input type="text" name="full_name" class="form-control" value="<?php echo $admins->full_name;?>">
                                       <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('full_name');
                                                  } ?>
                                        </small>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label><?php echo lang('setting.user_name');?></label>
                                       <input type="text" name="user_name" class="form-control" value="<?php echo $admins->user_name;?>">
                                       <small style="color:red;" class="text-danger">
                                       <?php if (isset($validation)) {
                                                  echo $validation->getError('user_name');
                                                  } ?>
                                        </small>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label><?php echo lang('setting.email');?></label>
                                       <input type="email" name="email" class="form-control" value="<?php echo $admins->email;?>">

                                       <small style="color:red;" class="text-danger">
                                       <?php if (isset($validation)) {
                                                  echo $validation->getError('email');
                                                  } ?>
                                        </small>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label><?php echo lang('setting.current_password');?></label>
                                       <input type="password" name="current_password" class="form-control">
                                       <small>
                                       <?php
                                        if(session()->getFlashdata('error')){
                                        echo "<p style='color:red;'>".session()->getFlashdata('error')."</p>";
                                        }
                                       ?> 
                                       </small>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label><?php echo lang('setting.new_password');?></label>
                                       <input type="password" name="new_password" class="form-control">
                                       <small>
                                       <?php
                                        if(session()->getFlashdata('error1')){
                                        echo "<p style='color:red;'>".session()->getFlashdata('error1')."</p>";
                                        }
                                       ?> 
                                       </small>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label><?php echo lang('setting.retype_new_password');?></label>
                                       <input type="password" name="retype_new_password" class="form-control">
                                       <small>
                                       <?php
                                        if(session()->getFlashdata('error2')){
                                        echo "<p style='color:red;'>".session()->getFlashdata('error2')."</p>";
                                        }
                                       ?> 
                                       </small> 
                                       <small>
                                       <?php
                                        if(session()->getFlashdata('error3')){
                                        echo "<p style='color:red;'>".session()->getFlashdata('error3')."</p>";
                                        }
                                       ?> 
                                       </small> 
                                   </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label><?php echo lang('setting.profile_image');?></label>
                                       <input type="file" name="profile_image" class="form-control">
                                       <input type="hidden" name="old_profile_image" id="" value="<?php echo $admins->profile_image;?>">
                                       <small style="color:red;" class="text-danger">
                                       <?php if (isset($validation)) {
                                                  echo $validation->getError('profile_image');
                                                  } ?>
                                        </small>
                                        
                                   </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label><?php echo lang('setting.favicon');?></label>
                                       <input type="file" name="favicon" class="form-control">
                                       <input type="hidden" name="old_favicon" id="" value="<?php echo $admins->favicon;?>">
                                       <small style="color:red;" class="text-danger">
                                       <?php if (isset($validation)) {
                                                  echo $validation->getError('favicon');
                                                  } ?>
                                        </small>
                                   </div>
                                </div> 
                           </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header" id="headingThree">
                            <h5 class="m-0 font-size-14">
                                <a class="collapsed text-dark" data-bs-toggle="collapse"
                                    data-parent="#accordion" href="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo lang('setting.social_setting');?>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.facebook');?></label>
                                           <div class="input-group">
                                                <div class="input-group-text"><i class="ri-facebook-fill"></i></div>
                                                <input type="text" name="facebook" class="form-control" placeholder="https://www.facebook.com" value="<?php echo $Social_setting[0]->settings_value?>">
                                            </div>
                                            <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('facebook');
                                                            } ?>
                                                  </small>  
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                            <label><?php echo lang('setting.twitter');?></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="ri-twitter-fill"></i>
                                                </div>
                                                <input type="text" name="twitter" class="form-control" placeholder="https://www.twitter.com" value="<?php echo $Social_setting[1]->settings_value?>">         
                                            </div>
                                            <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('twitter');
                                                            } ?>
                                                  </small> 
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                            <label><?php echo lang('setting.instagram');?></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="ri-instagram-fill"></i>
                                                </div>
                                                <input type="text" name="instagram" class="form-control" placeholder="https://www.instagram.com" value="<?php echo $Social_setting[2]->settings_value?>">
                                            </div>
                                            <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('instagram');
                                                            } ?>
                                                  </small>    
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                            <label><?php echo lang('setting.youtube');?></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="ri-youtube-fill"></i>
                                                </div>
                                                <input type="text" name="youtube" class="form-control" placeholder="https://www.youtube.com" value="<?php echo $Social_setting[3]->settings_value?>">    
                                            </div>
                                            <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('youtube');
                                                            } ?>
                                           </small> 
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                            <label><?php echo lang('setting.whatsapp');?></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="ri-whatsapp-line"></i>
                                                </div>
                                                <input type="text" name="whatsapp" class="form-control" placeholder="+123456789" value="<?php echo $Social_setting[4]->settings_value?>">
                                            </div>
                                            <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('whatsapp');
                                                            } ?>
                                                  </small> 
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                            <label><?php echo lang('setting.skype');?></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="ri-skype-line"></i>
                                                </div>
                                                <input type="text" name="skype" class="form-control" placeholder="skype id" value="<?php echo $Social_setting[5]->settings_value?>">          
                                            </div>
                                            <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('skype');
                                                            } ?>
                                                  </small>   
                                       </div>
                                    </div>
                                     
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header" id="headingfour">
                            <h5 class="m-0 font-size-14">
                                <a class="collapsed text-dark" data-bs-toggle="collapse"
                                    data-parent="#accordion" href="#collapsefour"
                                    aria-expanded="false" aria-controls="collapsefour">
                                    <?php echo lang('setting.seo_setting');?>
                                </a>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.page_name');?>Page name</label>
                                           <input type="text" name="page_name" class="form-control" value="<?php echo $Seo_setting[0]->settings_value?>">
                                           <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('page_name');
                                                            } ?>
                                          </small>  
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.meta_keywords');?></label>
                                           <input type="text" name="meta_keyword" class="form-control" value="<?php echo $Seo_setting[1]->settings_value?>">
                                           <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('meta_keyword');
                                                     } ?>
                                          </small>
                                       </div>
                                    </div>
                                     
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.meta_author');?></label>
                                           <input type="text" name="meta_author" class="form-control" value="<?php echo $Seo_setting[2]->settings_value?>">
                                           <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('meta_author');
                                                     } ?>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.timezone');?></label>
                                        <select name="timezone" id="" class="form-control">
                                           <?php foreach($timezone as $row): ?>
                                             <option value="<?php echo $row->value?>" <?php if ($row->value == $Seo_setting[3]->settings_value) echo "selected"; ?>><?php echo $row->value?></option>
                                          <?php endforeach; ?>
                                        </select> 
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.robots_name');?></label>
                                           <input type="text" name="robots_name" class="form-control" value="<?php echo $Seo_setting[5]->settings_value?>">
                                           <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('robots_name');
                                                     } ?>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.robots_content');?></label>
                                           <input type="text" name="robots_content" class="form-control" value="<?php echo $Seo_setting[6]->settings_value?>">
                                           <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('robots_content');
                                                     } ?>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.meta_description');?></label>
                                           <textarea class="form-control" rows="5" name="meta_description"><?Php echo $Seo_setting[4]->settings_value?></textarea>
                                       </div>
                                       <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('meta_description');
                                                     } ?>
                                          </small>
                                    </div>
                                   
                               </div>
                            </div>
                        </div>                       
                    </div>

                    <div class="card mb-4">
                        <div class="card-header" id="headingfive">
                            <h5 class="m-0 font-size-14">
                                <a class="collapsed text-dark" data-bs-toggle="collapse"
                                    data-parent="#accordion" href="#collapsefive"
                                    aria-expanded="false" aria-controls="collapsefive">
                                    <?php echo lang('setting.chat_setting');?>
                                </a>
                            </h5>
                        </div>
                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                            <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="from-group mb-4">
                                           <label><?php echo lang('setting.select_chat_system');?></label>
                                          <select name="chat_name" id="" class="form-control chat_select">
                                              <option value="">--Select One--</option>
                                              <option value="smartsupp" <?php if($chat_setting[1]->settings_value == 'smartsupp'){echo 'selected';}?>>smartsupp chat</option>
                                              <option value="facebook" <?php if($chat_setting[1]->settings_value == 'facebook'){echo 'selected';}?>>facebook chat</option>
                                              <option value="whatsapp" <?php if($chat_setting[1]->settings_value == 'whatsapp'){echo 'selected';}?>>whatsapp chat</option>
                                          </select>
                                           <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('page_name');
                                                            } ?>
                                          </small>  
                                       </div>
                                   <div class="chat_form">
                                       <!-- <input type="text" name="smartsupp_encode" value="" id="smartsupp_encode"> -->
                                       <textarea id="w3review" name="text_smartsupp" rows="8" cols="60">
                                             
                                                            
                                       <script type="text/javascript">
                                        var _smartsupp = _smartsupp || {};
                                        _smartsupp.key = '68c98e4fafa4bafd801ae29c39598acbe3d2317b';
                                        window.smartsupp||(function(d) {
                                        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
                                        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
                                        c.type='text/javascript';c.charset='utf-8';c.async=true;
                                        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
                                        })(document);
                                        </script>
                                              
                                        </textarea>                
                                       </div>

                                       <div class="chat_form1">
                                            <textarea id="w3review" name="text_facebook" rows="8" cols="60">
                                                                                                    
                                                    <div id="fb-root"></div>

                                                    <div id="fb-customer-chat" class="fb-customerchat">
                                                    </div>
                                                    <script>
                                                    var chatbox = document.getElementById('fb-customer-chat');
                                                    chatbox.setAttribute("page_id", "102698805682544");
                                                    chatbox.setAttribute("attribution", "biz_inbox");
                                                    </script>

                                                    <!-- Your SDK code -->
                                                    <script>
                                                    window.fbAsyncInit = function() {
                                                        FB.init({
                                                        xfbml            : true,
                                                        version          : 'v13.0'
                                                        });
                                                    };

                                                    (function(d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id)) return;
                                                        js = d.createElement(s); js.id = id;
                                                        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }(document, 'script', 'facebook-jssdk'));
                                                    </script>

                                            </textarea>       

                                        </div>
                                        
                                        <div class="chat_form2">
                                          <textarea id="w3review" name="text_whatsapp" rows="8" cols="60">  
                                            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                             <div class="elfsight-app-e9e52601-9f26-4585-bb79-a4f0c54df99f"></div>
                                             </textarea>     
                                        </div>

                                    </div>
     
                               </div>
                            </div>
                        </div>
 
                    </div>
                </div>
  
                   
               </div>
           </div>
       
   
      
           <button class="btn btn-primary mb-4" type="submit"> <i class="ri-check-fill  me-2"></i><?php echo lang('setting.save_settings');?></button>
        </form>
        <!-- end row -->  
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<script>
    $('.chat_form').hide();
    $('.chat_form1').hide();
    $('.chat_form2').hide();
    $(document).on('change', '.chat_select', function(){
        var value=$(this).val();
        if(value == 'smartsupp')
        {
            $('.chat_form').show();
          
            $('.chat_form1').hide();
            $('.chat_form2').hide();
            
        }
        else if(value == 'facebook')
        {
          
            $('.chat_form1').show();
            $('.chat_form').hide();
            $('.chat_form2').hide();
           
        }
        else
        {
            $('.chat_form2').show();
            $('.chat_form').hide();
            $('.chat_form1').hide();
             
        }  
    });    
</script>

<?php echo $this->endSection()?>