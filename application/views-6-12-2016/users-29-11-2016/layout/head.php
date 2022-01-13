<head>
<title>Saibroking | <?php echo $title; ?></title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/css/jquery.multiselect.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jquery.multiselect.css" rel="stylesheet"  type="text/css">
<script src="<?php echo base_url(); ?>assets/css/jquery.multiselect.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js" type="text/javascript"></script>
<!--//menu-->
<!--theme-style-->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="<?php echo base_url();?>assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="saib broking free rent available" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<script>
$(document).ready(function(){
$('#langOpt').multiselect({
    columns: 1,
    placeholder: 'Select Property'
});
$('#Location').multiselect({
    columns: 1,
    placeholder: 'Select Location'
});


$('#langOpt2').multiselect({
    columns: 1,
    placeholder: 'Select Languages',
    search: true
});

$('#langOpt3').multiselect({
    columns: 1,
    placeholder: 'Select Languages',
    search: true,
    selectAll: true
});

$('#langOptgroup').multiselect({
    columns: 4,
    placeholder: 'Select Languages',
    search: true,
    selectAll: true
});
});
</script>