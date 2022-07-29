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
    <!-- theme 4 --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/theme5.css">
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
    <body class="theme4 video">
<?php } else {?>
   <body class="theme4">
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
    <input type="hidden" name="" id="time_value" value="<?php echo $release_time?>"> 
  <div class="container">
  <?php if($Custom_theme_settings[4]->settings_value == 'yes'){?>  
     <?php if($Custom_theme_settings[5]->settings_value =='yes'){?>
        <style>
          body{
            background:<?php echo $Custom_theme_settings[0]->settings_value?>;
          }
        </style>
      <?php } else {?>
          <style>
            body{
              background-image: url(<?php echo base_url();?>/image/background_image/<?php echo $Custom_theme_settings[1]->settings_value?>); 
              background-repeat: no-repeat;
              background-size: cover; 
            }
          </style>
      <?php } ?> 

    <?php } else {?>
      <div class="background_image" style="background:url(<?php echo base_url();?>/frontend/assets/img/bg/b1.jpg) no-repeat; background-size: cover;"></div>

     <?php } ?> 

    <div class="main_content">
      <div id="timer">
        <div id="days"></div>
        <div class="time_small">
            <div id="hours"></div>
            <div id="minutes"></div>
            <div id="seconds"></div>
        </div> 
      </div>
      <div class="other_content">
          <div class="row align-items-end">
            <div class="col-md-6">
              <?php if($General_setting[0]->settings_value == 'yes'){?>
              <h6><?php echo $Counter_settings[2]->settings_value;?></h6>
              <?php } ?>
              <?php if($General_setting[1]->settings_value == 'yes'){?>
              <h3><?php echo $Counter_settings[3]->settings_value;?></h3>
              <?php } ?>
              <?php if($General_setting[2]->settings_value == 'yes'){?>
              <p><?php echo $Counter_settings[4]->settings_value;?></p>
              <?php } ?>
            </div> 
            <div class="col-md-6">
              <div class="social_list"> 
              <?php if($General_setting[3]->settings_value == 'yes'){?>
              
                <a href="<?php echo $social_setting[0]->settings_value?>"><i class="lab la-facebook-f"></i></a>
            <a href="<?php echo $social_setting[1]->settings_value?>"><i class="lab la-twitter"></i></a>
            <a href="<?php echo $social_setting[3]->settings_value?>"><i class="lab la-youtube"></i></a>
            <a href="<?php echo $social_setting[2]->settings_value?>"><i class="lab la-linkedin-in"></i></a>

              <?php } ?>
             
              </div>
            </div>
          </div>
          
      </div>
    </div>
    
    <div class="effect">
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
        <div class="circle-container">
          <div class="circle"></div>
        </div>
    </div>
    
  </div>
  <?php if($General_setting[4]->settings_value == 'yes'){?>
    <div class="menu_list">
    <a href="javascript:;" class="aboutus"> <i class="las la-info"></i> <span>ABOUT US</span> </a>
    <a href="javascript:;" class="contactus"> <i class="las la-phone-volume"></i> <span> CONTACT US </span></a>
    <a href="javascript:;" class="stayinus"> <i class="las la-envelope"></i> <span>  STAY IN US </span></a>
    <a href="javascript:;" class="gallery_button"> <i class="las la-image"></i> <span>Gallery</span></a>
  </div>
  <?php } ?>
  <div id="about_us">
    <div class="content_details">
        <h1>About Us</h1>
        <h4><?php echo $About_us_details[0]->settings_value;?></h4>
        <p><?php echo $About_us_details[1]->settings_value;?></p>
    </div>
  </div>

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
    <span class="hidemodel_new" ><i class="las la-window-close"></i></span>
    </div>
    
<div id="contact_us">
  <div class="content_details">
      <h1>Contact Us</h1>
      <div class="content_details_new">
        <form action="<?php echo base_url();?>/" method="post" id="contact_submit">
         <input type="hidden" name="contact" value="contact">
          <div class="from-group"> 
            <input type="text" name="name" placeholder="Name">
            <span id="mgs1" style="color:red;"></span>
            <small style="color:red;" class="text-danger">       
                <?php if (isset($validation)) {
                  echo $validation->getError('name');
                  } ?>
          </small> 
          </div>
          <div class="from-group">
            <input type="email" name="email" placeholder="Email">
            <span id="mgs2" style="color:red;"></span>
            <small style="color:red;" class="text-danger">       
                <?php if (isset($validation)) {
                  echo $validation->getError('email');
                  } ?>
          </small> 
          </div>
          <div class="from-group"> 
            <textarea rows="3" name="description" placeholder="Description"></textarea>
          </div>
          <span id="mgs3" style="color:red;"></span>
          <small style="color:red;" class="text-danger">       
                <?php if (isset($validation)) {
                  echo $validation->getError('description');
                  } ?>
          </small> 
          <div class="">
            <button type="submit">Submit</button>
          </div>
        </form>
        <span id="success_message" style="color:green;"></span>
      <?php if($Contact_us_details[10]->settings_value == 'yes'){?>   
        <div class="g-recaptcha" data-sitekey="<?php echo $Contact_us_details[11]->settings_value;?>" align="left" style="margin-top:10px;"></div> 
        <span id="capcha" style="color:red;"></span>
        <span id="capcha_error_found" style="color:red;"></span> 
      <?php } ?>  
        </div>
      <div class="row" style="margin-top:5px;">
        <div class="col-md-6">
          <div class="mb-4">
            <h4>EMAIL</h4>
            <p><?php echo $Contact_us_details[1]->settings_value;?></p>
            <p><?php echo $Contact_us_details[2]->settings_value;?></p>
          </div>
          <div class="mb-4">
            <h4>ADDRESS</h4>
            <p><?php echo $Contact_us_details[5]->settings_value;?></p>
            <p><?php echo $Contact_us_details[6]->settings_value;?></p>
          </div>
          <div class="mb-4">
            <h4>PHONE</h4>
            <p><?php echo $Contact_us_details[3]->settings_value;?></p>
            <p><?php echo $Contact_us_details[4]->settings_value;?></p>
          </div> 
        </div>
        <div class="col-md-6 text-md-right">
          <div class="mb-4">
            <h4>WEBSITE</h4>
            <p> <a href="<?php echo $Contact_us_details[7]->settings_value;?>"><?php echo $Contact_us_details[7]->settings_value;?></a></p>
          </div>
          <div class="mb-4">
            <h4>FIND US ON</h4>
            <div>
            <a href="<?php echo $social_setting[0]->settings_value?>"><i class="lab la-facebook-f"></i></a>
            <a href="<?php echo $social_setting[1]->settings_value?>"><i class="lab la-twitter"></i></a>
            <a href="<?php echo $social_setting[3]->settings_value?>"><i class="lab la-youtube"></i></a>
            <a href="<?php echo $social_setting[2]->settings_value?>"><i class="lab la-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<div id="subscribe_form">
    <div class="content_details">
      <h1>REGISTER TO GET OUR LATEST NEWS</h1>
      <p>Please, write your email below to stay in touch with us</p>
      <form action="<?php echo base_url();?>/" method="post" class="subscribe_submit">
         <input type="hidden" name="subscribe" value="subscribe">
          <input type="email" placeholder="Enter Your Email" name="email_address">
          <h5 id="mgs" style="color:red;"></h5>
          <h4 id="mgs_success" style="color:green;"></h4> 
          <button type="submit">
              <i class="las la-sign-out-alt"></i>
          </button>
          <small style="color:red;" class="text-danger">
          <?php if (isset($validation)) {
                    echo $validation->getError('email_address');
                    } ?>
          </small> 
      </form>
    </div>
</div>

  <span class="hidemodel"><i class="las la-window-close"></i></span>

  <script src="<?php echo base_url();?>/frontend/assets/js/lightbox.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/frontend/assets/js/theme5.js"></script>
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
              $('.hidemodel_new').show('slow')
              $('.gallery').addClass('active');
              $('.close_model').show();
              $('.menu_list a').removeClass('active');
              $('.menu_list a.gallery_button').addClass('active');
            }) 

           

      $('.subscribe_submit').submit(function(e) {
                  e.preventDefault();
                  var abc=grecaptcha.getResponse();
                  //alert('hi');
                  
                  var url = $(this).attr('action');
                  var request = $(this).serialize();
                  //console.log(abc);
                  $.ajax({
                    url: url,
                    type: 'post',
                    async: false,
                    data: request +"&recaptcha=" +abc,
                    dataType: 'JSON',
                    success: function(data) {
                      console.log(data);
                      if (data.success == true) {
                        $('.subscribe_submit')[0].reset();
                        if (data.message != '') {
                            $('#mgs').html('');
                            $('#mgs_success').html(data.message);
                            }
                        else {
                            $('#mgs_success').html('');
                          }   
                      }
                       if (data.success == false) {
                        if (data.msg != '') {
                            $('#mgs_success').html('');
                            $('#mgs').html('');
                            $('#mgs').html(data.msg);
                            }   
                        else {
                            $('#mgs').html('');
                          }    
                        }
                      }  
                  });
              });

              $('#contact_submit').submit(function(e) {
                //alert('hii');
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
                    data: custom_data,
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

                       //error message show-------
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
    <?php if($Custom_theme_settings[4]->settings_value == 'yes'){?>
    <style>
      .social_list a {
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

      .social_list a:hover {
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
   
    h1,h2,h3,h4,h5,h6{
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

      p{
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
    </style>

    <?php } ?>
  </body>
</html>