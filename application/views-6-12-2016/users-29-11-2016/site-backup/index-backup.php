]<div class="banner-bottom-top" style="text-align:center">
			<div class="container">
			<div class="bottom-header" align="center">
				<div class="header-bottom" align="center">
					<div class=" bottom-head">
					<?php $Buy=$this->Admin_Model->get_property_category_Buy(); ?>
						<a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $Buy[0]->pcid;?>&propertyname=<?php echo  $Buy[0]->property_name; ?>">
							<div class="buy-media">
								<i class="buy"> </i>
								<h6><?php echo  $Buy[0]->property_name; ?></h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
					<?php $Rent=$this->Admin_Model->get_property_category_Rent(); ?>
						<a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $Rent[0]->pcid;?>&propertyname=<?php echo  $Rent[0]->property_name; ?>">
							<div class="buy-media">
							<i class="rent"> </i>
							
							<h6><?php echo  $Rent[0]->property_name; ?></h6>
							</div>
						</a>
					</div>
					<!--<div class=" bottom-head">
						<a href="buy.html">
							<div class="buy-media">
							<i class="pg"> </i>
							<h6>Hostels</h6>
							</div>
						</a>
					</div>-->
					<?php $Resale=$this->Admin_Model->get_property_category_Resale(); ?>
					<div class=" bottom-head">
						<a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $Resale[0]->pcid;?>&propertyname=<?php echo  $Resale[0]->property_name; ?>">
							<div class="buy-media">
							<i class="sell"> </i>
							<h6><?php echo  $Resale[0]->property_name; ?></h6>
							</div>
						</a>
					</div>
					<!--<div class=" bottom-head">
						<a href="loan.html">
							<div class="buy-media">
							<i class="loan"> </i>
							<h6>Home Loans</h6>
							</div>
						</a>
					</div>-->
					<!--<div class=" bottom-head">
						<a href="buy.html">
							<div class="buy-media">
							<i class="apart"> </i>
							<h6>Projects</h6>
							</div>
						</a>
					</div>-->
					<!--<div class=" bottom-head">
						<a href="dealers.html">
							<div class="buy-media">
							<i class="deal"> </i>
							<h6>Dealers</h6>
							</div>
						</a>
					</div>-->
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	</div>
	
	<div class="content">
	<div class="content-grid">
		<div class="container">
			<h3>Most Popular</h3>
				<div class="col-md-4 box_2">
			     	 <a href="single.html" class="mask">
			     	   	<img class="img-responsive zoom-img" src="<?php echo base_url();?>assets/images/pc4.jpg" alt="">
			     	   	<span class="four">40,000$</span>
			     	 </a>
			     	   <div class="most-1">
			     	   	 <h5><a href="single.html">Contrary to popular</a></h5>
			     	    	<p>Lorem ipsum</p>
			     	   </div>
			 </div>
			  <div class="col-md-4 box_2">
		     	 <a href="single.html" class="mask">
			     	   	<img class="img-responsive zoom-img" src="<?php echo base_url();?>assets/images/pc5.jpg" alt="">
			     	   	<span class="four">40,000$</span>
			     	 </a>
		     	   <div class="most-1">
			     	   	<h5><a href="single.html">Contrary to popular</a></h5>
			     	    	<p>Lorem ipsum</p>
			     	   </div>
		     	
		      </div>
			  <div class="col-md-4 box_2">
		     	 <a href="single.html" class="mask">
			     	   	<img class="img-responsive zoom-img" src="<?php echo base_url();?>assets/images/pc3.jpg" alt="" >
			     	   	<span class="four">40,000$</span>
			     	 </a>
		     	   <div class="most-1">
			     	   	 <h5><a href="single.html">Contrary to popular</a></h5>
			     	    	<p>Lorem ipsum</p>
			     	   </div>
		     	
		      </div>
		 	<div class="clearfix"> </div>
		</div>
	</div>
