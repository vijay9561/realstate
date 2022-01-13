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
      <h1 class="page-header">View Property Details</h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>View Property Details</li>
		 <li> <i class="fa fa-left"></i> <a href="<?php echo site_url(); ?>view-admin-property">Back</a> </li>
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
	<th>Ad ID</th>
	<td><?php echo $viewdata[0]->property_unique_id; ?></td>
	</tr>
	<tr>
	<th>Property Name</th>
	<td><?php echo $viewdata[0]->property_title; ?></td>
	</tr>
	<tr>
	<th>Property Price</th>
	<td><i class="fa fa-inr" aria-hidden="true"></i>
&nbsp;<?php echo $viewdata[0]->property_price; ?></td>
	</tr>
	
	<th>Price Negociable</th>
	<td><?php if($viewdata[0]->price_negociable==1){ echo 'Yes'; }else { echo  'No'; }?></td>
	</tr>
	<?php /*?><tr>
	<th>Property Name</th>
	<td><?php echo $viewdata[0]->property_title; ?></td>
	</tr><?php */?>
	<tr>
	<th>Property Type</th>
	<td><?php echo $viewdata[0]->property_residentaily; ?></td>
	</tr>
	<tr>
	<th>Property Broker Type</th>
	<td><?php echo $viewdata[0]->property_builder; ?></td>
	</tr>
	<tr>
	<th>Property Category Name</th>
	<td><?php echo $viewdata[0]->property_name; ?></td>
	</tr>
	<tr>
	<?php if(!empty($viewdata[0]->rooms)) { ?>
	<th>Number of Rooms</th>
	<td><?php echo $viewdata[0]->rooms; ?></td>
	</tr>
	<?php } ?>
	<?php if(!empty($viewdata[0]->property_furnish)) { ?>
	<th>Furnshing</th>
	<td><?php echo $viewdata[0]->property_furnish; ?></td>
	</tr>
	<?php } ?>
	<tr>
	<th>Property Area</th>
	<td><?php echo $viewdata[0]->area; ?></td>
	</tr>
	<?php if(!empty($viewdata[0]->amenities)){ ?>
	<th>Amenities</th>
	<td><?php echo substr($viewdata[0]->amenities,1,100); ?></td>
	</tr>
	<?php } ?>
	<?php if(!empty($viewdata[0]->near_bus_stand)){ ?>
	<th>Bus Stop</th>
	<td><?php echo substr($viewdata[0]->near_bus_stand,1,1000); ?></td>
	</tr>
	<?php } ?>
	<?php if(!empty($viewdata[0]->near_bus_stand)){ ?>
	<th>Railway Station</th>
	<td><?php echo substr($viewdata[0]->near_railway_station,1,1000); ?></td>
	</tr>
	<?php } ?>
	<tr>
	<th>Property Images</th>
	<?php $property=$this->db->query("select image_name from property_images where pid='".$viewdata[0]->pid."'")->result(); ?>
	<td>
	<?php foreach($property as $rows){ ?>
	<img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>"  style="height:100px; width:150px" class="img-thumbnail">&nbsp;
<?php } ?>
	</tr>
	<tr>
	<th>Property Owner Name</th>
	<td><?php echo $viewdata[0]->property_owner_name; ?></td>
	</tr>
	<tr>
	<th>Property Contact Number</th>
	<td><?php echo $viewdata[0]->owner_contact_no; ?></td>
	</tr>
	<tr>
	<th>Property City</th>
	<td><?php echo $viewdata[0]->city; ?></td>
	</tr>
	<tr>
	<th>Property Location Details</th>
	<td><?php echo $viewdata[0]->address_details; ?></td>
	</tr>
	<tr>
	<th>Property Description</th>
	<td><?php echo $viewdata[0]->property_description; ?></td>
	</tr>
<tr>
	<th>Property Posted Date</th>
	<td><?php  $days = DateTime::createFromFormat("Y-m-d H:i:s",$viewdata[0]->date);
	echo $days->format("Y-m-d"); ?></td>
	</tr>

	</tbody>
	</table>
	</div>
     
    </div>
  </div>
  <!-- /.row -->
</div>
