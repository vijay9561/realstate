<!DOCTYPE html>
<html lang="en">
<?php  $this->load->view('admin/layout/head'); ?>
<body>
<div id="wrapper">
<?php  $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/main_view',$data);?>
<?php  $this->load->view('admin/layout/js'); ?>
</div>
</body>
</html>
