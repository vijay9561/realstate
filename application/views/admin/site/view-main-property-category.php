 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
function addarticals(){
		  $("#addblogimages").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Admin_Controller/update_main_property_category",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='view-main-property-category';
						return false;
					}
					else {
				  		window.location='view-main-property-category';
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
	$('#category_images').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("category_images").value='';
   }
   });
   });
</script>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Main Property Category List </h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>Main Property Category List</li>
      </ol>
	  <?php if($this->session->userdata('updatequery')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Status Update Sucessfully..
</div> 

<?php  $this->session->unset_userdata('updatequery'); } ?>

  <?php if($this->session->userdata('updatearticals')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Main Property Category Update Sucessfully..
</div> 

<?php  $this->session->unset_userdata('updatearticals'); } ?>
<?php if($this->session->userdata('deletearticals')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Main Property Categoy Deleted Sucessfully..
</div> 

<?php  $this->session->unset_userdata('deletearticals'); } ?>
    </div>
  </div>
  <!-- /.row -->
  <?php if(isset($_GET['action'])) { ?>
  <div class="row">
  <div class="col-lg-12">
   <form role="form" id="addblogimages"  name="addblogimages"  method="post" enctype="multipart/form-data">
      
		  <input type="hidden" value="<?php echo $_GET['propertyid']; ?>" name="mid" id="mid">
       <?php // $viewdata=$this->Admin_Model->particular_property_get($_GET['propertyid']); 
	   $viewdata=$this->db->query("select *from main_category where mid='".$_GET['propertyid']."'")->result(); ?>
		  <div class="form-group">
          <label>Property Category Name</label>
          <input class="form-control" id="category_name" name="category_name" value="<?php echo $viewdata[0]->category_name; ?>" required>
        </div>
       
        <div class="form-group">
          <label>Update Your Category Images</label>
          <input type="file" id="category_images" name="category_images">
		 <input type="hidden" name="defaultimage" id="defaultimage" value="<?php echo $viewdata[0]->category_images; ?>" />
		  <span style="color:red;" id="lblError"></span>
        </div>

        <button type="submit" class="btn btn-primary" onClick="addarticals();">Update Category</button>
        <a  href="<?php echo site_url(); ?>view-property-category" class="btn btn-default">Back</a>
      </form>
  </div>
  </div>
  <br><br>
  <?php } ?>
  <div class="row">
  <?php
  // $viewdata=$this->db->query("select *from main_category order by mid desc")->result();
   ?>
    <div class="col-lg-12">
	<div class="table-responsive">
	<table class="table table-bordered"><thead><tr><th>#</th><th>Property Category Name</th><th>Category Icon</th><th>Created Date</th><th style="width:15%">Action</th></tr></thead>
	<tbody>
	<?php $i=1; 
	 $viewdata=$this->db->query("select *from main_category order by mid desc")->result();

	foreach($viewdata as $rows){  $days = DateTime::createFromFormat("Y-m-d H:i:s",$rows->date);?>
	<tr>
	<td><?php echo $i++; ?></td>
	<td><?php echo $rows->category_name; ?></td>
	<td><img src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images; ?>" style="height:100px;" /></td>
	<td><?php echo $days->format("Y-m-d");?></td>
<td><a href="<?php echo site_url();?>view-main-property-category?action=newsupdat&propertyid=<?php echo  $rows->mid;?>"  title="Edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>&nbsp;
		 <?php if($rows->status=='active') { ?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_main_property_category_inactive/<?php echo  $rows->mid; ?>" onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-success"><?php echo $rows->status;  ?></a><?php }else {?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_main_property_category_active/<?php echo  $rows->mid; ?>"  onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-danger"><?php echo $rows->status; }  ?></a>&nbsp;
		  <!-- <a href="<?php echo site_url(); ?>Admin_Controller/updatestatus_main_property_category_delete/<?php echo  $rows->mid;?>" class="btn btn-danger" onClick="return confirm('Are You Sure Delete This Main Property Category'); "><i class="fa fa-trash-o" aria-hidden="true"></i></a>-->
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
