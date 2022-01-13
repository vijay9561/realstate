<link href="<?php echo base_url(); ?>assets/FlexSlider/demo/css/shCore.css" rel="stylesheet" type="text/css" />
<!-- Demo CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/FlexSlider/demo/css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/FlexSlider/flexslider.css" type="text/css" media="screen" />
<script src="<?php echo base_url(); ?>assets/FlexSlider/demo/js/modernizr.js"></script>
<script src="<?php echo base_url(); ?>assets/FlexSlider/demo/js/shCore.js"></script>
<script>

$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });
	
</script>
<style>
.sliderimg{ height: 600px;}
@media (max-width:500px)
	{
	.sliderimg{ height: 200px;}
	}
</style>
<div class="container">
  <div class="buy-single-single">
    <?php if($this->session->userdata('sucessmessage')==1) { ?>
    <div class="alert alert-success"> property owner contact view successfully.. </div>
    <?php  $this->session->unset_userdata('sucessmessage'); } ?>
    <!--	<h3>posted property details</h3>-->
	<div class="row">
	<div class="col-md-12 middle-side">
	 <h4><?php echo $viewdata[0]->property_title; ?></h4>
	  <table style="margin-top: -10px;">
		<?php if(!empty($viewdata[0]->property_unique_id)){ ?>
          <tr style="color: #5D635C;font-size: 11px;">
            <td>Ad ID:</td>
            <td>&nbsp;&nbsp;<?php echo $viewdata[0]->property_unique_id; ?></td>
          </tr>
          <?php } ?></table>
	</div>
	</div>
    <div class="col-md-8 single-box ">
	  
      <div class=" buying-top">
        <!--<ul class="slides">-->
        <?php /*?> <?php  foreach($getdata as $images){ ?>
    <li data-thumb="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $images->image_name; ?>" >
      <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $images->image_name; ?>" />
    </li>
	  </ul>--><?php style="border: 1px solid rgb(204, 0, 0);border-color: #bd3423;border-radius:3px;" */ ?>
	   
        <?php //} 
	$getdata=$this->db->query("select *from property_images where pid='".$viewdata[0]->pid."'")->result(); ?>
        <?php if(!empty($getdata)) { ?><br />
        <div id="main" role="main" >
          <section class="slider" style=" margin-top:0px;">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <?php 
		//  echo  $this->db->last_query(); 
		   foreach($getdata as $images){ ?>
                <li>
                  <?php if(!empty($images->image_name)) { ?>
                  <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $images->image_name; ?>"  class="sliderimg img-thumbnail" />
				  <?php } ?>
                </li>
                <?php  } ?>
              </ul>
            </div>
            <div id="carousel" class="flexslider crausalslider">
              <ul class="slides">
                <?php $getdata1=$this->db->query("select *from property_images where pid='".$viewdata[0]->pid."'")->result();  
	       	foreach($getdata1 as $images){ ?>
                <li>
                  <?php if(!empty($images->image_name)) { ?>
                  <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $images->image_name; ?>" style="height: 125px;" class="img-thumbnail"/>
                  <?php } ?>
                </li>
                <?php  } ?>
              </ul>
            </div>
          </section>
        </div>
        <?php }else { ?><br />
        <div id="main" role="main" >
          <section class="slider" style=" margin-top:0px;">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <li> <img src="<?php echo base_url(); ?>assets/images/bo2.jpg"  class="sliderimg img-thumbnail" /> </li>
              </ul>
            </div>
            <div id="carousel" class="flexslider crausalslider">
              <ul class="slides">
                <li> <img src="<?php echo base_url(); ?>assets/images/bo2.jpg" style="height: 125px;"  class="img-thumbnail" /> </li>
              </ul>
            </div>
          </section>
        </div>
        <?php } ?>
        <?php /*?><?php if(!empty($viewdata[0]->img1)){?>
    <li data-thumb="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img1; ?>" >
      <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img1; ?>" />
    </li>
	<?php } ?>
    <?php if(!empty($viewdata[0]->img2)){?>
    <li data-thumb="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img2; ?>" >
      <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img2; ?>" />
    </li>
	<?php } ?>
	<?php if(!empty($viewdata[0]->img3)){?>
    <li data-thumb="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img3; ?>">
      <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img3; ?>" />
    </li>
	<?php } ?>
	<?php if(!empty($viewdata[0]->img4)){?>
    <li data-thumb="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img4; ?>">
      <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img4; ?>" />
    </li>
	<?php } ?>
	<?php if(!empty($viewdata[0]->img5)){?>
    <li data-thumb="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img5; ?>">
      <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $viewdata[0]->img5; ?>" />
    </li>
	<?php } ?><?php */?>
        <!-- FlexSlider -->
        <script defer src="<?php echo base_url(); ?>assets/FlexSlider/jquery.flexslider.js"></script>
        <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });

$(document).ready(function(){
	$('#openwindows').click(function(){
	$("#forgootpasswordid").css('display','block');
	$('#regosterhide').css('display','none');
	});
	});
	
	$(document).ready(function(){
	$('#closewidows').click(function(){
	$("#forgootpasswordid").css('display','none');
	$('#regosterhide').css('display','block');
	});
	});
