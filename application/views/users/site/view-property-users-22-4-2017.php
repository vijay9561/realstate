<style>
	.imgclassimages{ height:300px; width:100%;}
	@media(max-with:500px){
		.imgclassimages{ height:100px; width:100%;}
	}
	</style>
	<script>
	$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 10000);
    });
	</script>
<?php if($this->session->userdata('UID')) {  $id=$this->session->userdata('UID');?>
<div class="container">
	
	<div class="buy-single">
	<?php if($this->session->userdata('updateproperty')==1) { ?>
	  <div class="alert alert-success">
Your Updatations Will Be Reviewed And Reflected Soon
</div> 
<?php  $this->session->unset_userdata('updateproperty'); } ?>
<?php if($this->session->userdata('updateimages')==1) { ?>
	  <div class="alert alert-success">
Your Updatations Will Be Reviewed And Reflected Soon
</div> 
<?php  $this->session->unset_userdata('updateimages'); } ?>

<?php if($this->session->userdata('deletearticals')==1) { ?>
	  <div class="alert alert-success">
Your Ad Deleted Successfully..
</div> 
<?php  $this->session->unset_userdata('deletearticals'); } ?>

	<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
Thank you your ad posted successfully<br />
  It will activate in 24 Hours
</div> 

<?php  $this->session->unset_userdata('registrationsucess'); } ?>
	<!--	<h3>Your posted property List</h3>-->
		<div class="box-sin">
			<div class="col-md-12 single-box"><?php ?>
				 <?php
				 $num_rec_per_page=10;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
		    $MOVIES1=$this->db->query("SELECT * FROM property_post where uid='$id' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
			
			//echo $this->db->last_query();
          if(!empty($MOVIES1)) {
         foreach($MOVIES1 as $movie){     
		 $images=$this->db->query("select *from property_images where pid='".$movie->pid."' order by piid asc limit 0,1")->result();
             ?>
				<div class="box-col" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			
				     <div class=" col-sm-6 left-side ">
					 <?php if($movie->main_categories_id==1){ ?>
						<a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>"> <img class="img-responsive imgclassimages" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $images[0]->image_name; ?>" alt=""></a>
						<?php }else{ ?>
						<a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>"> <img class="img-responsive imgclassimages" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $images[0]->image_name; ?>" alt=""></a>
						<?php } ?>
							 <div class="row">
							 <div class="col-md-4 col-sm-6 col-xs-4">
					  <a  href="<?php echo site_url(); ?>update_property_images/<?php echo $movie->pid;  ?>" class="hvr-sweep-to-right more" >Update Images</a>
					  </div>
					  <?php if($movie->main_categories_id==1){ ?>
					 <div class="col-md-4 col-sm-6 col-xs-4">
					  <a  href="<?php echo site_url(); ?>update_your_property/<?php echo $movie->pid;  ?>" class="hvr-sweep-to-right more" >Update Ad</a>
					  </div>
					  <?php }else{ ?>
					   <div class="col-md-4 col-sm-6 col-xs-4">
					  <a  href="<?php echo site_url(); ?>other_update_property/<?php echo $movie->pid;  ?>" class="hvr-sweep-to-right more" >Update Ad</a>
					  </div>
					  <?php } ?>
					   <div class="col-md-4 col-sm-6 col-xs-4">
					 <a class="hvr-sweep-to-right more" href="<?php echo site_url();?>Users_Controller/delete_our_owen_property/<?php echo $movie->pid; ?>"  onClick="return confirm('Are You Sure Delete This Property Property');">Delete Ad</a>
					 </div>
					  </div>
					  <br />
					</div>	
					<style>
					#talkbubble { width:120px;
					position: relative;border: 1px solid red; 
					-moz-border-radius: 5px;
					 -webkit-border-radius:5px;
					  border-radius: 5px; }
					  #talkbubble:before { content: "";
position: absolute;
right: 100%;
top: 0px;
width: 0;
height: 12px;
border-top: 14px solid transparent;
border-right: 24px solid red;
border-bottom: 16px solid transparent;}

#talkbubble1 { width:120px;
					position: relative;border: 1px solid #09a426; 
					-moz-border-radius: 5px;
					 -webkit-border-radius:5px;
					  border-radius: 5px; }
					  #talkbubble1:before { content: "";