<!--service-->
	<div class="services">
		<div class="container">
			<div class="service-top">
				<h3>Services</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
			<div class="services-grid">
		   		<div class="col-md-6 service-top1">
		   			<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
		   			</div>
		   			<div  class="ser-top">
		   				<h4>Ut wisi enim ad</h4>
		   				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
		   					It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
		   		    </div>
					<div class="clearfix"> </div>
		   	   </div>
				<div class="col-md-6 service-top1">
		   			<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-leaf"> </a>
		   			</div>
		   			<div  class="ser-top">
		   				<h4>Ut wisi enim ad</h4>
		   				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
		   					It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
		   		    </div>
					<div class="clearfix"> </div>
		   		</div>
		   	<div class="clearfix"> </div>
		 </div>
		 <div class="services-grid">
			   	<div class="col-md-6 service-top1">
			   		<div class=" ser-grid">	
			   			<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </a>
			   		</div>
			   		<div  class="ser-top">
			   			<h4>Ut wisi enim ad</h4>
			   				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
			   					It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
			   		</div>
					<div class="clearfix"> </div>
			   	</div>
				<div class="col-md-6 service-top1">
			   		<div class=" ser-grid">	
			   			<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </a>
			   		</div>
			   		<div  class="ser-top">
			   			<h4>Ut wisi enim ad</h4>
			   			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
			   					It has roots in a piece of classical .Contrary to popular belief, Lorem Ipsum</p>
			   		</div>
					<div class="clearfix"> </div>
			   	</div>
		   	  <div class="clearfix"> </div>
		 	</div>
		</div>
	</div>
<!--//services-->
<!--features-->
		<div class="content-middle">
			<div class="container">
				<div class="mid-content">
					<h3>the best features</h3>
					<p>Contrary to popular belief
							, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					<a class="hvr-sweep-to-right more-in" href="single.html">Read More</a>
				</div>
			</div>
		</div>
<!--//features-->
<!--phone-->
	<div class="phone">
		<div class="container">
			<div class="col-md-6">
				<img src="<?php echo base_url();?>assets/images/ph1.png" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-6 phone-text">
				<h4>Search Homes Everywhere</h4>
					<div class="text-1">
						<h5>Custom Location Tracker</h5>
						<p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>
					</div>
					<div class="text-1">
						<h5>Map Search</h5>
						<p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>
					</div>
					<div class="text-1">
						<h5>Quick Details</h5>
						<p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>
					</div>
					<a href="mobile_app.html" class="hvr-sweep-to-right more">Download the App</a>
			</div>
		</div>
	</div>
<!--//phone-->
<!--project--->
	<div class="project">
		<div class="container">
			<h3>Project Gallery</h3>
				<div class="project-top">
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							 <a href="single.html" class="mask"><img src="<?php echo base_url();?>assets/images/ga.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.5</span>
									 </div>
									 <div class="col-md4">
									 	<strong>Venice</strong>
									 	<small>50 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>2, 3, 4 BHK Flats</p>
								 <p class="cost">$65,000</p>
								 <a href="single.html" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.html" class="mask"><img src="<?php echo base_url();?>assets/images/ga1.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.5</span>
									 </div>
									 <div class="col-md4">
									 	<strong>Venice</strong>
									 	<small>50 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>2, 3, 4 BHK Flats</p>
								 <p class="cost">$65,000</p>
								 <a href="single.html" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.html" class="mask"><img src="<?php echo base_url();?>assets/images/ga2.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.5</span>
									 </div>
									 <div class="col-md4">
									 	<strong>Venice</strong>
									 	<small>50 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>2, 3, 4 BHK Flats</p>
								 <p class="cost">$65,000</p>
								 <a href="single.html" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.html" class="mask"><img src="<?php echo base_url();?>assets/images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.5</span>
									 </div>
									 <div class="col-md4">
									 	<strong>Venice</strong>
									 	<small>50 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>2, 3, 4 BHK Flats</p>
								 <p class="cost">$65,000</p>
								 <a href="single.html" class="hvr-sweep-to-right more">See Details</a>
							 </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>				
		</div>
	</div>

<!--//project-->
<!--test-->
		<div class="content-bottom">
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
		</div>		
<!--//test-->	
<!--partners-->
	<div class="content-bottom1">
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
		</div>	
<!--//partners-->	
	</div>