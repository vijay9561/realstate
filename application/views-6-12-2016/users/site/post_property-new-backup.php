<?PHP if($this->session->userdata('UID')) { ?>
<?php  //require_once('adminassets/ckeditor/ckeditor.php'); //ini_set('display_errors', 0); ?><br />

<script type="text/javascript" src="<?php echo base_url(); ?>adminassets/ckeditor/ckeditor.js"></script>
      <link href="<?php echo base_url(); ?>css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <!--<script src="<?php echo base_url(); ?>js/fileinput.js" type="text/javascript"></script>-->
		
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>

             function insertempdata(){
			
			// var form_data = $("#imageuploaduniques"); //form ID
			
				
			
				
				 
				/* if(file_size>2097152) {
				// alert();
				$("#imagesizevalidation").html('File size is greater than 2MB');
			//	document.getElementById("photo").value='';
				return false;
         	 
			  }else{
			 $("#imagesizevalidation").html(' '); 
			  }*/
				var fp = $("#photo");
				var lg = fp[0].files.length; // get length
				var items = fp[0].files;
				var fileSize = 0;
				if (lg > 0) {
				for (var i = 0; i < lg; i++) {
				fileSize = fileSize+items[i].size; // get file size
				}
				if(fileSize > 2097152) {
				$("#imagesizevalidation").html('File size must not be more than 2 MB');
				$('#photo').val('');
				return false;
				}else{
				$("#imagesizevalidation").html(' ');
				}
				}

       var lblError = document.getElementById("lblError");
				
				var myfile= document.getElementById('photo').value;
				var ext = myfile.split('.').pop();
				if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
				// alert('Valid');
				lblError.innerHTML='';
				} else{
				lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
				document.getElementById("photo").value='';
				return false;
				}
			  
			  $("#loading").show(); 
			   
	       var formData = new FormData($("#imageuploaduniques")[0]);
			 //alert(formData); return false;
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/property_temparary_images_upload",
				data : formData,
				processData: false,
				contentType: false,
				type: 'POST',
				success: function(data){
				//alert(data)
				
					if(data==1){
					     $.ajax({
					  	url: "<?php echo site_url(); ?>Users_Controller/get_temp_image_values",
						type: 'POST',
						data: {},
						success: function(data) {
						$("#dataconvasss").fadeOut().html(data).fadeIn('slow');
						$("#loading").fadeOut("slow");
						$('.file-drop-zone-title').css('padding','0px 10px;')
						}
						});
						return false;
				     	}else {
					    
                        alert('uploaded images limit only 8 images upload at time')
					 return false;
					}
					
				}
			});
			return false;  
		
        }
		
		function temimagesdelete(id) {
        var r=confirm('Are you sure you want to delete this image?');
		if(r==true)
		{
		$("#loading").show(); 
        $.ajax({
            url: "<?php echo site_url(); ?>Users_Controller/deletetempitems",
            type: 'POST',
            data: {id: id},
            success: function(data) {
            $("#dataconvasss").fadeOut().html(data).fadeIn('slow');
		   $("#loading").fadeOut("slow");
          }
        });
        return false;
	} else
	{
	   return false;	
     }
    }

		
		      /*  if (typeof (FileReader) != "undefined") {
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
            }*/
   
 
function property_titler(){if($('#property_title').val()==''){}else{ $('#property_titler').html(' '); }}
function category_idr(){if($('#category_id').val()==''){}else{
if($('#category_id').val()=='2'){
$('#depositediv').show();
}else{
$('#depositediv').hide();
 document.getElementById('deposite_price').value = "";
 $('#deposite_negociable ').attr('checked', false); 
}
 $('#category_idr').html(' '); }}
 function deposite_pricer(){ if($('#deposite_price').val()==''){}else{ $('#deposite_pricer').html(' '); }}
function property_pricer(){if($('#property_price').val()==''){}else{ $('#property_pricer').html(' '); }}
function roomsr(){if($('#rooms').val()==''){}else{ $('#roomsr').html(' '); }}
function arear(){if($('#area').val()==''){}else{ $('#arear').html(' '); }}
function property_owner_namer(){if($('#property_owner_name').val()==''){}else{ $('#property_owner_namer').html(' '); }}
function owner_contact_nor(){if($('#owner_contact_no').val()==''){}else{ $('#owner_contact_nor').html(' '); }}
function cityr(){if($('#owner_contact_no').val()==''){}else{ $('#cityr').html(' '); }}
function ckeditorr(){if($('#ckeditor').val()==''){}else{ $('#ckeditorr').html(' '); }}
function brokerage_pricer(){ if($('#brokerage_price').val()==''){ }else { $('#brokerage_pricer').html(' ');} }
function residential_categoryr(){if($('#residential_category').val()==''){}else{
if($('#residential_category').val()=='Shop'){

$("#roomsdivs ").css('display','none');
}else{
$("#roomsdivs ").css('display','block');
}
 $('#residential_categoryr').html(' '); }}
