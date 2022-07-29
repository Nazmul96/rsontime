<!doctype html>
<?php if($General_setting[5]->settings_value == 'yes'){?>
<html lang="en" dir="rtl">
<?php } else {?>
  <html lang="en">
  <?php } ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?php echo $Seo_setting[1]->settings_value?>">
    <meta name="author" content="<?php echo $Seo_setting[2]->settings_value?>"> 
    <meta name="description" content="<?php echo $Seo_setting[4]->settings_value?>">
    <meta name="<?php echo $Seo_setting[5]->settings_value?>" content="<?php echo $Seo_setting[6]->settings_value?>" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- theme 3 --> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/theme3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/lightbox.min.css">

    <script src="<?php echo base_url();?>/frontend/assets/js/jquery-3.3.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title><?php echo $Seo_setting[0]->settings_value?></title>

    <style>
   	iframe {
    display: block;       /* iframes are inline by default */
    border: none;         /* Reset default border */
    height: 100vh;        /* Viewport-relative units */
    width: 100vw;
   }
 </style>
 
 <?php if($General_setting[6]->settings_value == 'yes'){?>
      <?php echo $chat_setting[0]->settings_value;?>
<?php } ?>
  </head>
  <?php if(($Custom_theme_settings[3]->settings_value == 'yes')&&($Custom_theme_settings[4]->settings_value == 'yes')){?>
    <body class="theme3 video">
 <?php } else {?>
   <body class="theme3">
  <?php } ?> 
     <div class="videobg">
      <?php
      $search='https://www.youtube-nocookie.com/embed/code?rel=0&autoplay=1&mute=1&controls=0&loop=1&showinfo=1&playlist=mIjP6eWoHAc'; 
      $replace=$Custom_theme_settings[2]->settings_value;
      $value=str_replace("code",$replace,$search);
      
      ?>
       <?php if($Custom_theme_settings[20]->settings_value == 'yes'){?>
      <video autoplay muted loop id="myVideo">
        <source src="<?php echo base_url();?>/frontend/assets/video/<?php echo $Custom_theme_settings[2]->settings_value?>" type="video/mp4">
      </video>
      <?php } else {?>
      <iframe src="<?php echo $value?>" stitle="YouTube video player" frameborder="0"  allowfullscreen></iframe>
      <?php } ?>
    </div>
  <input type="hidden" name="" id="date_value" value="<?php echo $Counter_settings[0]->settings_value;?>"> 
    <section class="countdownSection">
      <div class="decorations">
        <div class="decoration" data-pos="bottom left"></div>
        <div class="decoration" data-pos="top right"></div>
        <div class="snow"></div>
        
        <div class="santaWrapper">
          <div class="santa">
            <div class="hat">
              <div></div>
              <div></div>
            </div>
            <div class="face">
              <div class="eyeBrows left"></div>
              <div class="eyeBrows right"></div>
              <div class="eye left"></div>
              <div class="eye right"></div>
              <div class="nose"></div>
              <div class="cheek left"></div>
              <div class="cheek right"></div>
              <div class="beard">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>
            <div class="body">
              <div class="sweater"></div>
              <div class="hand left">
                <div class="inner"></div>
              </div>
              <div class="hand right"></div>
            </div>
          </div>
          <div class="rope"></div>
          <div class="rope back"></div>
          <div class="sled"></div>
          <div class="reindeer">
            <div class="face">
              <div class="ear"></div>
              <div class="horn right"></div>
              <div class="horn left"></div>
            </div>
            <div class="body">
              <div class="foot front">
                <div class="inner">
                  <div class="extension"></div>
                </div>
              </div>
              <div class="foot back">
                <div class="inner">
                  <div class="extension"></div>
                </div>
              </div>
              <div class="tail"></div>
            </div>
          </div>
          <div class="reindeer second">
            <div class="rope"></div>
            <div class="face">
              <div class="ear"></div>
              <div class="horn right"></div>
              <div class="horn left"></div>
            </div>
            <div class="body">
              <div class="foot front">
                <div class="inner">
                  <div class="extension"></div>
                </div>
              </div>
              <div class="foot back">
                <div class="inner">
                  <div class="extension"></div>
                </div>
              </div>
              <div class="tail"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="counterWrapper">
            <?php if($General_setting[0]->settings_value == 'yes'){?>
              <p><?php echo $Counter_settings[2]->settings_value;?></p>
              <?php } ?>
          <div class="countdown"></div>
          <?php if($General_setting[1]->settings_value == 'yes'){?>
              <p><?php echo $Counter_settings[3]->settings_value;?></p>
              <?php } ?>
        </div>
      </div>
    </section>
    <div class="social_share">
            <?php if($General_setting[3]->settings_value == 'yes'){?>
              
            <a href="<?php echo $social_setting[0]->settings_value?>"><i class="lab la-facebook-f"></i></a>
            <a href="<?php echo $social_setting[1]->settings_value?>"><i class="lab la-twitter"></i></a>
            <a href="<?php echo $social_setting[3]->settings_value?>"><i class="lab la-youtube"></i></a>
            <a href="<?php echo $social_setting[2]->settings_value?>"><i class="lab la-linkedin-in"></i></a>

              <?php } ?>
   </div>        
    <div class="subscription_button">
      <i class="las la-bell"></i>
    </div>
    <div class="subscription_contant_area">
        <div class="subscription_contant">
            <form  action="<?php echo base_url();?>/" method="post" class="subscribe_submit">
                <h4>Stay Tuned</h4>
                <p>We launch our new website soon. Please stay updated and follow!</p>
                <input type="hidden" name="subscribe" value="subscribe">
                <input type="email" name="email_address" placeholder="Enter your email address">
                <h5 id="mgs" style="color:red;"></h5>
                <h4 id="mgs_success" style="color:green;"></h4> 
                <button type="submit">Get Notified</button>
                <small style="color:red;" class="text-danger">
                <?php if (isset($validation)) {
                          echo $validation->getError('email_address');
                          } ?>
                </small> 
            </form>
            <span class="close_model"><i class="las la-window-close"></i></span>          
        </div>

    </div>
    <?php if($General_setting[4]->settings_value == 'yes'){?>
    <ul class="menu"> 
      <li>
        <a href="javascript:void(0)">Our Company</a>
      </li>
      <li>
        <a href="javascript:void(0)">Contact</a>
      </li>
    </ul>
    <ul class="new_menu">
     <li>
       <a href="javascript:void(0);" class="gallery_button">Gallery</a> 
      </li>
    </ul>
    <?php } ?>
  
                
    <div class="gallery model">
    <div class="gallery_content">
    <h3>Gallery</h3>
    <div class="gallery_grid">
            <?php
              if (!empty($files)) {
              foreach ($files as $row) {
              ?>
          <a href="<?php echo base_url();?>/image/gallery_image/<?php echo $row->images;?>" data-lightbox="image-1" data-title="Work 1">
          <img src="<?php echo base_url();?>/image/gallery_image/<?php echo $row->images;?>">
        </a>
              <?php
                }
              }   
            ?>
    </div>
    </div>
    <span class="gallery_close_model"><i class="las la-window-close"></i></span>
    </div>
    <div class="company_details">
        <div class="company_details_content"> 
           <!-- About -->
           <div id="about-area">
              <!-- Title -->
                <h3>About</h3> 
                <p><?php echo $About_us_details[1]->settings_value;?></p>
                
           </div>
           
           <!-- Get in touch -->
           <div id="contact-area">
              <!-- Title -->
               <h3>Get in Touch</h3>
              <div class="contact_item_list">
                 <div class="contact_item">
                    <h5><i class="las la-map-marked-alt"></i></h5>
                    <h5>Address</h5>
                    <p><?php echo $Contact_us_details[5]->settings_value;?></p>
                 </div>
                 <div class="contact_item">
                    <h5><i class="las la-phone"></i></h5>
                    <h5>Phone</h5>
                    <p>
                  T. <a href="tel:01%2023%20456%2078%2099%201"><?php echo $Contact_us_details[3]->settings_value;?></a><br>
                  M. <a href="tel:012313547987"><?php echo $Contact_us_details[4]->settings_value;?></a><br>
               </p>
                 </div>
                 <div class="contact_item">
                    <h5><i class="las la-envelope"></i></h5>
                    <h5>Say Hello</h5>
                    <p>
                       <a href="mailto:<?php echo $Contact_us_details[1]->settings_value;?>"><?php echo $Contact_us_details[1]->settings_value;?></a><br>
                       <a href="mailto:<?php echo $Contact_us_details[2]->settings_value;?>"><?php echo $Contact_us_details[2]->settings_value;?></a>
                    </p>
                 </div>
              </div>
           </div>
           <!-- Contact form -->
           <div id="contact-form-area"> 
                <div class="contact-form-holder">
                  <form action="<?php echo base_url();?>/" method="post" id="contact_submit"> 
                      <input type="hidden" name="contact" value="contact">    
                      <input type="text" name="name" class="field-name" placeholder="Name">
                      <span id="mgs1" style="color:red;"></span>
                      <small style="color:red;" class="text-danger">       
                          <?php if (isset($validation)) {
                            echo $validation->getError('name');
                            } ?>
                    </small> 
                      <input type="email" name="email" class="field-email" placeholder="Email">
                      <span id="mgs2" style="color:red;"></span>
                      <small style="color:red;" class="text-danger">       
                          <?php if (isset($validation)) {
                            echo $validation->getError('email');
                            } ?>
                    </small> 
                      <input type="text" name="phone" class="field-phone" placeholder="Phone">
                      <small style="color:red;" class="text-danger">       
                          <?php if (isset($validation)) {
                            echo $validation->getError('phone');
                            } ?>
                    </small> 
                      <textarea name="description" class="field-message" placeholder="Message"></textarea>
                      <span id="mgs3" style="color:red;"></span> 
                      <small style="color:red;" class="text-danger">       
                          <?php if (isset($validation)) {
                            echo $validation->getError('description');
                            } ?>
                    </small>
                    <!-- Submit Button --> 
                      <button type="submit" class="action-btn" id="contact-submit">Send Message  </button> 
                  </form>
                  <span id="success_message" style="color:green;"></span> 
                <?php if($Contact_us_details[10]->settings_value == 'yes'){?>  
                  <div class="g-recaptcha" data-sitekey="<?php echo $Contact_us_details[11]->settings_value;?>" align="left" style="margin-top:10px;"></div> 
                  <span id="capcha" style="color:red;"></span>
                  <span id="capcha_error_found" style="color:red;"></span>
                <?php } ?>    
                </div>
                <!-- Submit Results -->  
                <div class="card-body" id="geomap" style="width:100%;height:400px;">

        
     

              </div>
           </div>
           <span class="conatct_close_model"><i class="las la-window-close"></i></span>
        </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="<?php echo base_url();?>/frontend/assets/js/lightbox.min.js"></script>
    <script src="<?php echo base_url();?>/frontend/assets/js/theme3.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=NJvSJvVB85MFk1eWpMK6glnkg6I7EdMqC1XVkW7RxLheXwmFdG03qScCM7gKS&libraries=places"></script>
    <script>
        
             //for lightbox plugin-----
             lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
          })
        
          $('.model').hide();
          $('.model.active').show();
           // gallery
           $(document).on('click', '.gallery_button', function(){  
              $('.model').removeClass('active');
              $('.gallery').show('slow');
              $('.gallery').addClass('active');
              $('.close_model').show();
              $('.menu_list a').removeClass('active');
              $('.menu_list a.gallery_button').addClass('active');
            }) 

                  
                $('.subscribe_submit').submit(function(e) {
                  e.preventDefault();
                  // alert('hii');
                  //alert(abc);
                  var url = $(this).attr('action');
                  var request = $(this).serialize();
                  $.ajax({
                    url: url,
                    type: 'post',
                    async: false,
                    data: request,
                    dataType: 'JSON',
                    success: function(data) {
                      //console.log(data);
                      if (data.success == true) {
                        $('.subscribe_submit')[0].reset();
                        if (data.message != '') {
                            $('#mgs').html('');
                            $('#capcha').html('');
                            $('#mgs_success').html(data.message);
                            }
                        else {
                            $('#mgs_success').html('');
                          }   
                      }
                       if (data.success == false) {
                        if (data.msg != '') {
                            $('#mgs_success').html('');
                            $('#mgs').html(data.msg);
                            }
                      if(data.capcha_error != ''){
                        $('#capcha').html(data.capcha_error);
                        }    
                        else {
                            $('#mgs').html('');
                          }    
                        }
                      }  
                  });
              });
                  $('#contact_submit').submit(function(e) {
                 
                  e.preventDefault();
                  var url = $(this).attr('action');
                  var request = $(this).serialize();

                  var custom_data=request;

                <?php if($Contact_us_details[10]->settings_value == 'yes'){?>  
                  var abc=grecaptcha.getResponse();
                  var custom_data=request +"&recaptcha=" +abc;
                 <?php } ?> 
                  $.ajax({
                    url: url,
                    type: 'post',
                    async: false,
                    data:custom_data,
                    dataType: 'JSON',
                    success: function(data) {
                      //console.log(data);
                      if (data.success == true) {
                        $('#mgs1').html('');
                        $('#mgs2').html('');
                        $('#mgs3').html('');
                        $('#capcha').html('');
                        $('#capcha_error_found').html('');
                        $('#contact_submit')[0].reset();
                        if (data.message != '') {
                            $('#success_message').html(data.message);
                            }
                        else {
                            $('#success_message').html('');
                          }
                      }
                       if (data.success == false) {
                        $('#success_message').html('');
                        if (data.msg1 != '') {
                            $('#mgs1').html(data.msg1);
                            }
                        else {
                            $('#mgs1').html('');
                          } 
                          if (data.msg2 != '') {
                            $('#mgs2').html(data.msg2);
                            }
                        else {
                            $('#mgs2').html('');
                          } 

                          if (data.msg3 != '') {
                            $('#mgs3').html(data.msg3);
                            }
                        else {
                            $('#mgs3').html('');
                          } 

                          if(data.capcha_error != ''){
                          $('#capcha').html(data.capcha_error);
                          }
                          else
                          {
                            $('#capcha').html('');
                          }   
                          if(data.error_message != ''){
                          $('#capcha_error_found').html(data.error_message);
                          }
                          else{
                            $('#capcha_error_found').html('');
                          } 
                        }
                      }  
                  });
              });
    </script>
    
   
    <style>
