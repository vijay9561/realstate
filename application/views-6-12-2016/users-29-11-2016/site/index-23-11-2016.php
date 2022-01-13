<div class="banner-bottom-top" style="text-align:center">
			<div class="container">
			<div class="bottom-header" align="center">
				<div class="header-bottom" align="center">
				<?php   $viewdata=$this->db->query("select *from main_category order by mid desc")->result(); foreach( $viewdata as $rows) { ?>
				
				<div class=" bottom-head">
					<?php $Rent=$this->Admin_Model->get_property_category_Rent(); ?>
						<a href="#">
							<div class="buy-media">
							<img src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" style="width:100%;" />
							
							<h6><?php echo  $rows->category_name; ?></h6>
							</div>
						</a>
					</div>
					<?php } ?>
					
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	</div>
<script>
function propertysortname(){
var propertyname=document.getElementById('propertynamerenttype').value.trim();
    if(propertyname==2){
     var rent="Rent";
   }
    if(propertyname==3){
     var rent="Sale";
   }
window.location='<?php echo base_url(); ?>?propertysortby='+propertyname+'&propertytype='+rent;
return false;
}
function sortbybrokerager(){
var propertyname=document.getElementById('sortbybrokerage').value.trim();
window.location='<?php echo base_url(); ?>?sortbybrokerage='+propertyname;
return false;

}
function comercialpropertysort123(){
var propertyname=document.getElementById('comercialpropertysort').value.trim();
window.location='<?php echo base_url(); ?>?propertytypeby='+propertyname;
return false;
}
function sortbyfurnshingr(){
var propertyname=document.getElementById('sortbyfurnishing').value.trim();
window.location='<?php echo base_url(); ?>?sortbyfurnishing='+propertyname;
return false;

}
</script>

<?php /*?><script>
	function searchpropertybyall1(){
        var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('alllocationhome').value.trim();
				if(property_title==''){
				$("#entallalllocationerr1").html('Please enter location');
				return false;
				}else{
				window.location='<?php echo site_url(); ?>?allhome=allhomesearch&location='+property_title;
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#entallalllocationerr1").html("Please enter valid location");	
				return false;
				}else{
				window.location='<?php echo site_url(); ?>?allhome=allhomesearch&location='+property_title;
				return false;
				}
				
			
	}
function searchbysale1(){

var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('forsalehome').value.trim();
				if(property_title==''){
				$("#forsaler1").html('Please enter location');
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#forsaler1").html("Please  enter valid location");	
				return false;
				}
				window.location='<?php echo site_url(); ?>?allbuy=buy&location='+property_title;
				return false;
				
}

function searchbyrent1(){
var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('searchonrenthome').value.trim();
				if(property_title==''){
				$("#searchonrentr1").html('Please enter location');
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#searchonrentr1").html("Please enter valid location");	
				return false;
				}
				window.location='<?php echo site_url(); ?>?allrent=rent&location='+property_title;
				return false;
				
}
function forresalesearch1(){
var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('forresalehome').value.trim();
				if(property_title==''){
				$("#forresaler1").html('Please enter location');
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#forresaler1").html("Please enter valid location");	
				return false;
				}
				window.location='<?php echo site_url(); ?>?allresale=resale&location='+property_title;
				return false;
}
	
	</script><?php */?>
	<div class="content">
	<div class="project">
		<div class="container">
		<!--<div class="row">
		<div class="col-md-12">
		<div class="sap_tabs">	
				     <div id="horizontalTab12" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item2-0" role="tab"><span>All Homes</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item4-2" role="tab"><span>For Rent</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item5-3" role="tab"><span>For Sale</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item2-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item2-0" style="display:block">
								 	<div class="facts">
									<label style="color:white;">Enter Location</label>
									  	<div class="login">
										<form method="post" enctype="multipart/form-data" id="searchallpropertyhome" name="searchallpropertyhome">
									<input type="text"  placeholder="Enter Location" id="alllocationhome" name="alllocationhome" required>
									
									 		<input type="submit" value="" onclick="return searchpropertybyall1();">
											</form>
											
									 	</div>
										<span id="entallalllocationerr1" style="color:red;"></span>        
							        </div>
						  		</div>								
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item4-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item4-2">
									 <div class="facts">
									 	<label style="color:white;">Enter Location</label>
										<div class="login">
										<form method="post" enctype="multipart/form-data" id="searchrentpropertyhome" name="searchrentpropertyhome">
											<input type="text"  id="searchonrenthome" placeholder="Enter Location" name="searchonrenthome">		
									 		<input type="submit" value="" onclick="return searchbyrent1();">
											</form>
									 	</div> 
										<span style="color:red;" id="searchonrentr1"></span>
							         </div>
									 </div>	
									    <h2 class="resp-accordion" role="tab" aria-controls="tab_item5-3"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item5-3">
									 <div class="facts">
									 <label style="color:white;">Enter Location</label>
										<div class="login">
										<form method="post" enctype="multipart/form-data" id="searchpropertyforresalehome" name="searchpropertyforresalehome">
									<input type="text"  placeholder="Enter Location"  id="forresalehome" name="forresalehome">		
									 		<input type="submit" value="" onclick="return forresalesearch1();" >
											</form>
									 	</div> 
											<span style="color:red;" id="forresaler1"></span>
							         </div>
							    </div>
					      </div>
					 </div>
					 <script src="<?php echo base_url(); ?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab12').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
				</div>
		</div>
		</div>-->
		<br />
		<style>
		.myacitveclass{
		 color: #fff;
background-color: #449d44;
border-color: #398439;
		}
		</style>
		<!--<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<a class="btn btn-success <?php  if(isset($_GET['owner-property'])) { echo 'myacitveclass'; }else { echo '' ;} ?> " href="<?php echo site_url(); ?>?owner-property=Owner"> <i class="fa fa-key fa-5x" aria-hidden="true"></i><br />
		Onwer Property
