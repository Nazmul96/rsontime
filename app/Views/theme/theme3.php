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
    <meta name="<?php echo $Seo_setting[5]->settings_value?>" content="<?php echo $Seo_setting[6]->settings_value?>"/>
    <!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/frontend/assets/img/favicon.ico">
    <!-- theme 4 -->  
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/theme4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/style.css"> 
    
    <title><?php echo $Seo_setting[0]->settings_value?></title> 

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
      <div class="row">
        <div class="col-md-6">
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
                  background: url(<?php echo base_url();?>/image/background_image/<?php echo $Custom_theme_settings[1]->settings_value?>);
                  background-repeat: no-repeat;
                  background-size: cover; 
                }
              </style>
            <?php } ?>  
        <?php } else {?>
            <div class="overlay" style="background: url(<?php echo base_url();?>/frontend/assets/img/pattern/pattern_3.png) repeat; opacity: .6;"></div> 
            <div class="image-bg-left" style="background: url(<?php echo base_url();?>/frontend/assets/img/bg/b2.jpg"></div>
          <?php }?>  
          <div class="left-content"> 
            <div>
              <div class="main-logo">
                <a href="#"><img src="<?php echo base_url();?>/frontend/assets/img/demo2.png" alt="Logo"></a>
              </div>
              <span class="subtle">We are busy working on something awesome.</span>
              <h1>
                Stay Safe |  Stay Home
              </h1>
            </div>
          </div>  
        </div> 
        <div class="col-md-6 p-0">
            <div class="countdown_content text-center d-flex align-items-center justify-content-center"> 
              <div>
              <?php if($General_setting[0]->settings_value == 'yes'){?>
              <h2><?php echo $Counter_settings[2]->settings_value;?></h2>
              <?php } ?>
                <div class="flipclock" id="flipclock-1"></div>  
                <div class="p-5">
                <?php if($General_setting[2]->settings_value == 'yes'){?>
              <p><?php echo $Counter_settings[4]->settings_value;?></p>
              <?php } ?>
                  <div class="subscribe_form">
                      <form action="<?php echo base_url();?>/" method="post" class="subscribe_submit">
                         <input type="hidden"  name="subscribe" value="subscribe">  
                          <input type="email" placeholder="Enter Your Email" name="email_address">
                          <button type="submit">
                              <i class="las la-sign-out-alt"></i>
                          </button> 
                      </form>
                      <span id="mgs" class="text-danger"></span>
                      <span id="mgs_success" class="text-success"></span> 
                  </div>
                  <?php if($General_setting[3]->settings_value == 'yes'){?>
                  <div class="social_list">
                    <h5>Stay In Touch : </h5>
                    <a href="<?php echo $social_setting[0]->settings_value?>" target="_blank"><i class="lab la-facebook-f"></i></a>
                    <a href="<?php echo $social_setting[1]->settings_value?>" target="_blank"><i class="lab la-twitter"></i></a>
                    <a href="<?php echo $social_setting[3]->settings_value?>" target="_blank"><i class="lab la-youtube"></i></a>
                    <a href="<?php echo $social_setting[2]->settings_value?>" target="_blank"><i class="lab la-linkedin-in"></i></a>
                  </div>
                  <?Php } ?>
                  
                  <?php if($General_setting[4]->settings_value == 'yes'){?> 
                   <div class="menu_list mt-4">
                  <a href="javascript:;" class="about_us_button"> <i class="las la-info"></i> <span>ABOUT US</span> </a>
                  <a href="javascript:;" class="conatct_us_button"> <i class="las la-phone-volume"></i> <span> CONTACT US </span></a> 
                  <a href="javascript:;" class="gallery_button"><i class="las la-photo-video"></i> Gallery</a> 
                  </div>
                  <?Php } ?> 

                </div>
              </div>

              <div class="about_us model">
                <div class="about_us_content">
                  <h3>About Us</h3>
                  <p><?php echo $About_us_details[1]->settings_value;?></p>
                </div>
              </div>

  <div class="gallery model">

 <div class="gallery_content">
  <h3>Gallery</h3>
  <div class="gallery_grid">  
       
  </div>