<?php if($Custom_theme_settings[4]->settings_value == 'yes'){?>
  <?php if($Custom_theme_settings[5]->settings_value == 'yes'){?>
      body{

        background:<?php echo $Custom_theme_settings[0]->settings_value?>;
      }
  <?php } else {?>
        body{
      background:url(<?php echo base_url();?>/image/background_image/<?php echo $Custom_theme_settings[1]->settings_value?>);
      background-repeat: no-repeat;
      background-size: cover; 
      }
   <?php } ?>

   .social_share a {
      <?php if($Custom_theme_settings[14]->settings_value){?>
       color:<?php echo $Custom_theme_settings[14]->settings_value?>;   
      <?Php }?>
      <?php if($Custom_theme_settings[15]->settings_value){?>
       background:<?php echo $Custom_theme_settings[15]->settings_value?>;   
      <?Php }?>
      <?php if($Custom_theme_settings[16]->settings_value){?>
       border:2px solid <?php echo $Custom_theme_settings[16]->settings_value?>;   
      <?Php }?>

      }

      .social_share a:hover {
        <?php if($Custom_theme_settings[17]->settings_value){?>
       color:<?php echo $Custom_theme_settings[17]->settings_value?>;   
      <?Php }?>
      <?php if($Custom_theme_settings[18]->settings_value){?>
       background:<?php echo $Custom_theme_settings[18]->settings_value?>;   
      <?Php }?>
      <?php if($Custom_theme_settings[19]->settings_value){?>
       border:2px solid <?php echo $Custom_theme_settings[19]->settings_value?>;   
      <?Php }?>
      }

  .contact_item_list h5,.subscription_contant h4,.company_details h3{
    <?php if($Custom_theme_settings[6]->settings_value == 'Audiowide'){?>
        font-family: 'Audiowide';  
      <?Php }?>
      <?php if($Custom_theme_settings[6]->settings_value == 'Anton'){?>
        font-family: 'Anton', sans-serif;  
      <?Php }?>
      <?php if($Custom_theme_settings[6]->settings_value == 'Poppins'){?>
        font-family: 'Poppins', sans-serif;
      <?Php }?>
      <?php if($Custom_theme_settings[6]->settings_value == 'Open Sans'){?>
        font-family: 'Open Sans', sans-serif;   
      <?Php }?>
      <?php if($Custom_theme_settings[6]->settings_value == 'Roboto'){?>
        font-family: 'Roboto', sans-serif;
      <?Php }?>
      <?php if($Custom_theme_settings[6]->settings_value == 'Lato'){?>
        font-family: 'Lato', sans-serif; 
      <?Php }?>
      <?php if($Custom_theme_settings[6]->settings_value == 'Raleway'){?>
        font-family: 'Raleway', sans-serif;  
      <?Php }?>
      <?php if($Custom_theme_settings[6]->settings_value == 'Leckerli One'){?>
        font-family: 'Leckerli One', cursive;   
      <?Php }?>
      <?php if($Custom_theme_settings[6]->settings_value == 'Sofia'){?>
        font-family: 'Sofia', cursive;   
      <?Php }?>

      <?php if($Custom_theme_settings[7]->settings_value){?>
      font-weight:<?php echo $Custom_theme_settings[7]->settings_value?>;   
      <?Php }?>

      <?php if($Custom_theme_settings[8]->settings_value){?>
       color:<?php echo $Custom_theme_settings[8]->settings_value?>;   
      <?Php }?>
      
      <?php if($Custom_theme_settings[9]->settings_value){?>
       font-style:<?php echo $Custom_theme_settings[9]->settings_value?>;   
      <?Php }?>
  }
 
    .company_details p,.subscription_contant p,.subscription_contant p{
      <?php if($Custom_theme_settings[10]->settings_value == 'Audiowide'){?>
          font-family: 'Audiowide';  
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Anton'){?>
          font-family: 'Anton', sans-serif;  
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Poppins'){?>
          font-family: 'Poppins', sans-serif;
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Open Sans'){?>
          font-family: 'Open Sans', sans-serif;   
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Roboto'){?>
          font-family: 'Roboto', sans-serif;
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Lato'){?>
          font-family: 'Lato', sans-serif; 
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Raleway'){?>
          font-family: 'Raleway', sans-serif;  
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Leckerli One'){?>
          font-family: 'Leckerli One', cursive;   
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Sofia'){?>
          font-family: 'Sofia', cursive;   
        <?Php }?>

          <?php if($Custom_theme_settings[11]->settings_value){?>
          font-weight:<?php echo $Custom_theme_settings[11]->settings_value?>;   
          <?Php }?>

          <?php if($Custom_theme_settings[12]->settings_value){?>
       color:<?php echo $Custom_theme_settings[12]->settings_value?>;   
      <?Php }?>  

      <?php if($Custom_theme_settings[13]->settings_value){?>
       font-style:<?php echo $Custom_theme_settings[13]->settings_value?>;   
      <?Php }?>
    }


     body p{
      <?php if($Custom_theme_settings[10]->settings_value == 'Audiowide'){?>
          font-family: 'Audiowide';  
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Anton'){?>
          font-family: 'Anton', sans-serif;  
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Poppins'){?>
          font-family: 'Poppins', sans-serif;
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Open Sans'){?>
          font-family: 'Open Sans', sans-serif;   
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Roboto'){?>
          font-family: 'Roboto', sans-serif;
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Lato'){?>
          font-family: 'Lato', sans-serif; 
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Raleway'){?>
          font-family: 'Raleway', sans-serif;  
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Leckerli One'){?>
          font-family: 'Leckerli One', cursive;   
        <?Php }?>
        <?php if($Custom_theme_settings[10]->settings_value == 'Sofia'){?>
          font-family: 'Sofia', cursive;   
        <?Php }?>

          <?php if($Custom_theme_settings[11]->settings_value){?>
          font-weight:<?php echo $Custom_theme_settings[11]->settings_value?>;   
          <?Php }?>

          <?php if($Custom_theme_settings[12]->settings_value){?>
       color:<?php echo $Custom_theme_settings[12]->settings_value?>;   
      <?Php }?>  

      <?php if($Custom_theme_settings[13]->settings_value){?>
       font-style:<?php echo $Custom_theme_settings[13]->settings_value?>;   
      <?Php }?>
      }
<?php } ?>
    </style>
  </body>
</html>