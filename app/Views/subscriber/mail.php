<?php echo $this->extend('admin/layout')?>

<?php echo $this->section('content')?>

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Send Mail</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> Coming Soon </a>
                            </li>
                            <li class="breadcrumb-item active"> Send Mail </li>
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
                   <form action="<?php echo base_url();?>/admin/subscriber/mail/<?php echo $id;?>" method="post">
                   
                   <div class="col-md-6  mb-4">
                              <div class="from-group">
                              <label>Mail Subject</label> 
                              <input type="text" name="mail_subject" class="form-control" value="">
                              <small style="color:red;" class="text-danger">
                              <?php if (isset($validation)) {
                                        echo $validation->getError('mail_subject');
                                        } ?>
                              </small> 
                              </div>
                              </div> 
                              
                              <div class="col-md-6  mb-4">
                              <div class="from-group">
                              <label>Mail Body</label> 
                              <textarea class="form-control" name="mail_body" id="" cols="30" rows="10">      
                              </textarea>
                              <small style="color:red;" class="text-danger"> 
                              <?php if(isset($validation)){
                                        echo $validation->getError('mail_body');
                               }?>
                              </small> 
                              </div>
                    </div>
                    <?php foreach($send_to as $v){?>
                    <input type="hidden" name="send_to[]" value="<?php echo $v ;?>">
                    <?php } ?>
                    <button class="btn btn-success">Send</button>
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


<?php echo $this->endSection()?>
