<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<style>
.img-wrap {
    border: 1px green solid;
    font-size: 0;

}
.img-wrap .close {
 position: absolute;
top: -11px;
right: -8px;
z-index: 9999;
background-color: #16A823;
padding: 3px 3px 6px;
color: #030303;
font-weight: bold;
cursor: pointer;
opacity: .6;
text-align: center;
font-size: 25px;
line-height: 10px;
border-radius: 50%;
}
.img-wrap:hover .close {
    opacity: 2;
}
</style>
<div class="row">

 <?php foreach($viedatmydata as $rows) { ?>
 <div class="file-preview-frame">
 <div class="img-wrap">
    <span class="close"  onclick="temimagesdelete(<?php echo $rows->piid; ?>)">&times;</span>
    <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>" style="width: 134px; height:117px; margin-right:0px;" >
</div>
 </div>
 <?php } ?>
</div>