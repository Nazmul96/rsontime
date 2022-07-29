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
                    <h4 class="mb-sm-0">   Settings </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> Coming Soon </a>
                            </li>
                            <li class="breadcrumb-item active">    Settings </li>
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
                        <div class="card-header">
                            <h5 class="m-0 font-size-14">
                                <h4>
                                    Profile Setting 
                               </h4>
                            </h5>
                        </div>
                        <div id="">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-6">
                                   <div class="from-group mb-4">
                                       <label>Full name</label>
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
                                       <label>User Name</label>
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
                                       <label>Email</label>
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
                                       <label>Current password</label>
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
                                       <label>New password</label>
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
                                       <label>Retype new password</label>
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
                                       <label>Profile Image</label>
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
                                       <label>Favicon</label>
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
           
                 
                   
               </div>
           </div>
       
      
      
           <button class="btn btn-primary mb-4" type="submit"> <i class="ri-check-fill  me-2"></i>Save settings</button>
        </form>
        <!-- end row -->  
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->


<?php echo $this->endSection()?>