function address_detailsr() {
adddres=document.getElementById('address_details').value.trim();
var  city=document.getElementById('city').value.trim();
$(document).ready(function(){
$.ajax({
url: "<?php echo site_url();?>Users_Controller/get_google_map_details",
type: 'POST',
data: {adddres:adddres,
        city:city,},
success: function(data) {
$("#getgooglemaps").fadeOut().html(data).fadeIn('slow');
}
});
});
if($('#address_details').val()==''){}else{ $('#address_detailsr').html(' '); }}
function property_builderr(){if($('#property_builder').val()==''){}else{
 if($('#property_builder').val()=='Broker'){
$('#brokeragediv').show();
 }else{
 $('#brokeragediv').hide();
  document.getElementById('brokerage_price').value = "";
 $('#brokerage_negociable').attr('checked', false); 
 }
 $('#property_builderr').html(' '); }
 
 }
function property_residentailyr(){if($('#property_residentaily').val()==''){
$("#residentialdive").css('display','none'); 
$("#Furnishingdiv ").css('display','none');
$("#Amenitiesdivs ").css('display','none');
$("#roomsdivs ").css('display','none');
$("#residential_category option[value='Office']").remove();
$("#residential_category option[value='Shop']").remove();
$("#residential_category option[value='Showrooms']").remove();
$("#residential_category option[value='Hotel&Resort']").remove();
$("#residential_category option[value='Apartments']").remove();
$("#residential_category option[value='Houses']").remove();
$("#residential_category option[value='Farm House']").remove();
$("#residential_category option[value='PG Flats']").remove();
$("#residential_category option[value='Space For IT Office']").remove();
$("#residential_category option[value='Bunglow']").remove();
$("#residential_category option[value='Housevilla']").remove();
$("#residential_category option[value='Row Houses']").remove();
$("#residential_category option[value='Guest House']").remove();
$("#residential_category option[value='Duplex']").remove();
$("#residential_category option[value='Godown']").remove();
$("#residential_category option[value='Girls Hostel']").remove();
$("#residential_category option[value='Boys Hostel']").remove();
}else{
if($('#property_residentaily').val()=='Residential Property'){
/*$("#residentialdive").css('display','block'); */
$("#Furnishingdiv ").css('display','block');
$("#Amenitiesdivs ").css('display','block');
$("#roomsdivs ").css('display','block');
$("#residential_category").append(new Option("Apartments", "Apartments"));
$("#residential_category").append(new Option("Houses", "Houses"));
$("#residential_category").append(new Option("Farm House", "Farm House"));
$("#residential_category").append(new Option("PG Flats", "PG Flats"));
$("#residential_category").append(new Option("Bunglow", "Bunglow"));
$("#residential_category").append(new Option("Housevilla", "Housevilla"));
$("#residential_category").append(new Option("Row Houses", "Row Houses"));
$("#residential_category").append(new Option("Guest House", "Guest House"));
$("#residential_category").append(new Option("Duplex", "Duplex"));

$("#residential_category").append(new Option("Girls Hostel", "Girls Hostel"));
$("#residential_category").append(new Option("Boys Hostel", "Boys Hostel"));

$("#residential_category option[value='Office']").remove();
$("#residential_category option[value='Shop']").remove();
$("#residential_category option[value='Showrooms']").remove();
$("#residential_category option[value='Hotel&Resort']").remove();
$("#residential_category option[value='Space For IT Office']").remove();
$("#residential_category option[value='Godown']").remove();
}
if($('#property_residentaily').val()=='Commercial Property'){
$("#residentialdive").css('display','block'); 
$("#Furnishingdiv ").css('display','block');
$("#Amenitiesdivs ").css('display','block');
/*$("#roomsdivs ").css('display','block');*/
$("#residential_category option[value='Apartments']").remove();
$("#residential_category option[value='Houses']").remove();
$("#residential_category option[value='Farm House']").remove();
$("#residential_category option[value='PG Flats']").remove();
$("#residential_category option[value='Bunglow']").remove();
$("#residential_category option[value='Housevilla']").remove();

$("#residential_category option[value='Row Houses']").remove();
$("#residential_category option[value='Guest House']").remove();
$("#residential_category option[value='Duplex']").remove();

//$("#selectBox option[value='option1']").remove();


 $("#residentialdive").css('display','block');
$("#residential_category").append(new Option("Office", "Office"));
$("#residential_category").append(new Option("Shop", "Shop"));
$("#residential_category").append(new Option("Showrooms", "Showrooms"));
$("#residential_category").append(new Option("Hotel&Resort", "Hotel&Resort"));
$("#residential_category").append(new Option("Godown", "Godown"));
$("#residential_category").append(new Option("Space For IT Office", "Space For IT Office"));
}
if($('#property_residentaily').val()=='Land/Plot'){
$("#residentialdive").css('display','none'); 
$("#Furnishingdiv ").css('display','none');
$("#Amenitiesdivs ").css('display','none');
$("#roomsdivs ").css('display','none');
$('#rooms').val("");
$('#residential_category').val("");
$('#property_furnish').val("");
 document.getElementById("amenities1").checked = false;
  document.getElementById("amenities2").checked = false;
   document.getElementById("amenities3").checked = false;
      document.getElementById("amenities4").checked = false;
	        document.getElementById("amenities5").checked = false;
$("#residential_category option[value='Office']").remove();
$("#residential_category option[value='Shop']").remove();
$("#residential_category option[value='Showrooms']").remove();
$("#residential_category option[value='Hotel&Resort']").remove();
$("#residential_category option[value='Apartments']").remove();
$("#residential_category option[value='Houses']").remove();
$("#residential_category option[value='Farm House']").remove();
$("#residential_category option[value='PG Flats']").remove();
$("#residential_category option[value='Space For IT Office']").remove();
$("#residential_category option[value='Bunglow']").remove();
$("#residential_category option[value='Housevilla']").remove();
$("#residential_category option[value='Row Houses']").remove();
$("#residential_category option[value='Guest House']").remove();
$("#residential_category option[value='Duplex']").remove();

$("#residential_category option[value='Godown']").remove();
$("#residential_category option[value='Girls Hostel']").remove();
$("#residential_category option[value='Boys Hostel']").remove();

}
 $('#property_residentailyr').html(' '); 
 }}
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
		var  photo=document.getElementById('photo').value.trim();
			var  address_details=document.getElementById('address_details').value.trim();
		var  property_description=document.getElementById('ckeditor').value.trim();
		var residential_category=document.getElementById('residential_category').value.trim();
		var brokerage_price=document.getElementById('brokerage_price').value.trim();
		var deposite_price=document.getElementById('deposite_price').value.trim();		  	
				if(photo==''){
				$("#lblError").html('Please upload property image');
				 $( "#photo" ).focus();
				return false;
				}
				if(property_title==''){
				$("#property_titler").html('Please enter ad title');
				 $( "#property_title" ).focus();
				return false;
				}
				if (!(property_title.match(namecheck))) {
				$("#property_titler").html("Please Enter Property Valid Name");	
				$("#property_title" ).focus();
				return false;
				}
				if(property_builder==''){
				$("#property_builderr").html('This field is required');
				$("#property_builder" ).focus();
				return false;
				}
					if(category_id==''){
				$("#category_idr").html('This field is required');
				$("#category_id" ).focus();
				return false;
				}
				if(property_residentaily==''){
				$("#property_residentailyr").html('This field is required');
				$("#property_residentaily" ).focus();
				return false;
				}
				if(property_residentaily=='Residential Property' || property_residentaily=='Commercial Property'){
				  if(residential_category==''){
			  $("#residential_categoryr").html("This field is required");
			  $("#residential_category" ).focus();
			  return false;
			  }
				if(property_furnish==''){
				$("#property_furnishr").html('This field is required');
					$("#property_furnish" ).focus();
				return false;
				}
			}
			if(property_residentaily=='Residential Property'){
				if(rooms==''){
				$("#roomsr").html('Please select rooms');
				return false;
				}
			}
				if(property_price==''){
				$("#property_pricer").html('Please enter property price');
				$("#property_price" ).focus();
				return false;
				}
				if(property_builder=='Broker'){
			  if(brokerage_price==''){
			   $('#brokerage_pricer').html('Please enter brokerage amount'); 
			   	$("#brokerage_price" ).focus();
			   return false;
			  }
			}
			if(category_id=='2'){
			 if(deposite_price==''){
			 $('#deposite_pricer').html('Please rent desposite amount'); 
			 $("#deposite_price" ).focus();
			   return false;
			   }
			}
				if(area==''){
				$("#arear").html('Please enter area');
				$("#area" ).focus();
				return false;
				}
				if(property_owner_name==''){
				$("#property_owner_namer").html('Please enter name');
				return false;
				}
				if(owner_contact_no==''){
				$("#owner_contact_nor").html('Please enter contact number');
				$("#owner_contact_no" ).focus();
				return false;
				}
				if (!(owner_contact_no.match(mobilenovalidation))) {
				$("#owner_contact_nor").html("Please Enter 10 digit valid mobile number");	
				$("#owner_contact_no" ).focus();
				return false;
				}
			    if(city==''){
				$("#cityr").html('Please enter city name');
				$("#city" ).focus();
				return false;
				}
				 if(address_details==''){
				$("#address_detailsr").html('Please enter address details');
				$("#address_details" ).focus();
				return false;
				}
				 if(property_description==''){
				$("#ckeditorr").html('Please enter description');
				return false;
				}
			$("#loading").show();	
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
					 $("#loading").show();
						window.location='users-posted-prorperty';
						return false;
						setTimeout(function () {
						$('#loading').hide();
						}, 6000); 
					}
					else {
			         alert('uploaded images limit only 8 images upload at time')
					}
					
				}
			});
			return false;  
		});
			
	}
	function mytempimagedelete(id){
	   alert(id)
	    $.ajax({
            url: "<?php echo site_url(); ?>Users_Controller/delete_temparary_images_particular",
            type: 'POST',
            data: {id:id},
            success: function(data) {
			 alert(data);
          }
        });
	}
	$(document).ready(function(){
	$("#removeallimages").click(function(){
		var categoryname=<?php echo $this->session->userdata('UID'); ?>;
	       $.ajax({
            url: "<?php echo site_url(); ?>Users_Controller/delete_temparary_images",
            type: 'POST',
            data: {categoryname:categoryname},
            success: function(data) {
			// alert(data);
          }
        });

		});
		
	});
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