</script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/FlexSlider/demo/js/shCore.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/FlexSlider/demo/js/shBrushXml.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/FlexSlider/demo/js/shBrushJScript.js"></script>
        <!-- Optional FlexSlider Additions -->
        <script src="<?php echo base_url(); ?>assets/FlexSlider/demo/js/jquery.easing.js"></script>
        <script src="<?php echo base_url(); ?>assets/FlexSlider/demo/js/jquery.mousewheel.js"></script>
        <script defer src="<?php echo base_url(); ?>assets/FlexSlider/demo/js/demo.js"></script>
      </div>
    </div>
    <div class="buy-sin-single">
      <div class="col-sm-4 middle-side immediate" style="padding-left: 14px;">
	   <?php if(!$this->session->userdata('UID')){ ?>
       <!-- <div class="right-side">--> <a style="cursor:pointer;margin-top: 10px;" class="btn btn-primary mydbubttt" data-toggle="modal" data-target=".bs-example-modal-sm">Contact</a> <!--</div>-->
        <?php } else { ?>
        <?php if((!$this->session->userdata('TEMPSESSION')) && ($this->session->userdata('UID')!=$viewdata[0]->uid)){ ?>
        <div class="#">
          <form method="post" enctype="multipart/form-data" id="withloginusers" name="withloginusers">
            <input type="hidden" id="tempararyproductid" name="tempararyproductid" value="<?php echo $viewdata[0]->pid; ?>" />
            <input type="submit"  value="Contact" class="btn btn-primary mydbubttt"  onclick="return loginwithantoherusers();">
          </form>
        </div>
		
        <?php }   } ?>
	    <?php if($this->session->userdata('TEMPSESSION')){ ?>
		
    <div style="border: 1px solid #27da93;border-radius: 20px 0px 20px;">
		<table class="table">
		
          <tr>
            <th>Owner Name:</th>
            <td>Ambadas Kale Patil</td>
          </tr>
          <tr>
            <th>Contact No:</th>
            <td>8087 245 555</td>
          </tr>
        
		</table></div>
		  <?php } ?>
		  <br /><br />
        <table  class="table">
          
          <?php if(!empty($viewdata[0]->property_builder)){ ?>
          <tr>
            <th>Posted By:</th>
            <td><?php echo $viewdata[0]->property_builder; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($viewdata[0]->category_id)){ $queryproperty=$this->db->query("select property_name from property_category where pcid='".$viewdata[0]->category_id."'")->result(); ?>
          <tr>
            <th>Property For:</th>
            <td><?php echo $queryproperty[0]->property_name; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($viewdata[0]->property_residentaily)){ ?>
          <tr>
            <th>Property Type:</th>
            <td><?php echo $viewdata[0]->property_residentaily; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($viewdata[0]->residential_category)){ ?>
          <tr>
            <th>Property Sub Type:</th>
            <td><?php echo $viewdata[0]->residential_category; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($viewdata[0]->property_furnish)){ ?>
          <tr>
            <th>Furnishing:</th>
            <td><?php echo $viewdata[0]->property_furnish; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($viewdata[0]->rooms)){ ?>
          <tr>
            <th>Rooms:</th>
            <td><?php echo $viewdata[0]->rooms; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($viewdata[0]->area)){ ?>
          <tr>
            <th>Built-up Area:</th>
            <td><?php echo $viewdata[0]->area; ?> sq.ft</td>
          </tr>
          <?php } ?>
          <tr>
            <th>City:</th>
            <td><?php echo $viewdata[0]->city; ?></td>
          </tr>
          <tr>
            <th>Locality:</th>
            <td><?php echo $viewdata[0]->address_details; ?></td>
          </tr>
          <tr>
            <th>Price:</th>
            <td><?php echo $viewdata[0]->property_price; ?>
              <?php if(!empty($viewdata[0]->price_negociable)) {
								 { if($viewdata[0]->price_negociable==1) { echo '(Negotiable)'; }else{ echo '(No Negotiable)';} ?>
              <?php }  }?></td>
          </tr>
		  <?php if(!empty($viewdata[0]->brokerage_price)) { ?>
		   <th>Brokerage Price:</th>
            <td><?php echo $viewdata[0]->brokerage_price; ?>
              <?php if(!empty($viewdata[0]->brokerage_negociable)) {
								 { if($viewdata[0]->brokerage_negociable==1) { echo '(Negotiable)'; }else{ echo '(No Negotiable)';} ?>
              <?php }  }?></td>
          </tr>
		  <?php } ?>
		   <?php if(!empty($viewdata[0]->deposite_price)) { ?>
		   <th>Desposit Price:</th>
            <td><?php echo $viewdata[0]->deposite_price; ?>
              <?php if(!empty($viewdata[0]->deposite_negociable)) {
								 { if($viewdata[0]->deposite_negociable==1) { echo '(Negotiable)'; }else{ echo '(No Negotiable)';} ?>
              <?php }  }?></td>
          </tr>
		  <?php } ?>
		  
        
          <tr style="display:none;">
            <th>Property Owner Name:</th>
            <td><?php echo $viewdata[0]->property_owner_name; ?></td>
          </tr>
          <tr style="display:none;">
            <th>Property Owner Contact No:</th>
            <td><?php echo $viewdata[0]->owner_contact_no; ?></td>
          </tr>
          <?php if(!empty($viewdata[0]->near_bus_stand)){ ?>
          <tr>
            <th>Distance From Bus stop:</th>
            <td><?php echo $viewdata[0]->near_bus_stand; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($viewdata[0]->near_railway_station)){ ?>
          <tr>
            <th>Distance From Railway Station:</th>
            <td><?php echo $viewdata[0]->near_railway_station; ?></td>
          </tr>
          <?php } ?>
          <?php if(!empty($viewdata[0]->amenities)){ ?>
          <tr>
            <th>Amenities:</th>
            <td><?php echo substr($viewdata[0]->amenities,1,100); ?></td>
          </tr>
          <?php } ?>
        </table>
		
     
      </div>
      <div class="col-sm-8 buy-sin" style="padding:10px;">
        <h4>Description</h4>
       <p style="text-align:justify; font-size:12px; color:#000000;"> <?php  echo $viewdata[0]->property_description; ?></p>
      </div>
	  <div class="col-md-1">
	    
	  </div>
      <hr />
      <?php $this->session->unset_userdata('TEMPSESSION'); ?>
      <div class="clearfix"> </div>
    </div>
	<br />
    <div class="map-buy-single" >
      <div class="map-single">
        <div style="text-decoration:none; overflow:hidden; height:300px; width:100%; max-width:100%;">
          <div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;">
            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $viewdata[0]->address_details; ?>&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
          </div>
          <a class="google-code" rel="nofollow" href="http://www.interserver-coupons.com" id="make-map-information">http://www.interserver-coupons.com</a>
          <style>
