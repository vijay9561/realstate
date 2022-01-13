
<style>
	 .fix-hearder {
		z-index: 9999;
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		background-color: #000;
		color: white;
  }
  .leftpostproperty {
    z-index: 9999;
    position: fixed;
    top:200px;
	right: -39px;
   vertical-align:top;
  transform:rotate(7deg);
  -ms-transform:rotate(90deg); 
  -moz-transform:rotate(90deg); 
  -webkit-transform:rotate(90deg); 
  -o-transform:rotate(90deg);
  }
  @media(max-width:500px){
  .leftpostproperty {
    z-index: 9999;
    position: fixed;
    top:200px;
	right: -32px;
   vertical-align:top;
  transform:rotate(7deg);
  -ms-transform:rotate(90deg); 
  -moz-transform:rotate(90deg); 
  -webkit-transform:rotate(90deg); 
  -o-transform:rotate(90deg);
  font-size:10px;
  top: 240px;
  }
  }
    
#vert{width:2em;}
  
  .postrequriement {
    z-index: 9999;
    position: fixed;
    top:350px;
	right: -57px;
	
 transform:rotate(7deg);
  -ms-transform:rotate(90deg); 
  -moz-transform:rotate(90deg); 
  -webkit-transform:rotate(90deg); 
  -o-transform:rotate(90deg);
  }
  
   @media(max-width:500px){
  .postrequriement {
    z-index: 9999;
    z-index: 9999;
    position: fixed;
    top:350px;
	right: -45px;
	
 transform:rotate(7deg);
  -ms-transform:rotate(90deg); 
  -moz-transform:rotate(90deg); 
  -webkit-transform:rotate(90deg); 
  -o-transform:rotate(90deg);
  font-size:10px;
  }
  }
 #loading {
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: fixed;
  display: block;
  opacity: 0.7;
  z-index: 99;
  text-align: center;
}

#loading-image {
  position: absolute;
  top: 30%;
  left: 50%;
  z-index: 100;
}

#searchidddd{ display:none;}
@media(max-width:768px){
#searchidddd{
  display: inline-block;
  }
}
@media(max-width:500px){
#searchidddd{
  display: inline-block;
  }
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
  @media(max-width:500px){
  .customewidth{
  width: 100%;
  }
  }
  .imageproperty{
  width:50%; height:60px;
  padding:3px;
  }
  @media(max-width:500px){
  .imageproperty {
    width: 100%;
    height: 56px;
    padding: 3px;
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
#searchresponsive{ <?php /*?>background-image:url(<?php echo base_url(); ?>assets/images/sbh1.png);<?php */?>
  background-repeat: no-repeat;
    background-size: 100% 100%;padding-top:10px;
	position:absolute; top:103px; left:0px; right:0px; width:102%;
}
#roidddd{ margin-left: 111px;
margin-right: 150px;}

@media(max-width:768px){
#hero{
/*margin-top: -253px;*/
margin-right: 13px;
}
#searchresponsive {
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding-top: 10px;
    position:relative;
	display:none;
    top: 0px;
    left: 0px;
    right: 0px;
    width: 102%;
	z-index:9;
}
}
@media(max-width:500px){
#hero{
margin-top: -74px;
margin-right: 13px;
}
@media(max-width:320px){
#hero{
margin-top: -76px;
margin-right: 13px;
}
}
#roidddd{ margin-left:30px; margin-right:30px;}

#searchresponsive{ <?php /*?>background-image:url(<?php echo base_url(); ?>assets/images/sbh1.png);<?php */?>
  background-repeat: no-repeat;
    background-size: 100% 100%;padding-top:10px;
	position:relative; 
	top:0px;
	left:0px; 
	right:0px; 
	width:102%; 
	padding-bottom:20px;
	display:none;
}
}

.popup {
    width:100%;
    height:100%;
    display:none;
    position:fixed;
    top:0px;
    left:0px;
    background:rgba(0,0,0,0.75);
	z-index:9999;
	overflow-y: auto;}
 
/* Inner */
.popup-inner {
    max-width:1000px;
    width:100%;
    padding:40px;
    position:fixed;
    top:42%;
    left:50%;
    -webkit-transform:translate(-50%, -50%);
    transform:translate(-50%, -50%);
    box-shadow:0px 2px 6px rgba(0,0,0,1);
    border-radius:3px;
    background:#fff;
}
 .popup-close {
    width:30px;
    height:30px;
    padding-top:4px;
    display:inline-block;
    position:absolute;
    top:0px;
    right:0px;
    transition:ease 0.25s all;
    -webkit-transform:translate(50%, -50%);
    transform:translate(50%, -50%);
    border-radius:1000px;
    background:rgba(0,0,0,0.8);
    font-family:Arial, Sans-Serif;
    font-size:20px;
    text-align:center;
    line-height:100%;
    color:#fff;
}
 
