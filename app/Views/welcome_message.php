<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?php echo $Seo_setting[1]->settings_value?>">
    <meta name="author" content="<?php echo $Seo_setting[2]->settings_value?>"> 
    <meta name="description" content="<?php echo $Seo_setting[4]->settings_value?>">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- theme 4 --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/theme4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/frontend/assets/css/style.css">
    <script src="<?php echo base_url();?>/frontend/assets/js/jquery-3.3.1.min.js"></script>      
    <title><?php echo $Seo_setting[0]->settings_value?></title>
  </head>
  <body class="theme4">
      <div class="row">
        <div class="col-md-6 p-0">
          <div class="overlay" style="background:url(<?php echo base_url();?>/frontend/assets/img/pattern/pattern_3.png) repeat; opacity: .6;"></div> 
          <div class="image-bg-left" style="background-image:url(<?php echo base_url();?>/frontend/assets/img/bg/b2.jpg)"></div> 
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
                <h2>Nice to Meet you</h2>
                <div class="flipclock" id="flipclock-1"></div>  
                <div class="p-5">
                  <p>We are preparing something amazing and exciting for you. Special surprise for our subscribers</p>
                  <div class="subscribe_form">
                      <form action="<?php echo base_url();?>/" method="post">
                          <input type="email" placeholder="Enter Your Email" name="email_address">
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
                  <div class="social_list">
                    <strong>Stay In Touch : </strong>
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
      
    <script src="<?php echo base_url();?>/frontend/assets/js/theme4.js"></script>
  </body>
</html>