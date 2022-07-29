<?php echo $this->extend('admin/layout')?>

<?php echo $this->section('content')?>

<div class="page-content">
    <div class="container-fluid">

      <!-- Page Headings Start -->
      <div class="row justify-content-between align-items-center mb-10">

            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                  <div class="page-heading">
                        <h3><?php echo lang('my_profile');?></h3>
                  </div>
            </div><!-- Page Heading End -->

      </div>
      <div class="container">
            <div class="row" style="margin-bottom:3%;">
                  <div class="col-md-5 p-3 bg-light" style="box-shadow: 0 0 3px rgba(0,246,246,246);">
                        <form enctype="multipart/form-data" action="<?php echo base_url();?>profile_image_update" id="image_update" method="POST">
                              <img class="rounded-circle" id="picture" alt="Cinque Terre" src="" alt="" height="150px" width="150px" style="float:left;margin-right:50px;">   
                              <input id="fileinput" type="file" name="profile_image" style="display:none">

                              <input type="submit" name="button" value="Submit" style="display:none;"/>
                        </form>
                        <div style="margin-top:7%;">
                               <h6>Nazmul Hossain</h6>
                               <h6>hossainnazmul@gmail.com</h6>
                        </div>
                  </div>
                  <div class="col-md-6 bg-light" style="box-shadow: 0 0 3px rgba(0,246,246,246);">
                        <div class="row">
                              <div class="col-md-6 p-3">
                                    <img style="float:left;margin-right:20px;" src="<?php echo base_url();?>/image/svg_file/phone.svg" alt="" height="30px" width="30px">
                                    <p><?php echo lang('contact');?>:</p>
                                             
                              </div>
                              <div class="col-md-6 p-3">
                                    <img style="float:left;margin-right:20px;" src="<?php echo base_url();?>/image/svg_file/calendar.svg" alt="" height="30px" width="30px">
                                    <p><?php echo lang('created');?>: </p>     
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-md-6 p-3">
                                    <img style="float:left;margin-right:20px;" src="<?php echo base_url();?>/image/svg_file/location.svg" alt="" height="30px" width="30px">
                                    <p><?php echo lang('address');?>:</p>
                                    
                              </div>
                              <div class="col-md-6 p-3">
                                    <img style="float:left;margin-right:20px;" src="<?php echo base_url();?>/image/svg_file/gift.svg" alt="" height="30px" width="30px">
                                    <p><?php echo lang('date_of_birth');?>:</p>
                                    
                              </div>
                        </div>


                  </div>
            </div>
      </div>
      <div class="container">
            <div class="row mt-5">
                  <div class="col-md-2 bg-light" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);">
                        <img style="margin-top:5%; margin-left:30%;" src="images/svg_file/user.svg" alt="" height="50px" width="50px">
                        <hr>
                        <div class="div tab-menu">
                              <a href="<?php echo base_url();?>/admin/profile" class="text-capitalize tab-item-link d-flex justify-content-between my-2 my-sm-3 active">
                                    <span>Personal Info</span>
                              </a>
                              <a href="<?php echo base_url();?>/admin/password_change" class="text-capitalize tab-item-link d-flex justify-content-between my-2 my-sm-3">
                                    <span>Password Change</span>
                              </a>
                        </div>
                  </div>

                  <div class="col-md-9 ml-4 bg-light" style="box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);">
                        <form action="<?php echo base_url();?>admin_password_update" id="admin_password_update" method="POST">
                              <h4 class="mt-2">Password Change</h3>
                                    <hr>

                                    <div class="row">
                                          <div class="col-md-3">
                                            Old Password
                                          </div>
                                          <div class="col-md-9">
                                                <input type="password" name="old_password" class="form-control" placeholder="<?php echo lang('current_password');?>">
                                                <span id="old_password" class="text-danger">
                                          </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                          <div class="col-md-3">
                                           New Password
                                          </div>
                                          <div class="col-md-9">
                                                <input type="password" name="new_password" class="form-control" placeholder="<?php echo lang('new_password1');?>">
                                                <span id="new_password" class="text-danger">
                                          </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                          <div class="col-md-3">
                                           
                                          </div>
                                          <div class="col-md-9 p-4" style="background-color:#FAEBD7">
                                                <p>The password should contain one upper case, one lower case, one special character, and numbers. It should be a minimum of 8 characters.</p>
                                          </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                          <div class="col-md-3">
                                           Confirm Password
                                          </div>
                                          <div class="col-md-9">
                                                <input type="password" name="retype_new_password" class="form-control" placeholder="">
                                                <span id="retype_new_password" class="text-danger">
                                          </div>
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary">Save</button>
                        </form><br>
                  </div>

            </div>
      </div>
</div>

</div>
<?php echo $this->endSection('content')?>

