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
                    <h4 class="mb-sm-0"><?php echo lang('mailchimps.mailchimp_settings');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('mailchimps.coming_soon');?></a>
                            </li>
                            <li class="breadcrumb-item active"><?php echo lang('mailchimps.mailchimp_settings');?></li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>

        <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-body">
                      <?php if(empty($keys)){?> 
                      <form action="<?php echo base_url();?>/admin/mailchimp/submit" method="post"  id="api_key_insert">     
                       <div class="col-md-6">      
                       <label for=""><?php echo lang('mailchimps.api_keys');?></label>
                       <input class="form-control" type="text" name="api_key">
                       </div>

                       <br><button type="submit" class="btn btn-primary"><?php echo lang('mailchimps.submit');?></button>
                       </form> 
                       <?php } else {?>
                       <br><div class="for_selct">
                                 <form action="<?php echo base_url();?>/admin/mailchimp/submit" id="datas_update">
                                           <div class="col-md-6">
                                                     <input type="hidden" name="new_api_key" value="" id="input_api">
                                                     <label for=""><?php echo lang('mailchimps.choose_list');?></label>
                                                     <select name="list_id" id="" class="form-control">
                                                           <?php foreach($result['lists'] as $row){?>
                                                                   <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>             
                                                            <?php } ?>
                                                     </select>
                                           </div>
                                           <br><button type="submit" class="btn btn-primary"><?php echo lang('mailchimps.submit');?></button>
                                 </form>
                       </div>
                    <?php } ?>
                   </div>

              </div>        
          </div>
     </div> 

   </div>
</div>
<script>
        
        $('#api_key_insert').submit(function(e) {
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
           
              $('#input_api').val(data.api_key);
              window.location.reload();     
          },
        });


      });

        $('#datas_update').submit(function(e) {
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
            
            window.location.reload();     
          },
        });


      });
     
</script>
<?php echo $this->endSection()?>       