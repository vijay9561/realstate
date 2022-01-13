<?PHP if($this->session->userdata('UID')) { ?>
<?php  //require_once('adminassets/ckeditor/ckeditor.php'); //ini_set('display_errors', 0); ?><br />
<script type="text/javascript" src="<?php echo base_url(); ?>adminassets/ckeditor/ckeditor.js"></script>
<script>
  window.onload = function () {
            var fileUpload = document.getElementById("photo");
            fileUpload.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreview");
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < fileUpload.files.length; i++) {
                        var file = fileUpload.files[i];
                        if (regex.test(file.name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = document.createElement("IMG");
                                img.height = "100";
                                img.width = "100";
                                img.src = e.target.result;
                                dvPreview.appendChild(img);
                            }
                            reader.readAsDataURL(file);
                        } else {
                            alert(file.name + " is not a valid image file.");
                            dvPreview.innerHTML = "";
                            return false;
                        }
                    }
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            }
        };

function property_titler(){if($('#property_title').val()==''){}else{ $('#property_titler').html(' '); }}
function category_idr(){if($('#category_id').val()==''){}else{ $('#category_idr').html(' '); }}
function property_pricer(){if($('#property_price').val()==''){}else{ $('#property_pricer').html(' '); }}
function roomsr(){if($('#rooms').val()==''){}else{ $('#roomsr').html(' '); }}
function arear(){if($('#area').val()==''){}else{ $('#arear').html(' '); }}
function property_owner_namer(){if($('#property_owner_name').val()==''){}else{ $('#property_owner_namer').html(' '); }}
function owner_contact_nor(){if($('#owner_contact_no').val()==''){}else{ $('#owner_contact_nor').html(' '); }}
function cityr(){if($('#owner_contact_no').val()==''){}else{ $('#cityr').html(' '); }}
function property_descriptionr(){if($('#ckeditor').val()==''){}else{ $('#property_descriptionr').html(' '); }}
function address_detailsr() {
adddres=document.getElementById('address_details').value.trim();
$(document).ready(function(){
$.ajax({
url: "<?php echo site_url();?>Users_Controller/get_google_map_details?adddres",
type: 'POST',
data: {adddres:adddres},
success: function(data) {
$("#getgooglemaps").fadeOut().html(data).fadeIn('slow');
}
});
});
if($('#address_details').val()==''){}else{ $('#address_detailsr').html(' '); }}

