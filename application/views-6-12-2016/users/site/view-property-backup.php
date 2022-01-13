<div class="container">
	
	<div class="buy-single">
		<h3>posted property</h3>
		<div class="box-sin">
			<div class="col-md-12 single-box">
				 <?php
		
        if(is_array($MOVIES) && count($MOVIES) ) {
         foreach($MOVIES as $movie){     
             ?>
				<div class="box-col">
			
				     <div class=" col-sm-7 left-side ">
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $movie->photo; ?>" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					
					     <h4>Property Name:<?php echo $movie->property_title; ?></h4>
						 <table  class="table">
					       <tr><th>Rooms:</th><td><?php echo $movie->rooms; ?></td></tr>
						    <tr><th>Built-up Area:</th><td><?php echo  $movie->area; ?></td></tr>
							  <tr><th>Property Owner Name:</th><td><?php echo $movie->property_owner_name; ?></td></tr>
							   <tr><th>Price:</th><td><?php echo $movie->property_price; ?></td></tr>
						 </table>		 
						<div class="right-side">
							 <a href="#" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				<?php }
				
				} ?>
				<!--<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						 <a href="single.html"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/sb1.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					     <h4>Possession: Immediate</h4>
					     <p><span class="bath">Bed </span>: <span class="two">2 BHK</span></p>
					     <p>  <span class="bath1">Baths </span>: <span class="two">2</span></p>
					     <p><span class="bath2">Built-up Area</span>: <span class="two">100 Sq.Yrds</span></p>
					     <p><span class="bath3">Plot Area </span>:<span class="two"> 150 Sq.Yrds</span></p>
						 <p><span class="bath4">Age of property</span> : <span class="two">4 - 10 Years</span></p>
						 <p><span class="bath5">Price </span>:<span class="two"> 30-40 Lacs</span></p>				 
						<div class="   right-side">
							 <a href="contact.html" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>-->
				<!--<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="single.html"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/sb2.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					     <h4>Possession: Immediate</h4>
					     <p><span class="bath">Bed </span>: <span class="two">2 BHK</span></p>
					     <p>  <span class="bath1">Baths </span>: <span class="two">2</span></p>
					     <p><span class="bath2">Built-up Area</span>: <span class="two">100 Sq.Yrds</span></p>
					     <p><span class="bath3">Plot Area </span>:<span class="two"> 150 Sq.Yrds</span></p>
						 <p><span class="bath4">Age of property</span> : <span class="two">4 - 10 Years</span></p>
						  <p><span class="bath5">Price </span>:<span class="two"> 30-40 Lacs</span></p>				 			 
						<div class="   right-side">
							 <a href="contact.html" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>-->
				<!--<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="single.html"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/sb3.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					     <h4>Possession: Immediate</h4>
					     <p><span class="bath">Bed </span>: <span class="two">2 BHK</span></p>
					     <p>  <span class="bath1">Baths </span>: <span class="two">2</span></p>
					     <p><span class="bath2">Built-up Area</span>: <span class="two">100 Sq.Yrds</span></p>
					     <p><span class="bath3">Plot Area </span>:<span class="two"> 150 Sq.Yrds</span></p>
						 <p><span class="bath4">Age of property</span> : <span class="two">4 - 10 Years</span></p>
						 <p><span class="bath5">Price </span>:<span class="two"> 30-40 Lacs</span></p>				 			 
						<div class="   right-side">
							 <a href="contact.html" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>-->
				<!--<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="single.html"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/sb4.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					     <h4>Possession: Immediate</h4>
					     <p><span class="bath">Bed </span>: <span class="two">2 BHK</span></p>
					     <p>  <span class="bath1">Baths </span>: <span class="two">2</span></p>
					     <p><span class="bath2">Built-up Area</span>: <span class="two">100 Sq.Yrds</span></p>
					     <p><span class="bath3">Plot Area </span>:<span class="two"> 150 Sq.Yrds</span></p>
						 <p><span class="bath4">Age of property</span> : <span class="two">4 - 10 Years</span></p>
						  <p><span class="bath5">Price </span>:<span class="two"> 30-40 Lacs</span></p>				 				 
						<div class="   right-side">
							 <a href="contact.html" class="hvr-sweep-to-right more" >Contact Builder</a>          
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>-->
				<!--<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						 <a href="single.html"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/sb5.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
					     <h4>Possession: Immediate</h4>
					     <p><span class="bath">Bed </span>: <span class="two">2 BHK</span></p>
					     <p>  <span class="bath1">Baths </span>: <span class="two">2</span></p>
					     <p><span class="bath2">Built-up Area</span>: <span class="two">100 Sq.Yrds</span></p>
					     <p><span class="bath3">Plot Area </span>:<span class="two"> 150 Sq.Yrds</span></p>
						 <p><span class="bath4">Age of property</span> : <span class="two">4 - 10 Years</span></p>
						 <p><span class="bath5">Price </span>:<span class="two"> 30-40 Lacs</span></p>				 			 
						<div class="   right-side">
							 <a href="contact.html" class="hvr-sweep-to-right more" >Contact Builder</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>-->
			</div>
		</div>
		<!--<div class="col-md-3 map-single-bottom">
			<div class="map-single">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
			</div>
			<div class="single-box-right">
		     	<h4>Featured Communities</h4>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl1.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl2.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl3.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="images/sl4.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
		 </div>
	  </div>-->
		<div class="clearfix"> </div>
		</div>
		
	</div>