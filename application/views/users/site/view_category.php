<div class="banner-bottom-top" style="text-align:center">
<style>
.activemyclass{
height: 155px;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-o-transition: 0.5s all;
-moz-transition: 0.5s all;
-ms-transition: 0.5s all;
width: 150%;
font-family: "Lucida Calligraphy";
font-size: 20px;
background-color: #fff;
position: absolute;
bottom: 0;
margin-left: -15px;
border: 1px solid #27da93;
}
.bottomactivehead .buy-media h6{
color: #27da93;
font-size: 0.5em;
margin: 0px;
margin-left: -7px;
}
</style>
  <div class="container">
    <div class="bottom-header" align="center">
      <div class="header-bottom" align="center">
        <?php   $viewdata=$this->db->query("select *from main_category where  status='active' order by mid asc")->result(); 
				   $links='';
				foreach( $viewdata as $rows) {  
				$links='view_category?categories='.$rows->mid;
				 ?>
        <div class="bottom-head <?php if($_GET['categories']==$rows->mid) { echo 'bottomactivehead'; }else{ echo ''; } ?>">
          <?php $Rent=$this->Admin_Model->get_property_category_Rent(); ?>
          <a href="<?php echo site_url(); ?><?php  echo $links ?>">
          <div class="buy-media <?php if($_GET['categories']==$rows->mid) { echo 'activemyclass'; }else{ echo ''; } ?>"> <img src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" style="width:100%;" />
            <h6><?php echo  $rows->category_name; ?></h6>
            <h6 style="font-size:10px">
              <?php $countervisitor=$this->db->query("select pid from property_post where main_categories_id='".$rows->mid."' and status='active'")->result(); 
	//echo $this->db->last_query();
	echo '('.count($countervisitor).')'; ?>
            </h6>
          </div>
          </a> </div>
        <?php } ?>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<div class="content">
  <div class="project">
    <div class="container">
      <style>
		.myacitveclass{
		 color: #fff;
background-color: #449d44;
border-color: #398439;
		}
		</style>
      <div class="project-top" id="searchresultcontentdata">
        <div class="row">
          <?php 
	             $num_rec_per_page=18;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
					 
					
	 $property=$this->db->query("SELECT * FROM property_post  where status='active' and main_categories_id='".$_GET['categories']."' order by pid desc LIMIT $start_from, $num_rec_per_page")->result(); 
    if(!empty($property)){
	?>
          <div class="col-md-9">
            <div class="row">
              <?php foreach( $property as  $movie ) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();?>
              <div class="col-md-4 project-grid" style=" ">
                <div class="project-grid-top">
                  <?php if($_GET['categories']==1) {?>
                  <?php if(!empty($property1[0]->image_name)) { ?>
                  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a>
                  <?php }else { ?>
                  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a>
                  <?php } }else{ ?>
                  <?php if(!empty($property1[0]->image_name)) { ?>
                  <a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a>
                  <?php }else { ?>
                  <a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg" class="img-responsive zoom-img"  style="height:150px; width:100%" alt=""/></a>
                  <?php } }  ?>
                  <div class="col-md1">
                    <div class="col-md2">
                      <div class="col-md3">
                        <!--	<span class="star"> 4.5</span>-->
                      </div>
                      <div class="col-md4"> <strong>
                        <?php //echo $movie->property_title; ?>
                        <?php  $string1 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,19).'...' :$movie->property_title; ?>
						  <?php if($_GET['categories']==1) {?>
                        <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
						<?php }else{ ?>
						 <a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>" class="mask"><?php echo ucfirst($string1); ?></a>
						<?php } ?>
						 </strong>
                        <table>
                          <?php if(!empty($movie->property_unique_id)){ ?>
                          <tr style="color:#000;font-size: 11px;">
                            <td>Ad ID:</td>
                            <td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
                          </tr>
                          <?php } ?>
                        </table>
                        <!--	<small>50 Reviews</small>-->
                      </div>
                      <div class="clearfix"> </div>
                    </div>
                    <?php if($_GET['categories']==1) {?>
                    <?php $categoryname=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
                    <p>Property For <?php echo $categoryname[0]->property_name; ?></p>
					<?php if(!empty($movie->property_price)){ ?>
                    <p class="cost">Rs <?php echo $movie->property_price; ?></p>
					<?php } ?>
                    <p style="font-size:10px">Posted On&nbsp;
                      <?php $yrdata= strtotime($movie->date); echo date('d-M-Y', $yrdata); ?>
                    </p>
                    <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>&nbsp;
                    <?php }else{ ?>
                    <?php 
								 $queryproperty=$this->db->query("select category_name from subcategory where scid='".$movie->category_id."'")->result(); 
			                    $maincategory=$this->db->query("select category_name from main_category where mid='".$movie->main_categories_id."'")->result(); 
								 ?>
                    <p>Category: &nbsp;<?php echo substr($maincategory[0]->category_name,0,10).'..'; ?> <strong>>></strong><?php echo substr($queryproperty[0]->category_name,0,5).'..'; ?></p>
					<?php if(!empty($movie->property_price)){ ?>
                    <p class="cost">Rs <?php echo $movie->property_price; ?></p>
					<?php }else{ ?>
					 <br style="margin-bottom:4px;">
					<?php } ?>
                    <p style="font-size:10px;">Posted On&nbsp;
                      <?php $yrdata= strtotime($movie->date); echo date('d-M-Y', $yrdata); ?>
                    </p>
                    <a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a>&nbsp;
                    <?php } ?>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="nav-page">
                  <nav>
                    <ul class="pagination">
                      <?php 
			$url= base_url(uri_string());
 $queryall=$this->db->query("SELECT * FROM property_post  where  status='active' and main_categories_id='".$_GET['categories']."' order by pid desc")->result();
 if(!empty($queryall)){
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);
$current_page=$_GET['page'];
$next_page = $current_page + 1;
$id=$_GET['categories'];
$currenturl='http://saibroking.com/view_category?categories='.$id;
if($_GET['page']==1 || $url==$currenturl){
$prev_page =1; 
}else {
$prev_page = $current_page -1; 
}
?>
                      <li class="next page"><a href="<?php echo site_url(); ?>view_category?categories=<?php echo $_GET['categories']; ?>&page=1"> < </a></li>
                    
                      <?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
                      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>view_category?categories=<?php echo $_GET['categories']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                      <?php };  ?>
         
                      <li class="prev page"><a href="<?php echo site_url(); ?>view_category?categories=<?php echo $_GET['categories']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
                      <?php } ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <?php } else{ ?>
          <div class="col-md-9">
            <div class="alert alert-danger"> Result Not Found </div>
          </div>
          <?php } ?>
		  <style>

