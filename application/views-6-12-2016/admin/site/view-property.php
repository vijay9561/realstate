 <script src="//code.jquery.com/jquery-1.10.2.js"></script>


 <script>
 $(document).ready(function() {
	$('#example').DataTable( {
        "ordering": false,
        "info":     false
    } );
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
      <h1 class="page-header">Property  List </h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>Property List</li>
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

<?php if($this->session->userdata('updateproperty')==1) { ?>
	  <div class="alert alert-success">
	  Property Updated Successfully..
</div> 
<?php  $this->session->unset_userdata('updateproperty'); } ?>

<?php if($this->session->userdata('updateimages')==1) { ?>
	  <div class="alert alert-success">
 Property Images Updated Successfully..
</div> 
<?php  $this->session->unset_userdata('updateimages'); } ?>
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
	   return true}else{
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
	<form name="bulk_action_form" action="<?php echo site_url(); ?>Admin_Controller/delete_checkbox_wise_property" method="post"/>
	<span>Select All<input style="margin: -17px 33px 0px;" type="checkbox" name="select_all" id="select_all" value=""/></span>
	<table id="example" class="table table-striped table-bordered" width="100%" ><thead><tr><th><span># </th>
	<th>Ad Id</th>
	<th>Property Name</th><th>Property For</th><th>Created Date</th><th style="width:30%">Action &nbsp;&nbsp;
	<input type="submit" class="btn btn-danger" name="bulk_delete_submit" id="bulk_delete_submit" style="display:none"  onclick="return deleteConfirm();" value="Delete" />&nbsp;&nbsp;<input type="submit" value="active" name="bulk_active_submit" id="bulk_active_submit" class="btn btn-success"  style="display:none" onclick="return updatestatus();" />&nbsp;&nbsp;<input type="submit" value="inactive" onclick="return updatestatus();" class="btn btn-danger" style="display:none" id="bulk_inactive_submit" name="bulk_inactive_submit" /></th></tr></thead>
	<tbody>
	<?php $i=1; 
	$viewdata=$this->db->query("select *from property_post order by pid desc")->result();
	foreach($viewdata as $rows){  $days = DateTime::createFromFormat("Y-m-d H:i:s",$rows->date); $caterory=$this->db->query("select *from property_category where pcid='".$rows->category_id."'")->result();?>
	<tr>
	<td><span><?php echo $i++; ?>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="checked_id[]" class="checkbox" onclick="check_checkboxes()" value="<?php echo $rows->pid; ?>"/></span></td>
	<td><?php echo $rows->property_unique_id; ?></td>
	<td><a href="<?php echo site_url(); ?>view-admin-property-details/<?php echo $rows->pid; ?>"><?php echo $rows->property_title; ?></a></td>
	<td><?php echo $caterory[0]->property_name; ?></td>
	<td><?php echo $days->format("Y-m-d");?></td>
<td>
 &nbsp;&nbsp;
<a href="<?php echo site_url(); ?>view-admin-property-details/<?php echo $rows->pid; ?>"  title="View Property" class="btn btn-primary"><i class="fa fa-eye"></i></a>&nbsp;
<a href="<?php echo site_url(); ?>update_admin_property/<?php echo $rows->pid; ?>"  title="Update Property" class="btn btn-warning"><i class="fa fa-pencil"></i></a>&nbsp;
<a href="<?php echo site_url(); ?>update_admin_property_images/<?php echo $rows->pid; ?>"  title="Update Images" class="btn btn-info"><i class="fa fa-camera"></i></a>
		 <?php if($rows->status=='active') { ?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_property_inactive/<?php echo  $rows->pid; ?>" title="active status" onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-success"><?php echo $rows->status;  ?></a><?php }else {?><a title="inactive status" href="<?php echo site_url();?>Admin_Controller/updatestatus_property_active/<?php echo  $rows->pid; ?>"  onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-danger"><?php echo $rows->status; }  ?></a>&nbsp;
		   <a href="<?php echo site_url(); ?>Admin_Controller/updatestatus_property_delete/<?php echo  $rows->pid;?>" class="btn btn-danger" onClick="return confirm('Are You Sure Delete This Property Category'); " title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		 
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
