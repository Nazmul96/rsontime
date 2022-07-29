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
                    <h4 class="mb-sm-0">constantcontact settings</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> Coming Soon </a>
                            </li>
                            <li class="breadcrumb-item active">constantcontact settings</li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>

        <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-body">
                     <?php if(empty($values)){?>
                           <a href="<?php echo base_url();?>/SettingController/getAuthorization/<?php echo $clientId;?>/<?php echo $redirectURI; ?>" class="btn btn-primary">Connect</a>   
                     <?php } else {?>
                        <br><div class="for_selct">
                                 <form action="<?php echo base_url();?>/admin/constant_contact/submit" id="datas_update">
                                              <div class="col-md-6"> 
                                                     <label for="">Choose List</label>
                                                     <select name="list_id" id="" class="form-control">
                                                           <?php foreach($name as $key=>$row){
                                                               ?>
                                                                   <option value="<?php echo $list_id[$key]?>" <?php if($values[0]->list_id == $list_id[$key]){echo 'selected';}?>><?php echo $row?></option>             
                                                            <?php } ?>
                                                     </select>
                                           </div>
                                           <br><button type="submit" class="btn btn-primary">submit</button>
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