@keyframes blink { 
   50% { border-color: #09A426; } 
}
.mydemossss{ /*or other element you want*/
    animation-name: blink ;
    animation-duration: .5s ;
    animation-timing-function: step-end ;
    animation-iteration-count: infinite ;
    animation-direction: alternate ;
}

  
</style>
			
          <div class="col-md-3" style="background-color:white;">
		  <?php $query12222=$this->db->query("SELECT  adveristment_name,advertisment_image FROM advertisment where top_advertisement='Top Position Page' and mid='".$_GET['categories']."' ORDER BY RAND()")->result(); ?>
		  <?php if(!empty($query12222)){ ?>
		  <div class="row mydemossss" style="border: 1px solid #AEAEAE; margin-top:0px;">
				<div class="col-md-12 project-grid" style="margin-left:0px; padding-left:0px;padding-right: 0px; padding-bottom:0px; margin-bottom:0px;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel"  style="padding:3px;">
                     <div class="carousel-inner responsivcrousal" role="listbox">
	              <?php 
								  $countrow=count($query12222);
								$counter = 1;
								foreach($query12222 as $row) 
								{
								 ?>
      <div class="item <?php echo ($counter++ == 1) ? 'active' : '' ?>">
      <a href="<?php echo site_url(); ?>contact" ><img  src="adminassets/upload/ad/<?php echo $row->advertisment_image; ?>" style="height:199px;width:100%"></a>
      </div>
	  <?php } ?>
  </div>
  
</div></div></div>
<?php } ?>
            <?php $queryall=$this->db->query("SELECT * FROM property_post where main_categories_id NOT IN('".$_GET['categories']."') and status='active' order by RAND()  LIMIT 0,15")->result(); ?>
            <?php foreach( $queryall as  $movie) {  $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();
			                               $main_categoires=$this->db->query("select *from main_category where mid='".$_GET['categories']."'")->result();
										   $main_categoires12=$this->db->query("select *from main_category where mid='".$movie->main_categories_id."'")->result();
				
				?>
				
            <div class="row" style="border: 1px solid #AEAEAE; margin-top:6px;">
              <?php  $string112 = (strlen($movie->property_title) >22) ? substr($movie->property_title,0,30).'...' :$movie->property_title; ?>
              <div class="col-md-6 project-grid" style="margin-left:0px; padding-left:0px; padding-bottom:0px; margin-bottom:0px;">
                <div class="project-grid-top"  style="margin-bottom:0px;padding: 5px;">
                  <?php if($movie->main_categories_id!=1){ ?>
                  <a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img" style="height:100px;width:100%" alt=""/></a>
                  <?php }else{ ?>
                  <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" class="img-responsive zoom-img" style="height:100px;width:100%" alt=""/></a>
                  <?php } ?>
                </div>
              </div>
              <div class="col-md-6 project-grid"  style="padding-left:3px;font-size: 12px;">
                <?php if($movie->main_categories_id!=1){ ?>
				<p><strong><a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>"><?php echo  $string112;  ?></a></strong></p>
				<?php }else{ ?>
				<p><strong><a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>"><?php echo  $string112;  ?></a></strong></p>
				<?php } ?>
                <?php if(!empty($movie->main_categories_id)) { ?>
                <p><?php echo $main_categoires12[0]->category_name; ?></p>
				<?php if(!empty($movie->property_price)){ ?>
				<p><strong>Rs.</strong>&nbsp;<?php echo $movie->property_price; ?></p>
				<?php } ?>
                <?php } ?>
               <?php /*?> <?php if(!empty($movie->city)) { ?>
                <p><strong>City :</strong> <?php echo $movie->city; ?></p>
                <?php } ?><?php */?>
                <?php /*?><?php if(!empty($movie->address_details)) { ?>
                <p><strong>Location :</strong> <?php echo $movie->address_details; ?></p>
                <?php } ?><?php */?>
                <?php if($movie->main_categories_id!=1){ ?>
                <p><a style="float:right " href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>">Read More...</a></p>
                <?php }else{ ?>
                <p><a style="float:right;" href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>">Read More...</a></p>
                <?php } ?>
              </div>
            </div>
            <?php } ?>
			  <?php
			  $query123=$this->db->query("SELECT  adveristment_name,advertisment_image FROM advertisment where top_advertisement='Bottom Position Page' and mid='".$_GET['categories']."' ORDER BY RAND()")->result();
			   if(!empty($query123)){ ?>
			<div class="row mydemossss" style="border: 1px solid #AEAEAE; margin-top:5px;">
				<div class="col-md-12 project-grid" style="margin-left:0px; padding-left:0px;padding-right: 0px; padding-bottom:0px; margin-bottom:0px;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel"  style="padding:3px;">
                     <div class="carousel-inner responsivcrousal" role="listbox">
	                   <?php 
								  $countrow=count($query123);
								$counter = 1;
								foreach($query123 as $row) 
								{
								 ?>
      <div class="item <?php echo ($counter++ == 1) ? 'active' : '' ?>">
      <a href="<?php echo site_url(); ?>contact" ><img  src="adminassets/upload/ad/<?php echo $row->advertisment_image; ?>" style="height:199px;width:100%"></a>
      </div>
	  <?php } ?>
  </div>
  
</div></div></div>
<?php } ?>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
