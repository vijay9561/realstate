 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <script>
 $(document).ready(function() {
    $('#example').DataTable();
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
      <h1 class="page-header">Registered Users</h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>Registered Users</li>
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
  <strong>Success!</strong> Users Deleted Sucessfully..
</div> 

<?php  $this->session->unset_userdata('deletearticals'); } ?>
    </div>
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-lg-12">
	<div class="table-responsive">
	<table id="example" class="table table-striped table-bordered" width="100%" ><thead><tr><th>#</th><th>Users Name</th><th>Users Email</th><th>Mobile Number</th><th>Registered Date</th><th style="width:15%">Action</th></tr></thead>
	<tbody>
	<?php $i=1; 
	$viewdata=$this->db->query("select *from users order by uid desc")->result();
	foreach($viewdata as $rows){  $days = DateTime::createFromFormat("Y-m-d H:i:s",$rows->date);?>
	<tr>
	<td><?php echo $i++; ?></td>
	<td><?php echo $rows->name; ?></td>
	<td><?php echo $rows->eamil; ?></td>
	<td><?php echo $rows->mobile_no; ?></td>
	<td><?php echo $days->format("Y-m-d");?></td>
<td>
		 <?php if($rows->status=='active') { ?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_users_inactive/<?php echo  $rows->uid; ?>" onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-success"><?php echo $rows->status;  ?></a><?php }else {?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_users_active/<?php echo  $rows->uid; ?>"  onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-danger"><?php echo $rows->status; }  ?></a>&nbsp;
		   <a href="<?php echo site_url(); ?>Admin_Controller/updatestatus_users_delete/<?php echo  $rows->uid;?>" class="btn btn-danger" onClick="return confirm('Are You Sure Delete This Users'); "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		   </td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
	</div>
     
    </div>
  </div>
  <!-- /.row -->
</div>
