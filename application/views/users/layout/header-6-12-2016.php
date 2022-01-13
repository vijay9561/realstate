
<style>
	 .fix-hearder {
    /* this make our menu fixed top */    
    z-index: 9999;
    
    position: fixed;
    
    left: 0;
    
    top: 0;
    
    width: 100%;
	/*background-image:url(images/body_bg.png);*/
	/*background-color: #F7F7F7;*/
	background-color: #000;
color: white;
  }
 
  .leftpostproperty {
    /* this make our menu fixed top */    
    z-index: 9999;
    position: fixed;
    top:200px;
	right: -39px;
   vertical-align:top;


  transform:rotate(7deg);
  -ms-transform:rotate(90deg); /* IE 9 */
  -moz-transform:rotate(90deg); /* Firefox */
  -webkit-transform:rotate(90deg); /* Safari and Chrome */
  -o-transform:rotate(90deg); /* Opera */}
    
#vert{width:2em;}
  
  .postrequriement {
    /* this make our menu fixed top */    
    z-index: 9999;
    position: fixed;
    top:350px;
	right: -57px;
	
 transform:rotate(7deg);
  -ms-transform:rotate(90deg); /* IE 9 */
  -moz-transform:rotate(90deg); /* Firefox */
  -webkit-transform:rotate(90deg); /* Safari and Chrome */
  -o-transform:rotate(90deg); /* Opera */}
  
 #loading {
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: fixed;
  display: block;
  opacity: 0.7;
  /*background-color: #fff;*/
  z-index: 99;
  text-align: center;
}

#loading-image {
  position: absolute;
  top: 30%;
  left: 50%;
  z-index: 100;
}
 
  @media (max-width:640px){
   .menu {
  width: 122px;
height: auto;
padding: 0;
list-style: none;
margin: 0;
position: absolute;
top: 131px;
right: -10px;
z-index: 999;
  }
  .banner-buying {
    margin-top: 81px;
}
  }
   @media(max-width:320px){
  .menu {
    width: 122px;
    height: auto;
    padding: 0;
    list-style: none;
    margin: 0;
    position: absolute;
    top: 72px;
    right: -10px;
    z-index: 999;
}
.banner-buying {
    margin-top: 81px;
}
  }
	</style>
	<script>
/*	jQuery(window).load(function () {
     $('#loading').show();
    setTimeout(function () {
        $('#loading').hide();
    }, 6000); 
    
});*/
/*$(window).bind("load", function() {
   // code here
});*/
	function searchpropertybyall(){
        var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('alllocation').value.trim();
				if(property_title==''){
				$("#entallalllocationerr").html('Please enter location');
				return false;
				}else{
				window.location='<?php echo site_url(); ?>view-search-property?allhome=allhomesearch&location='+property_title;
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#entallalllocationerr").html("Please enter valid location");	
				return false;
				}else{
				window.location='<?php echo site_url(); ?>view-search-property?allhome=allhomesearch&location='+property_title;
				return false;
				}
				
			
	}
function searchbysale(){

var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('forsale').value.trim();
				if(property_title==''){
				$("#forsaler").html('Please enter location');
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#forsaler").html("Please  enter valid location");	
				return false;
				}
				window.location='<?php echo site_url(); ?>view-search-property?allbuy=buy&location='+property_title;
				return false;
				
}

