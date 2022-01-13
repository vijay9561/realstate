<?PHP if($this->session->userdata('UID')) { ?>
<?php  //require_once('adminassets/ckeditor/ckeditor.php'); //ini_set('display_errors', 0); ?><br />
<?php //$category=$this->db->query("select *from main_category where mid='".$_GET['category']."'")->result(); ?>
<?php    $id=$this->uri->segment(2); $viewdata=$this->db->query("select *from property_post where pid='$id'")->result(); 
$category=$this->db->query("select *from main_category where mid='".$viewdata[0]->main_categories_id."'")->result(); 
       ?>
<script type="text/javascript" src="<?php echo base_url(); ?>adminassets/ckeditor/ckeditor.js"></script>
      <link href="<?php echo base_url(); ?>css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <!--<script src="<?php echo base_url(); ?>js/fileinput.js" type="text/javascript"></script>-->
		
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
</script>
<script>

	
		 $(document).ready(function() {
$('#parking_type_one').click(function() {
  if (!$(this).is(':checked')) {
   $('#openparkingtypw').css('display','none');
   document.getElementById('parking_squate_foot').value='';
	document.getElementById('parking_bike_capcity').value='';
  }else{
  $('#openparkingtypw').css('display','block');
  }
});
});
 $(document).ready(function() {
$('#parking_type_tow').click(function() {
  if (!$(this).is(':checked')) {
    $('#openparkingtypw').css('display','none');
	document.getElementById('parking_squate_foot').value='';
	document.getElementById('parking_bike_capcity').value='';
  }else{
  $('#openparkingtypw').css('display','none');
  }
});
});
	function human_temple_distancer(){if($('#human_temple_distance').val()==''){}else{ $('#human_temple_distancer').html(' '); }}		
	
function property_subcategoryr(){
var middd=document.getElementById('mainhiddencategory').value.trim();	
var property_subcategory=document.getElementById('property_subcategory').value.trim();	
if($('#property_subcategory').val()=='') {}else {
              if(middd==8){
                      var property_subcategory=document.getElementById('property_subcategory').value.trim();
                       $.ajax({
					  	url: "<?php echo site_url(); ?>Users_Controller/temp_sub_sub_category",
						type: 'POST',
						data: {property_subcategory:property_subcategory},
						success: function(data) {
						$("#getsu_sub_sub_category").fadeOut().html(data).fadeIn('slow');
					}
});
}else if(($('#property_subcategory').val()=='21') || ($('#property_subcategory').val()=='23') || ($('#property_subcategory').val()=='25') || ($('#property_subcategory').val()=='24') || ($('#property_subcategory').val()=='92') || ($('#property_subcategory').val()=='330')) {
$("#yearhide").hide();
$("#kmhide").hide();
$("#hidmodelnumbers").hide();
$("#hidehanumantemplatedistance").show();
$("#loan_typehide").css('display','block');
$("#school_name_hide").hide();
$("#hide_school_pattern").hide();
$("#dept_type_hide").hide();
$("#school_medium_hide").hide();
$("#bus_route_hide").hide();
$("#displaynonebyis").hide();
		var property_subcategory=document.getElementById('property_subcategory').value.trim();
		$.ajax({
		url: "<?php echo site_url(); ?>Users_Controller/temp_bran_name",
		type: 'POST',
		data: {property_subcategory:property_subcategory},
		success: function(data) {
		$("#getsu_sub_sub_category").fadeOut().html(data).fadeIn('slow');
		}
		});

}else if($('#property_subcategory').val()=='188'){
$("#kmhide").hide();
var property_subcategory=document.getElementById('property_subcategory').value.trim();
		$.ajax({
		url: "<?php echo site_url(); ?>Users_Controller/bike_bran_names",
		type: 'POST',
		data: {property_subcategory:property_subcategory},
		success: function(data) {
		$("#temp_brand_name_viewed").fadeOut().html(data).fadeIn('slow');
		}
});
}else if($('#property_subcategory').val()=='140'){
$("#school_name_hide").show();
$("#hide_school_pattern").show();
$("#dept_type_hide").show();
$("#school_medium_hide").show();
$("#bus_route_hide").hide();
$("#loan_typehide").css('display','none');
}
else if(($('#property_subcategory').val()=='399') ||  ($('#property_subcategory').val()=='139') || ($('#property_subcategory').val()=='400') ){
$("#school_name_hide").show();
$("#bus_route_hide").show();
$("#hide_school_pattern").hide();
$("#dept_type_hide").hide();
$("#school_medium_hide").hide();
$("#loan_typehide").css('display','none');
}
else if($('#property_subcategory').val()=='95'){
$("#kmhide").show();
var property_subcategory=document.getElementById('property_subcategory').value.trim();
		$.ajax({
		url: "<?php echo site_url(); ?>Users_Controller/bike_bran_names",
		type: 'POST',
		data: {property_subcategory:property_subcategory},
		success: function(data) {
		$("#temp_brand_name_viewed").fadeOut().html(data).fadeIn('slow');
		}
		});

}
else{
$("#hidehanumantemplatedistance").hide();
$("#yearhide").show();
$("#kmhide").show();
$("#hidmodelnumbers").show();
$("#displaynonebyis").show();
$("#loan_typehide").hide();
$("#school_name_hide").hide();
$("#hide_school_pattern").hide();
$("#dept_type_hide").hide();
$("#school_medium_hide").hide();
$("#bus_route_hide").hide();
var property_subcategory=document.getElementById('property_subcategory').value.trim();
		$.ajax({
		url: "<?php echo site_url(); ?>Users_Controller/temp_bran_name",
		type: 'POST',
		data: {property_subcategory:property_subcategory},
		success: function(data) {
		$("#getsu_sub_sub_category").fadeOut().html(data).fadeIn('slow');
		}
		});
}
 $('#property_subcategoryr').html(''); } }
function property_owner_namer(){if($('#property_owner_name').val()==''){}else{ $('#property_owner_namer').html(' '); }}
function owner_contact_nor(){if($('#owner_contact_no').val()==''){}else{ $('#owner_contact_nor').html(' '); }}
function property_pricer(){if($('#property_price').val()==''){}else{ $('#property_pricer').html(' '); }}
function cityr(){if($('#owner_contact_no').val()==''){}else{ $('#cityr').html(' '); }}
function ckeditorr(){if($('#ckeditor').val()==''){}else{ $('#ckeditorr').html(' '); }}
function loan_typer(){if($('#loan_type').val()==''){}else{ $('#loan_typer').html(' '); }}
function arear(){if($('#area').val()==''){}else{ $('#arear').html(' '); }}
 function address_detailsr(){ if($('#address_details').val()==''){ }else 
  {
  adddres=document.getElementById('address_details').value.trim();
  city=document.getElementById('city').value.trim();
$(document).ready(function(){
$.ajax({
url: "<?php echo site_url();?>Users_Controller/get_google_map_details?adddres",
type: 'POST',
data: {adddres:adddres,city:city},
success: function(data) {
$("#getgooglemaps").fadeOut().html(data).fadeIn('slow');
}
});
});

   $('#address_detailsr').html(' ');} }
      function water_storage_capcityr(){if($('#water_storage_capcity').val()==''){}else{ $('#water_storage_capcityr').html(' '); }}
   function property_titler(){if($('#property_title').val()==''){}else{ $('#property_titler').html(' '); }}
   function car_namer(){if($('#car_name').val()==''){}else{ $('#car_namer').html(' '); }}
    function car_yearr(){if($('#car_year').val()==''){}else{ $('#car_yearr').html(' '); }}
	    function car_fuelr(){if($('#car_fuel').val()==''){}else{ $('#car_fuelr').html(' '); }}
		function killometerdrivenr(){if($('#killometerdriven').val()==''){}else{ $('#killometerdrivenr').html(' '); }}
		function car_mdoel_namer(){if($('#car_mdoel_name').val()==''){}else{ $('#car_mdoel_namer').html(' '); }}
		function store_namer(){if($('#store_name').val()==''){}else{ $('#store_namer').html(' '); }}
		function offer_namer(){if($('#offer_name').val()==''){}else{ $('#offer_namer').html(' '); }}
		function school_namer(){if($('#school_name').val()==''){}else{ $('#school_namer').html(' '); }}
		function school_patternr(){if($('#school_pattern').val()==''){}else{ $('#school_patternr').html(' '); }}
		function dept_typer(){if($('#dept_type').val()==''){}else{ $('#dept_typer').html(' '); }}
		function school_mediumr(){if($('#school_medium').val()==''){}else{ $('#school_mediumr').html(' '); }}
		function root_numr(){if($('#root_num').val()==''){}else{ $('#root_numr').html(' '); }}
		
		function offer_typer(){if($('#offer_type').val()==''){}else{ $('#offer_typer').html(' '); }}
		function allmostliker(){if($('input:radio[name=allmostlike]').is(':checked')){
         $("#allmostliker").html("");	
				}else{
				}
			}
	function delartyper(){
	if($('input:radio[name=delartype]').is(':checked')){
         $("#delartyper").html("");	
				}else{
				}
	}
function hall_facilityr(){
if($('input:radio[name=hall_facility]').is(':checked')){
         $("#hall_facilityr").html("");	
				}else{
				}
	}
function hall_decorater(){
if($('input:radio[name=hall_decorate]').is(':checked')){
         $("#hall_decorater").html("");	
				}else{
				}
	}
function single_room_typer(){
	if(document.getElementById("single_room_type1").checked==true || document.getElementById("single_room_type2").checked==true || document.getElementById("single_room_type3").checked==true ){ $("#single_room_typer").html(""); }else{
        	
				}
	}
function amenitiesr(){
     if(document.getElementById("amenities1").checked==true || document.getElementById("amenities2").checked==true || document.getElementById("amenities3").checked==true || document.getElementById("amenities4").checked==true  || document.getElementById("amenities5").checked==true){	
	 $("#amenitiesr").html(" ");	
                 }else{
	}
}
function propertypost(){
        var namecheck = /[A-Za-z]+$/;      
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var numbermatch= /^[1-9]\d{0,10}(?:\.\d)?$|^0\.[1-9]$/;
		var mobilenovalidation=/^\d{10}$/;
		var positvenumber=/[0-9 -()+]+$/;
		var chequeno=/^\d{6,14}$/;
		var digitno=/[0-9 -()+]+$/;
	
		
		//var  property_title=document.getElementById('property_title').value.trim();
		
				var  property_owner_name=document.getElementById('property_owner_name').value.trim();
		var  owner_contact_no=document.getElementById('owner_contact_no').value.trim();
		var  city=document.getElementById('city').value.trim();
			var  address_details=document.getElementById('address_details').value.trim();
		var  property_description=document.getElementById('ckeditor').value.trim();
		var property_subcategory=document.getElementById('property_subcategory').value.trim(); 
		var middd=document.getElementById('mainhiddencategory').value.trim();	
				if(property_subcategory==''){
				$("#property_subcategoryr").html('Please select subcategory');
				 $( "#property_subcategory" ).focus();
				return false;
				}
				if(property_subcategory=='140' || property_subcategory=='399' || property_subcategory=='139' || property_subcategory=='400'){
				}else{
				var  property_title=document.getElementById('property_title').value.trim();
				if(property_title==''){
				$("#property_titler").html('Please enter ad title');
				 $( "#property_title" ).focus();
				return false;
				}
			}
				if(middd==6){
			
		   var car_name=document.getElementById('car_name').value.trim();
				var car_year=document.getElementById('car_year').value.trim();
				var car_fuel=document.getElementById('car_fuel').value.trim();
				var killometerdriven=document.getElementById('killometerdriven').value.trim();
				var car_year=document.getElementById('car_year').value.trim();
				if(car_name==''){
				$("#car_namer").html('Please select brand name');
				$("#car_name" ).focus();
				return false;
				}
				if(car_fuel==''){
				$("#car_fuelr").html('please select fuel type');
				$("#car_fuel" ).focus();
				return false;
				}
				if(property_subcategory==330){
				document.getElementById('killometerdriven').value='';
				document.getElementById('car_year').value='';
				}else{
				if(car_year==''){
				$("#car_yearr").html('Please enter car purches year');
				$("#car_year" ).focus();
				return false;
				}
				if (!(car_year.match(digitno))) {
				$("#car_yearr").html("Please enter only digit");	
				$("#car_year" ).focus();
				return false;
				}
				
				if(killometerdriven==''){
				$("#killometerdrivenr").html('Please enter Kms driven');
				$("#killometerdrivenr" ).focus();
				return false;
				}
				if($('input:radio[name=delartype]').is(':checked')){
				}else{
				$("#delartyper").html("Please choose Saler Type");	
				return false;
				}
				}
			}	
				if(middd==7){
		  var car_name=document.getElementById('car_name').value.trim();
	//	var car_mdoel_name=document.getElementById('car_mdoel_name').value.trim();
				var car_year=document.getElementById('car_year').value.trim();
			
				var killometerdriven=document.getElementById('killometerdriven').value.trim();
				if(car_name==''){
				$("#car_namer").html('Please select brand name');
				$("#car_name" ).focus();
				return false;
				}
				
				if(car_year==''){
				$("#car_yearr").html('Please enter purchase year');
				$("#car_year" ).focus();
				return false;
				}
				if (!(car_year.match(digitno))) {
				$("#car_yearr").html("Please enter only digit");	
				$("#car_year" ).focus();
				return false;
				}
				if(property_subcategory==188){}else{
				if(killometerdriven==''){
				$("#killometerdrivenr").html('Please enter Kms driven');
				$("#killometerdrivenr" ).focus();
				return false;
				}
			}
		}
				
				if(middd==10){
				
		      // var car_mdoel_name=document.getElementById('car_mdoel_name').value.trim();
				var car_year=document.getElementById('car_year').value.trim();
			  var car_name=document.getElementById('car_name').value.trim();   
				var killometerdriven=document.getElementById('killometerdriven').value.trim();
				if(property_subcategory==21 || property_subcategory==23){
				if(car_name==''){
				$("#car_namer").html('Please select brand name');
				$("#car_name" ).focus();
				return false;
				}
				}else{
				if(car_name==''){
				$("#car_namer").html('Please select brand name');
				$("#car_name" ).focus();
				return false;
				}
				if(car_year==''){
				$("#car_yearr").html('Please enter  purchase year');
				$("#car_year" ).focus();
				return false;
				}
				if (!(car_year.match(digitno))) {
				$("#car_yearr").html("Please enter only digit");	
				$("#car_year" ).focus();
				return false;
				}
				if(killometerdriven==''){
				$("#killometerdrivenr").html('Please enter Kms driven');
				$("#killometerdrivenr" ).focus();
				return false;
				}
				}
			}
				if(middd==8){
				 var car_name=document.getElementById('car_name').value.trim();
		var car_mdoel_name=document.getElementById('car_mdoel_name').value.trim();
		
		     	if($('input:radio[name=allmostlike]').is(':checked')){
				}else{
				$("#allmostliker").html("Please choose condition");	
				return false;
				}
				if(car_name==''){
				$("#car_namer").html('Please select brand name');
				$("#car_name" ).focus();
				return false;
				}
				}
			
			if(middd==9){
				if($('input:radio[name=allmostlike]').is(':checked')){
				}else{
				$("#allmostliker").html("Please choose condition");	
				return false;
				}
			}
			
			if(middd==5){
				if($('input:radio[name=allmostlike]').is(':checked')){
				}else{
				$("#allmostliker").html("Please choose condition");	
				return false;
				}
			}
			if(middd==11){
				if($('input:radio[name=allmostlike]').is(':checked')){
				}else{
				$("#allmostliker").html("Please choose consultance name");	
				return false;
				}
			}
			
			
				if(middd==7 || middd==8 || middd==9 || property_subcategory==20 || property_subcategory==22){
				if($('input:radio[name=delartype]').is(':checked')){
				}else{
				$("#delartyper").html("Please choose Saler Type");	
				return false;
				}
			}
			
			
				if(middd==12){
			var  area=document.getElementById('area').value.trim();
		     var car_mdoel_name=document.getElementById('car_mdoel_name').value.trim();
			   var water_storage_capcity=document.getElementById('water_storage_capcity').value.trim();
				
				if($('input:radio[name=hall_facility]').is(':checked')){
				}else{
				$("#hall_facilityr").html("Please choose hall facility");	
				return false;
				}
				if($('input:radio[name=hall_decorate]').is(':checked')){
				}else{
				$("#hall_decorater").html("Please choose hall decorate type");	
				return false;
				}
				if(area==''){
				$("#arear").html('Please enter area');
				$("#area" ).focus();
				return false;
				}
				if(water_storage_capcity==''){
				$("#water_storage_capcityr").html('Please enter water storage capcity');
				$("#water_storage_capcity" ).focus();
				return false;
				}
				if (!(water_storage_capcity.match(digitno))) {
				$("#water_storage_capcityr").html("Please enter only digit");	
				$("#water_storage_capcity" ).focus();
				return false;
				}
				if(car_mdoel_name==''){
				$("#car_mdoel_namer").html('Please enter public capacity');
				$("#car_mdoel_name" ).focus();
				return false;
				}
				if(property_subcategory==25 || property_subcategory==25){
				
				  var human_temple_distance=document.getElementById('human_temple_distance').value.trim();
				  if(human_temple_distance==''){
				$("#human_temple_distancer").html('Please enter temple distance');
				$("#human_temple_distance" ).focus();
				return false;
				}
				}
				}
				
		if(middd==14){
			 if(document.getElementById("amenities1").checked==true || document.getElementById("amenities2").checked==true || document.getElementById("amenities3").checked==true || document.getElementById("amenities4").checked==true  || document.getElementById("amenities5").checked==true){	
                 }else{
				$("#amenitiesr").html("Please select hall facility");	
				return false;
				}
				 
	if(document.getElementById("single_room_type1").checked==true || document.getElementById("single_room_type2").checked==true || document.getElementById("single_room_type3").checked==true ){	
	}else{
	$('#single_room_typer').html("please select room type");
	return false;
	}
		
	}
	
	if(middd==16){
				var car_name=document.getElementById('car_name').value.trim();
				var store_name=document.getElementById('store_name').value.trim();
				var offer_name=document.getElementById('offer_name').value.trim();
				var offer_type=document.getElementById('offer_type').value.trim();
				if(car_name==''){
				$("#car_namer").html('Please enter product name');
				$("#car_name" ).focus();
				return false;
				}
				if(store_name==''){
				$("#store_namer").html('Please enter store name');
				$("#store_name" ).focus();
				return false;
				}
				if(offer_name==''){
				$("#offer_namer").html('Please enter offer name');
				$("#offer_name" ).focus();
				return false;
				}
				if(offer_type==''){
				$("#offer_typer").html('Please select offer type');
				$("#offer_type" ).focus();
				return false;
				}
				}
				
				if(middd==4 || middd==11 || middd==14 || middd==3 || middd==14 || middd==13 || middd==12 || middd==16){
				//return true;
				}else{
				var  property_price=document.getElementById('property_price').value.trim();
				if(property_price==''){
				$("#property_pricer").html('Please enter price');
				$("#property_price" ).focus();
				return false;
				}
			}
				
				if(property_subcategory==92){
			  var loan_type=document.getElementById('loan_type').value.trim();
			  if(loan_type==''){
			   $("#loan_typer").html('Please select loan type');
				$("#loan_type").focus(); 
				return false;
			  }
			}
				
				if(property_subcategory==92){
			  var loan_type=document.getElementById('loan_type').value.trim();
			  if(loan_type==''){
			   $("#loan_typer").html('Please select loan type');
				$("#loan_type").focus(); 
				return false;
			  }
			}
			if(property_subcategory==140){
			  var school_name=document.getElementById('school_name').value.trim();
			  var school_pattern=document.getElementById('school_pattern').value.trim();
			  var dept_type=document.getElementById('dept_type').value.trim();
			    var school_medium=document.getElementById('school_medium').value.trim();
				
			  if(school_name==''){
			   $("#school_namer").html('Please enter school name');
				$("#school_name").focus(); 
				return false;
			  }
			  if(school_pattern==''){
			   $("#school_patternr").html('Please select school pattern');
				$("#school_pattern").focus(); 
				return false;
			  }
			    if(dept_type==''){
			   $("#dept_typer").html('Please select school department');
				$("#dept_type").focus(); 
				return false;
			  }
			   if(school_medium==''){
			   $("#school_mediumr").html('Please select medium of school');
				$("#school_medium").focus(); 
				return false;
			  }
			}
			
			if(property_subcategory==139 || property_subcategory==399 || property_subcategory==400){
		 var school_name=document.getElementById('school_name').value.trim();
		  var root_num=document.getElementById('root_num').value.trim();
		   if(school_name==''){
			   $("#school_namer").html('Please enter school name');
				$("#school_name").focus(); 
				return false;
			  }
			  
			   if(root_num==''){
			   $("#root_numr").html('Please enter route name');
				$("#root_num").focus(); 
				return false;
			  }
		}
			
		if(property_owner_name==''){
				$("#property_owner_namer").html('Please enter name');
				return false;
				}
				if (!(property_owner_name.match(namecheck))) {
				$("#property_owner_namer").html("Please enter valid name");	
				$("#property_owner_name" ).focus();
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
				if (!(city.match(namecheck))) {
				$("#cityr").html("Please enter valid city name");	
				$("#city" ).focus();
				return false;
				}
				 if(address_details==''){
				$("#address_detailsr").html('Please  select locality');
				$("#address_details" ).focus();
				return false;
				}
				 if(property_description==''){
				$("#ckeditorr").html('Please enter description');
				return false;
				}
		//	$("#loading").show();	
			$("#loaderimages").show();
		    $("#proppetpostedd").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/update_my_other_property",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='<?php echo site_url();?>users-posted-prorperty';
						return false; 
					}
					else {
					$('#loading').hide();
			         alert('uploaded images limit only 8 images upload at time')
					}
					
				}
			});
			return false;  
		});
			
	}