function property_builderr(){if($('#property_builder').val()==''){}else{ $('#property_builderr').html(' '); }}
function property_residentailyr(){if($('#property_residentaily').val()==''){}else{ $('#property_residentailyr').html(' '); }}
function property_furnishr(){if($('#property_furnish').val()==''){}else{ $('#property_furnishr').html(' '); }}
function propertypost(){
        var namecheck = /[A-Za-z]+$/;      
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var numbermatch= /^[1-9]\d{0,10}(?:\.\d)?$|^0\.[1-9]$/;
		var mobilenovalidation=/^\d{10}$/;
		var positvenumber=/[0-9 -()+]+$/;
		var chequeno=/^\d{6,14}$/;
	
		var  property_title=document.getElementById('property_title').value.trim();
	    var  property_builder=document.getElementById('property_builder').value.trim();
		var  category_id=document.getElementById('category_id').value.trim();
		var  property_residentaily=document.getElementById('property_residentaily').value.trim();
		var  property_furnish=document.getElementById('property_furnish').value.trim();
		
		var  property_price=document.getElementById('property_price').value.trim();
		var  rooms=document.getElementById('rooms').value.trim();
		var  area=document.getElementById('area').value.trim();
		var  property_owner_name=document.getElementById('property_owner_name').value.trim();
		var  owner_contact_no=document.getElementById('owner_contact_no').value.trim();
		var  city=document.getElementById('city').value.trim();
			var  address_details=document.getElementById('address_details').value.trim();
		var  property_description=document.getElementById('ckeditor').value.trim();
		var  photo=document.getElementById('photo').value.trim();
				
				if(property_title==''){
				$("#property_titler").html('Please enter property title');
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#namer").html("Please Enter Property Valid Name");	
				return false;
				}
				if(property_builder==''){
				$("#property_builderr").html('Please select builder category');
				return false;
				}
					if(category_id==''){
				$("#category_idr").html('Please select property category');
				return false;
				}
				if(property_residentaily==''){
				$("#property_residentailyr").html('Please select residentail category');
				return false;
				}
				if(property_furnish==''){
				$("#property_furnishr").html('Please select furnished category');
				return false;
				}
				if(property_price==''){
				$("#property_pricer").html('Please enter property price');
				return false;
				}
				if(rooms==''){
				$("#roomsr").html('Please select rooms');
				return false;
				}
				if(area==''){
				$("#arear").html('Please enter area');
				return false;
				}
				if(property_owner_name==''){
				$("#property_owner_namer").html('Please enter property owner name');
				return false;
				}
				if(owner_contact_no==''){
				$("#owner_contact_nor").html('Please enter contact number');
				return false;
				}
				if (!(owner_contact_no.match(mobilenovalidation))) {
				$("#owner_contact_nor").html("Please Enter Property 10 digit valid mobile number");	
				return false;
				}
			    if(city==''){
				$("#cityr").html('Please enter city name');
				return false;
				}
				 if(address_details==''){
				$("#address_detailsr").html('Please enter address details');
				return false;
				}
				/* if(property_description==''){
				$("#property_descriptionr").html('Please property description');
				return false;
				}*/
				if(photo==''){
				$("#lblError").html('Please upload property image');
				return false;
				}
		    $("#proppetpostedd").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/post_your_property",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='post-property';
						return false;
					}
					else {
			         alert('uploaded images limit only 8 images upload at time')
					}
					
				}
			});
			return false;  
		});
			
	}
	$(document).ready(function() {
		  var lblError = document.getElementById("lblError");
	$('#photo').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("photo").value='';
   }
   });
   });
  /* $(document).ready(function() {
		  var lblError = document.getElementById("lblError1");
	$('#img1').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("img1").value='';
   }
   });
   });
   $(document).ready(function() {
		  var lblError = document.getElementById("lblError2");
	$('#img2').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("img2").value='';
   }
   });
   });
   $(document).ready(function() {
		  var lblError = document.getElementById("lblError3");
	$('#img3').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("img3").value='';
   }
   });
   });
    $(document).ready(function() {
		  var lblError = document.getElementById("lblError4");
	$('#img4').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("img4").value='';
   }
   });
   });
   $(document).ready(function() {
		  var lblError = document.getElementById("lblError5");
	$('#img5').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("img5").value='';
   }
   });
   });*/
  /* $('#near_bus_stand').click(function() { 
     if ($(this).is(':checked')) {
        alert("is checked");
		$('#insert_bustand_location').css('display','block');
    } else {
         //$(this).prop('checked',true);
        alert("not checked");
    }
});?*/
 $(document).ready(function() {
$('#near_bus_stand').click(function() {
  if (!$(this).is(':checked')) {
   $('#insert_bustand_location').css('display','none');
   $('#insert_bustand_location').val("");
  }else{
  $('#insert_bustand_location').css('display','block');
  }
});
});
 $(document).ready(function() {
$('#railway_station').click(function() {
  if (!$(this).is(':checked')) {
   $('#insert_railway_station').css('display','none');
   $('#insert_railway_station').val("");
  }else{
  $('#insert_railway_station').css('display','block');
  }
});
});

</script>
<style>
img{ margin-right:10px;}
option{text-align: center;}
select{text-align: center;}
</style>
<?php  ?>
<div class="login-right">
	<div class="container">
		<h3>Post Property</h3>
		<div class="login-top">
			<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Your property post succesfully.. if you can approve this posted property please contact to admin
</div> 

