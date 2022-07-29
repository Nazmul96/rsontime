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
                    <h4 class="mb-sm-0"> <?php echo lang('counter.counter_settings');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('counter.coming_soon');?> </a>
                            </li>
                            <li class="breadcrumb-item active">  <?php echo lang('counter.counter_settings');?> </li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end page title -->
        
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-body">
                   <form action="<?php echo base_url();?>/admin/counter/index" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label><?php echo lang('counter.release_date');?></label>
                                        <input type="date" class="form-control" name="release_date" value="<?php echo $counter_settings[0]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                                  <?php if (isset($validation)) {
                                                            echo $validation->getError('release_date');
                                                            } ?>
                                                  </small> 
                                        <p><small><?php echo lang('counter.please_select_the_date');?></small></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label><?php echo lang('counter.release_time');?></label>
                                        <input type="time" class="form-control" name="release_time" value="<?php echo $counter_settings[1]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                echo $validation->getError('release_time');
                                                } ?>
                                        </small> 
                                        <p><small><?php echo lang('counter.please_select_the_time');?></small></p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label><?php echo lang('counter.title');?></label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $counter_settings[2]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                echo $validation->getError('title');
                                                } ?>
                                        </small>  
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label><?php echo lang('counter.sub_title');?></label>
                                        <input type="text" class="form-control" name="sub_title" value="<?php echo $counter_settings[3]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                echo $validation->getError('sub_title');
                                                } ?>
                                        </small>  
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="from-group">
                                        <label><?php echo lang('counter.shot_description');?></label>
                                        <textarea class="form-control" rows="5" name="shot_description"><?php echo $counter_settings[4]->settings_value;?></textarea>
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                echo $validation->getError('shot_description');
                                                } ?>
                                        </small> 
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label ><?php echo lang('counter.theme1');?></label>
                                        <div class="theme_box"  >
                                            <?php if($counter_settings[5]->settings_value == 'theme1'){?>
                                            <input type="radio" name="new_theme"  class="theme1_set" id="theme1" value="theme1" checked>
                                            <label for="theme1"> <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme1.png" class="form-control" ></label>
                                            <?php } else {?>
                                            <input type="radio"  class="theme1_set" name="new_theme" id="theme1" value="theme1">
                                            <label for="theme1"> <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme1.png" class="form-control" ></label>

                                            <?php } ?>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label for="theme2"> <?php echo lang('counter.theme2');?></label>
                                        <div class="theme_box"  >
                                        <?php if($counter_settings[5]->settings_value == 'theme2'){?>
                                            <input type="radio" name="new_theme" class="theme2_set" id="theme2" value="theme2" checked>
                                            <label for="theme2" checked>
                                                <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme2.png" class="form-control" >
                                            </label> 
                                        <?php } else {?>  
                                            <input type="radio" name="new_theme" class="theme2_set" id="theme2" value="theme2">
                                            <label for="theme2">
                                                <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme2.png" class="form-control" >
                                            </label>
                                         <?php } ?>   

                                        </div> 
                                    </div>
                                </div>
                                 <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label ><?php echo lang('counter.theme3');?></label>
                                        <div class="theme_box"  >
                                        <?php if($counter_settings[5]->settings_value == 'theme3'){?>
                                            <input type="radio" name="new_theme" id="theme3" value="theme3"  class="theme3_set" checked>
                                            <label for="theme3"> <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme3.png" class="form-control" ></label>
                                        <?php } else {?>
                                            <input type="radio" name="new_theme" id="theme3" value="theme3"  class="theme3_set">
                                            <label for="theme3"> <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme3.png" class="form-control" ></label>
                                        <?php } ?>    
                                        </div> 
                                        </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label for="theme4"> <?php echo lang('counter.theme4');?> </label>
                                        <div class="theme_box">
                                         <?php if($counter_settings[5]->settings_value == 'theme4'){?>
                                            <input type="radio" name="new_theme" id="theme4" value="theme4"  class="theme4_set" checked>
                                            <label for="theme4">
                                                <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme4.png" class="form-control"  >
                                            </label> 
                                        <?php } else {?>
                                            <input type="radio"  class="theme4_set" name="new_theme" id="theme4" value="theme4">
                                            <label for="theme4">
                                                <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme4.png" class="form-control"  >
                                            </label>   
                                            
                                        <?php } ?>    
                                        </div> 
                                    </div>      
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label for="theme4"> <?php echo lang('counter.theme5');?> </label>
                                        <div class="theme_box">
                                         <?php if($counter_settings[5]->settings_value == 'theme5'){?>
                                            <input type="radio" name="new_theme" id="theme5" value="theme5"  class="theme5_set" checked>
                                            <label for="theme4">
                                                <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme5.png" class="form-control"  >
                                            </label> 
                                        <?php } else {?>
                                            <input type="radio"  class="theme5_set" name="new_theme" id="theme5" value="theme5">
                                            <label for="theme5">
                                                <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme5.png" class="form-control"  >
                                            </label>   
                                            
                                        <?php } ?>    
                                        </div> 
                                    </div>      
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <label for="theme4"> <?php echo lang('counter.theme6');?></label>
                                        <div class="theme_box">
                                         <?php if($counter_settings[5]->settings_value == 'theme6'){?>
                                            <input type="radio" name="new_theme" id="theme6" value="theme6"  class="theme5_set" checked>
                                            <label for="theme6">
                                                <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme6.png" class="form-control"  >
                                            </label> 
                                        <?php } else {?>
                                            <input type="radio"  class="theme6_set" name="new_theme" id="theme6" value="theme6">
                                            <label for="theme6">
                                                <img src="<?php echo base_url();?>/backend/admin/assets/images/layouts/theme6.png" class="form-control"  >
                                            </label>   
                                            
                                        <?php } ?>    
                                        </div> 
                                    </div>      
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="from-group">
                                        <h4 class="mb-sm-0"><?php echo lang('counter.customize_them_setting');?></h4>    
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="row">
                                       
                                  
                                        <div class="col-md-6  mb-4 show_bg_image">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.background_image');?></label> 
                                                <input type="file" name="background_image" class="form-control">
                                                <input type="hidden" name="old_background_image" value="<?php echo $custom_theme_settings[1]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_image');
                                                        } ?>
                                                </small> 
                                            </div><br>
                                        </div>
                                                
                                           
                                        <div class="col-md-6  mb-4 show_bg_embeded">
                                           <div class="form-group">
                                            <label for="category_name"><?php echo lang('counter.embeded_code_or_video_upload');?></label>
                                                <div class="col-4">
                                                    <div class="from-group  mt-2">
                                                        
                                                        <?php if($custom_theme_settings[20]->settings_value=='yes') {?>         
                                                        <input class="form-check form-switch choose_embed_or_video" type="checkbox" name="embedcode_or_video_active" id="switch4" value="yes" switch="bool" checked>
                                                        <label class="form-label" for="switch4" data-on-label="" data-off-label=""></label>
                                                    <?php } else{?>
                                                                <input class="form-check form-switch choose_embed_or_video" type="checkbox" name="embedcode_or_video_active" id="switch4" value="yes" switch="bool">
                                                        <label class="form-label" for="switch4" data-on-label="" data-off-label=""></label>        
                                                    <?php } ?> 
                                                    </div> 
                                                </div>          
                                            </div>           
                                                        
                                            <div class="from-group background_embeded">
                                                <label><?php echo lang('counter.background_video_embeded_code');?></label> 
                                                <input type="text" name="background_embeded" class="form-control">
                                                <input type="hidden" name="old_background_embeded" value="<?php echo $custom_theme_settings[2]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_image');
                                                        } ?>
                                                </small> 
                                            </div>
                                            <div class="from-group background_video">
                                                <label><?php echo lang('counter.background_video_choose');?></label> 
                                                <input type="file" name="background_video" class="form-control">
                                                <input type="hidden" name="old_background_video" value="<?php echo $custom_theme_settings[2]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_video');
                                                        } ?>
                                                </small> 
                                            </div>

                                          
                                        </div>
                                                 
                                              
                                        <div class="col-md-3 mb-4 bg_color">                                        
                                          <div class="col-8">
                                               <?php echo lang('counter.use_background_color');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group  mt-2">
                                                      
                                                    <?php if($custom_theme_settings[5]->settings_value=='yes') {?>         
                                                    <input class="form-check form-switch check_color" type="checkbox" name="color_show" id="switch2" value="yes" switch="bool" checked>
                                                    <label class="form-label" for="switch2" data-on-label="" data-off-label=""></label>
                                                  <?php } else{?>
                                                            <input class="form-check form-switch check_color" type="checkbox" name="color_show" id="switch2" value="yes" switch="bool">
                                                    <label class="form-label" for="switch2" data-on-label="" data-off-label=""></label>        
                                                  <?php } ?> 
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-4 bg_video">                                        
                                          <div class="col-8">
                                              <?php echo lang('counter.use_background_video');?>
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group  mt-2">
                                                      
                                                    <?php if($custom_theme_settings[3]->settings_value=='yes') {?>         
                                                    <input class="form-check form-switch check_video" type="checkbox" name="video_show" id="switch3" value="yes" switch="bool" checked>
                                                    <label class="form-label" for="switch3" data-on-label="" data-off-label=""></label>
                                                  <?php } else{?>
                                                            <input class="form-check form-switch check_video" type="checkbox" name="video_show" id="switch3" value="yes" switch="bool">
                                                    <label class="form-label" for="switch3" data-on-label="" data-off-label=""></label>        
                                                  <?php } ?> 
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 show_bg_color">
                                            <div class="from-group">
                                                <label>  <?php echo lang('counter.background_color');?></label>
                                                <input type="hidden" name="old_color" value="<?php echo $custom_theme_settings[0]->settings_value;?>"> 
                                                <input type="text" name="background_color" class="form-control colorpicker-common">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_color');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>                
                                                        
                                       
                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label> <?php echo lang('counter.heading_font');?> </label> 
                                                <select class="form-control" name="heading_font">
                                                    <option value="">Select Font</option>
                                                    <option value="Audiowide" <?php if($custom_theme_settings[6]->settings_value == 'Audiowide'){echo 'selected';}?>>Audiowide</option>
                                                    <option value="Anton"  <?php if($custom_theme_settings[6]->settings_value == 'Anton'){echo 'selected';}?>>Anton</option>
                                                    <option value="Poppins"  <?php if($custom_theme_settings[6]->settings_value == 'Poppins'){echo 'selected';}?>>Poppins</option>
                                                    <option value="Open Sans"  <?php if($custom_theme_settings[6]->settings_value == 'Open Sans'){echo 'selected';}?>>Open Sans</option>
                                                    <option value="Roboto"  <?php if($custom_theme_settings[6]->settings_value == 'Roboto'){echo 'selected';}?>>Roboto</option>
                                                    <option value="Lato"  <?php if($custom_theme_settings[6]->settings_value == 'Lato'){echo 'selected';}?>>Lato</option>
                                                    <option value="Raleway"  <?php if($custom_theme_settings[6]->settings_value == 'Raleway'){echo 'selected';}?>>Raleway</option>
                                                    <option value="Leckerli One"  <?php if($custom_theme_settings[6]->settings_value == 'Leckerli One'){echo 'selected';}?>>Leckerli One</option>
                                                    <option value="Sofia"  <?php if($custom_theme_settings[6]->settings_value == 'Sofia'){echo 'selected';}?>>Sofia</option>
                                                </select>
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('heading_font');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label> <?php echo lang('counter.heading_font_weight');?> </label> 
                                                <select class="form-control" name="heading_font_weight">
                                                    <option value="">Select Weight</option>
                                                    <option value="300" <?php if($custom_theme_settings[7]->settings_value == '300'){echo 'selected';}?>>300</option>
                                                    <option value="400" <?php if($custom_theme_settings[7]->settings_value == '400'){echo 'selected';}?>>400</option>
                                                    <option value="500" <?php if($custom_theme_settings[7]->settings_value == '500'){echo 'selected';}?>>500</option>
                                                    <option value="600" <?php if($custom_theme_settings[7]->settings_value == '600'){echo 'selected';}?>>600</option>
                                                    <option value="700" <?php if($custom_theme_settings[7]->settings_value == '700'){echo 'selected';}?>>700</option>
                                                    <option value="800" <?php if($custom_theme_settings[7]->settings_value == '800'){echo 'selected';}?>>800</option>
                                                    <option value="900" <?php if($custom_theme_settings[7]->settings_value == '900'){echo 'selected';}?>>900</option> 
                                                </select>
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('heading_font_weight');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                          <div class="from-group">
                                                <label> <?php echo lang('counter.heading_font_color');?></label> 
                                                <input type="text" name="heading_font_color" class="form-control colorpicker-common" value="<?php echo $custom_theme_settings[8]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('heading_font_color');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.heading_font_style');?></label> 
                                                <select class="form-control" name="heading_font_style">
                                                    <option value="">Select Font</option>
                                                    <option value="normal" <?php if($custom_theme_settings[9]->settings_value == 'normal'){echo 'selected';}?>>normal</option>
                                                    <option value="italic" <?php if($custom_theme_settings[9]->settings_value == 'italic'){echo 'selected';}?>>italic</option>
                                                    <option value="oblique" <?php if($custom_theme_settings[9]->settings_value == 'oblique'){echo 'selected';}?>>oblique</option>
                                                    <option value="initial" <?php if($custom_theme_settings[9]->settings_value == 'initial'){echo 'selected';}?>>initial</option>
                                                    <option value="inherit" <?php if($custom_theme_settings[9]->settings_value == 'inherit'){echo 'selected';}?>>inherit</option>
                                                </select>
                                                <small style="color:red;" class="text-danger">
                                                    <?php if (isset($validation)) {
                                                            echo $validation->getError('heading_font_style');
                                                            } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label> <?php echo lang('counter.paragraph_font');?></label> 
                                                <select class="form-control" name="paragraph_font">
                                                    <option value="">Select Paragraph Font</option>
                                                    <option value="Audiowide" <?php if($custom_theme_settings[10]->settings_value == 'Audiowide'){echo 'selected';}?>>Audiowide</option>
                                                    <option value="Anton"  <?php if($custom_theme_settings[10]->settings_value == 'Anton'){echo 'selected';}?>>Anton</option>
                                                    <option value="Poppins"  <?php if($custom_theme_settings[10]->settings_value == 'Poppins'){echo 'selected';}?>>Poppins</option>
                                                    <option value="Open Sans"  <?php if($custom_theme_settings[10]->settings_value == 'Open Sans'){echo 'selected';}?>>Open Sans</option>
                                                    <option value="Roboto"  <?php if($custom_theme_settings[10]->settings_value == 'Roboto'){echo 'selected';}?>>Roboto</option>
                                                    <option value="Lato"  <?php if($custom_theme_settings[10]->settings_value == 'Lato'){echo 'selected';}?>>Lato</option>
                                                    <option value="Raleway"  <?php if($custom_theme_settings[10]->settings_value == 'Raleway'){echo 'selected';}?>>Raleway</option>
                                                    <option value="Leckerli One"  <?php if($custom_theme_settings[10]->settings_value == 'Leckerli One'){echo 'selected';}?>>Leckerli One</option>
                                                    <option value="Sofia"  <?php if($custom_theme_settings[10]->settings_value == 'Sofia'){echo 'selected';}?>>Sofia</option>
                                                </select>
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('paragraph_font');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label> <?php echo lang('counter.paragraph_font_weight');?></label> 
                                                <select class="form-control" name="paragraph_font_weight">
                                                    <option value="">Select Font Weight</option>
                                                    <option value="300" <?php if($custom_theme_settings[11]->settings_value == '300'){echo 'selected';}?>>300</option>
                                                    <option value="400" <?php if($custom_theme_settings[11]->settings_value == '400'){echo 'selected';}?>>400</option>
                                                    <option value="500" <?php if($custom_theme_settings[11]->settings_value == '500'){echo 'selected';}?>>500</option>
                                                    <option value="600" <?php if($custom_theme_settings[11]->settings_value == '600'){echo 'selected';}?>>600</option>
                                                    <option value="700" <?php if($custom_theme_settings[11]->settings_value == '700'){echo 'selected';}?>>700</option>
                                                    <option value="800" <?php if($custom_theme_settings[11]->settings_value == '800'){echo 'selected';}?>>800</option>
                                                    <option value="900" <?php if($custom_theme_settings[11]->settings_value == '900'){echo 'selected';}?>>900</option>  
                                                </select>
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('paragraph_font_weight');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 mb-4">
                                          <div class="from-group">
                                                <label><?php echo lang('counter.paragraph_font_color');?></label> 
                                                <input type="text" name="paragraph_font_color" class="form-control colorpicker-common" value="<?php echo $custom_theme_settings[12]->settings_value;?>">

                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('paragraph_font_color');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.paragraph_font_style');?></label> 
                                                <select class="form-control" name="paragraph_font_style">
                                                    <option value="">Select Font Style</option>
                                                    <option value="normal" <?php if($custom_theme_settings[13]->settings_value == 'normal'){echo 'selected';}?>>normal</option>
                                                    <option value="italic" <?php if($custom_theme_settings[13]->settings_value == 'italic'){echo 'selected';}?>>italic</option>
                                                    <option value="oblique" <?php if($custom_theme_settings[13]->settings_value == 'oblique'){echo 'selected';}?>>oblique</option>
                                                    <option value="initial" <?php if($custom_theme_settings[13]->settings_value == 'initial'){echo 'selected';}?>>initial</option>
                                                    <option value="inherit" <?php if($custom_theme_settings[13]->settings_value == 'inherit'){echo 'selected';}?>>inherit</option>
                                                </select>
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('paragraph_font_style');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.social_text_color');?></label> 
                                                <input type="text" name="social_text_color" class="form-control colorpicker-common" value="<?php echo $custom_theme_settings[14]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_color');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6  mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.social_background_color');?></label> 
                                                <input type="text" name="social_background_color" class="form-control colorpicker-common" value="<?php echo $custom_theme_settings[15]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_image');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.social_border_color');?></label> 
                                                <input type="text" name="social_boder_color" class="form-control colorpicker-common" value="<?php echo $custom_theme_settings[16]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_color');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6  mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.social_hover_text_color');?></label> 
                                                <input type="text" name="social_hover_text_color" class="form-control colorpicker-common" value="<?php echo $custom_theme_settings[17]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_image');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.social_hover_background_color');?></label> 
                                                <input type="text" name="social_hover_background_color" class="form-control colorpicker-common" value="<?php echo $custom_theme_settings[18]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_color');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                        <div class="col-md-6  mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.social_hover_border_color');?></label> 
                                                <input type="text" name="social_hover_border_color" class="form-control colorpicker-common" value="<?php echo $custom_theme_settings[19]->settings_value;?>">
                                                <small style="color:red;" class="text-danger">
                                                <?php if (isset($validation)) {
                                                        echo $validation->getError('background_image');
                                                        } ?>
                                                </small> 
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                 
                                <div class="col-md-6 mb-4">
                                            <div class="from-group">
                                                <label><?php echo lang('counter.custom_theme');?></label> 
                                            </div>
                                            <div class="col-4">
                                                <div class="from-group  mb-4">
                                                   <?php if($custom_theme_settings[4]->settings_value=='yes') {?>    
                                                  <input class="form-check form-switch" type="checkbox" name="default_theme" value="yes" id="switch1" switch="bool" checked>
                                                    <label class="form-label" for="switch1" data-on-label="" data-off-label=""></label>
                                                    <?php } else{?>
                                                    <input class="form-check form-switch" type="checkbox" name="default_theme" value="yes" id="switch1" switch="bool">
                                                    <label class="form-label" for="switch1" data-on-label="" data-off-label=""></label>                        
                                                    <?php } ?>
                                                </div> 
                                            </div>
                                        </div>

                            </div>
                            <button class="btn btn-primary" type="submit"> <i class="ri-check-fill  me-2"></i><?php echo lang('counter.save_settings');?></button>
                        </form>
                   </div>
               </div>
           </div>
       </div>
        
        <!-- end row -->  
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<script>