.popup-close:hover {
    -webkit-transform:translate(50%, -50%) rotate(180deg);
    transform:translate(50%, -50%) rotate(180deg);
    background:rgba(0,0,0,1);
    text-decoration:none;
}
@media(max-width:768px){
.popup-inner {
    max-width: 906px;
width: 95%;
padding: 40px;
position: fixed;
top: 31%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
box-shadow: 0px 2px 6px rgba(0,0,0,1);
border-radius: 3px;
background: #fff;
overflow-y: auto;
height: 500px;
}
.popup-close {
    width: 30px;
    height: 30px;
    padding-top: 4px;
    display: inline-block;
    position: absolute;
    top: 15px;
    right: 13px;
    transition: ease 0.25s all;
    -webkit-transform: translate(50%, -50%);
    transform: translate(50%, -50%);
    border-radius: 1000px;
    background: rgba(0,0,0,0.8);
    font-family: Arial, Sans-Serif;
    font-size: 20px;
    text-align: center;
    line-height: 100%;
    color: #fff;
}
}
@media(max-width:500px){
.popup-inner {
    max-width: 1000px;
    width: 92%;
    padding: 40px;
    position: fixed;
   top: 58%;
    left: 50%;
	bottom:30%
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    box-shadow: 0px 2px 6px rgba(0,0,0,1);
    border-radius: 3px;
    background: #fff;
	overflow-y: auto; height:500px;
	
}

.popup-close {
    width: 30px;
    height: 30px;
    padding-top: 4px;
    display: inline-block;
    position: absolute;
    top: 14px;
    right: 13px;
    transition: ease 0.25s all;
    -webkit-transform: translate(50%, -50%);
    transform: translate(50%, -50%);
    border-radius: 1000px;
    background: rgba(0,0,0,0.8);
    font-family: Arial, Sans-Serif;
    font-size: 20px;
    text-align: center;
    line-height: 100%;
    color: #fff;
}
.popup {
    width:100%;
    height:100%;
    display:none;
    position:fixed;
    top:0px;
    left:0px;
    background:rgba(0,0,0,0.75);
	z-index:9999;
	}
}
/* Close Button */

		</style>
		<script>
		$(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
 
        e.preventDefault();
    });
 
    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 
        e.preventDefault();
    });
});
		</script>
	
	<div class="fix-hearder">
<style>
.mystyle{margin-left: -78px;}
@media(max-width:768px){
.mystyle{margin-left:0px;}
}
@media(max-width:500px){
.mystyle{margin-left:0px;}
}
</style>	
<div class="navigation">
			<div class="container-fluid">
			<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-5 col-sm-6 col-xs-6 mystyle">
			<nav class="pull">

			<ul>
			<li><span style="border: 1px solid #D3D3D3;
