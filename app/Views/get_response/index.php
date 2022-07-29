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
                    <h4 class="mb-sm-0"><?php echo lang('get_response.get_response_settings');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('get_response.coming_soon');?> </a>
                            </li>
                            <li class="breadcrumb-item active"><?php echo lang('get_response.get_response_settings');?></li>
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
                      <form action="<?php echo base_url();?>/admin/get_response/submit" method="post"  id="api_key_insert">     
                       <div class="col-md-6">      
                       <label for=""><?php echo lang('get_response.api_keys');?></label>
                       <input class="form-control" type="text" name="api_key">
                       </div>

                       <br><button type="submit" class="btn btn-primary"><?php echo lang('get_response.submit');?></button>
                       </form> 
                       <?php } else { ?>
                        <br><div class="for_selct">
                                 <form action="<?php echo base_url();?>/admin/get_response/submit" id="datas_update">
                                           <div class="col-md-6"> 
                                                     <label for=""><?php echo lang('get_response.choose_list');?></label>
                                                     <select name="list_id" id="" class="form-control">
                                                           <?php foreach($name as $key=>$row){
                                                               ?>
                                                                   <option value="<?php echo $campaign_id[$key]?>" <?php if($keys[0]->campaign_id	 == $campaign_id[$key]){echo 'selected';}?>><?php echo $row?></option>             
                                                            <?php } ?>
                                                     </select>
                                           </div>
                                           <br><button type="submit" class="btn btn-primary"><?php echo lang('get_response.submit');?></button>
                                 </form>
                       </div>


                      <?php } ?>        
                  
                   </div>

              </div>        
          </div>
     </div> 

   </div>
</div>
<?php echo $this->endSection()?>       