position: absolute;
right: 100%;
top: 0px;
width: 0;
height: 12px;
border-top: 14px solid transparent;
border-right: 24px solid #09a426;
border-bottom: 16px solid transparent;}
				.greenline{
				display:none;
				}
				@media(max-width:500px){
				.greenline{
				display:block;
				}
			
				</style>			
					<div class="  col-sm-6 middle-side">
					
					     <h4><?php echo $movie->property_title; ?>
						 <?php if($movie->status=='inactive') { ?>
						 <p style="float:right; text-align:center; color:#000000;" id="talkbubble"><?php echo $movie->status; ?></p>
						 <?php }else{ ?>
						  <p style="float:right; text-align:center; color:#000000;" id="talkbubble1"><?php echo $movie->status; ?></p>
						 <?php } ?>
						 </h4>
						 <table style="margin-top: -10px;">
							<?php if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?>&nbsp;|&nbsp;Posted On&nbsp;<?php $yrdata= strtotime($movie->date); echo date('d-M-Y', $yrdata); ?></td>
							</tr>       <?php } ?></table>
						 <table  class="table">
						 <?php if($movie->main_categories_id==1){ ?>
						  <?php if(!empty($movie->category_id)){ $queryproperty=$this->db->query("select property_name from property_category where pcid='".$movie->category_id."'")->result(); ?>
					       <tr><th>Property For:</th><td><?php echo $queryproperty[0]->property_name; ?></td></tr>
						   <?php  }?>
						 <?php if(!empty($movie->rooms)){ ?>
					       <tr><th>Rooms:</th><td><?php echo $movie->rooms; ?></td></tr>
						   <?php } ?>
						    <tr><th>Built-up Area:</th><td><?php echo  $movie->area; ?></td></tr>
							<!--  <tr><th>Property Owner Name:</th><td><?php echo $movie->property_owner_name; ?></td></tr>-->
							   <tr><th>Price:</th><td><?php echo $movie->property_price; ?></td></tr>
							   <?php }else{ ?>
							    <?php if(!empty($movie->dealer_type)){ ?>
					       <tr><th>Saler Type:</th><td><?php echo $movie->dealer_type; ?></td></tr>
						   <?php } ?>
							   	<?php if(!empty($movie->category_id)){ $queryproperty=$this->db->query("select category_name from subcategory where scid='".$movie->category_id."'")->result(); 
			               $maincategory=$this->db->query("select category_name from main_category where mid='".$movie->main_categories_id."'")->result(); 
			?>
					   <tr><th>Category:</th><td><?php echo $maincategory[0]->category_name; ?> <strong style="font-weight:bold;">>></strong> <?php echo $queryproperty[0]->category_name; ?> </td></tr>
						   <?php  }?>
						    <?php if(!empty($movie->car_name)){ ?>
					       <tr><th>Brand Name:</th><td><?php echo $movie->car_name; ?></td></tr>
						   <?php } ?>
						   <?php if(!empty($movie->city)){ ?>
					       <tr><th>City:</th><td><?php echo $movie->city; ?></td></tr>
						   <?php } ?>
						   
						    <?php if(!empty($movie->address_details)){ ?>
					       <tr><th>Location:</th><td><?php echo $movie->address_details; ?></td></tr>
						   <?php } ?>
						   <?php if(!empty($movie->area)) { ?>
						    <tr><th>Built-up Area:</th><td><?php echo  $movie->area; ?></td></tr>
							<?php } ?>
							<?php if(!empty($movie->property_price)) { ?>
							   <tr><th>Price:</th><td>Rs. <?php echo $movie->property_price; ?></td></tr>
							   <?php } ?>
							   <?php } ?>
						<?php if($this->session->userdata('UID')){ ?>
									 <tr><th>Your Name:</th><td><?php echo $movie->property_owner_name; ?></td></tr>
									 <tr><th>Your Contact No:</th><td><?php echo $movie->owner_contact_no; ?></td></tr>
									   <?php if(!empty($movie->near_bus_stand)){ ?>
									 <tr><th>Your Near Bus Stop:</th><td><?php echo $movie->near_bus_stand; ?></td></tr><?php } ?>
									    <?php if(!empty($movie->near_railway_station)){ ?>
									  <tr><th>Your Near Railway Station:</th><td><?php echo $movie->near_railway_station; ?></td></tr>
									  <?PHP } ?>
									   <?php if(!empty($movie->amenities)){ ?>
									  <tr><th><?php if($movie->main_categories_id==14){ echo 'Hall Facility';}else { ?>Amenities:<?php } ?></th><td><?php echo substr($movie->amenities,0,100); ?></td></tr>
									  <?PHP } ?>
									<?php } ?>
						 </table>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				
				<hr style="border:2px solid green;" id="" class="greenline">
				<?php } } else { ?>
				 <div class="alert alert-danger">
  <strong> You haven't posted any property yet. To post property <a href="<?php echo site_url(); ?>post-property">click here</a></strong>
</div>
				<?php  } ?>
				<div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
				$queryall=$this->db->query("SELECT * FROM property_post where uid='$id' and status='active' order by pid desc")->result();
				if(!empty($queryall)){
 
 //echo $this->db->last_query();
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>users-posted-prorperty?page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>users-posted-prorperty?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>users-posted-prorperty?page=<?php echo $total_pages;?>"> > </a></li>
<?php } ?>
</ul></nav></div>
				
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
	  	  
	<script>
	
		
