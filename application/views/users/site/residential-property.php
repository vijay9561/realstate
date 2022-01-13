	<style>
	.imgclassimages{ height:300px; width:100%;}
	@media(max-with:500px){
		.imgclassimages{ height:100px; width:100%;}
	}
	</style>
<div class="container">
	<?php if($_GET['propertytype']) { ?>
	<div class="buy-single">
		<h3>view property in <?php echo $_GET['propertytype']; ?></h3>
		<div class="box-sin">
			<div class="col-md-12 single-box">
				 <?php
				 $num_rec_per_page=10;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
		    $MOVIES1=$this->db->query("SELECT * FROM property_post where  status='active' and property_residentaily='".$_GET['propertytype']."' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
			//echo $this->db->last_query();
         if(!empty($MOVIES1)){
         foreach($MOVIES1 as $movie){   
		 $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();  
             ?>
			 
				<div class="box-col" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			
				     <div class=" col-sm-6 left-side ">
						 <?php if(!empty($property1[0]->image_name)) { ?>
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>"> <img class="img-responsive imgclassimages" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" alt=""></a>
						<?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg"
								 class="img-responsive imgclassimages"/></a> 
							 <?php } ?>
					</div>				
					<div class="  col-sm-6 middle-side">
					
					     <h4><?php echo $movie->property_title; ?></h4>
						 <table style="margin-top: -10px;">
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?>&nbsp;|&nbsp;Posted On&nbsp;<?php $yrdata= strtotime($movie->date); echo date('d-M-Y', $yrdata); ?></td>
							</tr>       <?php } ?></table>
						 <table  class="table">
						 
						    <?php if(!empty($movie->category_id)){ $queryproperty=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
					       <tr><th>Property For:</th><td><?php echo $queryproperty[0]->property_name; ?></td></tr>
						   <?php  }?>
					    <?php if(!empty($movie->rooms)){ ?>
					       <tr><th>Rooms:</th><td><?php echo $movie->rooms; ?></td></tr>
						   <?php } ?>
						    <tr><th>Built-up Area:</th><td><?php echo  $movie->area; ?></td></tr>
						<?php /*?>	  <tr><th>Property Owner Name:</th><td><?php echo $movie->property_owner_name; ?></td></tr><?php */?>
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
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM  property_post where  status='active' and property_residentaily='".$_GET['propertytype']."' order by pid desc")->result();
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>residential-property?propertytype=<?php echo $_GET['propertytype']; ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>residential-property?propertytype=<?php echo $_GET['propertytype']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>residential-property?propertytype=<?php echo $_GET['propertytype']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
</ul></nav></div>
			<?php } else { ?>
		 <div class="alert alert-danger">
Property not available for more details please contact 
</div>
		<?php } ?>	
			</div>
		</div>
		
			
	
		<div class="clearfix"> </div>
		</div>
		<?php } ?>
	
	</div>
	
	
	