#google-maps-canvas .map-generator{max-width: 100%; max-height: 100%; background: none;}
</style>
        </div>
        <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=2cbd0773-49f5-c876-b29f-a61c999156d7&c=google-code&u=1477489972" defer="defer" async="async"></script>
      </div>
    </div>
    <!--<div class="video-pre">
						<h4>Video Presentation</h4>
						<iframe src="https://player.vimeo.com/video/63931426"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>-->
  </div>
  <!--<div class="col-md-3">
			<div class="single-box-right right-immediate">
		     	<h4>Featured Communities</h4>
				<div class="single-box-img ">
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
	 function loginwithantoherusers(){
		 $("#withloginusers").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/login_with_session",
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
				  	alert("Not View Contact Details");
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
				url: "<?php echo site_url(); ?>Users_Controller/builder_property_login",
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
          <div class="alert alert-danger"> <strong>Error!</strong>Email Or Passsword Is Incorrect </div>
        </div>
        <div id="duplicateemailcheck123" style="display:none">
          <div class="alert alert-danger"> <strong>Error!</strong>This Email Address Not Found Our Database </div>
        </div>
        <div id="sendsucessfullyemails" style="display:none">
          <div class="alert alert-success"> <strong>Error!</strong>Password Has Been Send Your Email ID. </div>
        </div>
        <form method="post" action="#" id="loginform123">
          <input name="flag" value="teamlogin" type="hidden">
          <div class="form-group">
            <input name="eamil"  id="eamil" class="form-control" onchange="emailr();" placeholder="Email ID" required="" type="text">
            <input type="hidden" id="propertyid" name="propertyid" value="<?php echo $viewdata[0]->pid; ?>" />
            <span id="emailr" style="color:red;"></span> </div>
          <br />
          <div class="form-group">
            <input name="password" id="password" onchange="passwordr();" class="form-control" placeholder="Password" required="" type="password">
            <span id="passwordr" style="color:red;"></span> </div>
          <input class="btn btn-primary mydbubttt" value="Login" type="submit" onclick="loginusers();">
          &nbsp;&nbsp;<a id="openwindows" style="cursor:pointer;">Forgot Password?</a>
        </form>
		<div class="row" id="regosterhide">
			<br />
				<div class="col-md-12">
			
				<h4>Don't have an Account?&nbsp;&nbsp;</h4><br />
				<a style="float:left;" href="<?php echo base_url();?>register">Create an Account</a>
				<div class="clearfix"> </div>
			</div>
			
			</div>
        <div style="display:none" id="forgootpasswordid">
		
		
          <hr />
          <form method="post" action="#" id="forgotpasswordemailsrr">
            <div class="form-group">
              <input name="forgotpasswordemails"  id="forgotpasswordemails" class="form-control" onchange="forgotpasswordemailsr()" placeholder="Enter Email ID" required="" type="text">
              <span id="forgotpasswordemailsr" style="color:red;"></span> </div>
            <br />
            <input class="btn btn-primary mydbubttt" value="Send" type="submit" onclick="return forgotpassword();">
            &nbsp;&nbsp;<a  id="closewidows" style="cursor:pointer;" class="btn btn-default">Close</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
