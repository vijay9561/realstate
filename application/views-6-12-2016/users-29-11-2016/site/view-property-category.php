<style>
	.imgclassimages{ height:300px; width:100%;}
	@media(max-with:500px){
		.imgclassimages{ height:100px; width:100%;}
	}
	</style>
<div class="container">
	
	<div class="buy-single">
		<!--<h3>View Property For : <?php  //echo $_GET['propertyname']; ?> Related</h3>-->
		
		<?php if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		            $num_rec_per_page=10;
				     $start_from = ($page-1) * $num_rec_per_page;  
			  $MOVIES1=$this->db->query("SELECT * FROM property_post where  status='active' and category_id='".$_GET['category']."' order by pid desc LIMIT $start_from, $num_rec_per_page")->result();
		 if(!empty($MOVIES1)) { ?>
		<div class="box-sin">
			<div class="col-md-12 single-box">
				 <?php
				
				 
		   
			//echo $this->db->last_query();
         
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
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
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
 $queryall=$this->db->query("SELECT * FROM  property_post where  status='active' and category_id='".$_GET['category']."' order by pid desc")->result();
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
  <li class="next page"><a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $_GET['category']; ?>&propertyname<?php echo $_GET['propertyname'];  ?>&page=1"> < </a></li>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $_GET['category']; ?>&propertyname<?php echo $_GET['propertyname'];  ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
<li class="prev page"><a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $_GET['category']; ?>&propertyname<?php echo $_GET['propertyname'];  ?>&page=<?php echo $total_pages;?>"> > </a></li>
</ul></nav></div>
			
			</div>
		</div>
		<?php }else { ?>
		<div class="row">
		<div class="col-md-12">
		 <div class="alert alert-danger">
Property not available for more details please contact 
</div>
		</div>
		</div>
		<?php } ?>
		
		<div class="clearfix"> </div>
		<?php //echo $this->pagination->create_links(); ?>
		</div>
		
		
		
		
		
	</div>
	  	  
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