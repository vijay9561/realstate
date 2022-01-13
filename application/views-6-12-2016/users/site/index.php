<div class="banner-bottom-top" style="text-align:center">
			<div class="container">
			<div class="bottom-header" align="center">
				<div class="header-bottom" align="center">
				<?php   $viewdata=$this->db->query("select *from main_category order by mid asc")->result(); foreach( $viewdata as $rows) { ?>
				
				<div class=" bottom-head">
					<?php $Rent=$this->Admin_Model->get_property_category_Rent(); ?>
						<a href="<?php echo site_url(); ?>">
							<div class="buy-media">
							<img src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" style="width:100%;" />
							
							<h6><?php echo  $rows->category_name; ?></h6>
							<h6 style="font-size:10px">  
	<?php $countervisitor=$this->db->query("select pid from property_post where main_categories_id='".$rows->mid."' and status='active'")->result(); 
	//echo $this->db->last_query();
	echo '('.count($countervisitor).')'; ?></h6>
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
    if(propertyname==1){
     var rent="Buy";
   }
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
		
		<br />
		<style>
		.myacitveclass{
		 color: #fff;
background-color: #449d44;
border-color: #398439;
		}
		</style>
	
				<div class="project-top">
				<div class="row">
				<div class="col-md-9">
	
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
		<?php  }else if(isset($_GET['propertytypeby'])) {  
		//  $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where p.property_residentaily='".$_GET['propertytypeby']."' and status='active' group by p.pid desc")->result(); ?>
    <?php 	 $num_rec_per_page=18;
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
     <?php 	 $num_rec_per_page=18;
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
					    if($_GET['location']=='sale' || $_GET['location']=='Sale'){
					     $city=3; 
					   }else if($_GET['location']=='rent'){
					    $city=2; 
					  }else if($_GET['location']=='buy' || $_GET['location']=='Buy'){
					   $city=1; 
					   }else{
					   $city=$_GET['location']; 
					 }
		 // $property=$this->db->query("SELECT * FROM property_post p inner join property_images pc on p.pid=pc.pid where  p.address_details LIKE '%$city%' || p.rooms LIKE '%$city%' || p.residential_category LIKE '%$city%'  || p.property_builder LIKE '%$city%' || p.category_id LIKE '%$city%' and status='active' group by p.pid desc")->result(); ?>
      <?php 	 $num_rec_per_page=18;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 //$property=$this->db->query("SELECT * FROM property_post  where address_details LIKE '%$city%' OR rooms LIKE '%$city%' OR residential_category LIKE '%$city%'  OR property_builder LIKE '%$city%' OR 
	// category_id='$city' OR city LIKE '%$city%' OR property_furnish LIKE '%$city%' OR property_residentaily LIKE '%$city%' OR  property_title like '%$city%' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 
	  $property=$this->db->query("SELECT * FROM property_post  where address_details LIKE '%$city%' OR rooms LIKE '%$city%' OR residential_category LIKE '%$city%'  OR property_builder LIKE '%$city%' OR 
	 category_id='$city' OR city LIKE '%$city%' OR property_furnish LIKE '%$city%' OR property_residentaily LIKE '%$city%' OR  property_title LIKE  UPPER('%$city%') OR property_unique_id='$city' and status='active' LIMIT $start_from, $num_rec_per_page")->result(); 
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
										<?php  $string1 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,19).'...' :$movie->property_title; ?> 
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
				//$queryall=$this->db->query("SELECT * FROM property_post  where address_details LIKE '%$city%' OR rooms LIKE '%$city%' OR residential_category LIKE '%$city%' OR property_builder LIKE '%$city%' OR 
	 //category_id='$city' OR city LIKE '%$city%' OR property_furnish LIKE '%$city%' OR property_residentaily LIKE '%$city%' OR  property_title like '%$city%' and status='active' order by pid desc")->result();
				
 $queryall=$this->db->query("SELECT * FROM property_post  where address_details LIKE '%$city' OR rooms LIKE '%$city' OR residential_category LIKE '%$city' OR property_builder LIKE '%$city' OR 
	 category_id='$city' OR city LIKE '%$city' OR property_furnish LIKE '%$city' OR property_residentaily LIKE '%$city' OR  property_title LIKE '%$city%' OR property_unique_id='$city' and status='active'")->result();
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
					 
					<?php } else if(isset($_GET['allsearchkeywords'])) { 
					$property='';
					  $queryall='';
					  $countall='';
				    	     $maincategory=$_GET['allsearchmaincategory'];
							 $allsearchsubcatories=$_GET['allsearchsubcatories'];
							 $allsearchcity=$_GET['allsearchcity'];
							 $allsearchkeyword=$_GET['allsearchkeyword'];
	                $num_rec_per_page=18;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
				if((!empty($_GET['allsearchmaincategory'])) && (!empty($_GET['allsearchsubcatories'])) && (!empty($_GET['allsearchkeyword'])) && (!empty($_GET['allsearchcity']))){
	  
	   $property=$this->db->query("SELECT * FROM property_post  where  main_categories_id='$maincategory' and (property_unique_id='$allsearchkeyword' OR  address_details='$allsearchkeyword' OR property_title LIKE 
	   '%".$allsearchkeyword."%') and category_id='$allsearchsubcatories' and address_details='$allsearchcity' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 
	  
				 $queryall=$this->db->query("SELECT * FROM property_post  where main_categories_id='$maincategory' and (property_unique_id='$allsearchkeyword' OR  address_details='$allsearchkeyword' OR property_title LIKE '%" . $allsearchkeyword . "%') and category_id='$allsearchsubcatories' and address_details='$allsearchcity' and status='active' order by pid desc")->result();
				  $countall=count($queryall);
				}else if((!empty($_GET['allsearchmaincategory'])) && (!empty($_GET['allsearchsubcatories'])) && (!empty($_GET['allsearchcity']))){
     $property=$this->db->query("SELECT * FROM property_post  where main_categories_id='$maincategory' and category_id='$allsearchsubcatories' and address_details='$allsearchcity' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
	 
	//  echo $this->db->last_query();
	$queryall=$this->db->query("SELECT * FROM property_post  where main_categories_id='$maincategory' and category_id='$allsearchsubcatories' and address_details='$allsearchcity' and status='active' order by pid desc")->result();
	 $countall=count($queryall);
				}else if((!empty($_GET['allsearchmaincategory'])) && (!empty($_GET['allsearchsubcatories'])) && (!empty($_GET['allsearchkeyword']))){
				$property=$this->db->query("SELECT * FROM property_post  where  main_categories_id='$maincategory' and category_id='$allsearchsubcatories' and  (address_details='$allsearchkeyword' OR property_unique_id='$allsearchkeyword' OR property_title LIKE '%".$allsearchkeyword."%') and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
				$queryall=$this->db->query("SELECT * FROM property_post  where  main_categories_id='$maincategory' and category_id='$allsearchsubcatories' and  (address_details='$allsearchkeyword'  OR property_unique_id='$allsearchkeyword' OR property_title LIKE '%" .$allsearchkeyword."%') and status='active' order by pid desc")->result();
				 $countall=count($queryall);
				}else if(!empty($_GET['allsearchkeyword'])){
				 $property=$this->db->query("SELECT * FROM property_post  where  address_details='$allsearchkeyword' OR property_unique_id='$allsearchkeyword' OR property_title LIKE '%".$allsearchkeyword."%' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
	$queryall=$this->db->query("SELECT * FROM property_post  where   address_details='$allsearchkeyword'  OR property_unique_id='$allsearchkeyword' OR property_title LIKE '%" .$allsearchkeyword."%' and status='active' order by pid desc")->result();
	 $countall=count($queryall);
				 }else if((!empty($_GET['allsearchkeyword'])) && (!empty($_GET['allsearchcity']))){		 
				  $property=$this->db->query("SELECT * FROM property_post  where  address_details='$allsearchcity' and (address_details='$allsearchkeyword'  OR property_unique_id='$allsearchkeyword' OR property_title LIKE '%" .$allsearchkeyword."%') status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
	$queryall=$this->db->query("SELECT * FROM property_post  where address_details='$allsearchcity' and  (address_details='$allsearchkeyword'  OR property_unique_id='$allsearchkeyword' OR property_title LIKE '%" .$allsearchkeyword."%') status='active' order by pid desc")->result();
	 $countall=count($queryall);
				}else{
			$property=$this->db->query("SELECT * FROM property_post  where main_categories_id='$maincategory' and category_id='$allsearchsubcatories' and status='active' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
			
		//	 echo $this->db->last_query();
	  $queryall=$this->db->query("SELECT * FROM property_post  where main_categories_id='$maincategory' and category_id='$allsearchsubcatories' and status='active' order by pid desc")->result();
	   $countall=count($queryall);
				}
if(!empty($property)){
	?>
   <div class="row">
   
      <?php echo $countall; ?> Result(s) Found
	  <hr />
   <?php foreach($property as  $movie) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
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
										<?php  $string1 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,19).'...' :$movie->property_title; ?> 
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
				//$queryall=$this->db->query("SELECT * FROM property_post  where address_details LIKE '%$city%' OR rooms LIKE '%$city%' OR residential_category LIKE '%$city%' OR property_builder LIKE '%$city%' OR 
	 //category_id='$city' OR city LIKE '%$city%' OR property_furnish LIKE '%$city%' OR property_residentaily LIKE '%$city%' OR  property_title like '%$city%' and status='active' order by pid desc")->result();
				
 
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?allsearchkeywords=<?php echo $_GET['allsearchkeywords']; ?>&allsearchmaincategory=<?php echo $_GET['allsearchmaincategory']; ?>&allsearchsubcatories=<?php echo $_GET['allsearchsubcatories']; ?>&allsearchcity=<?php echo $_GET['allsearchcity']; ?>&allsearchkeyword=<?php echo $_GET['allsearchkeyword']; ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?allsearchkeywords=<?php echo $_GET['allsearchkeywords']; ?>&allsearchmaincategory=<?php echo $_GET['allsearchmaincategory']; ?>&allsearchsubcatories=<?php echo $_GET['allsearchsubcatories']; ?>&allsearchcity=<?php echo $_GET['allsearchcity']; ?>&allsearchkeyword=<?php echo $_GET['allsearchkeyword']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?allsearchkeywords=<?php echo $_GET['allsearchkeywords']; ?>&allsearchmaincategory=<?php echo $_GET['allsearchmaincategory']; ?>&allsearchsubcatories=<?php echo $_GET['allsearchsubcatories']; ?>&allsearchcity=<?php echo $_GET['allsearchcity']; ?>&allsearchkeyword=<?php echo $_GET['allsearchkeyword']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
					 </div>
					 </div>
					 <?php }else{ ?>
					   <?php echo $countall; ?> Result(s) Found
	  <hr />
					 <div class="alert alert-danger">
Property not available for more details please contact 
</div>
					 <?php } ?>
					 
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
										<?php  $string1 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,19).'...' :$movie->property_title; ?> 
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
										<?php  $string1 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,19).'...' :$movie->property_title; ?> 
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
     <?php 	 $num_rec_per_page=18;
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
										<?php  $string1 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,19).'...' :$movie->property_title; ?> 
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
  <li class="next page"><a href="<?php echo site_url(); ?>?sortbybrokerage=<?php echo $_GET['sortbybrokerage']; ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?sortbybrokerage=<?php echo $_GET['sortbybrokerage']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>?sortbybrokerage=<?php echo $_GET['sortbybrokerage']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
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
   <?php 	 $num_rec_per_page=18;
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
										<?php  $string1 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,19).'...' :$movie->property_title; ?> 
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
	             $num_rec_per_page=18;
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
										<?php  $string1 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,19).'...' :$movie->property_title; ?> 
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
			$url= base_url(uri_string());
 $queryall=$this->db->query("SELECT * FROM property_post  where  status='active' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);
$current_page=$_GET['page'];
$next_page = $current_page + 1;
if($_GET['page']==1 || $url=='http://saibroking.com/'){
$prev_page =1; 
}else {
$prev_page = $current_page -1; 
}
?>
  <li class="next page"><a href="<?php echo site_url(); ?>?page=1"> < </a></li>
  <?php if($total_records>19) { ?>
  <li class="page"><a href="<?php echo site_url(); ?>?page=<?php echo $prev_page; ?>">Previous Page</a></li>
  <?php } ?>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
 <?php if($total_records>19) { ?>
  <li class="page"><a href="<?php echo site_url(); ?>?page=<?php echo $next_page; ?>">Next Page</a></li>
  <?php } ?>
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