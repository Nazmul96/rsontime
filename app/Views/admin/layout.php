
<?php echo $this->include('/admin/include/header.php');?>
<?php echo $this->include('/admin/include/topbar.php'); ?>
<?php echo $this->include('/admin/include/sidebar.php'); ?>
             

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<?php echo $this->renderSection('content'); ?>

<!-- End Page-content -->

              

<?php echo $this->include('admin/include/footer.php');?>