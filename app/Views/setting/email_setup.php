<?php echo $this->extend('admin/layout')?>

<?php echo $this->section('content')?>

<div class="page-content">
   <div class="container-fluid">

<input type="hidden" class="smtp1" value="<?php echo $Email_setup[3]->settings_value?>">
<input type="hidden" class="smtp2" value="<?php echo $Email_setup[4]->settings_value?>">
<input type="hidden" class="smtp3" value="<?php echo $Email_setup[5]->settings_value?>">
<input type="hidden" class="smtp4" value="<?php echo $Email_setup[6]->settings_value?>">
<input type="hidden" class="mailpath" value="<?php echo $Email_setup[7]->settings_value?>">
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

<!-- Page Heading Start -->
<div class="col-12 col-lg-auto mb-20">
<div class="page-heading">
   <h4 class="mt-2"><?php echo lang('email_setup.email_setup');?></h4>
</div>
</div><!-- Page Heading End -->
</div>
<div class="box">
          

   <div class="box-body">
          
          <hr>
           <form action="<?php echo base_url();?>/admin/setting/email_setup" method="post" id="add_email">

                  <div class="row">
                            
                            <div class="col-md-3">
                             <br>         
                             <label for=""><?php echo lang('email_setup.email_sent_from_name');?></label>
                            </div>
                            <div class="col-md-8">
                                      
                                      <input type="text" class="form-control" name="sent_from_name" placeholder="Type email sent from name" value="<?php echo $Email_setup[0]->settings_value?>">
                                 <small style="color:red;" class="text-danger">       
                                      <?php if (isset($validation)) {
                                        echo $validation->getError('sent_from_name');
                                        } ?>
                                </small> 
                           </div>         
                                                
                  </div>
                  <br> 
                  
                  <div class="row">
                            
                            <div class="col-md-3">
                             <br>         
                             <label for=""><?php echo lang('email_setup.email_sent_from_email');?></label>
                            </div>
                            <div class="col-md-8">
                                      
                                      <input type="text" class="form-control" name="sent_from_email" placeholder="Type email sent from name" value="<?php echo $Email_setup[1]->settings_value?>">
                                      <span id="email" class="text-danger"></span>
                                      <small style="color:red;" class="text-danger">       
                                      <?php if (isset($validation)) {
                                        echo $validation->getError('sent_from_email');
                                        } ?>
                                     </small> 
                            </div>         
                                                
                  </div>
                  <br>
                  
                  <div class="row">
                            
                            <div class="col-md-3">
                             <br>         
                             <label for=""><?php echo lang('email_setup.supported_mail_services');?></label>
                            </div>
                            <div class="col-md-8">                                      
                                  <select name="supported_mail_services" id="" class="form-control suported_mail">
                                            <option value="">Choose one</option> 
                                            <option value="smtp" <?php if($Email_setup[2]->settings_value == 'smtp'){echo 'selected';}?>>SMTP</option>
                                            <option value="sendmail"  <?php if($Email_setup[2]->settings_value == 'sendmail'){echo 'selected';}?>>Sendmail</option>
                                            <option value="mail"  <?php if($Email_setup[2]->settings_value == 'mail'){echo 'selected';}?>>Mail</option>
                                  </select> 
                                  <small style="color:red;" class="text-danger">       
                                      <?php if (isset($validation)) {
                                        echo $validation->getError('supported_mail_services');
                                        } ?>
                                     </small>
                            </div>                                                       
                  </div>
                  <?php if($Email_setup[2]->settings_value == 'smtp'){?>
                  <div class="smtp_show">
                  <div class="row"><div class="col-md-3"><br><label for=""><?php echo lang('email_setup.smtp_host');?></label></div><div class="col-md-8"><input type="text" class="form-control sm_tp1" name="smtp_host" placeholder="Type SMTP host" value="<?php echo $Email_setup[3]->settings_value?>"><small style="color:red;" class="text-danger"><?php if (isset($validation)) { echo $validation->getError('smtp_host');}?></small> </div></div><br><div class="row"><div class="col-md-3"><br><label for="">Port</label></div><div class="col-md-8"><input type="number" class="form-control sm_tp2" name="port" placeholder="Type port number" value="<?php echo $Email_setup[4]->settings_value?>"><small style="color:red;" class="text-danger"><?php if (isset($validation)) { echo $validation->getError('port');}?></small></div></div><br><div class="row"><div class="col-md-3"><br><label for="">Password to access</label></div><div class="col-md-8"><input type="password" class="form-control sm_tp3" name="password_access" placeholder="Type password to access" value="<?php echo $Email_setup[5]->settings_value?>"><small style="color:red;" class="text-danger"><?php if (isset($validation)) { echo $validation->getError('password_access');}?></small></span></div></div><br><div class="row"><div class="col-md-3"><br><label for="">Encryption type</label></div><div class="col-md-8"><div class="form-group"><?php if($Email_setup[6]->settings_value=='tls'){?><input type="radio" name="encryption_type" value="tsl" checked>TLS <input type="radio" name="encryption_type" value="ssl">SSL<?php }else {?><input type="radio" name="encryption_type" value="tsl" checked>TLS <input type="radio" name="encryption_type" value="ssl" checked>SSL</div><?php } ?><span id="encryption_type" class="text-danger"></span></div></div>               
                  </div>
                  <?php } ?>
                  <?php if($Email_setup[2]->settings_value == 'sendmail'){?>  
                  <div class="sendmail_show">
                  <div class="row"><div class="col-md-3"><label for="">Mailpath</label></div><div class="col-md-8"><input type="text" id="mailpath" name="mailpath" class="form-control" value="<?php echo $Email_setup[7]->settings_value?>"><small style="color:red;" class="text-danger"><?php if (isset($validation)) { echo $validation->getError('mailpath');}?></small></span></div></div>
                  </div>
                  <?php } ?>
                  <br>
                  
                  <div class="amazon_ses">
              
                  </div>
                   <br>
                 <button  class="btn btn-primary">save</button>
           </form> 
         </div>        