function searchbyrent(){
var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('searchonrent').value.trim();
				if(property_title==''){
				$("#searchonrentr").html('Please enter location');
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#searchonrentr").html("Please enter valid location");	
				return false;
				}
				window.location='<?php echo site_url(); ?>view-search-property?allrent=rent&location='+property_title;
				return false;
				
}
function forresalesearch(){
var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('forresale').value.trim();
				if(property_title==''){
				$("#forresaler").html('Please enter location');

				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#forresaler").html("Please enter valid location");	
				return false;
				}
				window.location='<?php echo site_url(); ?>view-search-property?allresale=resale&location='+property_title;
				return false;
}
function searchpropertybyall1(){
        var namecheck = /[A-Za-z]+$/;
		var  property_title=document.getElementById('alllocationhomennn').value.trim();
				if(property_title==''){
				$("#entallalllocationerr1").html('Please enter keyword');
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
	
	</script>
	<style>
	.login123 {
    background-color: #fff;
    border-radius: 3px;
}
	.login123 input[type="text"] {
    outline: none;
    padding: 8px 15px;
    background: none;
    width: 87%;
    border: none;
    font-size: 1.1em;
    color: #141313;
}
.login123 input[type="submit"] {
    width: 32px;
    height: 32px;
    background: url(<?php echo base_url() ?>assets/images/search.png) no-repeat;
    padding: 0px;
    border: none;
    cursor: pointer;
    outline: none;
    vertical-align: middle;
	float:right;
	margin-top: -30px;
	}
	</style>
	<div class="fix-hearder">
	
<div class="navigation">
			<div class="container-fluid">
			<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4">
			<nav class="pull"  style="float:left;">

			<ul><li><span><a href="tel:8087245555"style="font-size: 14px;"><i class="glyphicon glyphicon-phone"> </i> +91 8087 245 555</a></span></li>
			<li>|</li>
			<li><span ><i class="fa fa-whatsapp" aria-hidden="true"></i> +91 8805 723 555</span></li>
			</ul></nav>
			</div>
			<div class="col-md-6">
				<nav class="pull"  style="float:right">
					<ul>
						<li><a  href="<?php echo site_url(); ?>">Home</a></li>
						<li><a  href="<?php echo site_url(); ?>about">About Us</a></li>
						 <li><a  href="<?php echo site_url(); ?>view-posted-property">Property</a></li> 
						 <li><a  href="<?php echo site_url(); ?>search_user_view_requirement">Search Requirement</a></li>
					<?php /*?>	<li><a  href="<?php echo site_url(); ?>terms">Terms</a></li>
						<li><a  href="<?php echo site_url(); ?>privacy">Privacy</a></li><?php */?>
						<li><a  href="<?php echo site_url(); ?>contact">Contact</a></li>
						
					</ul>
				</nav>	
				</div><div class="col-md-1"></div>		
			</div>
		</div></div>
		<style>
	
.stylish-input-group .input-group-addon{
    background:#09A426  !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
} 
.mydbubttt{
background-color: #09A426;
box-shadow: inherit;
box-shadow: 1px 1px 1px #110D0D;
border: 0px;
}
.mydbubttt:hover{
background-color: #09A426;
box-shadow: inherit;
box-shadow: 1px 1px 1px #110D0D;
border: 0px;
}
		</style>
		 <div id="loading" style="display:none;">
        <img id="loading-image" src="<?php echo base_url(); ?>assets/images/wait.gif" alt="Loading..." />
              </div>
		<?php if(!$this->session->userdata('UID')){ ?>
		<a  href="<?php echo site_url(); ?>login-property" class="btn btn-danger leftpostproperty mydbubttt" style="right:-39px;"><i class="glyphicon glyphicon-briefcase"> </i> Post Free Ad
		</a>
		<?php }else{ ?>
			<a  href="<?php echo site_url(); ?>post-property" class="btn btn-danger leftpostproperty mydbubttt" style="right:-39px;"><i class="glyphicon glyphicon-briefcase"> </i> Post Free Ad</a>
		<?php } ?>
		<a  href="<?php echo site_url(); ?>property-post-requirement" class="btn btn-info postrequriement mydbubttt"><i class="glyphicon glyphicon-briefcase"> </i> Post Requirement</a>
		<div class="header">
	<div class="container">
		<!--logo-->
		<div class="row">
		<div class="col-md-3">
			<div class="logo">
				<h1><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/sai-broking-logo-2.png" /></a></h1>
			
				
			</div>
			</div>
			<div class="col-md-3">
           
			</div>
			
		<!--//logo-->
		<div class="col-md-6" style="padding: 0.8em 0;">
		<div class="top-nav">
			<ul class="right-icons">
			<!--	<li><span ><i class="glyphicon glyphicon-phone"> </i>+91 8087 245 555</span></li>-->
				<?php if($this->session->userdata('UID')){ ?>
				<li><a  href="<?php echo site_url(); ?>post-property" class="btn btn-danger mydbubttt"><i class="glyphicon glyphicon-briefcase"> </i>Post Free Ad</a></li>
				<!--<li><a  href="<?php echo site_url(); ?>profile"><i class="glyphicon glyphicon-user"> </i>Hi <?php echo substr($this->session->userdata('NAME'),0,10); ?></a></li>-->
				<li class="dropdown">
 <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown">
 <i class="glyphicon glyphicon-user"> </i>Hi <?php echo substr($this->session->userdata('NAME'),0,10); ?><i class="fa fa-caret-down" aria-hidden="true"></i></a>
  <ul class="dropdown-menu">
    <li><a style="color: #2a2727;" href="<?php echo site_url(); ?>profile">Profile</a></li>
    <li><a style="color: #2a2727;" href="<?php echo site_url();?>change_password">Change Password</a></li>
	<li><a style="color: #2a2727;" href="<?php echo site_url();?>users-posted-prorperty">Your Property List</a></li>
  </ul></li>
				<li><a  href="<?php echo site_url(); ?>logoutusers"><i class="glyphicon glyphicon-off"> </i> Logout</a></li>
				<?php }else{ ?>
					<li><a  href="<?php echo site_url(); ?>login-property" class="btn btn-danger mydbubttt"><i class="glyphicon glyphicon-briefcase"> </i>Post Free Ad</a></li>
				<li><a  href="<?php echo site_url(); ?>login"><i class="glyphicon glyphicon-user"> </i>User Login</a></li>
				<?php } ?>
				<!--<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>-->
				
			</ul>
			<div class="nav-icon">
				<div class="hero  nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
			<?php
			$userid1234=$this->session->userdata('UID');
			$this->db->where('uid',$userid1234);
		   $this->db->delete('temp_image');
			 ?>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			   
				<link href="<?php echo base_url()?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					 
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Search By Keyword</span></li>
							 <!-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Buy</span></li>-->
							 <!-- <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>For Sale</span></li>-->
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2>
						  <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
						  <div class="facts">
						  	<div class="login">
						  <form method="post">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
					<input type="text" class="form-control"  placeholder="Search Ad Here.." id="alllocationhomennn" name="alllocationhomennn" required>
                    <span class="input-group-addon">
                        <button type="submit" onclick="return searchpropertybyall1();">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
			<span id="entallalllocationerr1" style="color:#FF0000"></span>	
            </div>
			</form></div></div></div>
						  		<!--<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
									<label style="color:white;">Enter Location</label>
									  	<div class="login">
										<form method="post" enctype="multipart/form-data" id="searchallproperty" name="searchallproperty">
									<input type="text"  placeholder="Enter Location" id="alllocation" name="alllocation" required>
									
									 		<input type="submit" value="" onclick="return searchpropertybyall();">
											</form>
											
									 	</div>
										<span id="entallalllocationerr" style="color:red;"></span>        
							        </div>
						  		</div>-->
							  <!--   <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Buy</h2>-->
								 <!--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">		
										<label style="color:white;">Enter Location</label>							
										<div class="login">
										<form method="post" enctype="multipart/form-data" id="searchformsale" name="searchformsale">
											<input type="text"  placeholder="Enter Location" id="forsale" name="forsale">		
									 		<input type="submit" value="" onclick="return searchbysale();">
											</form>
									 	</div>
											<span id="forsaler" style="color:red;"></span>     
							        </div>	
									
								 </div>-->									
							     <!-- <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="facts">
									 	<label style="color:white;">Enter Location</label>
										<div class="login">
										<form method="post" enctype="multipart/form-data" id="searchrentproperty" name="searchrentproperty">
											<input type="text"  id="searchonrent" placeholder="Enter Location" name="searchonrent">		
									 		<input type="submit" value="" onclick="return searchbyrent();">
											</form>
									 	</div> 
										<span style="color:red;" id="searchonrentr"></span>
							         </div>
									 </div>	
									    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
									 <div class="facts">
									 <label style="color:white;">Enter Location</label>
										<div class="login">
										<form method="post" enctype="multipart/form-data" id="searchpropertyforresale" name="searchpropertyforresale">
									<input type="text"  placeholder="Enter Location"  id="forresale" name="forresale">		
									 		<input type="submit" value="" onclick="return forresalesearch();" >
											</form>
									 	</div> 
											<span style="color:red;" id="forresaler"></span>
							         </div>-->
							    </div>
					      </div>
					 </div>
					 <script src="<?php echo base_url(); ?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
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
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div></div>
		<div class="clearfix"> </div>
		</div></div>
</div>
</div>
<style>
.caption1{
position: absolute;
top: 43%;
left: 13%;
width: 74%;
right: 13%;
background: rgba(12, 117, 16, 0.5) none repeat scroll 0% 0%;
padding:20px;
}
</style>

<style>
.captioncontrol{
/*background: rgba(12, 117, 16, 0.5) none repeat scroll 0% 0%;*/
background: rgba(32, 35, 32, 0.8) none repeat scroll 0% 0%;
padding:20px;position: absolute;top: 43%; width:75%; left:10%; right:15%;
border-radius: 24px 24px 24px 24px;
-moz-border-radius: 24px 24px 24px 24px;
-webkit-border-radius: 18px 18px 18px 18px;
/*border: 3px solid #46C011;*/
}
@media(max-width:500px){
.captioncontrol{
padding: 20px;
position: absolute;
top: 15%;
width: 80%;
left: 10%;
right: 10%;
}
}
</style>
<script>
function allsearchmaincategoryr(){ if($('#allsearchmaincategory').val()==''){}else{ 
 var category=document.getElementById('allsearchmaincategory').value.trim();
                       $.ajax({
					  	url: "<?php echo site_url(); ?>Users_Controller/get_tem_sub_category12",
						type: 'POST',
						data: {category:category},
						success: function(data) {
						$("#getsubcategory").fadeOut().html(data).fadeIn('fast');
				
						}
						});
						$(document).ready(function(e) {
        setTimeout(function() {
            $("#loaderimages1223").fadeOut("slow");
       
        }, 1000);
    });
$("#allsearchmaincategoryr").html(' '); } }
function allsearchsubcatoriesr(){ if($('#allsearchsubcatories123').val()==''){}else{ $("#allsearchsubcatoriesr").html(' '); } }
function holesearchcategory(){
		var  allsearchmaincategory=document.getElementById('allsearchmaincategory').value.trim();
			var  allsearchsubcatories=document.getElementById('allsearchsubcatories123').value.trim();
			var  allsearchcity=document.getElementById('allsearchcity').value.trim();
			var  allsearchkeyword=document.getElementById('allsearchkeyword').value.trim();
			
	           if(allsearchmaincategory){
			   if(allsearchsubcatories==''){
			    $("#allsearchsubcatoriesr").html('Please select Subcategory e.g rent/sale/buy');
				document.getElementById('allsearchsubcatories123').focus();
				return false;
				}
			   }		
			   if(allsearchkeyword){
			    
			   }else{
				if(allsearchmaincategory==''){
				$("#allsearchmaincategoryr").html('Please select Category e.g property');
				document.getElementById('allsearchmaincategory').focus();
				return false;
				}
				
			}
		window.location='<?php echo site_url(); ?>?allsearchkeywords=allsearchkeywords&allsearchmaincategory='+allsearchmaincategory+'&allsearchsubcatories='+allsearchsubcatories+'&allsearchcity='+allsearchcity+'&allsearchkeyword='+allsearchkeyword;
				return false;
			
				
			
	}
	
</script>
<?php if($page=='Home') { ?>
<div class="header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		       
					 <li>
			          	 <div class="banner1">
			           		<div  class="captioncontrol">
					        
							<form method="post">
							<div class="row">
							<div class="col-md-4">
							<select type="text" class="form-control" name="allsearchmaincategory" id="allsearchmaincategory" onchange="allsearchmaincategoryr()" placeholder="Select Main Category" style="margin-bottom: 10px;">
				<?php if(isset($_GET['allsearchmaincategory'])) {  
				 if(!empty($_GET['allsearchmaincategory'])){
				$maincate=$this->db->query("select *from main_category where  mid='".$_GET['allsearchmaincategory']."'")->result(); ?>
							 <option value="<?php echo $_GET['allsearchmaincategory']; ?>"><?php echo $maincate[0]->category_name; ?></option>
							 <?php } else{ ?>
							 <option value="">Select Main Category</option>
							 <?php } }else{ ?>
							  <option value="">Select Main Category</option>
							 <?php } ?>
		  <?php $db=$this->db->query("select *from main_category order by mid asc")->result(); foreach($db as $rows) { ?>
		  <option value="<?php echo $rows->mid; ?>"><?php echo $rows->category_name; ?></option>
		  <?php } ?>
							</select>
							<span id="allsearchmaincategoryr" style="color:red;"></span>
							 <img  id="loaderimages1223" style="display:none;" src="<?php echo base_url(); ?>assets/images/loading.gif" />
							</div>
							<div class="col-md-4" id="getsubcategory">
						<select type="text" class="form-control" name="allsearchsubcatories123"  id="allsearchsubcatories123" placeholder="Select SubCategory" onchange="allsearchsubcatoriesr();" style="margin-bottom: 10px;" >
							 <?php $cateogoy=$this->Admin_Model->get_property_category_details(); ?>
		        
						<?php if(isset($_GET['allsearchsubcatories'])) {
						$subcategory=$this->db->query("select *from subcategory where  scid='".$_GET['allsearchsubcatories']."'")->result();
						if(!empty($_GET['allsearchsubcatories'])){
						 ?> 
							 <option value="<?php echo $_GET['allsearchsubcatories']; ?>"><?php echo $subcategory[0]->category_name; ?></option>
							 <?php }else{ ?>
							    <option  value="" >Select Sub Category</option>
							 <?php } } else{ ?>
							  <option  value="" >Select Sub Category</option>
							 <?php 
							 }
							 ?>
		  </select>
		   
		  <span id="allsearchsubcatoriesr" style="color:red;"></span>
							</div>
							<div class="col-md-4">
							<select type="text" class="form-control" name="allsearchcity"  id="allsearchcity" placeholder="Select Locality" style="margin-bottom: 10px;">
							<?php if(isset($_GET['allsearchcity'])) 
							   {
							 if(!empty($_GET['allsearchcity'])){ ?>
							 <option value="<?php echo $_GET['allsearchcity']; ?>"><?php  echo $_GET['allsearchcity']; ?></option>
							 <?php }else{ ?>
							   <option value="">Select Locality</option>
							 <?php } ?>
							 <?php }else { ?>
							  <option value="">Select Locality</option>
							 <?php } ?>
		    <?php $db1=$this->db->query("select *from locality_master order by city_name asc")->result(); foreach($db1 as $rows) { ?>
		          <option value="<?php echo $rows->city_name; ?>"><?php echo $rows->city_name; ?></option>
		  <?php } ?>
							</select>
							</div>
							</div>
							<div class="row">
						
						<div class="col-md-12">
						
                     <div class="input-group stylish-input-group">
					<input type="text" class="form-control"  placeholder="Keyword..." value="<?php if(isset($_GET['allsearchkeyword'])) { if(!empty($_GET['allsearchkeyword'])) { echo $_GET['allsearchkeyword']; } else{ echo ''; } } ?>" id="allsearchkeyword" name="allsearchkeyword" required>
                    <span class="input-group-addon">
                        <button type="submit" onclick="return holesearchcategory();">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
			<span id="entallalllocationerr1" style="color:#FF0000"></span>	
            </div>
			
			</div>
			</form>
			          		</div>
			          	</div>
			         </li>
					 <!--<li>
			          	 <div class="banner2">
			           		<div class="caption">
					      
			          		</div>
			          	</div>
			         </li>-->
			         <!--<li>
			          	 <div class="banner3">
			           		<div class="caption">
				
			          		</div>
			          	</div>
			         </li>-->		
			      </ul>
			  </div>
			</div>
		</div>
	</div>
<?php }else{

?>
<div class=" banner-buying">
	<div class=" container">
	<h3><span><?php echo $page; ?></span></h3> 
	<!---->
	<div class="menu-right">
	<?php $category=$this->Users_Model->get_property_category_details(); ?>
		 <ul class="menu">
			<li class="item1"><a href="#" class=""> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
			<ul class="cute" style="display: none;">
			  <?php foreach($category as $row){ ?>
				<li class="subitem1"><a href="<?php echo site_url(); ?>view-property-categories-wise?category=<?php echo $row->pcid;?>&propertyname=<?php echo  $row->property_name; ?>"><?php echo $row->property_name; ?></a></li>
               <?php } ?>
			</ul>
		</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
			
			function isNumber(evt, element) {
   // evt = (evt) ? evt : window.event;
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (
            (charCode!=8  || $(element).val()) &&  
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
            (charCode < 48 || charCode > 57)){
		
       alert('Only Accept Numeric Values');
	   return false;
    } 
	
    return true;
}
		</script>
      		
	</div>
</div>
<?php } ?>