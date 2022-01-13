<div class="container">
	<style>
	.imgclassimages{ height:300px; width:100%;}
	@media(max-with:500px){
		.imgclassimages{ height:100px;  width:100%;}
	}
	</style>
	<div class="buy-single">
	<!--	<h3>posted property</h3>-->
		<div class="box-sin">
		 <?php
				 $num_rec_per_page=18;
				 $mainid=$_GET['categories'];
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
		    $MOVIES1=$this->db->query("SELECT * FROM property_post where  status='active' and main_categories_id='$mainid' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
			//echo $this->db->last_query();
         if(!empty($MOVIES1)){
         foreach($MOVIES1 as $movie){   
		 $property1=$this->db->query("select image_name from property_images where pid='".$movie->pid."' order by piid asc")->result();  
             ?>
			<div class="col-md-12 single-box">
				
				<div class="box-col" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
			
				     <div class=" col-sm-6 left-side ">
						 <?php if(!empty($property1[0]->image_name)) { ?>
						<a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>"> <img class="img-responsive imgclassimages" src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $property1[0]->image_name; ?>" alt=""></a>
						<?php }else { ?>
								 <a href="<?php echo site_url(); ?>view_other_details/<?php echo $movie->pid; ?>" class="mask"><img src="<?php echo base_url(); ?>assets/images/bo2.jpg"
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
							</tr>       <?php } ?>
							</table>
						 <table  class="table">
						 
			<?php if(!empty($movie->category_id)){ $queryproperty=$this->db->query("select category_name from subcategory where scid='".$movie->category_id."'")->result(); 
			               $maincategory=$this->db->query("select category_name from main_category where mid='".$_GET['categories']."'")->result(); 
			?>
					   <tr><th>Category:</th><td><?php echo $maincategory[0]->category_name; ?> <strong style="font-weight:bold;">>></strong> <?php echo $queryproperty[0]->category_name; ?> </td></tr>
						   <?php  }?>
					    <?php if(!empty($movie->rooms)){ ?>
					       <tr><th>Rooms:</th><td><?php echo $movie->rooms; ?></td></tr>
						   <?php } ?>
						    <?php if(!empty($movie->dealer_type)){ ?>
					       <tr><th>Saler Type:</th><td><?php echo $movie->dealer_type; ?></td></tr>
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
					$url= base_url(uri_string());
 $queryall=$this->db->query("SELECT * FROM  property_post where  status='active' and main_categories_id='$mainid' order by pid desc")->result();
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
$current_page=$_GET['page'];
$next_page = $current_page + 1;
if($_GET['page']==1 || $url=='http://saibroking.com/view-all-type-categories'){
$prev_page =1; 
}else {
$prev_page = $current_page -1; 
}
?>
  <li class="next page"><a href="<?php echo site_url(); ?>view-posted-property?page=1"> < </a></li>
   <?php if($total_records>19) { ?>
  <li class="page"><a href="<?php echo site_url(); ?>view-posted-property?page=<?php echo $prev_page; ?>">Previous Page</a></li>
  <?php } ?>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>view-all-type-categories?categories=<?php echo $_GET['categories']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
 <?php if($total_records>19) { ?>
  <li class="page"><a href="<?php echo site_url(); ?>view-all-type-categories?categories=<?php echo $_GET['categories']; ?>&page=<?php echo $next_page; ?>">Next Page</a></li>
  <?php } ?>
<li class="prev page"><a href="<?php echo site_url(); ?>view-all-type-categories?categories=<?php echo $_GET['categories']; ?>&page=<?php echo $total_pages;?>"> > </a></li>
</ul></nav></div>
			
			</div>
			<?php }else { ?>
			
			 <div class="alert alert-danger">
No Found Result
</div>
			<?php } ?>
			
		</div></div>
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