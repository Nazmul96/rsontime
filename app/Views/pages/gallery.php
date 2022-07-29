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
                    <h4 class="mb-sm-0"> <?php echo lang('page.add_gallery_image');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"> <?php echo lang('page.coming_soon');?></a>
                            </li>
                            <li class="breadcrumb-item active"> <?php echo lang('page.gallery_image');?></li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end page title -->
    <div class="container">
	<h2><?php echo lang('page.upload_images');?></h2>
    <form action="<?php echo base_url();?>/admin/pages/gallery_image_uplaod" enctype="multipart/form-data" class="dropzone text-center" id="myGreatDropzone">

   </form>
    <span class="success_show" style="color:green;"></span>
   <br><h1><?php echo lang('page.gallery');?></h1>
              <div class="row">
                <?php
                if (!empty($files)) {
                  foreach ($files as $row) {
                    $filePath = '/image/gallery_image/' . $row->images;
                    
                ?>

                    <div class="col-md-3" id="imageblock<?php echo $row->id ?>">
                      <div class="card">

                        <a href="#" data-resid="<?php echo $row->id?>" data-id="<?php echo $row->id ?>" class="delete"><span class="close btn btn-info">&Cross;</span></a>
                        <div class="card-body"> <img src="<?php echo base_url();?>/image/gallery_image/<?php echo $row->images;?>" width="200px" height="200px" class="image" />
                        </div>
                      </div>
                    </div>

                <?php
                  }
                }
                ?>
              </div>   
</div> 
        <!-- end row -->  
    </div>
    <!-- container-fluid -->
</div>
<script>


  // Initialise DropZone form control
// dropzoneJsForm = the id of your dropzone form
Dropzone.options.myGreatDropzone = {
    paramName: "file",
    maxFilesize: 10, // Mb
    init: function () {
      
        // Set up any event handlers
        this.on('complete', function () {
           
            location.reload();
        });
    }
};



    $('.delete').click(function(e) {
    
        e.preventDefault();

        let id = $(this).attr('data-id');
      
        var url = '<?php echo base_url();?>/admin/pages/delete_gallery_image';
        var request = $(this).serialize();
       

        $.ajax({
          url: url,
          data: {
            id: id,
            request: request, 
          },
          type: 'post',
          async: false,
          dataType: 'json',
          success: function(data) {
            console.log(data);
            $('#imageblock' + id).remove();
          }
        });
      });
</script>
<!-- End Page-content -->
<?php echo $this->endSection()?>