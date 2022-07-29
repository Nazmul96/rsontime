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
                    <h4 class="mb-sm-0"><?php echo lang('visitor.visitors_report');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('visitor.coming_soon');?></a>
                            </li>
                            <li class="breadcrumb-item active"><?php echo lang('visitor.visitors_report');?></li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>

        <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-body">
                      <form action="" method="post">      
                      <div class="row">
                         <div class="col-md-6">
                              <label for=""><?php echo lang('visitor.from');?></label>
                              <input type="date" name="form_date" id="form_date" class="form-control">
                         </div> 
                         <div class="col-md-6">
                              <label for=""><?php echo lang('visitor.to');?></label>
                              <input type="date" name="to_date" id="to_date" class="form-control">
                         </div>                       
                      </div><br>
                       <button type="submit"  id="serach_report" class="btn btn-primary"><?php echo lang('visitor.search');?></button>
                      </form><br>
                      <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                         <thead class="data_show">
                         <th><?php echo lang('visitor.server_ip');?></th>
                         <th><?php echo lang('visitor.browser');?></th>
                         <th><?php echo lang('visitor.date');?></th>
                         <th><?php echo lang('visitor.time');?></th>
                         </thead>
                         <tbody class="body_data">

                         </tbody>
                      </table>
                   </div>

              </div>        
          </div>
     </div> 

   </div>
</div>       


<script>
   
    $('#serach_report').click(function(e) {
                 
        var form_date=$("#form_date").val();
        var to_date=$("#to_date").val();
  
        $('#example').DataTable().destroy();

        $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: '<?php echo base_url();?>/admin/visitor/report',
            type: "POST",
            dataType: 'JSON',
            data: function(data) {
                
                data.form_date = form_date;
                data.to_date = to_date;

                
            }
            
        },
        "columns": [
            { "data": "server_ip" },
            { "data": "browser" },
            { "data": "date" },
            { "data": "time" },
        ],
        columnDefs: [
            {  className: "text-wrap", targets: 1 }
      ],
        
      });
 
     return false;
    });


</script>
<?php echo $this->endSection()?>       