<?php  $this->session->unset_userdata('registrationsucess'); } ?>
				<!--<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>-->
				<div class="form-info">
	<form role="form" method="post"  enctype="multipart/form-data" id="proppetpostedd">
			<div class="form-group">
			  <label>Property Title</label>
			  <input type="text" class="form-control" id="property_title" onchange="property_titler();" name="property_title" />
			  <span id="property_titler" style="color:red;"></span>
			</div>
		<div class="row">
		<div class="col-md-6">
	  <div class="form-group">
          <label>Select Category</label>
          <select class="form-control" id="property_builder" name="property_builder"  onchange="property_builderr();">
		  <?php $cateogoy=$this->db->query("select *from builder_property order by bid asc")->result(); ?>
		  <option value="">Select</option>
		  <?php foreach($cateogoy as  $cat){ ?>
		  <option value="<?php echo $cat->buillder_name; ?>"><?php echo $cat->buillder_name; ?></option>
		  <?php } ?>
		  </select>
		  <span id="property_builderr" style="color:red;"></span>
        </div>
		</div>
		<div class="col-md-6">
	  <div class="form-group">
          <label>List Property For</label>
          <select class="form-control" id="category_id" name="category_id"  onchange="category_idr();">
		  <?php $cateogoy=$this->Admin_Model->get_property_category_details(); ?>
		  <option value="">Select</option>
		  <?php foreach($cateogoy as  $cat){ ?>
		  <option value="<?php echo $cat->pcid; ?>"><?php echo $cat->property_name; ?></option>
		  <?php } ?>
		  </select>
		  <span id="category_idr" style="color:red;"></span>
        </div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-md-6">
	  <div class="form-group">
          <label>Select Property Type</label>
          <select class="form-control" id="property_residentaily" name="property_residentaily"  onchange="property_residentailyr();">
		  <?php $cateogoy=$this->db->query("select *from commercial_property order by cid asc")->result(); ?>
		  <option value="">Select</option>
		  <?php foreach($cateogoy as  $cat){ ?>
		  <option value="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></option>
		  <?php } ?>
		  </select>
		  <span id="property_residentailyr" style="color:red;"></span>
        </div>
		</div>
		
		<div class="col-md-6">
	  <div class="form-group">
          <label>Furnishing</label>
          <select class="form-control" id="property_furnish" name="property_furnish"  onchange="property_furnishr();">
		  <?php $cateogoy=$this->db->query("select *from furnished_property order by fid asc")->result();  ?>
		  <option value="">Select</option>
		  <?php foreach($cateogoy as  $cat){ ?>
		  <option value="<?php echo $cat->name_furnished; ?>"><?php echo $cat->name_furnished; ?></option>
		  <?php } ?>
		  </select>
		  <span id="property_furnishr" style="color:red;"></span>
        </div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
		<div class="form-group">
			 <label>Distance From</label>
		<label class="form-check-inline">
  <input class="form-check-input" type="checkbox"id="near_bus_stand" name="near_bus_stand" value="Bus Stand">   Bus Stand
    <input type="text" class="form-control" name="insert_bustand_location" id="insert_bustand_location"  style="display:none"/>
</label>
</div></div>
<div class="col-md-6">
<div class="form-group">
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="railway_station" name="railway_station" value="Railway Station">  Railway Station
    <input  type="text" class="form-control" id="insert_railway_station" id="insert_railway_station"  style="display:none" />
</label>
</div></div>
</div>
<div class="form-group">
<label>Amenities</label>
<div class="checkbox">
  <label><input type="checkbox" id="amenities1" name="amenities[]" value="">Parking</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Lift" name="amenities[]">Lift</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Water Storage" name="amenities[]">Water Storage</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Security" name="amenities[]">Security</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Park" name="amenities[]">Park</label>