padding: 2px;
padding-left: 10px;
padding-right: 10px;
border-radius: 10px;">Aurangabad</span></li>
			<li><span><a href="tel:8087245555"style="font-size: 14px;"><i class="glyphicon glyphicon-phone"> </i> +91 8087 245 555</a></span></li>
			<li>|</li>
			<li><span > <i class="fa fa-whatsapp" aria-hidden="true"> </i> +91 8805 723 555</span></li>
			</ul></nav>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6">
				<nav class="pull">
					<ul>
						<li><a  href="<?php echo site_url(); ?>">Home</a></li>
						<li><a  href="<?php echo site_url(); ?>about">About Us</a></li>
						
						 <li><a  href="<?php echo site_url(); ?>view-posted-property">Property</a></li> 
						 <li><a  href="<?php echo site_url(); ?>search_user_view_requirement">Search Requirement</a></li>
					<?php /*?>	<li><a  href="<?php echo site_url(); ?>terms">Terms</a></li>
						<li><a  href="<?php echo site_url(); ?>privacy">Privacy</a></li><?php */?>
						<li><a  href="<?php echo site_url(); ?>contact">Contact</a></li>
						<?php /*?><li style="border: 0.5px solid #D3D3D3;padding-left: 10px;padding-right: 10px;border-radius: 10px;"><a   href="#" data-popup-open="popup-1" href="#">Demo</a></li><?php */?>
						
					</ul>
				</nav>	
				</div><div class="col-md-1"></div>		
			</div>
		</div></div>
		 <div id="loading" style="display:none;">
        <img id="loading-image" src="<?php echo base_url(); ?>assets/images/wait.gif" alt="Loading..." />
              </div>
		<?php if(!$this->session->userdata('UID')){ ?>
		<a  href="#" class="btn btn-danger leftpostproperty mydbubttt" href="#" data-popup-open="popup-1"><i class="glyphicon glyphicon-briefcase"> </i> Post Free Ad
		</a>
		<?php }else{ ?>
			<a  href="#" data-popup-open="popup-1" class="btn btn-danger leftpostproperty mydbubttt"><i class="glyphicon glyphicon-briefcase"> </i> Post Free Ad</a>
		<?php } ?>
		<a  href="<?php echo site_url(); ?>property-post-requirement" class="btn btn-info postrequriement mydbubttt"><i class="glyphicon glyphicon-briefcase"> </i> Post Requirement</a>
		<div class="header">
	<div class="container">
		<!--logo-->
		<div class="row">
		<div class="col-md-4">
			<div class="logo">
				<h1><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/sai-broking-logo-2.png" /></a></h1>
			
				
			</div>
			</div>
			
			
			<style>
			.internalbutton{}
			@media(max-width:500px){
			.internalbutton{
			padding: 5px;
          font-size: 10px;
}
			}
			</style>
		<!--//logo-->
		<div class="col-md-8" style="padding: 1.3em 0;">
		<div class="top-nav">
			<ul class="right-icons">
			<!--	<li><span ><i class="glyphicon glyphicon-phone"> </i>+91 8087 245 555</span></li>-->
			
				<?php if($this->session->userdata('UID')){ ?>
				<li class="dropdown"><a   href="#" data-popup-open="popup-1" class="btn btn-danger mydbubttt internalbutton dropdown-toggle">
				<i class="glyphicon glyphicon-briefcase"> </i>Post Free Ad</a>
				</li>
				<!--<li><a  href="<?php echo site_url(); ?>profile"><i class="glyphicon glyphicon-user"> </i>Hi <?php echo substr($this->session->userdata('NAME'),0,10); ?></a></li>-->
				<li class="dropdown">
 <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown">
 <i class="glyphicon glyphicon-user"> </i>Hi <?php echo substr($this->session->userdata('NAME'),0,5); ?><i class="fa fa-caret-down" aria-hidden="true"></i></a>
  <ul class="dropdown-menu">
    <li><a style="color: #2a2727;" href="<?php echo site_url(); ?>profile">Profile</a></li>
    <li><a style="color: #2a2727;" href="<?php echo site_url();?>change_password">Change Password</a></li>
	<li><a style="color: #2a2727;" href="<?php echo site_url();?>users-posted-prorperty">Your Posted Ad List</a></li>
  </ul></li>
				<li><a  href="<?php echo site_url(); ?>logoutusers"><i class="glyphicon glyphicon-off"> </i> Logout</a></li>
				<?php }else{ ?>
					<li><a   href="#" data-popup-open="popup-1" class="btn btn-danger mydbubttt internalbutton"><i class="glyphicon glyphicon-briefcase"> </i> Post Free Ad</a></li>
				<li><a  href="<?php echo site_url(); ?>login"><i class="glyphicon glyphicon-user"> </i>User Login</a></li>
				<?php } ?>
				<!--<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>-->
				<li class="dropdown" id="searchidddd"><a id="mydiveee" class="btn btn-danger mydbubttt internalbutton"  href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
				<a id="mydiveee1232" style="display:none;" class="btn btn-danger mydbubttt internalbutton"  href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
				</li>
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

				
				</div>
				
					
	
		</div></div>
		<style>

		.mydivshover:hover{
		border: 0.5px solid #09a426;
        border-radius: 10px;
		padding:5px;
		text-align:center;
		}
		</style>
		<div class="popup" data-popup="popup-1">
		<?php if($this->session->userdata('UID')){ ?> 
    <div class="popup-inner">
	<div class="row">
       	<?php   $viewdata=$this->db->query("select *from main_category where mid IN(1,3,4,5,6,7) order by mid asc")->result(); foreach( $viewdata as $rows) { ?>
				
				 <?php if($rows->mid==1){ ?>
				  <a href="<?php echo site_url(); ?>post-property">
				  <div class="">
				  <div class="col-xs-4 col-md-2 mydivshover"  style="color:#000000;text-align:center; margin-bottom:10px;">
				
				  <img class="imageproperty img-circle" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>"  />
						
							<h6 style="text-align:center;padding-top: 10px;"><?php echo  ($rows->category_name); ?></h6>
				  </div></div></a><?php }else{ ?>
				   <a  href="<?php echo site_url() ?>otherpostform?category=<?php echo $rows->mid; ?>">
				   <div class="col-xs-4 col-md-2 mydivshover"  style="color:#000000;text-align:center; margin-bottom:10px;">
				    
				  <img class="imageproperty img-circle" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" />
	
							
							<h6 style="text-align:center;padding-top: 10px;"><?php echo  ($rows->category_name); ?></h6>
				  </div></a>
				  <?php } ?>
				 
				 <?php } ?></div>
				 <br>
				 <div class="row">
				  	<?php   $viewdata1=$this->db->query("select *from main_category where mid IN(8,9,10,11,12,13) order by mid asc")->result(); foreach( $viewdata1 as $rows) { ?>
				   <a href="<?php echo site_url() ?>otherpostform?category=<?php echo $rows->mid; ?>">
				 <div class="col-xs-4 col-md-2 mydivshover"  style="color:#000000;text-align:center; margin-bottom:10px;">
				    
				  <img class="imageproperty img-circle" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" />
	
							
							<h6 style="text-align:center;padding-top: 10px;"><?php echo  ($rows->category_name); ?></h6>
				  </div></a>
				  <?php } ?>
				</div>
				<div class="row">
				  	<?php   $viewdata2=$this->db->query("select *from main_category where mid IN(14,16) order by mid asc")->result(); foreach( $viewdata2 as $rows) { ?>
				   <a href="<?php echo site_url() ?>otherpostform?category=<?php echo $rows->mid; ?>">
				 <div class="col-xs-4 col-md-2 mydivshover"  style="color:#000000;text-align:center; margin-bottom:10px;">
				    
				  <img class="imageproperty img-circle" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" />
	
							
							<h6 style="text-align:center;padding-top: 10px;"><?php echo  ($rows->category_name); ?></h6>
				  </div></a>
				  <?php } ?>
				</div>
		<!--<div>
        <p><a data-popup-close="popup-1" href="#">Close</a></p></div>-->
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
	<?php }else{ ?>
	
	<div class="popup-inner">
	<div class="row">
       	<?php   $viewdata=$this->db->query("select *from main_category where mid IN(1,3,4,5,6,7)  and status='active' order by mid asc")->result(); foreach( $viewdata as $rows) { ?>
				
				 <?php if($rows->mid==1){ ?>
				  <a href="<?php echo site_url(); ?>login?category=<?php echo $rows->mid; ?>">
				  <div class="col-xs-4 col-md-2 mydivshover"  style="color:#000000;text-align:center; margin-bottom:10px;">
				
				  <img class="imageproperty img-circle" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>"  />
						
							<h6 style="text-align:center;padding-top: 10px;"><?php echo  ($rows->category_name); ?></h6>
				  </div></a><?php }else{ ?>
				   <a href="<?php echo site_url() ?>login?category=<?php echo $rows->mid; ?>">
				   <div class="col-xs-4 col-md-2 mydivshover"  style="color:#000000;text-align:center; margin-bottom:10px;">
				    
				  <img class="imageproperty img-circle" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" />
	
							
							<h6 style="text-align:center;padding-top: 10px;"><?php echo  ($rows->category_name); ?></h6>
				  </div></a>
				  <?php } ?>
				 
				 <?php } ?></div>
				 <div class="row">
				  	<?php   $viewdata1=$this->db->query("select *from main_category where mid IN(8,9,10,11,12,13) and status='active' order by mid asc")->result(); foreach( $viewdata1 as $rows) { ?>
				   <a href="<?php echo site_url() ?>login?category=<?php echo $rows->mid; ?>">
				 <div class="col-xs-4 col-md-2 mydivshover"  style="color:#000000;text-align:center; margin-bottom:10px;">
				    
				  <img class="imageproperty img-circle" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" />
	
							
							<h6 style="text-align:center;padding-top: 10px;"><?php echo  ($rows->category_name); ?></h6>
				  </div></a>
				  <?php } ?>
				</div>
				
				<div class="row">
				<br>
				  	<?php   $viewdata2=$this->db->query("select *from main_category where mid IN(14,16)  and status='active' order by mid asc")->result(); foreach( $viewdata2 as $rows) { ?>
				   <a href="<?php echo site_url() ?>login?category=<?php echo $rows->mid; ?>">
				 <div class="col-xs-4 col-md-2 mydivshover"  style="color:#000000;text-align:center; margin-bottom:10px;">
				    
				  <img class="imageproperty img-circle" src="<?php echo base_url(); ?>adminassets/upload/category/<?php echo $rows->category_images ?>" />
	
							
							<h6 style="text-align:center;padding-top: 10px;"><?php echo  ($rows->category_name); ?></h6>
				  </div></a>
				  <?php } ?>
				</div>
		<!--<div>
        <p><a data-popup-close="popup-1" href="#">Close</a></p></div>-->
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
	
	<?php } ?>
