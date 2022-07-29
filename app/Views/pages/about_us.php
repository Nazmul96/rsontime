
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
                    <h4 class="mb-sm-0"> <?php echo lang('page.about_us');?> </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('page.coming_soon');?></a>
                            </li>
                            <li class="breadcrumb-item active">  <?php echo lang('page.about_us');?> </li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="<?php echo base_url();?>/admin/pages/about_us" method="post">
           <div class="row">
               <div class="col-md-12">
                   <div class="card"> 
                        <div class="card-body">
                            <h4 class="card-title mb-4"> <?php echo lang('page.about_us_details');?></h4> 
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.page_title');?> </label>
                                        <input type="text" name="page_title" class="form-control" value="<?php echo $About_us_details[0]->settings_value;?>">
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('page_title');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="from-group">
                                        <label> <?php echo lang('page.page_description');?> </label>
                                        <textarea id="elm1" name="page_description"><?php echo $About_us_details[1]->settings_value;?></textarea>
                                        <small style="color:red;" class="text-danger">
                                        <?php if (isset($validation)) {
                                                  echo $validation->getError('page_description');
                                                  } ?>
                                        </small>  
                                    </div>
                                </div>  
                            </div>  
                       </div>
                   </div>
               </div>
           </div>
           
          
          
           <button class="btn btn-primary mb-4" type="submit"> <i class="ri-check-fill  me-2"></i><?php echo lang('page.save_settings');?></button>
        </form>
        <!-- end row -->  
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php echo $this->endSection()?>