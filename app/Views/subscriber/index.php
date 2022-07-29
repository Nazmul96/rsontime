<?php echo $this->extend('admin/layout')?>

<?php echo $this->section('content')?>

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"><?php echo lang('subscriber.subscriber_list');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('subscriber.coming_soon');?></a>
                            </li>
                            <li class="breadcrumb-item active"> <?php echo lang('subscriber.subscriber_list');?>  </li>
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
                   <div class="text-danger show_validation" style="margin-left:20%;"></div>
                   <form action="<?php echo base_url();?>/admin/subscriber/mail/all" method="post" id="send_data">
                       <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th><?php echo lang('subscriber.email_address');?></th>
                                    <th><?php echo lang('subscriber.date');?></th>
                                    <th><?php echo lang('subscriber.time');?></th>
                                    <th><?php echo lang('subscriber.action');?></th> 
                                </tr>
                            </thead>  

                                   <tbody>
                                 <?php foreach($subscriber_list as $row){?> 
                                  <tr>
                                   <td>
                                   <input type="checkbox" class="form-check-input" name="send_to[]" value="<?php echo $row['id'];?>">
                                   <?php echo $row['email_address'];?>
                                   <div class="invalid-feedback">
                                    please checked the check box
                                   </div>
                                   </td>
                                    <td><?php echo $row['date'];?></td>
                                    <td><?php echo $row['time'];?></td>
                                    <td><a href="<?php echo base_url();?>/admin/subscriber/delete/<?php echo $row['id'];?>" class="btn btn-outline-danger btn-sm" id="delete">
                                            <i class="ri-delete-bin-line "></i>
                                   </a>
                                   <a href="<?php echo base_url();?>/admin/subscriber/mail/<?php echo $row['id'];?>"  class="btn btn-outline-success btn-sm" >
                                   <i class="ri-mail-line"></i>
                                   </a>
                                 </td>
                                 </tr> 
                            <?php } ?>  
                            </tbody>
                            <button type="submit" class="btn btn-primary mb-4">Mail send <i class="fas fa-paper-plane"></i></button>
                            
                        </table>
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
<script>
    $( document ).ready(function() {

        $('#send_data').submit(function(e){

            if($('input[type=checkbox]:checked').length == 0)
                {
                    $('.show_validation').html('<p>Please checked at least one checkbox<p>');
                    return false;
                }
        });

    });   
 </script> 

<?php echo $this->endSection()?>
 
