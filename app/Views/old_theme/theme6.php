<!doctype html>
<?php if($General_setting[5]->settings_value == 'yes'){?>
<html lang="en" dir="rtl">
<?php } else {?>
  <html lang="en">
  <?php } ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   

    <!-- theme 1 CSS --> 
    <!-- jQuery Classy Countdown CSS -->
    
    <!-- theme 6 --> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.classycountdown@1.0.1/css/jquery.classycountdown.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/theme7.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/style.css">
    
    <script src="<?php echo base_url();?>/frontend/assets/js/jquery-3.3.1.min.js"></script> 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
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
   <body class="theme7">
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
    <?php if($Custom_theme_settings[4]->settings_value == 'yes'){?>
      <?php if($Custom_theme_settings[5]->settings_value =='yes'){?>
        <style>
          .theme7{
            background:<?php echo $Custom_theme_settings[0]->settings_value?>;
          }
        </style>
      <?php } else {?>
          <style>
            .theme7{
              background-image: url(<?php echo base_url();?>/image/background_image/<?php echo $Custom_theme_settings[1]->settings_value?>); 
              background-repeat: no-repeat;
              background-size: cover; 
            }
          </style>
      <?php } ?> 
    <?php } else {?>
      <div class="bg" style="background: url(<?php echo base_url();?>/frontend/assets/img/bg/b18.jpg);">  </div>
       <div class="patter_bg" style="background:#000">  </div>
    <?php } ?>


    <input type="hidden" name="" id="date_value" value="<?php echo $Counter_settings[0]->settings_value;?>"> 
    <input type="hidden" name="" id="time_value" value="<?php echo $release_time?>"> 
   <div class="lines">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
    
    <div class=" theme7_content">
        <div class="home_content   model active">
          <div class="theme7_content_area">
              <h2>We are coming soon</h2>
              <br>
              <br>
               <div id="timer">
        <div id="days" class="bb"></div>
        <div class="time_small">

            <div id="hours"></div>
            <div id="minutes"></div>
            <div id="seconds"></div>
        </div> 
      </div>
            <br>
          
          <div class="subscription_form">
            <p>get notified when we are ready</p>
            <form action="<?php echo base_url();?>/" method="post" class="subscribe_submit">
                <input type="hidden"  name="subscribe" value="subscribe"> 
                <input type="email" name="email_address" placeholder="Enter your email address">
                <button type="submit">Get Notified</button>
            </form>
            <span id="mgs" style="color:red;"></span>
            <span id="mgs_success" style="color:white;"></span> 
          </div>
           
           
          </div>
  
        </div> 
           <div class="social_list">
              <?php if($General_setting[3]->settings_value == 'yes'){?>        
                <a href="<?php echo $social_setting[0]->settings_value?>"><i class="lab la-facebook-f"></i></a>
                <a href="<?php echo $social_setting[1]->settings_value?>"><i class="lab la-twitter"></i></a>
                <a href="<?php echo $social_setting[3]->settings_value?>"><i class="lab la-youtube"></i></a>
                <a href="<?php echo $social_setting[2]->settings_value?>"><i class="lab la-linkedin-in"></i></a>
              <?php } ?>
            </div>
          <?php if($General_setting[4]->settings_value == 'yes'){?>
            <div class="menu_list">
               <a href="javascript:;" class="Home_button active">Home</a>
              <a href="javascript:;" class="about_us_button">About Us</a>
              <a href="javascript:;" class="conatct_us_button">Contact Us</a>
              <a href="javascript:;" class="gallery_button">Gallery</a>
            </div>
          <?php } ?>   
    <div class="about_us model">
      <div class="about_us_content">
        <h3>About Us</h3>
        <p><?php echo $About_us_details[1]->settings_value;?></p>
      </div>
    </div>
  
  <div class="conatct_us model">
      <div class="conatct_us_content">
        <h3>Contact Us</h3>
        <p><?php echo $Contact_us_details[9]->settings_value;?></p>
        <form action="<?php echo base_url();?>/" method="post" class="contact_submit">
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
        <span id="success_message" style="color:white;"></span> 
      <?php if($Contact_us_details[10]->settings_value == 'yes'){?>  
        <div class="g-recaptcha ml-5" data-sitekey="<?php echo $Contact_us_details[11]->settings_value;?>" align="center"></div> 
        <span id="capcha" style="color:red;"></span>
        <span id="capcha_error_found" style="color:red;"></span>
      <?php } ?>  
        <div class="contact_details">
         <div class="contact_details_item">
            
            <div class="p-t-b-15">
               <h3>ADDRESS</h3>
               <p><?php echo $Contact_us_details[5]->settings_value;?></p>
            </div>
         </div>
         <div class="contact_details_item">
         
            <div class="p-t-b-15">
               <h3>DIRECT CONTACT</h3>
               <p>
               T. <a href="tel:01%2023%20456%2078%2099%201"><?php echo $Contact_us_details[3]->settings_value;?></a><br>
               M. <a href="tel:012313547987"><?php echo $Contact_us_details[4]->settings_value;?></a><br>
               </p>
            </div>
         </div>
         <div class="contact_details_item">
             
            <div class="p-t-b-15">
               <h3>WEB CONTACTS</h3>
               <p>
               <a href="<?php echo $Contact_us_details[7]->settings_value;?>"><?php echo $Contact_us_details[7]->settings_value;?></a>
               </p>
            </div>
         </div>

      </div>
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
    </div>
 </div>
 
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js" ></script>
    <!-- jQuery throttle-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
 
    <script src="<?php echo base_url();?>/frontend/assets/js/theme7.js"></script>
    <script src="<?php echo base_url();?>/frontend/assets/js/lightbox.min.js"></script>
    <script>

        $(document).ready(function(){ 
          /*
// jQuery plugin example:*/ 
 
 
  $('.intro').css({
    'margin-top': -($('.intro').height() / 2)
  }); 

          lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
          })
      

            $('.model').hide();
              $('.model.active').show();
              

             $(document).on('click', '.Home_button', function(){ 
              $('.model').removeClass('active');
              $('.menu_list a').removeClass('active');
              $('.menu_list a.Home_button').addClass('active');
              $('.home_content').show('slow');
              $('.home_content').addClass('active'); 
              $('.close_model').show(); 
            }) 
            $(document).on('click', '.about_us_button', function(){ 
              $('.model').removeClass('active');
              $('.menu_list a').removeClass('active');
              $('.menu_list a.about_us_button').addClass('active');
              $('.about_us').show('slow');
              $('.about_us').addClass('active'); 
              $('.close_model').show(); 
            }) 
            $(document).on('click', '.conatct_us_button', function(){  
              $('.model').removeClass('active');
              $('.conatct_us').show('slow');
              $('.conatct_us').addClass('active');
              $('.close_model').show();
              $('.menu_list a').removeClass('active');
              $('.menu_list a.conatct_us_button').addClass('active');
            })

            // gallery
             $(document).on('click', '.gallery_button', function(){  
              $('.model').removeClass('active');
              $('.gallery').show('slow');
              $('.gallery').addClass('active');
              $('.close_model').show();
              $('.menu_list a').removeClass('active');
              $('.menu_list a.gallery_button').addClass('active');
            }) 
            $(document).on('click', '.close_model', function(){ 
              $('.subscription_contant_area').hide();
               $('.subscription_contant_area').removeClass('active');
              $('.close_model').hide();
            })

              //subscription form----------
               $('.subscribe_submit').submit(function(e) {
                  e.preventDefault();
                  var url = $(this).attr('action');
                  var request = $(this).serialize();
                  $.ajax({
                    url: url,
                    type: 'post',
                    async: false,
                    data: request,
                    dataType: 'JSON',
                    success: function(data) {
                      console.log(data);
                      if (data.success == true) {
                        $('#mgs').html('');
                        $('.subscribe_submit')[0].reset();
                        if (data.message != '') {
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
            //contact form----------
            $('.contact_submit').submit(function(e) {
                  e.preventDefault();
                  //alert('hhiii');
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
                        $('.contact_submit')[0].reset();
                        if (data.message != '') {
                           $('#success_message').html('');
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
                          if (data.msg3 != '') {
                            $('#mgs3').html(data.msg3);
                            }
                        else {
                            $('#mgs3').html('');
                          } 
                        }
                      }  
                  });
              });

            

        });
    </script>

<?php if($Custom_theme_settings[4]->settings_value == 'yes'){?>  
    <style>    
   h1,h2,h3,h4,h5{
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

      .theme7_content_area h2{
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

      .theme7_content_area p,.about_us_content p,.conatct_us p {
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
    </style>
    <?php } ?>
  </body>
</html>