</div>

</div>        

</div>


<script>
$(document).on('change', '.suported_mail', function(){
         var value=$(this).val();
        //alert(value);
         if(value=='smtp'){
          $('.sendmail_show').hide();
          var smtp1=$('.smtp1').val();                 
          $(document).ready(function() {
          $('.sm_tp1').val(smtp1);
           });

           var smtp2=$('.smtp2').val();                 
          $(document).ready(function() {
          $('.sm_tp2').val(smtp2);
           });

           var smtp3=$('.smtp3').val();                 
          $(document).ready(function() {
          $('.sm_tp3').val(smtp3);
           });

           var smtp4=$('.smtp4').val();                 
          $(document).ready(function() {
          $('.sm_tp4').val(smtp4);
           });

          $('.amazon_ses').empty();         
          $('.amazon_ses').append('<div class="row"><div class="col-md-3"><br><label for="">SMTP host</label></div><div class="col-md-8"><input type="text" class="form-control sm_tp1" name="smtp_host" placeholder="Type SMTP host" value=""><small style="color:red;" class="text-danger"><?php if (isset($validation)) { echo $validation->getError('smtp_host');}?></small> </div></div><br><div class="row"><div class="col-md-3"><br><label for=""><?php echo lang('email_setup.port');?></label></div><div class="col-md-8"><input type="number" class="form-control sm_tp2" name="port" placeholder="Type port number" value=""><small style="color:red;" class="text-danger"><?php if (isset($validation)) { echo $validation->getError('port');}?></small></div></div><br><div class="row"><div class="col-md-3"><br><label for=""><?php echo lang('email_setup.password_to_access');?></label></div><div class="col-md-8"><input type="password" class="form-control sm_tp3" name="password_access" placeholder="Type password to access" value=""><small style="color:red;" class="text-danger"><?php if (isset($validation)) { echo $validation->getError('password_access');}?></small></span></div></div><br><div class="row"><div class="col-md-3"><br><label for=""><?php echo lang('email_setup.encryption_type');?></label></div><div class="col-md-8"><div class="form-group"><?php if($Email_setup[6]->settings_value=='tls'){?><input type="radio" name="encryption_type" value="tsl" checked>TLS <input type="radio" name="encryption_type" value="ssl">SSL<?php }else {?><input type="radio" name="encryption_type" value="tsl" checked>TLS <input type="radio" name="encryption_type" value="ssl" checked>SSL</div><?php } ?><span id="encryption_type" class="text-danger"></span></div></div>');      
         }
         else if(value=='sendmail')
         {
           $('.smtp_show').hide();
          var Mailpath_data=$('.mailpath').val();
          $(document).ready(function() {                 
          $('#mailpath').val(Mailpath_data);
          });  
           $('.amazon_ses').empty();
           $('.amazon_ses').append('<div class="row"><div class="col-md-3"><label for="">Mailpath</label></div><div class="col-md-8"><input type="text" id="mailpath" name="mailpath" class="form-control"><small style="color:red;" class="text-danger"><?php if (isset($validation)) { echo $validation->getError('mailpath');}?></small></span></div></div>');
         }
         else{
           $('.amazon_ses').empty();       
         }
});
</script> 


<?php echo $this->endSection()?>