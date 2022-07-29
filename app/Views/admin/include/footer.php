            
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script><?php echo lang('footer.coming_soon');?>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                               <?php echo lang('footer.crafted_with');?> <i class="mdi mdi-heart text-danger"></i> <?php echo lang('footer.by_rssoftware');?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
    
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/js/pages/form-validation.init.js"></script>
        <!-- Required datatable js -->
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
       
         <!-- plugins -->
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/select2/js/select2.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <!--tinymce js-->
        <script src="<?php echo base_url();?>/backend/admin/assets/libs/tinymce/tinymce.min.js"></script>
        
        <script src="<?php echo base_url();?>/backend/admin/assets/js/custom.js"></script>
        <!-- Datatable init js -->
        <!-- init js -->
        <script src="<?php echo base_url();?>/backend/admin/assets/js/pages/form-advanced.init.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/js/pages/datatables.init.js"></script>
        <script src="<?php echo base_url();?>/backend/admin/assets/js/pages/dashboard.init.js"></script>

        <script src="<?php echo base_url();?>/backend/admin/assets/js/app.js"></script>

       <script>
           $(document).on("click","#delete",function(e){
            e.preventDefault();
            var link=$(this).attr("href");
            swal({
                title: "Are you want to Delete?",
                text: "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                        window.location.href=link;
                }
                else {
                swal("Save Data!");
                }
            });
        })
       </script>     

    </body>
</html>
