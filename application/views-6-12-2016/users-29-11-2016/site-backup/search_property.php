<div class="container">
	<?php if(isset($_GET['allhome'])) {
	//$viewdata=$this->Users_Model->search_all_location($_GET['location']);
	 $city=$_GET['location'];
	$viewdata=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where  p.address_details LIKE '%$city%' group by p.pid desc")->result();
	//echo $this->db->last_query();
	?>
	<div class="buy-single">
		<h3>View Search property sadfafsdfdasfdasfdsa </h3>
		<div class="box-sin">
			<div class="col-md-12 single-box">
			<hr />
			<h4 align="left"><?php echo count($viewdata); ?> Result(s) Found </h4>
			<hr />
				 <?php
			if(!empty($viewdata)) {
		     foreach($viewdata as $rows) {
             ?>
				<div class="box-col" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			
				     <div class=" col-sm-7 left-side ">
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $rows->pid; ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					
					     <h4>Property Name:<?php echo $rows->property_title; ?></h4>
						 <table  class="table">
					       <tr><th>Rooms:</th><td><?php echo $rows->rooms; ?></td></tr>
						    <tr><th>Built-up Area:</th><td><?php echo  $rows->area; ?></td></tr>
							  <tr><th>Property Owner Name:</th><td><?php echo $rows->property_owner_name; ?></td></tr>
							   <tr><th>Price:</th><td><?php echo $rows->property_price; ?></td></tr>
							  	  <tr><th> Near Bus top:</th><td><?php echo $rows->near_bus_stand; ?></td></tr>
									  <tr><th> Near Railway Station:</th><td><?php echo $rows->near_railway_station; ?></td></tr>
									  <tr><th>Amenities:</th><td><?php echo substr($rows->amenities,1,100); ?></td></tr>
						 </table>		 
						<div class="right-side">
							 <a href="#" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				<?php } } else { ?>
				<div class=" col-sm-7 left-side ">
				  <div class="alert alert-danger">Not Found Property</div>
				</div>
				<?php } ?>
			</div>
		</div>
		
		<div class="clearfix"> </div>
		</div>
		<?php } ?>
		
		<?php if(isset($_GET['allbuy'])) {
		 $city=$_GET['location'];
	$viewdata=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.category_id='1' and p.address_details LIKE '%$city%' group by p.pid desc")->result();
	//$this->Users_Model->search_all_allbuy($_GET['location']);
	?>
	<div class="buy-single">
		<h3>View Search property </h3>
		<div class="box-sin" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			<div class="col-md-12 single-box">
			<hr />
			<h4 align="left"><?php echo count($viewdata); ?> Result(s) Found </h4>
			<hr />
				 <?php
			if(!empty($viewdata)) {
		     foreach($viewdata as $rows) {
             ?>
				<div class="box-col">
			
				     <div class=" col-sm-7 left-side ">
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $rows->pid; ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					
					     <h4>Property Name:<?php echo $rows->property_title; ?></h4>
						 <table  class="table">
					       <tr><th>Rooms:</th><td><?php echo $rows->rooms; ?></td></tr>
						    <tr><th>Built-up Area:</th><td><?php echo  $rows->area; ?></td></tr>
							  <tr><th>Property Owner Name:</th><td><?php echo $rows->property_owner_name; ?></td></tr>
							   <tr><th>Price:</th><td><?php echo $rows->property_price; ?></td></tr>
							  <tr><th> Near Bus top:</th><td><?php echo $rows->near_bus_stand; ?></td></tr>
									  <tr><th> Near Railway Station:</th><td><?php echo $rows->near_railway_station; ?></td></tr>
									  <tr><th>Amenities:</th><td><?php echo substr($rows->amenities,1,100); ?></td></tr>
						 </table>		 
						<div class="right-side">
							 <a href="#" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				<?php } } else { ?>
				<div class=" col-sm-7 left-side ">
				  <div class="alert alert-danger">Not Found Property</div>
				</div>
				<?php } ?>
			</div>
		</div>
		
		<div class="clearfix"> </div>
		</div>
		<?php } ?>
		
		
		<?php if(isset($_GET['allrent'])) {
//	$viewdata=$this->Users_Model->search_all_allrent($_GET['location']);
 $city=$_GET['location'];
	$viewdata=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.category_id='2' and  p.address_details LIKE '%$city%' group by p.pid desc")->result();
	?>
	<div class="buy-single">
		<h3>View Search property </h3>
		<div class="box-sin" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			<div class="col-md-12 single-box">
			<hr />
			<h4 align="left"><?php echo count($viewdata); ?> Result(s) Found </h4>
			<hr />
				 <?php
			if(!empty($viewdata)) {
		     foreach($viewdata as $rows) {
             ?>
				<div class="box-col">
			
				     <div class=" col-sm-7 left-side ">
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $rows->pid; ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					
					     <h4>Property Name:<?php echo $rows->property_title; ?></h4>
						 <table  class="table">
					       <tr><th>Rooms:</th><td><?php echo $rows->rooms; ?></td></tr>
						    <tr><th>Built-up Area:</th><td><?php echo  $rows->area; ?></td></tr>
							  <tr><th>Property Owner Name:</th><td><?php echo $rows->property_owner_name; ?></td></tr>
							   <tr><th>Price:</th><td><?php echo $rows->property_price; ?></td></tr>
							  <tr><th> Near Bus top:</th><td><?php echo $rows->near_bus_stand; ?></td></tr>
									  <tr><th> Near Railway Station:</th><td><?php echo $rows->near_railway_station; ?></td></tr>
									  <tr><th>Amenities:</th><td><?php echo substr($rows->amenities,1,100); ?></td></tr>
						 </table>		 
						<div class="right-side">
							 <a href="#" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				<?php } } else { ?>
				<div class=" col-sm-7 left-side ">
				  <div class="alert alert-danger">Not Found Property</div>
				</div>
				<?php } ?>
			</div>
		</div>
		
		<div class="clearfix"> </div>
		</div>
		<?php } ?>
		
		<?php if(isset($_GET['allresale'])) {
	//$viewdata=$this->Users_Model->search_all_allresale($_GET['location']);
	$city=$_GET['location'];
	$viewdata=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.category_id='3' and  p.address_details LIKE '%$city%' group by p.pid desc")->result();
	?>
	<div class="buy-single">
		<h3>View Search property </h3>
		<div class="box-sin" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			<div class="col-md-12 single-box">
			<hr />
			<h4 align="left"><?php echo count($viewdata); ?> Result(s) Found </h4>
			<hr />
				 <?php
			if(!empty($viewdata)) {
		     foreach($viewdata as $rows) {
             ?>
				<div class="box-col">
			
				     <div class=" col-sm-7 left-side ">
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $rows->pid; ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					
					     <h4>Property Name:<?php echo $rows->property_title; ?></h4>
						 <table  class="table">
					       <tr><th>Rooms:</th><td><?php echo $rows->rooms; ?></td></tr>
						    <tr><th>Built-up Area:</th><td><?php echo  $rows->area; ?></td></tr>
							  <tr><th>Property Owner Name:</th><td><?php echo $rows->property_owner_name; ?></td></tr>
							   <tr><th>Price:</th><td><?php echo $rows->property_price; ?></td></tr>
							   	  <tr><th> Near Bus top:</th><td><?php echo $rows->near_bus_stand; ?></td></tr>
									  <tr><th> Near Railway Station:</th><td><?php echo $rows->near_railway_station; ?></td></tr>
									  <tr><th>Amenities:</th><td><?php echo substr($rows->amenities,1,100); ?></td></tr>
						 </table>		 
						<div class="right-side">
							 <a href="#" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				<?php } } else { ?>
				<div class=" col-sm-7 left-side ">
				  <div class="alert alert-danger">Not Found Property</div>
				</div>
				<?php } ?>
			</div>
		</div>
		
		<div class="clearfix"> </div>
		</div>
		<?php } ?>
	</div>