<?php if($custom_theme_settings[20]->settings_value == 'yes'){ ?>
    $('.background_embeded').css('display','none');
<?php } ?>
<?php if($custom_theme_settings[20]->settings_value == 'no'){ ?>
    $('.background_video').css('display','none');
<?php } ?>

<?php if($custom_theme_settings[3]->settings_value == 'yes'){ ?>
    $('.show_bg_image').css('display','none');
<?php } ?>
<?php if($custom_theme_settings[3]->settings_value == 'no'){ ?>
    $('.show_bg_embeded').css('display','none');
<?php } ?>



$('.choose_embed_or_video').click(function() {
   
     if($(this).prop("checked")){
       $('.background_video').show();
       $('.background_embeded').hide();
     }
     else
     {
        $('.background_embeded').show();
        $('.background_video').hide();
     }    
})//background_video

   $('.check_color').click(function(){
     
  if($(this).prop("checked")) {
    $('.show_bg_color').show();
  } else {
    $('.show_bg_color').hide();
  }
});
//for video 

$('.check_video').click(function(){
 
  if($(this).prop("checked")) {
    $('.show_bg_embeded').show();
    $('.show_bg_image').hide();
  } else {
    $('.show_bg_image').show();
    $('.show_bg_embeded').hide();
  }
});


</script>   

<?php echo $this->endSection()?>