img-wrap {
    position: relative;
    display: inline-block;
    border: 1px red solid;
    font-size: 0;
}
.img-wrap .close {
   position: absolute;
top: -11px;
right: -8px;
z-index: 9999;
background-color: #16A823;
padding: 3px 3px 6px;
color: #030303;
font-weight: bold;
cursor: pointer;
opacity: .6;
text-align: center;
font-size: 25px;
line-height: 10px;
border-radius: 50%;
}
.img-wrap:hover .close {
    opacity: 1;
}
</style>
<?php  ?>
<div class="login-right">
	<div class="container">
		<h3>Post Ad</h3>
		<div class="login-top">
			<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Your property post succesfully.. if you can approve this posted property please contact to admin
</div> 
<style>
.divzoom{padding: 85px 10px;}
</style>
<?php  $this->session->unset_userdata('registrationsucess'); } ?>
				<!--<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>-->
				<div class="form-group">
          <label>Upload  Multiple Property Images (upto 8 images)<b style="color:#FF0000"> *</b></label>
		    
         
			
            <br>
        <div class="file-preview">
		<div class=" file-drop-zone">
		<div class="file-drop-zone-title divzoom">
		 <div id="dataconvasss" style="width:100%">
		</div>
		</div>
		</div></div>
		<form enctype="multipart/form-data" id="imageuploaduniques" method="post">
			<div tabindex="500" class="btn btn-primary btn-file mydbubttt"><i class="glyphicon glyphicon-folder-open"></i>&nbsp; 
			 <span class="hidden-xs">Upload Images</span> <input type="file" id="photo" name="photo[]" multiple="multiple" onchange="return insertempdata();">
			 </div>
				
				 </form>
		<span id="imagesizevalidation" style="color:red;"></span><br />
		<span style="color:red;" id="lblError"></span>
		</div>
				<div class="form-info">
	<form role="form" method="post"  enctype="multipart/form-data" id="proppetpostedd">
			<div class="form-group">
			  <label>Ad Title <b style="color:#FF0000"> *</b></label>
			  <input type="text" class="form-control" id="property_title" onchange="property_titler();" name="property_title" />
			  <span id="property_titler" style="color:red;"></span>
			</div>
		<div class="row">
		<div class="col-md-6">
	  <div class="form-group">
          <label>I am <b style="color:#FF0000"> *</b></label>
          <select class="form-control" id="property_builder" name="property_builder"  onchange="property_builderr();">
		  <?php $cateogoy=$this->db->query("select *from builder_property order by bid asc")->result(); ?>
		  <option selected="true" style="display:none;" value="" >Select</option>
		  <?php foreach($cateogoy as  $cat){ ?>
		  <option value="<?php echo $cat->buillder_name; ?>"><?php echo $cat->buillder_name; ?></option>
		  <?php } ?>
		  </select>
		  <span id="property_builderr" style="color:red;"></span>
        </div>
		</div>
		<div class="col-md-6">
	  <div class="form-group">
          <label>List Property For <b style="color:#FF0000"> *</b></label>
          <select class="form-control" id="category_id" name="category_id"  onchange="category_idr();">
		  <?php $cateogoy=$this->Admin_Model->get_property_category_details(); ?>
		  <option selected="true" style="display:none;" value="" >Select</option>
		  <?php foreach($cateogoy as  $cat){ ?>
		  <option value="<?php echo $cat->pcid; ?>"><?php echo $cat->property_name; ?></option>
		  <?php } ?>
		  </select>
		  <span id="category_idr" style="color:red;"></span>
        </div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-md-4">
	  <div class="form-group">
          <label>Select Property Type <b style="color:#FF0000"> *</b></label>
          <select class="form-control" id="property_residentaily" name="property_residentaily"  onchange="property_residentailyr();">
		  <?php $cateogoy=$this->db->query("select *from commercial_property order by cid asc")->result(); ?>
		  <option selected="true" style="display:none;" value="" >Select</option>
		  <?php foreach($cateogoy as  $cat){ ?>
		  <option value="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></option>
		  <?php } ?>
		  </select>
		  <span id="property_residentailyr" style="color:red;"></span>
        </div>
		</div>
		<div class="col-md-4">
	  <div class="form-group" style="display:none;" id="residentialdive">
          <label></label>
          <select class="form-control" id="residential_category" name="residential_category"  onchange="residential_categoryr();">
				<option selected="true" style="display:none;" value="" >Select</option>
		  </select>
		  <span id="residential_categoryr" style="color:red;"></span>
        </div>
		</div>
		<div class="col-md-4">
	  <div class="form-group" style="display:none;" id="Furnishingdiv">
          <label>Furnishing <b style="color:#FF0000"> *</b></label>
          <select class="form-control" id="property_furnish" name="property_furnish"  onchange="property_furnishr();">
		  <?php $cateogoy=$this->db->query("select *from furnished_property order by fid asc")->result();  ?>
		  <option selected="true" style="display:none;" value="">Select</option>
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
  <input class="form-check-input" type="checkbox"id="near_bus_stand" name="near_bus_stand" value="Bus Stand">   Bus Stop
    <input type="text" class="form-control" name="insert_bustand_location" id="insert_bustand_location"  style="display:none"/>
