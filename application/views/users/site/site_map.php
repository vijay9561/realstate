
<style>
.panel-title:hover {
     cursor: pointer;
}

.accordion_head {
    background-color:#09A426;
    color: white;
    cursor: pointer;
    font-size: 14px;
    margin: 0 0 1px 0;
    padding: 7px 11px;
    font-weight: bold;
}
.accordion_body {
 background:white;
  border:1px solid #09A426;
  margin-top: -1px;
}
.accordion_body p {
    padding: 18px 5px;
    margin: 0px;
}
.plusminus {
    float:right;
}
</style>
<script>
$(document).ready(function () {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function () {
        if ($('.accordion_body').is(':visible')) {
            $(".accordion_body").slideUp(300);
            $(".plusminus").text('+');
        }
        if ($(this).next(".accordion_body").is(':visible')) {
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").text('+');
        } else {
            $(this).next(".accordion_body").slideDown(300);
            $(this).children(".plusminus").text('-');
        }
    });
});
</script>
<div class="about">	
	<div class="about-head">
		<div class="container">
			<h3>Site Map</h3>
				<!-- <div class="about-in">
					<a href="#"><img src="<?PHP echo base_url();?>assets/images/at.jpg" alt="image" class="img-responsive ">	</a>			
					<h6 ><a href="blog_single.html">Lorem ipsum dolor sit amet, consectetur adipisci ngelit. Donec nisi sem, vestibulum Etortor tortor in turpis. Proin mauris nulla, rutrum aliquet arcu vel</a></h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi sem, vestibulum ac lobortis quis, aliquet in metus. Suspendi sse a nibh id eros consectetur laoreet. Etiam viverra auctor orci, eu mattis ipsum rutrum nec.
						Etortor tortor in turpis. Proin mauris nulla, rutrum aliquet arcu vel, porttitor varius dolor. Phasellus vitae tincidunt orci, et faucibus eros. Sed dolor sapien, pharetra placerat feugiat.</p>
				</div> -->
		</div>
	</div>
	<!---->
	<style>
	a:hover{ color:#27da93;
	text-decoration:none;
    cursor:pointer;}
	</style>
	<div class="about-middle">
		<div class="container">		
			<div class="col-md-6 about-mid">
				<h3 style="font-style:italic; display:none;">Site Map</h3><br>
				   <ul style="list-style-type:none; padding-bottom:20px; ">
				   <li style="line-height: 2; "><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(); ?>">Home</a></li>
				   <li style="line-height: 2; "><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(); ?>about">About Us</a></li>
				      <li style="line-height: 2; "><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(); ?>terms">Terms & Condition</a></li>
					    <li style="line-height: 2; "><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(); ?>privacy">Privacy Policy</a></li>
						   <li style="line-height: 2; "><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(); ?>contact">Contact</a></li>
					 <li style="line-height: 2; "><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(); ?>property-post-requirement">Post Requirement</a></li>
					  <li style="line-height: 2; "><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(); ?>search_user_view_requirement">Search Requirement</a></li>
					  <li style="line-height: 2; "><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;&nbsp;<a href="#" data-popup-open="popup-1">Post Free Ad</a></li>
				   </ul>
			</div>
			<div class="col-md-6 about-mid">
			<h3 style="font-style:italic; font-size:22px;">Our Ad Categories</h3><br>
				<div class="accordion_container">
		 <?php $listofallcount=$this->db->query("select *from main_category where mid IN(1,3,4,5,6,7,8,9,10,11,12,13,14)")->result(); 
			 foreach($listofallcount as $listofall){ ?>
    <div class="accordion_head"><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;<?php echo $listofall->category_name; ?><span class="plusminus">+</span>
    </div>
    <div class="accordion_body" style="display: none;">
       <div class="panel-body">
             <ul style="list-style-type:none;">
			<?php 
			 $otherlist=$this->db->query("select *from subcategory where mid='".$listofall->mid."' order by category_name asc")->result(); ?>
			  <?php if($listofall->mid==1){?>
			  <div class="row">
			 
			 <div class="col-md-6">
			  <ul style="list-style-type:none;">
						<li><a class="respro" href="<?php echo site_url(); ?>residential-property?propertytype=Residential Property"><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;Residential Property</a></li>
						<li><a class="respro" href="<?php echo site_url(); ?>residential-property?propertytype=Commercial Property"><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;Commercial Property </a></li>
						<li><a class="respro" href="<?php echo site_url(); ?>residential-property?propertytype=Land/Plot"><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;Land/Plot</a></li><ul>
					</div>
					 <div class="col-md-6">
			  <?php
			 foreach( $otherlist as $subcategory) {?> 
			 <li><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;<?php echo $subcategory->category_name; ?> Property</li>
			 <?php }?></div>
					</div>
			 <?php  }else{  foreach( $otherlist as $subcategory) {?>
			  <li><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;<?php echo $subcategory->category_name; ?></li>
			 <?php } } ?>
			 </ul>
            </div>
    </div>
   <?php } ?> 
	
</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
	<!---->
	<!-- <div class="choose-us">
		<div class="container">
			<h3>why choose us</h3>
			<div class="us-choose">
				<div class="col-md-6 why-choose">
					<div class="  ser-grid ">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-pencil"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5>beautiful &amp; enjoyable designs</h5>
						<label>The standard chunk of Lorem</label>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 why-choose">
					<div class=" ser-grid">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-time"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5>beautiful &amp; enjoyable designs</h5>
						<label>The standard chunk of Lorem</label>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="us-choose">
				<div class="col-md-6 why-choose">
					<div class=" ser-grid">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5>beautiful &amp; enjoyable designs</h5>
						<label>The standard chunk of Lorem</label>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 why-choose">
					<div class=" ser-grid">
						<i class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </i>
					</div>
					<div class="ser-top beautiful"> 
						<h5>beautiful &amp; enjoyable designs</h5>
						<label>The standard chunk of Lorem</label>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
				
			</div>
		</div> -->
	<!---->
	<!---->
	<!-- <div class="about-bottom">
		<div class="container">
				<div class="col-md-6 bottom-about">
					<h4><a href="blog_single.html">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</a></h4>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
					<a href="blog_single.html" class="hvr-sweep-to-right more">Read More</a>
				</div>
				<div class="col-md-6 bottom-about1">
					<iframe src="https://player.vimeo.com/video/12690053"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> -->
		

</div>