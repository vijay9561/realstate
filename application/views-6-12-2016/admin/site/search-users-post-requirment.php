 <script src="//code.jquery.com/jquery-1.10.2.js"></script>


 <script>
 $(document).ready(function() {
    $('#example').DataTable( {
        "ordering": false,
        "info":     false
    });
} );
 </script>
<script>
function addarticals(){
		  $("#addblogimages").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Admin_Controller/update_property_category",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='view-property-category';
						return false;
					}
					else {
				  		window.location='view-property-category';
					}
					
				}
			});
			return false;  
		});
			
	}
	$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });
		$(document).ready(function() {
		  var lblError = document.getElementById("lblError");
	$('#gallery_images').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("gallery_images").value='';
   }
   });
   });
</script>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Property Requirement List</h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>Property Requirement List</li>
      </ol>
	  <?php if($this->session->userdata('updatequery')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Status Update Sucessfully..
</div> 

<?php  $this->session->unset_userdata('updatequery'); } ?>

  <?php if($this->session->userdata('updatearticals')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Property Category Update Sucessfully..
</div> 

<?php  $this->session->unset_userdata('updatearticals'); } ?>
<?php if($this->session->userdata('deletearticals')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Gallery Categoires Deleted Sucessfully..
</div> 

<?php  $this->session->unset_userdata('deletearticals'); } ?>

<?php if($this->session->userdata('multipledeleteoption')) { ?>
	  <div class="alert alert-success">
  <?php echo $this->session->userdata('multipledeleteoption'); ?>
</div> 

<?php  $this->session->unset_userdata('multipledeleteoption'); } ?>

<?php if($this->session->userdata('multipleupdatestatus')) { ?>
	  <div class="alert alert-success">
  <?php echo $this->session->userdata('multipleupdatestatus'); ?>
</div> 

<?php  $this->session->unset_userdata('multipleupdatestatus'); } ?>
    </div>
  </div>
  <!-- /.row -->
<script>
function check_checkboxes()
{
  var c = document.getElementsByTagName('input');
  for (var i = 0; i < c.length; i++)
  {
    if (c[i].type == 'checkbox')
    {
       if (c[i].checked) {   
	   $('#bulk_delete_submit').show();
		$('#bulk_inactive_submit').show();
		$('#bulk_active_submit').show();
	   return true } else {
	   	$('#bulk_delete_submit').hide();
		$('#bulk_inactive_submit').hide();
		$('#bulk_active_submit').hide();
	   }
    }
  }
  return false;
}
function deleteConfirm(){

    if(!check_checkboxes())
        {
        alert("Please check atleast one row");  
        return false;
      }
    var result = confirm("Are you sure to delete property?");
    if(result){
        return true;
    }else{
        return false;
    }
}
function updatestatus(){
      if(!check_checkboxes())
        {
        alert("Please check atleast one row");  
        return false;
      }
    var result = confirm("Are you sure to update status");
    if(result){
        return true;
    }else{
        return false;
    }
}
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
			$('#bulk_delete_submit').show();
		$('#bulk_inactive_submit').show();
		$('#bulk_active_submit').show();
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
				$('#bulk_delete_submit').hide();
		$('#bulk_inactive_submit').hide();
		$('#bulk_active_submit').hide();
        }
    });
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
  <div class="row">
    <div class="col-lg-12">
	<div class="table-responsive">
	<form name="bulk_action_form" action="<?php echo site_url(); ?>Admin_Controller/delete_checkbox_wise_requirement" method="post"/>
	<span>Select All <input style="margin: -17px 33px 0px;" type="checkbox" name="select_all" id="select_all" value=""/></span>
	<table id="example" class="table table-striped table-bordered" width="100%" ><thead><tr><th><span>#</span></th><th>Requirement ID</th><th>Property Name</th><th>Property Name</th><th style="width:30%">Action &nbsp;&nbsp;
		<input type="submit" class="btn btn-danger" name="bulk_delete_submit" id="bulk_delete_submit" style="display:none"  onclick="return deleteConfirm();" value="Delete" />&nbsp;&nbsp;<input type="submit" value="active" name="bulk_active_submit" id="bulk_active_submit" class="btn btn-success"  style="display:none" onclick="return updatestatus();" />&nbsp;&nbsp;<input type="submit" value="inactive" onclick="return updatestatus();" class="btn btn-danger" style="display:none" id="bulk_inactive_submit" name="bulk_inactive_submit" /></th></tr></thead>
	<tbody>
	<?php $i=1; 
	$viewdata=$this->db->query("select *from post_requirement order by prid desc")->result();
	foreach($viewdata as $rows){  $days = DateTime::createFromFormat("Y-m-d H:i:s",$rows->date); $caterory=$this->db->query("select *from property_category where pcid='".$rows->category_id."'")->result();?>
	<tr>
	<td><span><?php echo $i++; ?>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="checked_id[]" class="checkbox" onclick="check_checkboxes()" value="<?php echo $rows->prid; ?>"/></span></td>
	<td><a href="<?php echo site_url(); ?>view_users_post_requirment/<?php echo $rows->prid; ?>"><?php echo $rows->property_unique_id;?></a></td>
	<td><?php echo $rows->property_title; ?></td>
	<td><?php echo $rows->slaeby; ?></td>
	
<td>
 &nbsp;&nbsp;
<a href="<?php echo site_url(); ?>view_users_post_requirment/<?php echo $rows->prid; ?>"  title="View" class="btn btn-primary"><i class="fa fa-eye"></i></a>&nbsp;
		 <?php if($rows->status=='active') { ?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_requirement_inactive/<?php echo  $rows->prid; ?>" onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-success"><?php echo $rows->status;  ?></a><?php }else {?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_requirement_active/<?php echo  $rows->prid; ?>"  onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-danger"><?php echo $rows->status; }  ?></a>&nbsp;
		   <a href="<?php echo site_url(); ?>Admin_Controller/updatestatus_requirement_delete/<?php echo  $rows->prid;?>" class="btn btn-danger" onClick="return confirm('Are You Sure Delete Property Requirement'); "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		 
		   </td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
	</form>
	</div></div></div></div>
    </div>
  </div>
  <!-- /.row -->
</div></div>