</a>&nbsp;
<a class="btn btn-success <?php  if(isset($_GET['builder-property'])) { echo 'myacitveclass'; }else { echo '' ;} ?> " href="<?php echo site_url(); ?>?builder-property=Builder"><i class="fa fa-building fa-5x" aria-hidden="true"></i>
		<br />
		Builder Property</a></div>
		<div class="col-md-4"></div>
		</div>-->
				<div class="project-top">
				<div class="row">
				<div class="col-md-9">
			<div class="row">
			<div class="col-md-3">
			<label>Sort By Property</label>
				<?php $category=$this->Users_Model->get_property_category_details(); ?>
			<select name="propertynamerenttype" id="propertynamerenttype" class="form-control" placeholder="" onchange="return propertysortname();">
			<?php   if(isset($_GET['propertysortby'])){  ?>
			<option selected="true" style="display:none;" value="<?php echo $_GET['propertysortby']; ?>"><?php echo $_GET['propertytype']; ?></option>
			 <?php foreach($category as $row){
			   if($row->pcid!=$_GET['propertysortby']) { ?>
            <option value="<?php echo $row->pcid;?>"><?php echo  $row->property_name; ?></option>
            <?php } }
			 }else{ ?>
			<option  selected="true" style="display:none;">Sort By Property</option>
			 <?php foreach($category as $row){ ?>
            <option value="<?php echo $row->pcid;?>"><?php echo  $row->property_name; ?></option>
            <?php } } ?>
            </select>
			</div>
			<div class="col-md-3">
			<label>Sort By Property Type</label>
				<?php $category=$this->db->query("select *from commercial_property")->result(); ?>
			<select name="comercialpropertysort" id="comercialpropertysort" class="form-control" placeholder="" onchange="return comercialpropertysort123();">
			<?php   if(isset($_GET['propertytypeby'])){  ?>
			<option value="<?php echo $_GET['propertytypeby']; ?>" selected="true" style="display:none;"><?php echo $_GET['propertytypeby']; ?></option>
			 <?php foreach($category as $row){
			   if($row->name!=$_GET['propertytypeby']) { ?>
            <option value="<?php echo $row->name;?>"><?php echo  $row->name; ?></option>
            <?php } }
			 }else{ ?>
			<option selected="true" style="display:none;">Sort By Property</option>
			 <?php foreach($category as $row){ ?>
            <option value="<?php echo $row->name;?>"><?php echo  $row->name; ?></option>
            <?php } } ?>
            </select>
			</div>
			<div class="col-md-3">
			<label>Sort By Furnishing</label>
				<?php $category=$this->db->query("select *from furnished_property")->result(); ?>
			<select name="sortbyfurnishing" id="sortbyfurnishing" class="form-control" placeholder="" onchange="return sortbyfurnshingr();">
			<?php   if(isset($_GET['sortbyfurnishing'])){  ?>
			<option value="<?php echo $_GET['sortbyfurnishing']; ?>" selected="true" style="display:none;"><?php echo $_GET['sortbyfurnishing']; ?></option>
			 <?php foreach($category as $row){
			   if($row->name_furnished!=$_GET['sortbyfurnishing']) { ?>
            <option value="<?php echo $row->name_furnished;?>"><?php echo  $row->name_furnished; ?></option>
            <?php } }
			 }else{ ?>
			<option selected="true" style="display:none;">Sort By Furnishing</option>
			 <?php foreach($category as $row){ ?>
            <option value="<?php echo $row->name_furnished;?>"><?php echo  $row->name_furnished; ?></option>
            <?php } } ?>
            </select>
			</div>
			
			<div class="col-md-3">
			<label>Sort By Brokerage</label>
				<?php $category=$this->db->query("select *from builder_property")->result(); ?>
			<select name="sortbybrokerage" id="sortbybrokerage" class="form-control" placeholder="" onchange="return sortbybrokerager();">
			<?php   if(isset($_GET['sortbybrokerage'])){  ?>
			<option value="<?php echo $_GET['sortbybrokerage']; ?>" selected="true" style="display:none;"><?php echo $_GET['sortbybrokerage']; ?></option>
			 <?php foreach($category as $row){
			   if($row->buillder_name!=$_GET['sortbybrokerage']) { ?>
            <option value="<?php echo $row->buillder_name;?>"><?php echo  $row->buillder_name; ?></option>
            <?php } }
			 }else{ ?>
			<option selected="true" style="display:none;">Sort By Broker</option>
			 <?php foreach($category as $row){ ?>
            <option value="<?php echo $row->buillder_name;?>"><?php echo  $row->buillder_name; ?></option>
            <?php } } ?>
            </select>
			</div></div>