</div>
</div>


              
  <div class="conatct_us model">
      <div class="conatct_us_content">
        <h3>Contact Us</h3>
        <p><?php echo $Contact_us_details[9]->settings_value;?></p>
        <form action="<?php echo base_url();?>/" method="post" id="contact_submit">
         <input type="hidden" name="contact" value="contact">
          <div class="from-group"> 
            <input type="text" name="name" placeholder="Name">
            <span id="mgs1" class="text-danger"></span>
          </div>
          <div class="from-group">
            <input type="email" name="email" placeholder="Email">
            <span id="mgs2" class="text-danger"></span>
            <small style="color:red;" class="text-danger">       
                <?php if (isset($validation)) {
                  echo $validation->getError('email');
                  } ?>
          </small> 
          </div>

          <div class="from-group"> 
            <textarea rows="3" name="description" placeholder="Description"></textarea>
          </div>
          <span id="mgs3" class="text-danger"></span>
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
          <div class="show-recaptcha" id="recapture_sitekey" align="center"></div>
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
               <p><a href="mailto:<?php echo $Contact_us_details[1]->settings_value;?>"><?php echo $Contact_us_details[1]->settings_value;?></a></p><br> 
               <p> <a href="<?php echo $Contact_us_details[7]->settings_value;?>"><?php echo $Contact_us_details[7]->settings_value;?></a></p>
            </div>
         </div><br>
         <?php if($Contact_us_details[13]->settings_value=='yes') {?> 
         <h3>Location</h3> <br>
          <!-- Google map show -->
          <div id="map" style="width:100%;height:400px;">
                                          
          </div>
         <?php } ?> 
      </div>
      </div>
    </div>

            </div>
        </div> 
      </div>
    <div class="close_model"><i class="las la-window-close"></i></div>  
    <script src="<?php echo base_url();?>/frontend/assets/js/jquery-3.3.1.min.js"></script>    
    <script src='https://www.google.com/recaptcha/api.js?onload=recaptchaOnload&render=explicit' async defer></script> 
    <script src="<?php echo base_url();?>/frontend/assets/js/lightbox.min.js"></script>
    <script src="<?php echo base_url();?>/frontend/assets/js/theme4.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUah3CJX9w3eNWJHwjVQVNL04oXvZX1ZA&callback=initAutocomplete&libraries=places&v=weekly"
      async></script>      

    <script type="text/javascript">
    //for google map show----------
    var lat=<?php echo $lat; ?>;
     var lang=<?php echo $lang; ?>;
     var position=[lat,lang];               
    

    function initAutocomplete() {
          var latlng = new google.maps.LatLng(position[0], position[1]);  
          
          const map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: lat, lng: lang },
          zoom: 13,
          mapTypeId: "roadmap",
          });

          var marker=new google.maps.Marker({
          position:latlng,
          map:map,
          type:'info',
          
        });
    }
   //------------------------------------


       $(document).ready(function(){
        $('.conatct_us_button').on('click',function(){
            var captchaContainer = null;
            var loadCaptcha = function() {
              captchaContainer = grecaptcha.render('recapture_sitekey', {
                'sitekey' : '<?php echo $Contact_us_details[11]->settings_value;?>', 
                 'callback' : function(response) {
                      console.log(response);
                    }
              });
            };
            loadCaptcha(); // THIS LINE WAS MISSING
         });
            //for lightbox plugin-----
            lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
          })
        // gallery----
        $(document).on('click', '.gallery_button', function(){     
         
         $.ajax({
              url: '<?php echo base_url();?>//admin/pages/get_all_gallery_image',
              type: 'get',
              async: false,
              data: {},
              dataType: 'JSON',
              success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {

                  html+='<a href="<?php echo base_url();?>/image/gallery_image/'+data[i].images+'" data-lightbox="image-1" data-title="Work 1"><img src="<?php echo base_url();?>/image/gallery_image/thumbnail/thum_'+data[i].images+'"  alt="thumbnail"></a>';

                 }
                $('.model').removeClass('active');
                $('.gallery').show('slow');
                $('.gallery').addClass('active');
                $('.gallery_grid').html(html);
                $('.close_model').show();
                $('.menu_list a').removeClass('active');
                $('.menu_list a.gallery_button').addClass('active');
              },

              });
      }) 

            $(document).on('click', '.about_us_button', function(){ 
              $('.about_us').show('slow');
              $('.close_model').show();
            }) 
            $(document).on('click', '.conatct_us_button', function(){ 
              $('.conatct_us').show('slow');
              $('.close_model').show();
            })
            $(document).on('click', '.close_model', function(){
             
              $('.model').hide('slow');
              $('.close_model').hide();
            })

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
                    data: custom_data,
                    dataType: 'JSON',
                    success: function(data) {
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
  
        });
    </script>
  <?php if($Custom_theme_settings[4]->settings_value == 'yes'){?>
    <style> 
      .countdown_content h2{
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