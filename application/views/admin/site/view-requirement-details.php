 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
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
      <h1 class="page-header">View Post Requirement Details</h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>View Property Details</li>
		 <li> <i class="fa fa-left"></i> <a href="<?php echo site_url(); ?>search_users_post_requirment">Back</a> </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-lg-12">
	<div class="table-responsive">
	<table class="table table-bordered">
	<tbody>
	<tr>
	<th>Requirement ID</th>
	<td><?php echo $viewdata[0]->property_unique_id; ?></td>
	</tr>
    <th>Owner Name</th>
	<td><?php echo $viewdata[0]->firstname.'&nbsp;'.$viewdata[0]->lastname; ?></td>
	</tr>
	<tr>
	<th>Owner Email Address</th>
	<td><?php echo $viewdata[0]->eamil; ?></td>
	</tr>
	<tr>
	<th>Owner Contact Number</th>
	<td><?php echo $viewdata[0]->mobile_no; ?></td>
	</tr>
	<tr>
	<th>Owner Profession</th>
	<td><?php echo $viewdata[0]->yourpropesinal; ?></td>
	</tr>
	<tr>
	<th>Owner Address Details</th>
	<td><?php echo $viewdata[0]->address; ?></td>
	</tr>
	<tr>
	<th>Title</th>
	<td><?php echo $viewdata[0]->property_title; ?></td>
	</tr>
	<tr>
	<th>Category</th><?php $mysql=$this->db->query("select *from main_category where mid='".$viewdata[0]->category_name."'")->result(); ?>
	<td><?php echo $mysql[0]->category_name; ?></td>
	</tr>
	<tr>
	<th>Sub Category</th>
	<td><?php echo $viewdata[0]->slaeby; ?></td>
	</tr>
	<tr>

	<th>Requirement Posted Date</th>
	<td><?php  $days = DateTime::createFromFormat("Y-m-d H:i:s",$viewdata[0]->date);
	echo $days->format("Y-m-d"); ?></td>
	</tr>
<tr>
	<th>Description</th>
	<td><?php echo $viewdata[0]->description; ?></td>
	</tr>
	</tbody>
	</table>
	</div>
     
    </div>
  </div>
  <!-- /.row -->
</div>