</label>
</div></div>
<div class="col-md-6">
<div class="form-group">
<label class="form-check-inline">
  <input class="form-check-input" type="checkbox" id="railway_station" name="railway_station" value="Railway Station">  Railway Station
    <input  type="text" class="form-control" id="insert_railway_station" name="insert_railway_station"  style="display:none" />
</label>
</div></div>
</div>
<div class="form-group" style="display:none" id="Amenitiesdivs">
<label>Amenities</label>
<div class="checkbox">
  <label><input type="checkbox" id="amenities1" name="amenities[]" value="">Parking</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Lift" id="amenities2" name="amenities[]">Lift</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Water Storage" id="amenities3" name="amenities[]">Water Storage</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Security" id="amenities4" name="amenities[]">Security</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Park" id="amenities5" name="amenities[]">Park</label>
</div>
<span id="amenities1r" style="color:red;"></span>
</div>
<input type="hidden" id="defaultamenities1" name="amenities1" value="<?php echo $viewdata[0]->amenities; ?>" />
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
			  <label>Property Price <b style="color:#FF0000"> *</b> <input type="checkbox" id="negotiable" name="negotiable[]" value="Negotiable"> Negotiable</label>
			 <input type="text" class="form-control" id="property_price" onchange="property_pricer();" autocomplete="off" onkeypress="return isNumber(event)" name="property_price" />
			  <span id="property_pricer" style="color:red;"></span>
			</div>
		<div class="form-group" style="display:none" id="roomsdivs">
			  <label>Rooms</label>
			   <select class="form-control" id="rooms" onchange="roomsr();" name="rooms">
		             <option selected="true" style="display:none;" value="" >Select</option>
					<option value="1 Room">1 Room</option>
					<option value="2 Rooms">2 Rooms</option>
					<option value="3 Rooms">3 Rooms</option>
					<option value="4 Rooms">4 Rooms</option>
					<option value="5 Rooms">5 Rooms</option>
					<option value="6 Rooms+">6 Rooms+</option>
		  </select>
			 <span id="roomsr" style="color:red;"></span>
			</div>
			<div class="form-group" style="display:none" id="brokeragediv">
			  <label>Brokerage <b style="color:#FF0000"> *</b> <input type="checkbox" id="brokerage_negociable" name="brokerage_negociable[]" value="Negotiable"> Negotiable</label>
			 <input type="text" class="form-control" id="brokerage_price" onchange="brokerage_pricer();" autocomplete="off" onkeypress="return isNumber(event)" name="brokerage_price" />
			  <span id="brokerage_pricer" style="color:red;"></span>
			</div>
			
			<div class="form-group" style="display:none" id="depositediv">
			  <label>Deposit <b style="color:#FF0000"> *</b> <input type="checkbox" id="deposite_negociable" name="deposite_negociable[]" value="Negotiable"> Negotiable</label>
			 <input type="text" class="form-control" id="deposite_price" onchange="deposite_pricer();" autocomplete="off" onkeypress="return isNumber(event)" name="deposite_price" />
			  <span id="deposite_pricer" style="color:red;"></span>
			</div>
			
			<div class="form-group">
			  <label>Area(sq.ft.) <b style="color:#FF0000"> *</b></label>
			 <input type="text" class="form-control" id="area" onchange="arear()"  onkeypress="return isNumber(event)" autocomplete="off" name="area">
			  <span id="arear" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>Name <b style="color:#FF0000"> *</b></label>
			 <input type="text" class="form-control" id="property_owner_name" onchange="property_owner_namer();" name="property_owner_name">
			 <span id="property_owner_namer" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>Contact Number <b style="color:#FF0000"> *</b></label>
			 <input type="text" class="form-control" id="owner_contact_no" onchange="owner_contact_nor()" name="owner_contact_no">
			 <span id="owner_contact_nor" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>City <b style="color:#FF0000"> *</b></label>
			 <input type="text" class="form-control" onchange="cityr();" id="city" name="city">
			 <span id="cityr" style="color:red;"></span>
			</div>
			<div class="form-group">
			  <label>Locality <b style="color:#FF0000"> *</b></label>
			 <input class="form-control" id="address_details" onchange="address_detailsr()" name="address_details" maxlength="100" >
			
			 	 <span id="address_detailsr" style="color:red;"></span>
			 <br />
			 	<div style="text-decoration:none; overflow:hidden; height:300px; width:100%; max-width:100%;" id="getgooglemaps"><div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=aurangabad&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-code" rel="nofollow" href="http://www.interserver-coupons.com" id="make-map-information">http://www.interserver-coupons.com</a><style>#google-maps-canvas .map-generator{max-width: 100%; max-height: 100%; background: none;}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=2cbd0773-49f5-c876-b29f-a61c999156d7&c=google-code&u=1477489972" defer="defer" async="async"></script>
		
			</div>
			
		  
		  
		  <div id="dvPreview"></div>
        </div>
        <div class="form-group">
          <label>Description <b style="color:#FF0000"> *</b></label>
          <textarea class="form-control" id="ckeditor" name="property_description" onchange="ckeditorr();" rows="10" maxlength="500" style="resize:none"></textarea>
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
        <button type="submit" class="btn btn-primary mydbubttt" onClick="return propertypost()">Submit Ad</button>
    <!--    <button type="reset" class="btn btn-default">Reset</button>-->
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

	</script>
	<script>

$(document).ready(function(){
              $("#address_details").autocomplete({
                     source: "<?php echo site_url() ?>Users_Controller/autosearch_recors",
                     minLength: 1,
                    select: function(event, data) {
                     $("#address_details").val(data.item.value);
                    },
                });
           });	
</script>
