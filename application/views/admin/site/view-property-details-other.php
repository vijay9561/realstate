 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <?php    $id=$this->uri->segment(2); $viewdata=$this->db->query("select *from property_post where pid='$id'")->result(); 
       ?>
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
      <h1 class="page-header">View Other Services Details</h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>View Property Details</li>
		 <li> <i class="fa fa-left"></i> <a href="<?php echo site_url(); ?>view_property_other">Back</a> </li>
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
	<th>Ad Title Name</th>
	<td><?php echo $viewdata[0]->property_title; ?></td>
	</tr>
	<?php if(!empty($viewdata[0]->dealer_type)) { ?>
	<tr>
	<th>Sale Type</th>
	<td><?php echo $viewdata[0]->dealer_type; ?></td>
	</tr>
	<?php } ?>
	<tr>
	<th>Category</th>
	<td><?php
	$queryproperty=$this->db->query("select category_name from subcategory where scid='".$viewdata[0]->category_id."'")->result(); 
    $maincategory=$this->db->query("select category_name from main_category where mid='".$viewdata[0]->main_categories_id."'")->result();  ?>
	<?php echo $maincategory[0]->category_name; ?> <strong style="font-weight:bold; color:#990000">>></strong> <?php echo $queryproperty[0]->category_name; ?>
	</td>
	<?php if($viewdata[0]->category_id==92) { ?>
			<tr><th>Loan Type:</th><td><?php echo $viewdata[0]->loan_type ?></td></tr>
			<?php } ?>
	<?php if(!empty($viewdata[0]->dealer_type)) { ?>
	<tr>
	<th>Sale Type</th>
	<td><?php echo $viewdata[0]->dealer_type; ?></td>
	</tr>
	<?php } ?>
	
	<?php if(!empty($viewdata[0]->furniture_condtion)) { ?>
	<tr>
	<th><?php if($viewdata[0]->main_categories_id==5) { ?>Tution Type <?php }else{ ?>Condition<?php } ?></th>
	<td><?php echo $viewdata[0]->furniture_condtion; ?></td>
	</tr>
	<?php } ?>
	  <?php if($viewdata[0]->main_categories_id==14){ ?>
		   <tr>
            <th>Room Facility:</th>
            <td><?php echo $viewdata[0]->amenities; ?></td>
          </tr>
		     <tr>
            <th>Room Type:</th>
            <td><?php echo $viewdata[0]->single_room_type; ?></td>
          </tr>
		 <?php  } ?>
		  

	<?php if($viewdata[0]->main_categories_id==12){
		  ?>
		  <?php if(!empty($viewdata[0]->hall_facility)){ ?>
          <tr>
            <th>Hall Facility:</th>
            <td><?php echo $viewdata[0]->hall_facility; ?></td>
          </tr>
          <?php } ?>
		  <?php if(!empty($viewdata[0]->hall_type)){ ?>
          <tr>
            <th>Hall Type:</th>
            <td><?php echo $viewdata[0]->hall_type; ?></td>
          </tr>
          <?php } ?>
		  
		   <?php if(!empty($viewdata[0]->area)){ ?>
          <tr>
            <th>Built-up Area:</th>
            <td><?php echo $viewdata[0]->area; ?> sq.ft</td>
          </tr>
          <?php } ?>
		   <?php if(!empty($viewdata[0]->water_storage)){ ?>
          <tr>
            <th>Water Storage Capcity:</th>
            <td><?php echo $viewdata[0]->water_storage; ?></td>
          </tr>
          <?php } ?>
		   <?php if(!empty($viewdata[0]->model)){ ?>
             <tr>
            <th>Public Capcity:</th>
            <td><?php echo $viewdata[0]->model; ?></td>
          </tr>
          <?php } ?>
		  
		  <?php if(!empty($viewdata[0]->hanuman_temple)){ ?>
          <tr>
            <th>Temple Distance:</th>
            <td><?php echo $viewdata[0]->hanuman_temple; ?></td>
          </tr>
          <?php } ?>
		  
		  <?php if(!empty($viewdata[0]->parking_square_foot)){ ?>
          <tr>
            <th>Parking Area:</th>
            <td><?php echo $viewdata[0]->parking_square_foot; ?> sq.ft</td>
          </tr>
          <?php } ?>
		  <?php if(!empty($viewdata[0]->parking_capcity)){ ?>
          <tr>
            <th>Parking Capacity:</th>
            <td><?php echo $viewdata[0]->parking_capcity; ?></td>
          </tr>
          <?php } ?>
		  <?php } else {?>
	<?php if(!empty($viewdata[0]->car_name)) { ?>
		<tr>
	<th>Brand Name</th>
	<td><?php echo $viewdata[0]->car_name; ?></td>
	</tr>
	<?php } ?>
	<?php if(!empty($viewdata[0]->model)) { ?>
	<tr>
	<th>Model</th>
	<td><?php echo $viewdata[0]->model; ?></td>
	</tr>
	<?php } ?>
	
	<?php if(!empty($viewdata[0]->year)) { ?>
	<tr>
	<th>Registration Year</th>
	<td><?php echo $viewdata[0]->year; ?></td>
	</tr>
	<?php } ?>
	<?php if(!empty($viewdata[0]->fuel)) { ?>
	<tr>
	<th>Fuel</th>
	<td><?php echo $viewdata[0]->fuel; ?></td>
	</tr>
	<?php } ?>
	<?php if(!empty($viewdata[0]->car_driven_kilometer)) { ?>
	<tr>
	<th>Driven Kilometer</th>
	<td><?php echo $viewdata[0]->car_driven_kilometer; ?> KM</td>
	</tr>
	<?php }  }?>
	<tr>
	<?php if(!empty($viewdata[0]->property_price)){ ?>
	<th>Price</th>
	<td><i class="fa fa-inr" aria-hidden="true"></i>
&nbsp;<?php echo $viewdata[0]->property_price; ?></td>
	</tr>
	<?php } ?>
	<?php if(!empty($viewdata[0]->price_negociable)){ ?>
	<th>Price Negociable</th>
	<td><?php if($viewdata[0]->price_negociable==1){ echo 'Yes'; }else { echo  'No'; }?></td>
	</tr>
	<?php } ?>
	<?php /*?><tr>
	<th>Property Name</th>
	<td><?php echo $viewdata[0]->property_title; ?></td>
	</tr><?php */?>
	
	   <?php if(!empty($viewdata[0]->product_name)) {?>
          <tr>
            <th>Product Name:</th>
            <td><?php echo $viewdata[0]->product_name; ?></td>
          </tr>
		 <?php } ?> 
		     <?php if(!empty($viewdata[0]->store_name)) {?>
          <tr>
            <th>Store Name:</th>
            <td><?php echo $viewdata[0]->store_name; ?></td>
          </tr>
		 <?php } ?> 
		 
		  <?php if(!empty($viewdata[0]->offer_name)) {?>
          <tr>
            <th>Offer Name:</th>
            <td><?php echo $viewdata[0]->offer_name; ?></td>
          </tr>
		 <?php } ?> 
		   <?php if(!empty($viewdata[0]->offer_type)) {?>
          <tr>
            <th>Offer Type:</th>
            <td><?php echo $viewdata[0]->offer_type; ?></td>
          </tr>
		 <?php } ?> 
		 
		  <?php if(!empty($viewdata[0]->from_date)) {?>
          <tr>
            <th>Offer Start Date:</th>
            <td><?php echo $viewdata[0]->from_date; ?></td>
          </tr>
		 <?php } ?> 
		 
		   <?php if(!empty($viewdata[0]->end_date)) {?>
          <tr>
            <th>Offer End Date:</th>
            <td><?php echo $viewdata[0]->end_date; ?></td>
          </tr>
		 <?php } ?> 
		 
		 
		 <?php if($viewdata[0]->category_id==140){ ?>
		   <?php if(!empty($viewdata[0]->school_name)) {?>
          <tr>
            <th>School Name:</th>
            <td><?php echo $viewdata[0]->school_name; ?></td>
          </tr>
		 <?php } ?> 
		 <?php if(!empty($viewdata[0]->school_pattern)) {?>
          <tr>
            <th>School Pattern:</th>
            <td><?php echo $viewdata[0]->school_pattern; ?></td>
          </tr>
		 <?php } ?> 
		  <?php if(!empty($viewdata[0]->dept_type)) {?>
          <tr>
            <th>School Department:</th>
            <td><?php echo $viewdata[0]->dept_type; ?></td>
          </tr>
		 <?php } ?> 
		  <?php if(!empty($viewdata[0]->school_medium)) {?>
          <tr>
            <th>Medium of School:</th>
            <td><?php echo $viewdata[0]->school_medium; ?></td>
          </tr>
		 <?php } ?> 
		 <?php } ?>
		  <?php if($viewdata[0]->category_id==139 || $viewdata[0]->category_id==399 || $viewdata[0]->category_id==400){ ?>
		   <?php if(!empty($viewdata[0]->school_name)) {?>
          <tr>
            <th>School Name:</th>
            <td><?php echo $viewdata[0]->school_name; ?></td>
          </tr>
		 <?php } ?> 
		
		 
		  <?php if(!empty($viewdata[0]->root_num)) {?>
          <tr>
            <th>Route Name:</th>
            <td><?php echo $viewdata[0]->root_num; ?></td>
          </tr>
		 <?php } ?> 
		 <?php } ?>
	<tr>
	<th>Images</th>
	<?php $property=$this->db->query("select image_name from property_images where pid='".$viewdata[0]->pid."'")->result(); ?>
	<td>
	<?php foreach($property as $rows){ ?>
	<img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>"  style="height:100px; width:150px" class="img-thumbnail">&nbsp;
<?php } ?>
	</tr>
	<tr>
	<th>Owner Name</th>
	<td><?php echo $viewdata[0]->property_owner_name; ?></td>
	</tr>
	<tr>
	<th>Contact Number</th>
	<td><?php echo $viewdata[0]->owner_contact_no; ?></td>
	</tr>
	<tr>
	<th>City</th>
	<td><?php echo $viewdata[0]->city; ?></td>
	</tr>
	<tr>
	<th>Location Details</th>
	<td><?php echo $viewdata[0]->address_details; ?></td>
	</tr>
	<tr>
	<th>Description</th>
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