<br />
    <?php if(isset($_GET['builder-property'])) {    $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.property_builder='Builder' and p.status='active' group by p.pid desc  ")->result(); ?>
   <div class="row">
   <?php foreach( $property as  $movie ) { ?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
						  <?php if(!empty($movie->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $movie->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									<!-- 	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 	<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?>
						           <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									<!-- 	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?>
								 
								 </p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					</div>
		<?php  }else if(isset($_GET['sortbyfurnishing'])) {  
		  $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.property_furnish='".$_GET['sortbyfurnishing']."' and status='active' group by p.pid desc")->result(); ?>
     <?php 	 $num_rec_per_page=9;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where property_furnish='".$_GET['sortbyfurnishing']."' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 
if(!empty($property)){
	?>
   <div class="row">
   <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							  <?php if(!empty($property1[0]->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 <!--	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?> 
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 <!--	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					
					 </div>
					 <div class="row">
					 <div class="col-md-12">
					 <div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post  where  property_furnish='".$_GET['sortbyfurnishing']."' and status='active' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?sortbyfurnishing=<?php echo $_GET['sortbyfurnishing']; ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?sortbyfurnishing=<?php echo $_GET['sortbyfurnishing']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?sortbyfurnishing=<?php echo $_GET['sortbyfurnishing']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
					 <?php }else{ ?>
					 <div class="alert alert-danger">
Property not available for more details please contact 
</div>
					<?php  } }else if(isset($_GET['propertytypeby'])) {  
		//  $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.property_residentaily='".$_GET['propertytypeby']."' and status='active' group by p.pid desc")->result(); ?>
    <?php 	 $num_rec_per_page=9;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where property_residentaily='".$_GET['propertytypeby']."' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 
if(!empty($property)){
	?>
   <div class="row">
   <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							  <?php if(!empty($property1[0]->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 <!--	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?> 
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 <!--	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					
					 </div>
					 <div class="row">
					 <div class="col-md-12">
					 <div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post  where  property_residentaily='".$_GET['propertytypeby']."' and status='active' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?propertytypeby=<?php echo $_GET['propertytypeby']; ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?propertytypeby=<?php echo $_GET['propertytypeby']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?propertytypeby=<?php echo $_GET['propertytypeby']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
					 <?php }else{ ?>
					 <div class="alert alert-danger">
Property not available for more details please contact 
</div>
		<?php }  } else if(isset($_GET['propertysortby'])) {  
		              $prpertytype=$_GET['propertytype'];
		///  $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where category_id='".$_GET['propertysortby']."' and status='active' group by p.pid desc")->result(); ?>
     <?php 	 $num_rec_per_page=9;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where category_id='".$_GET['propertysortby']."' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 
if(!empty($property)){
	?>
   <div class="row">
   <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							  <?php if(!empty($property1[0]->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 <!--	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?> 
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 <!--	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					
					 </div>
					 <div class="row">
					 <div class="col-md-12">
					 <div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post  where  category_id='".$_GET['propertysortby']."' and status='active' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?propertysortby=<?php echo $_GET['propertysortby']; ?>&propertytype=<?php echo $_GET['propertytype']; ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?propertysortby=<?php echo $_GET['propertysortby']; ?>&propertytype=<?php echo $_GET['propertytype']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?propertysortby=<?php echo $_GET['propertysortby']; ?>&propertytype=<?php echo $_GET['propertytype']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
					 <?php }else{ ?>
					 <div class="alert alert-danger">
Property not available for more details please contact 
</div>
					 <?php } ?>	
					<?php  }else if(isset($_GET['allhome'])) { 
					 $city='';
					    if($_GET['location']=='sale'){
					  $city=3; 
					   }else if($_GET['location']=='rent'){
					  $city=2; 
					  }else{
					  $city=$_GET['location']; 
					 }
		 // $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where  p.address_details LIKE '%$city%' || p.rooms LIKE '%$city%' || p.residential_category LIKE '%$city%'  || p.property_builder LIKE '%$city%' || p.category_id LIKE '%$city%' and status='active' group by p.pid desc")->result(); ?>
      <?php 	 $num_rec_per_page=9;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where address_details LIKE '%$city%' || rooms LIKE '%$city%' || residential_category LIKE '%$city%'  || property_builder LIKE '%$city%' || category_id LIKE '%$city%' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 
if(!empty($property)){
	?>
   <div class="row">
   <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							  <?php if(!empty($property1[0]->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 <!--	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?> 
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 <!--	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					
					 </div>
					 <div class="row">
					 <div class="col-md-12">
					 <div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post  where address_details LIKE '%$city%' || rooms LIKE '%$city%' || residential_category LIKE '%$city%'  || property_builder LIKE '%$city%' || category_id LIKE '%$city%' and status='active' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?allhome=<?php echo $_GET['allhome']; ?>&location=<?php echo $_GET['location']; ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?allhome=<?php echo $_GET['allhome']; ?>&location=<?php echo $_GET['location']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?allhome=<?php echo $_GET['allhome']; ?>&location=<?php echo $_GET['location']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
					 <?php }else{ ?>
					 <div class="alert alert-danger">
Property not available for more details please contact 
</div>
					 <?php } ?>
					<?php /*?><?php  }else if(isset($_GET['allbuy'])) { 
					 $city=$_GET['location']; 
		  $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where  p.address_details LIKE '%$city%' and p.status='active' and p.category_id='1'  group by p.pid desc")->result(); ?>
   <div class="row">
   <?php foreach( $property as  $movie ) { ?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $movie->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									<!-- 	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 	<strong><?php echo $movie->property_title; ?></strong>
									 	<!--<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>		
						</div><?php */?>
					<?php  }else if(isset($_GET['allrent'])) { 
					 $city=$_GET['location']; 
		  $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where  p.address_details LIKE '%$city%' and  p.status='active' and p.category_id='2' group by p.pid desc")->result(); ?>
   <div class="row">
   <?php foreach( $property as  $movie ) { ?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							 <?php if(!empty($movie->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $movie->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									<!-- 	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?>
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 	<!--<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>		
						</div>
						<?php  }else if(isset($_GET['allresale'])) { 
					 $city=$_GET['location']; 
		  $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where  p.address_details LIKE '%$city%' and p.status='active' and p.category_id='3' group by p.pid desc")->result(); ?>
   <?php 	 $num_rec_per_page=9;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where status='active' and address_details LIKE '%$city%' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 

	?>
   <div class="row">
   <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							  <?php if(!empty($property1[0]->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 <!--	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?> 
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 <!--	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					
					 </div>
					 <div class="row">
					 <div class="col-md-12">
					 <div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post  where  status='active' and address_details LIKE '%$city%' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
					
		<?php  }else if(isset($_GET['sortbybrokerage'])) {  
		 // $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.property_builder='".$_GET['sortbybrokerage']."' and status='active' group by p.pid desc")->result(); ?>
     <?php 	 $num_rec_per_page=9;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where status='active' and property_builder='".$_GET['sortbybrokerage']."' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 
     if(!empty( $property)){
	?>
   <div class="row">
   <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							  <?php if(!empty($property1[0]->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 <!--	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?> 
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 <!--	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					
					 </div>
					 <div class="row">
					 <div class="col-md-12">
					 <div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post  where  status='active' and  property_builder='".$_GET['sortbybrokerage']."' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?><?php echo site_url(); ?>?sortbybrokerage=<?php echo $_GET['sortbybrokerage']; ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?sortbybrokerage=<?php echo $_GET['sortbybrokerage']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?><?php echo site_url(); ?>?sortbybrokerage=<?php echo $_GET['sortbybrokerage']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
					<?php }else{ ?>
					 <div class="alert alert-danger">
Property not available for more details please contact 
</div>
					 <?php } ?>
					
	<?php  }else if(isset($_GET['owner-property'])) {  
	//	$property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.property_builder='Owner' and p.status='active' group by p.pid desc")->result();  ?>
   <?php 	 $num_rec_per_page=9;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where status='active' and property_builder='Owner' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 

	?>
   <div class="row">
   <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							  <?php if(!empty($property1[0]->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 <!--	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?> 
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 <!--	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					
					 </div>
					 <div class="row">
					 <div class="col-md-12">
					 <div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post  where  status='active' and property_builder='Owner' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
   
   <?php }else { ?>
   
    <?php 
	 $num_rec_per_page=9;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 

	?>
   <div class="row">
   <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
					<div class="col-md-4 project-grid">
						<div class="project-grid-top">
							  <?php if(!empty($property1[0]->image_name)) { ?>
							 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> <?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a> 
							 <?php } ?>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 <!--	<span class="star"> 4.5</span>-->
									 </div>
									 <div class="col-md4">
									 		<strong><?php //echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?> 
					  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
										<table>
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									 <!--	<small>50 Reviews</small>-->
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
								 <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								 <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<?php } ?>
					
					 </div>
					 <div class="row">
					 <div class="col-md-12">
					 <div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
 $queryall=$this->db->query("SELECT * FROM property_post  where  status='active' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
   
   <?php } ?>
  </div>
  

				
		
				<div class="col-md-3" style="background-color:white;">
				  <div class="row">
					<div class="col-md-12 project-grid">
					<p>Get a house at NoBroker and furnish with Furlenco</p>
						<div class="project-grid-top">
							  <a href="#" class="mask"><img src="<?php echo base_url();?>assets/images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>
						
						</div>
					</div>
					<div class="col-md-12 project-grid">
					<p>Get a house at NoBroker and furnish with Furlenco</p>
						<div class="project-grid-top">
							  <a href="#" class="mask"><img src="<?php echo base_url();?>assets/images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>
							 
						</div>
				</div>
				<div class="col-md-12 project-grid">
				<p>Get a house at NoBroker and furnish with Furlenco</p>
						<div class="project-grid-top">
							  <a href="#" class="mask"><img src="<?php echo base_url();?>assets/images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>
							 
						</div>
				</div>
				<div class="col-md-12 project-grid">
				<p>Get a house at NoBroker and furnish with Furlenco</p>
						<div class="project-grid-top">
							  <a href="#" class="mask"><img src="<?php echo base_url();?>assets/images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>
							 
						</div>
				</div>
					</div></div></div>
					<div class="clearfix"> </div>
				</div>				
		</div>
	</div>

<!--//project-->
<!--test-->
		<!--<div class="content-bottom">
			<div class="container">
				<h3>Testimonials</h3>
					<div class="col-md-6 name-in">
						<div class=" bottom-in">
							<p class="para-in">Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur.</p>
						    <i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive men-top" src="<?php echo base_url();?>assets/images/te.jpg" alt=""></a>
								<div class="men">
								<span>Roger V. Coates</span>
								<p>Ut enim ad minim</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
						<div class=" bottom-in">
							<p class="para-in">Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive " src="<?php echo base_url();?>assets/images/te2.jpg" alt=""></a>
								<div class="men">
									<span>Ann K. Perez</span>
									<p>Ut enim ad minim</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-6  name-on">
						<div class="bottom-in ">
							<p class="para-in">Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<i class="dolor"> </i>
							<div class="men-grid">
								<a href="#" class="men-top"><img class="img-responsive " src="<?php echo base_url();?>assets/images/te1.jpg" alt=""></a>
								<div class="men">
									<span>Nancy M. Picker</span>
									<p>Ut enim ad minim</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
		</div>-->		
<!--//test-->	
<!--partners-->
	<!--<div class="content-bottom1">
		<h3>Our Partners</h3>
	 		<div class="container">
				<ul>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg1.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg2.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg3.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg4.png" alt=""></a></li>
				<div class="clearfix"> </div>
				</ul>
				<ul>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg5.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg6.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg7.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg8.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="<?php echo base_url();?>assets/images/lg9.png" alt=""></a></li>	
				<div class="clearfix"> </div>
				</ul>
			</div>
		</div>-->	
<!--//partners-->	
	</div>