</div>
		
		
			
			</div>
		
		</div>
		<div class="clearfix"> </div>
		
		<div  id="searchresponsive" class="captioncontrol">
		<div class="row" id="roidddd">
			
           <form method="post">
						
							<div class="col-md-3">
							<select type="text" class="form-control customewidth" name="allsearchmaincategory" id="allsearchmaincategory" onchange="allsearchmaincategoryr()" placeholder="Select Main Category" style="margin-bottom: 10px;">
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
							<div class="col-md-2" id="getsubcategory">
						<select type="text" class="form-control customewidth" name="allsearchsubcatories123"   id="allsearchsubcatories123" placeholder="Select SubCategory" onchange="allsearchsubcatoriesr();" style="margin-bottom: 10px;" >
							 <?php $cateogoy=$this->Admin_Model->get_property_category_details(); ?>
		        
						<?php if(isset($_GET['allsearchsubcatories'])) {
						
						if(!empty($_GET['allsearchsubcatories'])){
						 $subcategory11=$this->db->query("select *from subcategory where  scid='".$_GET['allsearchsubcatories']."'")->result();
						     $subcategory=$this->db->query("select *from subcategory where  mid='".$_GET['allsearchmaincategory']."' order by category_name asc")->result();
						 ?> 
						    
							 <option value="<?php echo $_GET['allsearchsubcatories']; ?>"><?php echo $subcategory11[0]->category_name; ?></option>
							 <?php foreach($subcategory as $sub){  if( $sub->scid!=$_GET['allsearchsubcatories']){?>
							  <option value="<?php echo $sub->scid; ?>"><?php echo $sub->category_name; ?></option>
							 <?php } ?>
							 <?php } } else{ ?>
							    <option  value="" selected >Select Sub Category</option>
							 <?php } } else{ ?>
							  <option  value="" selected >Select Sub Category</option>
							 <?php 
							 }
							 ?>
		  </select>
		   
		  <span id="allsearchsubcatoriesr" style="color:red;"></span>
							</div>
							<div class="col-md-2">
							<select type="text" class="form-control" name="allsearchcity"  id="allsearchcity" placeholder="Select Locality" style="margin-bottom: 10px;">
							<?php if(isset($_GET['allsearchcity'])) 
							   {
							 if(!empty($_GET['allsearchcity'])){ ?>
							 <option value="<?php echo $_GET['allsearchcity']; ?>"><?php  echo $_GET['allsearchcity']; ?></option>
							 <?php }else{ ?>
							   <option value="" >Select Locality</option>
							 <?php } ?>
							 <?php }else { ?>
							  <option value="">Select Locality</option>
							 <?php } ?>
		    <?php $db1=$this->db->query("select *from locality_master order by city_name asc")->result(); foreach($db1 as $rows) { ?>
		          <option value="<?php echo $rows->city_name; ?>"><?php echo $rows->city_name; ?></option>
		  <?php } ?>
							</select>
							</div>
						<div class="col-md-5">
						
                     <div class="input-group stylish-input-group" style="">
					<input type="text" class="form-control"  placeholder="Keyword..." value="<?php if(isset($_GET['allsearchkeyword'])) { if(!empty($_GET['allsearchkeyword'])) { echo $_GET['allsearchkeyword']; } else{ echo ''; } } ?>" id="allsearchkeyword" name="allsearchkeyword" required>
                    <span class="input-group-addon">
                        <button type="submit" onclick="return holesearchcategory();">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
			<span id="entallalllocationerr1" style="color:#FF0000"></span>	
            </div>
				</form>
			</div>
		</div>
		</div>
		
		
		