</script>

<style>
img{ margin-right:10px;}
option{text-align: center;}
select{text-align: center;}
</style>
<?php  ?>
<div class="login-right">
	<div class="container">
		<h3>Update Your Ad</h3>
		<div class="login-top">
			<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Your property post succesfully.. if you can approve this posted property please contact to admin
</div> 
<style>
.divzoom{padding: 85px 10px;}
</style>
<?php  $this->session->unset_userdata('registrationsucess'); } ?>

				<div class="form-info">
				<form role="form" method="post"  enctype="multipart/form-data" id="proppetpostedd">
				
				<div class="form-group">
				<label>Category <b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="property_category" value="<?php echo $category[0]->category_name; ?>"  readonly="true" name="property_category" />
				<input type="hidden" id="mainhiddencategory" name="mainhiddencategory" value="<?php echo $category[0]->mid; ?>" />
				<span id="property_categoryr" style="color:red;"></span>
				</div>
				
				<div class="form-group">
				<?php $subcategory=$this->db->query("select *from subcategory where mid='".$viewdata[0]->main_categories_id."'  order by category_name asc")->result();
				 $submenus=$this->db->query("select *from subcategory where scid='".$viewdata[0]->category_id."'")->result();
				 ?>
				<label>Sub Category <b style="color:#FF0000"> *</b></label>
				<select type="text" class="form-control" id="property_subcategory" onchange="property_subcategoryr();" value="<?php echo $category[0]->category_name; ?>"   name="property_subcategory">
				<option  selected value="<?php echo $viewdata[0]->category_id; ?>"><?php  echo  $submenus[0]->category_name; ?></option>
				<?php foreach($subcategory as $rows11) { if( $viewdata[0]->category_id!=$rows11->scid){ ?>
				<option disabled value="<?php echo $rows11->scid; ?>"><?php echo $rows11->category_name; ?></option>
				<?php } }?>
				</select>
				<span id="property_subcategoryr" style="color:red;"></span>
				</div>
				<?php if($viewdata[0]->category_id==140 || $viewdata[0]->category_id==399 || $viewdata[0]->category_id==139 || $viewdata[0]->category_id==400){?> 
				<input type="hidden" value="<?php echo $viewdata[0]->pid; ?>" id="propertypostid"  name="propertypostid" /> 
				<input type="hidden" class="form-control" id="property_title"  maxlength="150" onchange="property_titler();" name="property_title" />
				<?php }else{ ?>
				<div class="form-group">
				<label>Ad Title <b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="property_title" value="<?php echo $viewdata[0]->property_title; ?>" maxlength="150" onchange="property_titler();" name="property_title" />
				<input type="hidden" value="<?php echo $viewdata[0]->pid; ?>" id="propertypostid"  name="propertypostid" />
				<span id="property_titler" style="color:red;"></span>
				</div>
				<?php } ?>
				
				<?php if($category[0]->mid=='9') { ?>
				<div class="form-group">
          <label for="radio3">Condition<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="allmostlike1" name="allmostlike" onchange="allmostliker()" <?php if($viewdata[0]->furniture_condtion=='Almost like new'){ echo 'checked'; } else { echo ''; }?> value="Almost like new" />
          <label for="radio4">Almost like new</label>
          <input type="radio"  id="allmostlike2" name="allmostlike"  onchange="allmostliker()" value="Gentaly Used"  <?php if($viewdata[0]->furniture_condtion=='Gentaly Used'){ echo 'checked'; } else { echo ''; }?> />
          <label for="radio5">Gentaly Used</label>
          <input type="radio" id="allmostlike3" name="allmostlike" onchange="allmostliker()"  value="Heavily used"  <?php if($viewdata[0]->furniture_condtion=='Heavily used'){ echo 'checked'; } else { echo ''; }?>/>
          <label for="radio6">Heavily used</label>
          <span id="allmostliker" style="color:red;"></span> </div>
				<?php } ?>
				
				<?php if($category[0]->mid=='11') { ?>
				<div class="form-group">
          <label for="radio3">Consultance Name<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="allmostlike1" name="allmostlike" onchange="allmostliker()" value="Company" <?php if($viewdata[0]->furniture_condtion=='Company'){ echo 'checked'; } else { echo ''; }?> />
          <label for="radio4">Company</label>
          <input type="radio"  id="allmostlike2" name="allmostlike"  onchange="allmostliker()" value="Placements / Consultancy" <?php if($viewdata[0]->furniture_condtion=='Placements / Consultancy'){ echo 'checked'; } else { echo ''; }?> />
          <label for="radio5">Placements / Consultancy</label>
          <span id="allmostliker" style="color:red;"></span> </div>
				<?php } ?>
				
				<?php if($category[0]->mid=='5') { ?>
				<div class="form-group">
          <label for="radio3">Tution Type<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="allmostlike1" name="allmostlike" onchange="allmostliker()" value="Class tution" <?php if($viewdata[0]->furniture_condtion=='Class tution'){ echo 'checked'; } else { echo ''; }?> />
          <label for="radio4">Class tution</label>
          <input type="radio"  id="allmostlike2" name="allmostlike"  onchange="allmostliker()" value="Home tution" <?php if($viewdata[0]->furniture_condtion=='Home tution'){ echo 'checked'; } else { echo ''; }?> />
          <label for="radio5">Home tution</label>
          <span id="allmostliker" style="color:red;"></span> </div>
				<?php } ?>
				<?php if($category[0]->mid=='8') { ?>
				<div class="form-group">
          <label for="radio3">Condition<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="allmostlike1" name="allmostlike" onchange="allmostliker()" <?php if($viewdata[0]->furniture_condtion=='Almost like new'){ echo 'checked'; } else { echo ''; }?> value="Almost like new" />
          <label for="radio4">Almost like new</label>
          <input type="radio"  id="allmostlike2" name="allmostlike"  onchange="allmostliker()" <?php if($viewdata[0]->furniture_condtion=='Gentaly Used'){ echo 'checked'; } else { echo ''; }?> value="Gentaly Used" />
          <label for="radio5">Gentaly Used</label>
          <input type="radio" id="allmostlike3" name="allmostlike" onchange="allmostliker()" <?php if($viewdata[0]->furniture_condtion=='Heavily used'){ echo 'checked'; } else { echo ''; }?>  value="Heavily used" />
          <label for="radio6">Heavily used</label>
          <span id="allmostliker" style="color:red;"></span> </div>
				
				<div class="form-group"  id="getsu_sub_sub_category">
					<label>Brand Name<b style="color:#FF0000"> *</b></label>
				<select type="text" class="form-control" id="car_name" onchange="car_namer();" name="car_name">
				<option value="<?php echo $viewdata[0]->car_name; ?>"><?php echo $viewdata[0]->car_name; ?></option>
					<?php $brandname1=$this->db->query("select name from electronic_master order by name asc")->result(); 
					foreach($brandname1 as $brandname){ if($viewdata[0]->car_name!=$brandname->name){ ?>
				<option value="<?php echo $brandname->name; ?>"><?php echo $brandname->name; ?></option>
				<?php } } ?>
				</select>
				<span id="car_namer" style="color:red;"></span>
				</div>
				<div class="form-group">
				<label>Model(optional)</label>
				<input type="text" class="form-control" id="car_mdoel_name" value="<?php echo $viewdata[0]->model; ?>" onchange="car_mdoel_namer();" name="car_mdoel_name">
				<span id="car_mdoel_namer" style="color:red;"></span>
				</div>
				<?php } ?>
				<?php if($category[0]->mid=='6') {?>
				<div class="form-group" id="getsu_sub_sub_category">
					<label>Brand Name<b style="color:#FF0000"> *</b></label>
				<select type="text" class="form-control" id="car_name" onchange="car_namer();" name="car_name">
				<option value="<?php echo $viewdata[0]->car_name; ?>"><?php echo $viewdata[0]->car_name; ?></option>
					<?php $brandname1=$this->db->query("select car_name from car_master order by car_name asc")->result(); 
					foreach($brandname1 as $brandname){ if($viewdata[0]->car_name!=$brandname->car_name){ ?>
				<option value="<?php echo $brandname->car_name; ?>"><?php echo $brandname->car_name; ?></option>
				<?php } } ?>
				</select>
				<span id="car_namer" style="color:red;"></span>
				</div>
				<div class="form-group">
				<label>Fuel<b style="color:#FF0000"> *</b></label>
				<select type="text" class="form-control" id="car_fuel" onchange="car_fuelr();" name="car_fuel"  value="<?php echo $viewdata[0]->fuel; ?>">
				<option value="<?php echo $viewdata[0]->fuel; ?>"><?php echo $viewdata[0]->fuel; ?></option>
				<option value="Petrol">Petrol</option>
				<option value="Diesel">Diesel</option>
				<option value="LPG">LPG</option>
				<option value="CNG & Hybrids">CNG & Hybrids</option>
				</select>
				<span id="car_fuelr" style="color:red;"></span>
				</div>
				<?php if(!empty($viewdata[0]->model)) { ?>
				<div class="form-group" id="hidmodelnumbers">
				<label>Model(optional)</label>
				<input type="text" class="form-control" id="car_mdoel_name" value="<?php echo $viewdata[0]->model; ?>" onchange="car_mdoel_namer();" name="car_mdoel_name">
				<span id="car_mdoel_namer" style="color:red;"></span>
				</div>
				<?php }else{ ?>
				<div class="form-group" id="hidmodelnumbers" style="display:none">
				<label>Model(optional)</label>
				<input type="text" class="form-control" id="car_mdoel_name" onchange="car_mdoel_namer();" name="car_mdoel_name">
				<span id="car_mdoel_namer" style="color:red;"></span>
				</div>
				<?php } ?>
				<?php if(!empty($viewdata[0]->year)) { ?>
				<div class="form-group"  id="yearhide">
				<label>Year Of Registration<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="car_year" onchange="car_yearr();" value="<?php echo $viewdata[0]->year; ?>" name="car_year">
				<span id="car_yearr" style="color:red;"></span>
				</div>
				<?php }else{ ?>
				<div class="form-group" id="yearhide" style="display:none">
				<label>Year Of Registration<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="car_year" onchange="car_yearr();" name="car_year">
				<span id="car_yearr" style="color:red;"></span>
				</div>
				<?php } ?>
				<?php if(!empty($viewdata[0]->car_driven_kilometer)) { ?>
				<div class="form-group" id="kmhide">
				<label>KM Driven<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="killometerdriven" onchange="killometerdrivenr();" name="killometerdriven" value="<?php echo $viewdata[0]->car_driven_kilometer; ?>">
				<span id="killometerdrivenr" style="color:red;"></span>
				</div>
				<?php }else{ ?>
				<div class="form-group" id="kmhide" style="display:none">
				<label>KM Driven<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="killometerdriven" onchange="killometerdrivenr();" name="killometerdriven">
				<span id="killometerdrivenr" style="color:red;"></span>
				</div>
				<?php }?>
				<?php if(!empty($viewdata[0]->dealer_type)){ ?>
				<div class="form-group" id="displaynonebyis">
          <label for="radio3">Saler Type<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="dealar1" name="delartype" onchange="delartyper()" value="Individual"  <?php if($viewdata[0]->dealer_type=='Individual'){ echo 'checked'; } else { echo ''; }?>/>
          <label for="radio4">Individual</label>
          <input type="radio"  id="dealar2" name="delartype"  onchange="delartyper()" value="Dealer" <?php if($viewdata[0]->dealer_type=='Dealer'){ echo 'checked'; } else { echo ''; }?> />
          <label for="radio5">Dealer</label>
          <span id="delartyper" style="color:red;"></span> </div>
		  <?php }else{ ?>
		  <div class="form-group" id="displaynonebyis" style="display:none;">
          <label for="radio3">Saler Type<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="dealar1" name="delartype" onchange="delartyper()" value="Individual"  <?php if($viewdata[0]->dealer_type=='Individual'){ echo 'checked'; } else { echo ''; }?>/>
          <label for="radio4">Individual</label>
          <input type="radio"  id="dealar2" name="delartype"  onchange="delartyper()" value="Dealer" <?php if($viewdata[0]->dealer_type=='Dealer'){ echo 'checked'; } else { echo ''; }?> />
          <label for="radio5">Dealer</label>
          <span id="delartyper" style="color:red;"></span> </div>
				<?php } } ?>
				
				<?php if($category[0]->mid=='7') {?>
				<!--<div class="form-group">
				<label>Bike Name <b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="car_name" onchange="car_namer();" name="car_name">
				<span id="car_namer" style="color:red;"></span>
				</div>-->
				<div class="form-group" id="temp_brand_name_viewed">
					<label>Brand Name<b style="color:#FF0000"> *</b></label>
				<select type="text" class="form-control" id="car_name" onchange="car_namer();" name="car_name">
				<option value="<?php echo $viewdata[0]->car_name; ?>"><?php echo $viewdata[0]->car_name; ?></option>
					<?php $brandname1=$this->db->query("select bike_name from bike_master order by bike_name asc")->result(); 
					foreach($brandname1 as $brandname){ if($viewdata[0]->car_name!=$brandname->bike_name){ ?>
				<option value="<?php echo $brandname->bike_name; ?>"><?php echo $brandname->bike_name; ?></option>
				<?php } } ?>
				</select>
				<span id="car_namer" style="color:red;"></span>
				</div>
				<div class="form-group">
				<label>Model(optional)</label>
				<input type="text" class="form-control" id="car_mdoel_name" value="<?php echo $viewdata[0]->model; ?>" onchange="car_mdoel_namer();" name="car_mdoel_name">
				<span id="car_mdoel_namer" style="color:red;"></span>
				</div>
				
				<div class="form-group">
				<label>Year Of Registration<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="car_year" onchange="car_yearr();" value="<?php echo $viewdata[0]->year; ?>" name="car_year">
				<span id="car_yearr" style="color:red;"></span>
				</div>
				<div class="form-group" >
				<label>KM Driven<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="killometerdriven" onchange="killometerdrivenr();" name="killometerdriven" value="<?php echo $viewdata[0]->car_driven_kilometer; ?>">
				<span id="killometerdrivenr" style="color:red;"></span>
				</div>
				<?php } ?>
				
				
				<?php if($category[0]->mid=='10') {?>
				<div class="form-group">
					<label>Brand Name<b style="color:#FF0000"> *</b></label>
				<select type="text" class="form-control" id="car_name" onchange="car_namer();" name="car_name">
				<option value="<?php echo $viewdata[0]->car_name; ?>"><?php echo $viewdata[0]->car_name; ?></option>
					<?php $brandname1=$this->db->query("select tempo_name from tempo_master order by tempo_name asc")->result(); 
					foreach($brandname1 as $brandname){ if($viewdata[0]->car_name!=$brandname->tempo_name){ ?>
				<option value="<?php echo $brandname->tempo_name; ?>"><?php echo $brandname->tempo_name; ?></option>
				<?php } } ?>
				</select>
				<span id="car_namer" style="color:red;"></span>
				</div>
				<?php if(!empty($viewdata[0]->model)){ ?>
				<div class="form-group" id="hidmodelnumbers">
				<label>Model(optional)</label>
				<input type="text" class="form-control" id="car_mdoel_name" value="<?php echo $viewdata[0]->model; ?>" onchange="car_mdoel_namer();" name="car_mdoel_name">
				<span id="car_mdoel_namer" style="color:red;"></span>
				</div>
				<?php }else{ ?>
				<div class="form-group" style="display:none;" id="hidmodelnumbers">
				<label>Model(optional)</label>
				<input type="text" class="form-control" id="car_mdoel_name" value="<?php echo $viewdata[0]->model; ?>" onchange="car_mdoel_namer();" name="car_mdoel_name">
				<span id="car_mdoel_namer" style="color:red;"></span>
				</div>
				<?php } ?>
				<?php if(!empty($viewdata[0]->year)){ ?>
				<div class="form-group" id="yearhide">
				<label>Year Of Registration<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="car_year" onchange="car_yearr();" value="<?php echo $viewdata[0]->year; ?>" name="car_year">
				<span id="car_yearr" style="color:red;"></span>
				</div>
				<?php } else {?>
					<div class="form-group" style="display:none" id="yearhide">
				<label>Year Of Registration<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="car_year" onchange="car_yearr();" value="<?php echo $viewdata[0]->year; ?>" name="car_year">
				<span id="car_yearr" style="color:red;"></span>
				</div>
				<?php } ?>
				<?php if(!empty($viewdata[0]->car_driven_kilometer)){ ?>
				<div class="form-group" id="kmhide">
				<label>KM Driven<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="killometerdriven" onchange="killometerdrivenr();" value="<?php echo $viewdata[0]->car_driven_kilometer; ?>" name="killometerdriven">
				<span id="killometerdrivenr" style="color:red;"></span>
				</div>
				<?php }else{ ?>
				<div class="form-group" id="kmhide" style="display:none">
				<label>KM Driven<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="killometerdriven" onchange="killometerdrivenr();" value="<?php echo $viewdata[0]->car_driven_kilometer; ?>" name="killometerdriven">
				<span id="killometerdrivenr" style="color:red;"></span>
				</div>
				<?php } ?>
				<?php } ?>
				<?php if($category[0]->mid==7 || $category[0]->mid==8 || $category[0]->mid==9 || $category[0]->mid==10) { ?>
				<div class="form-group" id="displaynonebyis">
          <label for="radio3">Saler Type<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="dealar1" name="delartype" onchange="delartyper()" value="Individual"  <?php if($viewdata[0]->dealer_type=='Individual'){ echo 'checked'; } else { echo ''; }?>/>
          <label for="radio4">Individual</label>
          <input type="radio"  id="dealar2" name="delartype"  onchange="delartyper()" value="Dealer" <?php if($viewdata[0]->dealer_type=='Dealer'){ echo 'checked'; } else { echo ''; }?> />
          <label for="radio5">Dealer</label>
          <span id="delartyper" style="color:red;"></span> </div>
				
				<?php } ?>	
				
					<?php if($category[0]->mid=='3'){?>
				<div  class="form-group" id="loan_typehide" <?php if(!empty($viewdata[0]->loan_type)) { ?> <?php }else{ echo "style='display:none;'"; }?> >
				<label>Loan Type<b style="color:#FF0000"> *</b> </label>
				<select type="text"  class="form-control" id="loan_type" name="loan_type" onchange="loan_typer();">
				<option value="<?php echo $viewdata[0]->loan_type; ?>"><?php echo $viewdata[0]->loan_type; ?></option>
	<?php $loan_name=$this->db->query("select loan_name from loan_master order by loan_name asc")->result(); foreach($loan_name as $loan_name1){ if($viewdata[0]->loan_type!= $loan_name1->loan_name){ ?>
				<option value="<?php echo $loan_name1->loan_name; ?>"><?php echo $loan_name1->loan_name; ?></option>
				<?php } } ?>
				</select>
				<span id="loan_typer" style="color:red;"></span>
				</div>
				
				
				<div  class="form-group" id="school_name_hide" <?php if(!empty($viewdata[0]->school_name)) { ?> <?php }else{ echo "style='display:none;'"; }?>>
				<label>School Name<b style="color:#FF0000"> *</b> </label>
				<input type="text"  class="form-control" id="school_name" name="school_name" value="<?php echo $viewdata[0]->school_name; ?>" onchange="school_namer();">
				<span id="school_namer" style="color:red;"></span>
				</div>
				<div  class="form-group" id="bus_route_hide"  <?php if(!empty($viewdata[0]->root_num)) { ?> <?php }else{ echo "style='display:none;'"; }?>>
				<label>Route Name<b style="color:#FF0000"> *</b> </label>
				<input type="text"  class="form-control" id="root_num" name="root_num" value="<?php echo $viewdata[0]->root_num; ?>" onchange="root_numr();">
				<span id="root_numr" style="color:red;"></span>
				</div>
				<div  class="form-group" id="hide_school_pattern" <?php if(!empty($viewdata[0]->school_pattern)) { ?> <?php }else{ echo "style='display:none;'"; }?>>
				<label>School Pattern<b style="color:#FF0000"> *</b> </label>
				<select type="text"  class="form-control" id="school_pattern" name="school_pattern" onchange="school_patternr();">
				<option value="<?php echo $viewdata[0]->school_pattern; ?>"><?php echo $viewdata[0]->school_pattern; ?></option>
				<?php $loan_name=$this->db->query("select school_pattern from school_pattern order by school_pattern asc")->result(); foreach($loan_name as $loan_name1){ if( $viewdata[0]->school_pattern!=$loan_name1->school_pattern){ ?>
				<option value="<?php echo $loan_name1->school_pattern; ?>"><?php echo $loan_name1->school_pattern; ?></option>
				<?php } } ?>
				</select>
				<span id="school_patternr" style="color:red;"></span>
				</div>
				<div  class="form-group" id="dept_type_hide" <?php if(!empty($viewdata[0]->dept_type)) { ?> <?php }else{ echo "style='display:none;'"; }?>>
				<label>School Department Type<b style="color:#FF0000"> *</b> </label>
				<select type="text"  class="form-control" id="dept_type" name="dept_type" onchange="dept_typer();">
				<option value="<?php echo $viewdata[0]->dept_type; ?>"><?php echo $viewdata[0]->dept_type; ?></option>
				<?php $dept_type=$this->db->query("select dept_type from school_dept_type order by dept_type asc")->result(); foreach($dept_type as $loan_name1){ if( $viewdata[0]->dept_type!= $loan_name1->dept_type){ ?>
				<option value="<?php echo $loan_name1->dept_type; ?>"><?php echo $loan_name1->dept_type; ?></option>
				<?php } } ?>
				</select>
				<span id="dept_typer" style="color:red;"></span>
				</div>
				
				<div  class="form-group" id="school_medium_hide" <?php if(!empty($viewdata[0]->school_medium)) { ?> <?php }else{ echo "style='display:none;'"; }?>>
				<label>Medium of School<b style="color:#FF0000"> *</b> </label>
				<select type="text"  class="form-control" id="school_medium" name="school_medium" onchange="school_mediumr();">
				<option value="<?php echo $viewdata[0]->school_medium; ?>"><?php echo $viewdata[0]->school_medium; ?></option>
				<?php $dept_type=$this->db->query("select school_medium_namee from medium_of_school order by school_medium_namee asc")->result(); foreach($dept_type as $loan_name1){ if($viewdata[0]->school_medium!=$loan_name1->school_medium_namee) { ?>
				<option value="<?php echo $loan_name1->school_medium_namee; ?>"><?php echo $loan_name1->school_medium_namee; ?></option>
				<?php } } ?>
				</select>
				<span id="school_mediumr" style="color:red;"></span>
				</div>
				
				<?php } ?>
				
				<?php if($category[0]->mid=='14') { ?>
		
		<div class="form-group">
<label>Hall Facility: <b style="color:#FF0000"> *</b></label>
<?php $amentiesexploade=explode(',', $viewdata[0]->amenities); ?>
<div class="checkbox">
<input type="hidden" name="hideamenities"  value="<?php echo $viewdata[0]->amenities; ?>" />
  <label><input type="checkbox" id="amenities1" name="amenities[]" <?php if($amentiesexploade[0]=='Ac' || $amentiesexploade[1]=='Ac'  || $amentiesexploade[2]=='Ac' ||  $amentiesexploade[3]=='Ac' ||  $amentiesexploade[4]=='Ac'){ echo 'checked';}else{ echo ''; } ?>  onclick="amenitiesr()" value="Ac">Ac</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Non/Ac" id="amenities2"  <?php if($amentiesexploade[0]=='Non/Ac' || $amentiesexploade[1]=='Non/Ac'  || $amentiesexploade[2]=='Non/Ac' ||  $amentiesexploade[3]=='Non/Ac' ||  $amentiesexploade[4]=='Non/Ac'){ echo 'checked';} else{ echo ''; } ?> onclick="amenitiesr()" name="amenities[]">Non/Ac</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Meeting Hall" id="amenities3" onclick="amenitiesr()"  <?php if($amentiesexploade[0]=='Meeting Hall' || $amentiesexploade[1]=='Meeting Hall'  || $amentiesexploade[2]=='Meeting Hall' ||  $amentiesexploade[3]=='Meeting Hall' ||  $amentiesexploade[4]=='Meeting Hall'){ echo 'checked';}else{ echo ''; } ?>   name="amenities[]">Meeting Hall</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Conference Hall" id="amenities4" onclick="amenitiesr()" <?php if($amentiesexploade[0]=='Conference Hall' || $amentiesexploade[1]=='Conference Hall'  || $amentiesexploade[2]=='Conference Hall' ||  $amentiesexploade[3]=='Conference Hall' ||  $amentiesexploade[4]=='Conference Hall'){ echo 'checked';}else{ echo ''; } ?>  name="amenities[]">Conference Hall</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Luxury" id="amenities5" onclick="amenitiesr()" <?php if($amentiesexploade[0]=='Luxury' || $amentiesexploade[1]=='Luxury'  || $amentiesexploade[2]=='Luxury' ||  $amentiesexploade[3]=='Luxury' ||  $amentiesexploade[4]=='Luxury'){ echo 'checked';}else{ echo ''; } ?> name="amenities[]">Luxury</label>
</div>
<span id="amenitiesr" style="color:red;"></span>
</div>

<div class="form-group">
<?php $roomtypexploade=explode(',', $viewdata[0]->single_room_type); ?>
<label>Room Type: <b style="color:#FF0000"> *</b></label>
<div class="checkbox">
<input type="hidden" name="hidefacility"  value="<?php echo  $viewdata[0]->single_room_type; ?>" />
  <label><input type="checkbox" id="single_room_type1" <?php if($roomtypexploade[0]=='Single Room' || $roomtypexploade[1]=='Single Room'  || $roomtypexploade[2]=='Single Room'){ echo 'checked';}else{ echo ''; } ?> name="single_room_type[]" onclick="single_room_typer()" value="Single Room">Single Room</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Double Room" id="single_room_type2" onclick="single_room_typer()" <?php if($roomtypexploade[0]=='Double Room' || $roomtypexploade[1]=='Double Room'  || $roomtypexploade[2]=='Double Room'){ echo 'checked';}else{ echo ''; } ?> name="single_room_type[]">Double Room</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="Hall" <?php if($roomtypexploade[0]=='Hall' || $roomtypexploade[1]=='Hall'  || $roomtypexploade[2]=='Hall' ){ echo 'checked';}else{ echo ''; } ?> id="single_room_type3" onclick="single_room_typer()" name="single_room_type[]">Hall</label>
</div>

<span id="single_room_typer" style="color:red;"></span>
</div>
		
		<?php } ?>
				
				<?php if($category[0]->mid=='4' || $category[0]->mid=='11' ||  $category[0]->mid=='16' ||  $viewdata[0]->category_id==140) {?>
				<div class="form-group" id="pricehiding" style="display:none;">
				<label>Property Price <b style="color:#FF0000"> *</b> <input type="checkbox" id="negotiable" name="negotiable[]" value="Negotiable"> Negotiable</label>
				<input type="text" class="form-control" id="property_price" onchange="property_pricer();" autocomplete="off" onkeypress="return isNumber(event)" name="property_price" />
				<span id="property_pricer" style="color:red;"></span>
				</div>
				<?php }else { ?>
				<div class="form-group" id="pricehiding">
				<label><?php if($category[0]->mid=='3' ||  $category[0]->mid=='14' ||  $category[0]->mid=='13' ||  $category[0]->mid=='12'){ ?>Price (Optional) <?php }else { ?> Price<b style="color:#FF0000"> *</b> <?php } ?>
			<input type="checkbox" id="negotiable" <?php if($viewdata[0]->price_negociable=='1'){ echo 'checked'; } else { echo ''; }?> name="negotiable" value="Negotiable" /> Negotiable</label>
				<input type="text" class="form-control" id="property_price" onchange="property_pricer();"  value="<?php echo $viewdata[0]->property_price; ?>"  autocomplete="off" onkeypress="return isNumber(event)" name="property_price" />
				<span id="property_pricer" style="color:red;"></span>
				</div>
				<?php } ?>
				
				
				
							<?php if($category[0]->mid=='12') { ?>
					<div class="form-group">
          <label for="radio3">Hall Facility<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="hall_facility1" name="hall_facility" onchange="hall_facilityr()"  <?php if($viewdata[0]->hall_facility=='A/C Hall'){ echo 'checked'; } else { echo ''; }?> value="A/C Hall" />
          <label for="radio4">A/C Hall</label>
          <input type="radio"  id="hall_facility2" name="hall_facility"  onchange="hall_facilityr()" <?php if($viewdata[0]->hall_facility=='Non A/C Hall'){ echo 'checked'; } else { echo ''; }?> value="Non A/C Hall" />
          <label for="radio5">Non A/C Hall</label>
          <span id="hall_facilityr" style="color:red;"></span> </div>
		  
		  <div class="form-group">
          <label for="radio3">Hall Type<b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="hall_decorate1" name="hall_decorate" onchange="hall_decorater()" <?php if($viewdata[0]->hall_type=='With Decoration'){ echo 'checked'; } else { echo ''; }?> value="With Decoration" />
          <label for="radio4">With Decoration</label>
          <input type="radio"  id="hall_decorate2" name="hall_decorate"  onchange="hall_decorater()" <?php if($viewdata[0]->hall_type=='Without Decoration'){ echo 'checked'; } else { echo ''; }?> value="Without Decoration" />
          <label for="radio5">Without Decoration</label>
          <span id="hall_decorater" style="color:red;"></span> </div>
		  <div class="form-group">
			  <label>Area(sq.ft.) <b style="color:#FF0000"> *</b></label>
			 <input type="text" class="form-control" id="area" onchange="arear()"  value="<?php echo $viewdata[0]->area; ?>"  onkeypress="return isNumber(event)" autocomplete="off" name="area">
			  <span id="arear" style="color:red;"></span>
			</div>
			<div class="form-group">
				<label>Water Storage Capacity (Ltr)<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="water_storage_capcity"  value="<?php echo $viewdata[0]->water_storage; ?>" onchange="water_storage_capcityr();" name="water_storage_capcity">
				<span id="water_storage_capcityr" style="color:red;"></span>
				</div>
			
				<div class="form-group">
				<label>Public Capacity<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="car_mdoel_name" value="<?php echo $viewdata[0]->model; ?>"  onkeypress="return isNumber(event)" autocomplete="off" onchange="car_mdoel_namer();" name="car_mdoel_name">
				<span id="car_mdoel_namer" style="color:red;"></span>
				</div>
				<?php if(empty($viewdata[0]->hanuman_temple)) { ?>
				<div class="form-group" style="display:none;" id="hidehanumantemplatedistance">
				<label>Hanuman Temple Distance<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="human_temple_distance" value="<?php echo $viewdata[0]->hanuman_temple; ?>"  onkeypress="return isNumber(event)" autocomplete="off"  onchange="human_temple_distancer();" name="human_temple_distance">
				<span id="human_temple_distancer" style="color:red;"></span>
				</div>
				<?php }else{ ?>
				<div class="form-group" id="hidehanumantemplatedistance">
				<label>Hanuman Temple Distance<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="human_temple_distance" value="<?php echo $viewdata[0]->hanuman_temple; ?>" onchange="human_temple_distancer();" name="human_temple_distance">
				<span id="human_temple_distancer" style="color:red;"></span>
				</div>
				<?php } ?>
				<div class="form-group">
				<label for="radio3">Parking</label>
				<input type="radio" id="parking_type_one"  name="parkingtypedd"  <?php if($viewdata[0]->parking_type_one=='Yes'){ echo 'checked'; } else { echo ''; }?> value="Yes"></label>
				<label for="radio5">Yes</label> 
				<input type="radio" value="No" id="parking_type_tow"  name="parkingtypedd" <?php if($viewdata[0]->parking_type_one=='No'){ echo 'checked'; } else { echo ''; }?>>
				<label for="radio5">No</label>
				</div>	
				<?php if($viewdata[0]->parking_type_one=='Yes'){ ?>
				<div class="form-group" id="openparkingtypw">
				<div class="row">
				<div class="col-md-6">
				<label>Parking Area (Sq.ft)</label>
				<input type="text"  name="parking_squate_foot" id="parking_squate_foot"  onkeypress="return isNumber(event)" autocomplete="off" value="<?php echo $viewdata[0]->parking_square_foot; ?>" class="form-control" onkeypress="return isNumber(event)" autocomplete="off"  />
				</div>
				
				<div class="col-md-6">
				<label>Parking Capacity</label>
				<input type="text"  name="parking_bike_capcity" id="parking_bike_capcity"  autocomplete="off" value="<?php echo $viewdata[0]->parking_capcity; ?>" class="form-control" onkeypress="return isNumber(event)" autocomplete="off"  />
				</div></div></div>
				<?php }else{ ?>	
				<div class="form-group" id="openparkingtypw" style="display:none;">
				<div class="row">
				<div class="col-md-6">
				<label>Parking Area (Sq.ft)</label>
				<input type="text" name="parking_squate_foot" id="parking_squate_foot"  autocomplete="off" class="form-control" maxlength="30" onkeypress="return isNumber(event)" autocomplete="off"  />
				</div>
				<div class="col-md-6">
				<label>Praking Capacity</label>
				<input  type="text" name="parking_bike_capcity" id="parking_bike_capcity" class="form-control"  maxlength="50" autocomplete="off"  />
				</div></div></div>
				<?php } ?>
	<?php } ?>
				
				
				<?php if($category[0]->mid=='16') { ?>
		
		<div class="form-group">
				<label>Product Name<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="car_name" onchange="car_namer();" name="product_nameess" value="<?php echo $viewdata[0]->product_name; ?>" maxlength="150">
				<span id="car_namer" style="color:red;"></span>
				</div>
		<div class="form-group">
				<label>Store Name<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="store_name" onchange="store_namer();" name="store_name" value="<?php echo $viewdata[0]->store_name; ?>" maxlength="190">
				<span id="store_namer" style="color:red;"></span>
				</div>
			<div class="form-group">
				<label>Offer Name<b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="offer_name" onchange="offer_namer();" name="offer_name" value="<?php echo $viewdata[0]->offer_name; ?>"  maxlength="190">
				<span id="offer_namer" style="color:red;"></span>
				</div>
				<div  class="form-group">
				<label>Offer Type<b style="color:#FF0000"> *</b> </label>
				<select type="text"  class="form-control" id="offer_type" name="offer_type" onchange="offer_typer();">
				<option value="<?php echo $viewdata[0]->offer_type; ?>"><?php echo $viewdata[0]->offer_type; ?></option>
				<?php $loan_name=$this->db->query("select offer_name from offer_master order by offer_name asc")->result(); foreach($loan_name as $loan_name1){ if( $viewdata[0]->offer_type!=$loan_name1->offer_name){ ?>
				<option value="<?php echo $loan_name1->offer_name; ?>"><?php echo $loan_name1->offer_name; ?></option>
				<?php } } ?>
				</select>
				<span id="offer_typer" style="color:red;"></span>
				</div>
<script>
$( function() {$( "#from_date" ).datepicker( {minDate: '0', dateFormat: 'yy-mm-dd' } );} );
$( function() {$( "#end_date" ).datepicker( {minDate: '0', dateFormat: 'yy-mm-dd' } );} );
  </script>
				<div class="form-group">
				<div class="row">
				<div class="col-md-6">
		<label>From Offer Date(optinal) </label>
        <input type="text" id="from_date"  name="from_date"  class="form-control" value="<?php echo $viewdata[0]->from_date; ?>">
		</div>
           <div class="col-md-6">
		<label>End Offer Date (optinal)</label>
<input type="text" id="end_date"   class="form-control" name="end_date" value="<?php echo $viewdata[0]->end_date; ?>"></div>
				</div></div>
		<?php } ?>
				
				<div class="form-group">
				<label>Name <b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="property_owner_name" value="<?php echo $viewdata[0]->property_owner_name; ?>" onchange="property_owner_namer();" name="property_owner_name">
				<span id="property_owner_namer" style="color:red;"></span>
				</div>
				<div class="form-group">
				<label>Contact Number <b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" id="owner_contact_no" value="<?php echo $viewdata[0]->owner_contact_no; ?>" onchange="owner_contact_nor()" name="owner_contact_no">
				<span id="owner_contact_nor" style="color:red;"></span>
				</div>
				<div class="form-group">
				<label>City <b style="color:#FF0000"> *</b></label>
				<input type="text" class="form-control" onchange="cityr();" id="city" name="city" value="<?php echo $viewdata[0]->city; ?>">
				<span id="cityr" style="color:red;"></span>
				</div>
				<div class="form-group">
				<label>Locality <b style="color:#FF0000"> *</b></label>
				<select class="form-control" id="address_details" onchange="address_detailsr()" name="address_details" maxlength="100" >
				<option value="<?php echo $viewdata[0]->address_details; ?>"><?php echo $viewdata[0]->address_details; ?></option>
				<?php $db1=$this->db->query("select *from locality_master order by city_name asc")->result(); foreach($db1 as $rows) { if($viewdata[0]->address_details!=$rows->city_name){ ?>
				<option value="<?php echo $rows->city_name; ?>"><?php echo $rows->city_name; ?></option>
				<?php } } ?></select>
				<span id="address_detailsr" style="color:red;"></span>
				<br />
				<div style="text-decoration:none; overflow:hidden; height:300px; width:100%; max-width:100%;" id="getgooglemaps"><div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $viewdata[0]->city; ?>+<?php echo $viewdata[0]->address_details; ?>&key=AIzaSyDLz3YAIDupBgMdSKkuhkBgNwvBjLmXwCA"></iframe></div><a class="google-code" rel="nofollow" href="http://www.interserver-coupons.com" id="make-map-information">http://www.interserver-coupons.com</a><style>#google-maps-canvas .map-generator{max-width: 100%; max-height: 100%; background: none;}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=2cbd0773-49f5-c876-b29f-a61c999156d7&c=google-code&u=1477489972" defer="defer" async="async"></script>
				
				</div>
				<div class="form-group">
				<label><?php if($category[0]->mid=='11') { ?> Job Description <?php }else{  ?> Description<?php } ?> <b style="color:#FF0000"> *</b></label>
				<textarea class="form-control" id="ckeditor" name="property_description" onchange="ckeditorr();" rows="10" maxlength="500" style="resize:none">
				<?php echo $viewdata[0]->property_description; ?>
				</textarea>
				<span id="ckeditorr" style="color:red;"></span>
				</div>
				<button type="submit" class="btn btn-primary mydbubttt" onClick="return propertypost()">Update Ad</button> &nbsp;&nbsp;	<img  id="loaderimages" style="display:none;" src="<?php echo base_url(); ?>assets/images/loading.gif" />
				<!--    <button type="reset" class="btn btn-default">Reset</button>-->
				<div class="form-group" align="center">
				
				</div>
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


		
		