</div>
</div>
	  <!--<div class="row">
	    <label>Distance From</label>
	  <div class="col-md-6">
          <span><input type="checkbox" class="form-control" id="near_bus_stand" name="near_bus_stand[]" value="Bus Stand"> Bus Stand</span>
		  <input type="text" class="form-control" id="insert_bustand_location" id="insert_bustand_location" style="display:none;" />
		  </div>
		  <div class="col-md-6">
		    <span> <input type="checkbox" class="form-control" id="railway_station" name="railway_station" value="Railway Station"> Railway Station</span>
		     <input type="text" class="form-control" id="insert_railway_station" id="insert_railway_station" style="display:none;" />
			 </div>
        </div>-->
		<div class="form-group">
			  <label>Property Price</label>
			 <input type="text" class="form-control" id="property_price" onchange="property_pricer();" name="property_price" />
			  <span id="property_pricer" style="color:red;"></span>
			</div>
		<div class="form-group">
			  <label>Rooms</label>
			   <select class="form-control" id="rooms" onchange="roomsr();" name="rooms">
		             <option value="">Select</option>
					<option value="1 Rooms">1 Rooms</option>
					<option value="2 Rooms">2 Rooms</option>
					<option value="3 Rooms">3 Rooms</option>
					<option value="4 Rooms">4 Rooms</option>
					<option value="5 Rooms">5 Rooms</option>
					<option value="6 Rooms+">6 Rooms+</option>
		  </select>
			 <span id="roomsr" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>Area(sq,ft)</label>
			 <input type="text" class="form-control" id="area" onchange="arear()" name="area">
			  <span id="arear" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>Property Owner Name</label>
			 <input type="text" class="form-control" id="property_owner_name" onchange="property_owner_namer();" name="property_owner_name">
			 <span id="property_owner_namer" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>Property Owner Contact No</label>
			 <input type="text" class="form-control" id="owner_contact_no" onchange="owner_contact_nor()" name="owner_contact_no">
			 <span id="owner_contact_nor" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>Property Owner City</label>
			 <input type="text" class="form-control" onchange="cityr();" id="city" name="city">
			 <span id="cityr" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>Property Locality</label>
			 <textarea type="text" class="form-control" id="address_details" onchange="address_detailsr()" name="address_details"></textarea><br />
			 	<div style="text-decoration:none; overflow:hidden; height:300px; width:100%; max-width:100%;" id="getgooglemaps"><div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=asdfdasfa&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-code" rel="nofollow" href="http://www.interserver-coupons.com" id="make-map-information">http://www.interserver-coupons.com</a><style>#google-maps-canvas .map-generator{max-width: 100%; max-height: 100%; background: none;}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=2cbd0773-49f5-c876-b29f-a61c999156d7&c=google-code&u=1477489972" defer="defer" async="async"></script>
			 <span id="address_detailsr" style="color:red;"></span>
			</div>
			<div class="form-group">
          <label>Upload Property Images mandatory</label>
          <input type="file" id="photo" name="photo[]" multiple="multiple">
		  
		  <span style="color:red;" id="lblError"></span>
		  <div id="dvPreview"></div>
        </div>
        <div class="form-group">
          <label>Property  Description</label>
          <textarea class="ckeditor" id="ckeditor" name="property_description" onchange="ckeditorr();"></textarea>
		   <span id="ckeditorr" style="color:red;"></span>
        </div>
        
		  <!--<div class="form-group">
          <label>Upload Property Images1(optional)</label>
          <input type="file" id="img1" name="img1">
		  <span style="color:red;" id="lblError1"></span>
        </div>
		
		 <div class="form-group">
          <label>Upload Property Images2(optional)</label>
          <input type="file" id="img2" name="img2">
		  <span style="color:red;" id="lblError2"></span>
        </div>
		
		<div class="form-group">
          <label>Upload Property Images3(optional)</label>
          <input type="file" id="img3" name="img3">
		  <span style="color:red;" id="lblError3"></span>
        </div>
		
		<div class="form-group">
          <label>Upload Property Images4(optional)</label>
          <input type="file" id="img4" name="img4">
		  <span style="color:red;" id="lblError4"></span>
        </div>
		
		<div class="form-group">
          <label>Upload Property Images5(optional)</label>
          <input type="file" id="img5" name="img5">
		  <span style="color:red;" id="lblError5"></span>
        </div>-->
        <!--<div class="form-group">
          <label>Upload Gallery Images</label>
          <input type="file" id="gallery_images" name="gallery_images" required>
		  <span style="color:red;" id="lblError"></span>
        </div>-->
        <button type="submit" class="btn btn-primary" onClick="return propertypost()">Property Post</button>
        <button type="reset" class="btn btn-default">Reset</button>
      </form>
				</div>
			
	</div>
</div>
</div>
<?php }else{ ?>
<script>
window.location='<?php echo site_url();?>';
</script>
<?php } ?>