</div>
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
/*background: rgba(32, 35, 32, 0.8) none repeat scroll 0% 0%;
padding:20px;position: absolute;top: 43%; width:75%; left:10%; right:15%;
border-radius: 24px 24px 24px 24px;
-moz-border-radius: 24px 24px 24px 24px;
-webkit-border-radius: 18px 18px 18px 18px;*/
/*border: 3px solid #46C011;*/
background: rgba(32, 35, 32, 0.8) none repeat scroll 0% 0%;
padding: 10px;
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
function allsearchsubcatoriesr(){ if($('#allsearchsubcatories123').val()==''){
$("#allsearchmaincategoryr").html('Please Select Main Category');
}else{ $("#allsearchsubcatoriesr").html(' '); } }

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
		window.location='<?php echo site_url(); ?>search_result?allsearchkeywords=allsearchkeywords&allsearchmaincategory='+allsearchmaincategory+'&allsearchsubcatories='+allsearchsubcatories+'&allsearchcity='+allsearchcity+'&allsearchkeyword='+allsearchkeyword;
				return false;
			
				
			
	}
	
</script>
<style>
@media(max-width:500px){
.slidercolbacks{
margin-top: 127px;
}
}
</style>
<?php if($page=='Home') { ?>
<div class="header-right">
		<div class=" banner">
			 <div class="slider slidercolbacks">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		       
					 <li>
			          	 <div class="banner1">
			           		
			          	</div>
			         </li>
					 <li>
			          	 <div class="banner2">
			           		<div class="caption">
					      
			          		</div>
			          	</div>
			         </li>
			         <li>
			          	 <div class="banner3">
			           		<div class="caption">
				
			          		</div>
			          	</div>
			         </li>		
			      </ul>
			  </div>
			</div>
		</div>
	</div>
<?php }else{

?>
<div class=" banner-buying">
	<div class=" container">
	<h3><span>
	
	<?php if(isset($_GET['categories'])) {
	$maincategory=$this->db->query("select *from main_category where mid='".$_GET['categories']."'")->result();
	echo $maincategory[0]->category_name;
	 }elseif(isset($_GET['category'])){
	 
	 ?>
	 <?php $maincategory=$this->db->query("select *from main_category where mid='".$_GET['category']."'")->result();
	echo $maincategory[0]->category_name; ?>
	 <?php 
	}elseif(isset($_GET['propertytype'])){
	echo $_GET['propertytype'];
	}elseif($this->uri->segment(1)=='view_other_details'){ $pid=$this->uri->segment(2); $main=$this->db->query("select *from property_post where pid=' $pid'")->result();
	$subcategoryname=$this->db->query("select *from subcategory where scid='".$main[0]->category_id."'")->result();
	$main[0]->main_categories_id; 
	$main_category=$this->db->query("select *from main_category where mid='".$main[0]->main_categories_id."'")->result();
	?>
	<a href="<?php echo site_url(); ?>" style="color:#FFFFFF;"><i class="fa fa-home"></i></a>&nbsp;/&nbsp;<a style="color:#FFFFFF;" href="<?php echo site_url(); ?>view_category?categories=<?php echo $main[0]->main_categories_id ?>">
	<?php echo $main_category[0]->category_name; ?>
	</a><strong>/</strong><span> <?php echo $subcategoryname[0]->category_name;?> </span>
	<?php
	}elseif($this->uri->segment(1)=='view_single_property_details'){
	
	 $pid=$this->uri->segment(2); $main=$this->db->query("select *from property_post where pid=' $pid'")->result();
	$subcategoryname=$this->db->query("select *from subcategory where scid='".$main[0]->category_id."'")->result();
	$main[0]->main_categories_id; 
	$main_category=$this->db->query("select *from main_category where mid='".$main[0]->main_categories_id."'")->result();
	?>
	<a href="<?php echo site_url(); ?>" style="color:#FFFFFF;"><i class="fa fa-home"></i></a>
	&nbsp;/&nbsp;<a style="color:#FFFFFF;" href="<?php echo site_url(); ?>view_category?categories=<?php echo $main[0]->main_categories_id ?>">
	<?php echo $main_category[0]->category_name; ?>&nbsp;/&nbsp;<a href="<?php echo site_url(); ?>residential-property?propertytype=<?php echo  $main[0]->property_residentaily; ?>" style="color:#FFFFFF;"><?php echo  $main[0]->property_residentaily; ?></a>
	</a><strong>/</strong><span> For <?php echo $subcategoryname[0]->category_name;?> </span>
	<?php }else { echo $page; } ?>
	</span></h3> 
	<!---->
	<?php /*?><div class="menu-right">
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
	</div><?php */?>
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

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/585d221b7295ad7394017b52/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>