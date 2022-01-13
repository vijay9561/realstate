<div class="box-sin">
			<div class="col-md-12 single-box">
				 <?php
				 $num_rec_per_page=10;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
		    $MOVIES1=$this->db->query("SELECT * FROM property_post  p inner join property_images pc on p.pid=pc.pid where  status='active' and category_id='".$_GET['category']."' group by p.pid desc LIMIT $start_from, $num_rec_per_page")->result();
			//echo $this->db->last_query();
           if(!empty($MOVIES1)){
         foreach($MOVIES1 as $movie){     
             ?>
				<div class="box-col" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			
				     <div class=" col-sm-6 left-side ">
					 <?php if(!empty($movie->image_name)) { ?>
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>"> <img class="img-responsive imgclassimages" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $movie->image_name; ?>" alt=""></a>
						<?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
					</div>				
					<div class="  col-sm-6 middle-side">
					
					     <h4><?php echo $movie->property_title; ?></h4>
						 <table  class="table">
						  <?php if(!empty($movie->category_id)){ $queryproperty=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
					       <tr><th>Property For:</th><td><?php echo $queryproperty[0]->property_name; ?></td></tr>
						   <?php  }?>
					    <?php if(!empty($movie->rooms)){ ?>
					       <tr><th>Rooms:</th><td><?php echo $movie->rooms; ?></td></tr>
						   <?php } ?>
						    <tr><th>Built-up Area:</th><td><?php echo  $movie->area; ?></td></tr>
							<?php /*?>  <tr><th>Property Owner Name:</th><td><?php echo $movie->property_owner_name; ?></td></tr><?php */?>
							   <tr><th>Price:</th><td><?php echo $movie->property_price; ?></td></tr>
							     <?php if(!empty($movie->near_bus_stand)){ ?>
									 <tr><th>Your Near Bus Stop:</th><td><?php echo $movie->near_bus_stand; ?></td></tr><?php } ?>
									    <?php if(!empty($movie->near_railway_station)){ ?>
									  <tr><th>Your Near Railway Station:</th><td><?php echo $movie->near_railway_station; ?></td></tr>
									  <?PHP } ?>
									   <?php if(!empty($movie->amenities)){ ?>
									  <tr><th>Amenities:</th><td><?php echo substr($movie->amenities,1,100); ?></td></tr>
									  <?PHP } ?>
						<?php /*?><?php if($this->session->userdata('UID')){ ?>
									 <tr><th>Property Owner Name:</th><td><?php echo $movie->property_owner_name; ?></td></tr>
									 <tr><th>Property Owner Contact No:</th><td><?php echo $movie->owner_contact_no; ?></td></tr>
									<?php } ?><?php */?>
						 </table>
						 <?php /*?>	<?php if(!$this->session->userdata('UID')){ ?>		 
						<div class="right-side">
							 <a style="cursor:pointer;" class="hvr-sweep-to-right more" data-toggle="modal" data-target=".bs-example-modal-sm">Contact Builder</a>     
					 </div>
					 <?php } ?><?php */?>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				<?php } } else { ?>
				<div class="alert alert-danger"> Property Not Available
</div>
				<?php } ?>
				<div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where status='active' and category_id='".$_GET['category']."' group by p.pid desc")->result();
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $_GET['category']; ?>&propertyname<?php echo $_GET['propertyname'];  ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $_GET['category']; ?>&propertyname<?php echo $_GET['propertyname'];  ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?><?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $_GET['category']; ?>&propertyname<?php echo $_GET['propertyname'];  ?>&page=<?php echo $total_pages;?>"> > </a></li>
</ul></nav></div>
		
			</div>
		</div>
		
		<div class="box-sin">
			<div class="col-md-12 single-box">
				 <?php
				$propertytype=$_GET['propertytype'];
				 $num_rec_per_page=10;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
		    $MOVIES1=$this->db->query("SELECT * FROM property_post  p inner join property_images pc on p.pid=pc.pid where p.property_residentaily='$propertytype' and p.status='active' group by p.pid desc LIMIT $start_from, $num_rec_per_page")->result();
			//echo $this->db->last_query();

         foreach($MOVIES1 as $movie){     
             ?>
				<div class="box-col" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			
				     <div class=" col-sm-6 left-side ">
					   <?php if(!empty($movie->image_name)) { ?>
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>"> <img class="img-responsive imgclassimages" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $movie->image_name; ?>" alt=""></a>
						<?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
					</div>				
					<div class="  col-sm-6 middle-side">
					
					     <h4>Property Name:<?php echo $movie->property_title; ?></h4>
						 <table  class="table">
						  <?php if(!empty($movie->category_id)){ $queryproperty=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
					       <tr><th>Property For:</th><td><?php echo $queryproperty[0]->property_name; ?></td></tr>
						   <?php  }?>
					          <?php if(!empty($movie->rooms)){ ?>
					       <tr><th>Rooms:</th><td><?php echo $movie->rooms; ?></td></tr>
						   <?php } ?>
						    <tr><th>Built-up Area:</th><td><?php echo  $movie->area; ?></td></tr>
							 <?php /*?> <tr><th>Property Owner Name:</th><td><?php echo $movie->property_owner_name; ?></td></tr><?php */?>
							   <tr><th>Price:</th><td><?php echo $movie->property_price; ?></td></tr>
							     <?php if(!empty($movie->near_bus_stand)){ ?>
									 <tr><th>Your Near Bus Stop:</th><td><?php echo $movie->near_bus_stand; ?></td></tr><?php } ?>
									    <?php if(!empty($movie->near_railway_station)){ ?>
									  <tr><th>Your Near Railway Station:</th><td><?php echo $movie->near_railway_station; ?></td></tr>
									  <?PHP } ?>
									   <?php if(!empty($movie->amenities)){ ?>
									  <tr><th>Amenities:</th><td><?php echo substr($movie->amenities,1,100); ?></td></tr>
									  <?PHP } ?>
						<?php /*?><?php if($this->session->userdata('UID')){ ?>
									 <tr><th>Property Owner Name:</th><td><?php echo $movie->property_owner_name; ?></td></tr>
									 <tr><th>Property Owner Contact No:</th><td><?php echo $movie->owner_contact_no; ?></td></tr>
									<?php } ?><?php */?>
						 </table>
						 <?php /*?>	<?php if(!$this->session->userdata('UID')){ ?>		 
						<div class="   right-side">
							 <a style="cursor:pointer;" class="hvr-sweep-to-right more" data-toggle="modal" data-target=".bs-example-modal-sm">Contact Builder</a>     
					 </div>
					 <?php } ?><?php */?>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				<?php } ?>
				<div class="nav-page"><nav> 
	<?php 
	 $queryall=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.property_residentaily='$propertytype' and p.status='active' group by p.pid desc")->result();
				if(!empty($queryall)){

$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?> 
		<ul class="pagination">
				
  <li class="next page"><a href="<?php echo site_url(); ?>residential-property?propertytype=Commercial Property&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>">
	  <a href="<?php echo site_url(); ?>residential-property?propertytype=Commercial Property&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page">
<a href="<?php echo site_url(); ?>residential-property?propertytype=Commercial Property&page=<?php echo $total_pages;?>"> > </a></li>
</ul>
<?php } ?></nav></div>
				
				
			</div>
		</div>