function passwordr(){if($('#password').val()==''){}else{ $('#passwordr').html(' '); }}
  function emailr(){if($('#eamil').val()==''){}else{ $('#emailr').html(' '); }}
  
  function loginusers(){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		
		var email=document.getElementById('eamil').value.trim();
		var password=document.getElementById('password').value.trim();
		
				if(email==''){
				$("#emailr").html('Please enter email address');
				return false;
				}
					var email1 = email.toLowerCase();
					if (emailpattern.test(email1) == false)
					{
					$("#emailr").html("Please Enter Valid Email Address");
					       
					return false;
					}
				
				if(password==''){
				$("#passwordr").html('Please enter password');
				return false;
				}
		 $("#loginform123").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/users_login",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
							location.reload(); 
						return false;
					}
					else {
				  		$('#duplicateemailcheck').show();
					  setTimeout(function() {$("#duplicateemailcheck").fadeOut("slow");}, 5000);
						   return false;
					}
					
				}
			});
			return false;  
		});
			
	}

	function forgotpasswordemailsr(){if($('#forgotpasswordemails').val()==''){}else{ $('#forgotpasswordemailsr').html(' '); }}
	
  function forgotpassword(){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;

		var email=document.getElementById('forgotpasswordemails').value.trim();
		
				if(email==''){
				$("#forgotpasswordemailsr").html('Please enter email address');
				return false;
				}
					var email1 = email.toLowerCase();
					if (emailpattern.test(email1) == false)
					{
					$("#forgotpasswordemailsr").html("Please Enter Valid Email Address");
					       
					return false;
				}
		  $("#forgotpasswordemailsrr").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/users_forgot_password",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
					$("#forgotpasswordemails").val("");
						$('#sendsucessfullyemails').show();
						//   setTimeout(function() {$("#duplicateemailcheck1234").fadeOut("slow");}, 5000);
						$("#forgootpasswordid").css('display','none');
						    setTimeout(function() {$("#sendsucessfullyemails").fadeOut("slow");}, 5000);
						  alert("Password Has Been Send Your Email ID");
						  
				     	}
					else {
					//$('body,html').animate({scrollTop: $("#duplicateemailcheck").offset().top },500);
				  		$('#duplicateemailcheck123').show();
						   setTimeout(function() {$("#duplicateemailcheck123").fadeOut("slow");}, 5000);
					}
					
				}
			});
			return false;  
		});
			
	}
	
	$(document).ready(function(){
	$('#openwindows').click(function(){
	$("#forgootpasswordid").css('display','block');
	});
	});
	
	$(document).ready(function(){
	$('#closewidows').click(function(){
	$("#forgootpasswordid").css('display','none');
	});
	});

	</script>
	  
		<div class="clearfix"> </div>
		</div>
		
	</div>
	
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login Your Account</h4>
      </div>
      <div class="modal-body">
				<div id="duplicateemailcheck" style="display:none">
				<div class="alert alert-danger">
				<strong>Error!</strong>Email Or Passsword Incrrect
				</div> 
				</div>
				<div id="duplicateemailcheck123" style="display:none">
				<div class="alert alert-danger">
				<strong>Error!</strong>This Email Address Not Found Our Database
				</div> 
				</div>
				
				<div id="sendsucessfullyemails" style="display:none">
				<div class="alert alert-success">
				<strong>Error!</strong>Password Has Been Send Your Email ID.
				</div> 
				</div>
                    <form method="post" action="#" id="loginform123">
				<input name="flag" value="teamlogin" type="hidden">
                    <div class="form-group">
                     
                        <input name="eamil"  id="eamil" class="form-control" onchange="emailr();" placeholder="Email ID" required="" type="text">
						<span id="emailr" style="color:red;"></span>
                    </div><br />
                    <div class="form-group">
                     
                        <input name="password" id="password" onchange="passwordr();" class="form-control" placeholder="Password" required="" type="password">
						<span id="passwordr" style="color:red;"></span>
                    </div>
                    <input class="btn btn-danger" value="Login" type="submit" onclick="loginusers();">&nbsp;&nbsp;<a id="openwindows" style="cursor:pointer;">Forgot Password</a>
                </form>
			
				<div style="display:none" id="forgootpasswordid">
				<hr />
				<form method="post" action="#" id="forgotpasswordemailsrr">
                    <div class="form-group">
                        <input name="forgotpasswordemails"  id="forgotpasswordemails" class="form-control" onchange="forgotpasswordemailsr()" placeholder="Enter Email ID" required="" type="text">
						<span id="forgotpasswordemailsr" style="color:red;"></span>
                    </div><br />
              
                    <input class="btn btn-danger" value="Send" type="submit" onclick="return forgotpassword();">&nbsp;&nbsp;<a  id="closewidows" style="cursor:pointer;" class="btn btn-default">Close</a>
                </form>
             </div>
    </div>
  </div>
</div>
</div>
<?php }else{ ?>
<script>
window.location='<?php echo site_url();?>';
</script>
<?php } ?>