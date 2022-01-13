<script type="text/JavaScript" src='<?php echo base_url();?>assets/js/state.js'></script>
	<script>
	function passwordconfirm(){
       var newPassword=document.getElementById('inputPassword').value.trim();
		var newPassword1=document.getElementById('cofrimpass').value.trim();
		if(newPassword!=newPassword1){
				//alert("Password not match");
				$('#cofrimpass').val('')=='';
				$('#conPwdeorror').html('Password not match');
				return false;
		}   else {
		    $('#conPwdeorror').html(' ');
			$('#inputPasswordr').html(' ');
			$('#cofrimpassr').html(' ');
		 }    
}


function emailidconfimr(){
       var newPassword=document.getElementById('confirmemailid').value.trim();
		var newPassword1=document.getElementById('email_id').value.trim();
		if(newPassword!=newPassword1){
				//alert("Password not match");
				$('#conPwdeorror1').val('')=='';
				$('#conPwdeorror1').html('Email not match');
				return false;
		}   else {
		    $('#conPwdeorror1').html(' ');
			$('#confirmemailidr').html(' ');
		 }    
}

function ValidateExtension() {
        var allowedFiles = [".png",".jpg"];
        var fileUpload = document.getElementById("upload_colloege_image");
        var lblError = document.getElementById("lblError");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.value.toLowerCase())) {
            lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
			document.getElementById("upload_colloege_image").value='';
            return false;
			
        }
        lblError.innerHTML = "";
		 $('#upload_colloege_imager').html(' ');
        return true;
    }
	function upload_team_image() {
        var allowedFiles = [".png",".jpg"];
        var fileUpload = document.getElementById("upload_team_image");
        var lblError = document.getElementById("lblError1");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.value.toLowerCase())) {
            lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
			document.getElementById("upload_team_image").value='';
            return false;
			
        }
        lblError.innerHTML = "";
		 $('#upload_team_imager').html(' ');
        return true;
    }

function college_namer(){if($('#college_name').val()==''){}else{ $('#college_namer').html(' '); }}
function team_namer(){if($('#team_name').val()==''){}else{ $('#team_namer').html(' '); }}	
function team_captain_namer(){if($('#team_captain_name').val()==''){}else{ $('#team_captain_namer').html(' '); }}	
function email_idr(){if($('#email_id').val()==''){}else{ $('#email_idr').html(' '); }}
function confirmemailidr(){if($('#confirmemailid').val()==''){}else{ $('#confirmemailidr').html(' '); }}
function contact_infor(){if($('#contact_info').val()==''){}else{ $('#contact_infor').html(' '); }}
function addressr(){if($('#address').val()==''){}else{ $('#addressr').html(' '); }}
function countryr(){if($('#country').val()==''){}else{ $('#countryr').html(' '); }}
function listBoxr(){if($('#listBox').val()==''){}else{ $('#listBoxr').html(' '); }}
function secondlistr(){if($('#secondlist').val()==''){}else{ $('#secondlistr').html(' '); }}
function pincoder(){if($('#pincode').val()==''){}else{ $('#pincoder').html(' '); }}
function inputPasswordr(){if($('#inputPassword').val()==''){}else{ $('#inputPasswordr').html(' '); }}
function cofrimpassr(){if($('#cofrimpass').val()==''){}else{ $('#cofrimpassr').html(' '); }}
function upload_colloege_imager(){if($('#upload_colloege_image').val()==''){}else{ $('#upload_colloege_imager').html(' '); }}
function upload_team_imager(){if($('#upload_team_image').val()==''){}else{ $('#upload_team_imager').html(' '); }}
function alternative_contactr(){if($('#alternative_contact').val()==''){}else{ $('#alternative_contactr').html(' '); }}
function registertems(){
        var namecheck = /[A-Za-z]+$/;      
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var numbermatch= /^[1-9]\d{0,10}(?:\.\d)?$|^0\.[1-9]$/;
		var mobilenovalidation=/^\d{10}$/;
		var positvenumber=/[0-9 -()+]+$/;
		var chequeno=/^\d{6,14}$/;
		var college_name=document.getElementById('college_name').value.trim();
		var  team_name=document.getElementById('team_name').value.trim();
		var  team_captain_name=document.getElementById('team_captain_name').value.trim();
	    var  email_id=document.getElementById('email_id').value.trim();
		var  confirmemailid=document.getElementById('confirmemailid').value.trim();
		var  contact_info=document.getElementById('contact_info').value.trim();
		var  address=document.getElementById('address').value.trim();
		var  country=document.getElementById('country').value.trim();
		var  listBox=document.getElementById('listBox').value.trim();
		var  secondlist=document.getElementById('secondlist').value.trim();
		var  pincode=document.getElementById('pincode').value.trim();
		var  inputPassword=document.getElementById('inputPassword').value.trim();
		var  cofrimpass=document.getElementById('cofrimpass').value.trim();
		var  upload_colloege_image=document.getElementById('upload_colloege_image').value.trim();
		var  upload_team_image=document.getElementById('upload_team_image').value.trim();
		var alternative_contact=document.getElementById('alternative_contact').value.trim();
				if(college_name==''){
				$("#college_namer").html('Please enter college name');
				return false;
				}
				if(team_name==''){
				$("#team_namer").html('Please enter team name');
				return false;
				}
				if(team_captain_name==''){
				$("#team_captain_namer").html('Please enter team captain name');
				return false;
				}
				if(email_id==''){
				$("#email_idr").html('Please enter email address');
				return false;
				}
					var email_id = email_id.toLowerCase();
					if (emailpattern.test(email_id) == false)
					{
					$("#email_idr").html("Please Enter Valid Email Address");
					       
					return false;
					}
				if(confirmemailid==''){
				$("#confirmemailidr").html('Please enter email address');
				return false;
				}
					var confirmemailid = confirmemailid.toLowerCase();
					if (emailpattern.test(confirmemailid) == false)
					{
					$("#confirmemailidr").html("Please Enter Valid Email Address");    
					return false;
					}
				if(contact_info==''){
				$("#contact_infor").html('Please enter contact number');
				return false;
				}
				if (!(contact_info.match(mobilenovalidation))) {
				$("#contact_infor").html("Please enter valid contact number");	
				return false;
				}
				if (!(alternative_contact.match(mobilenovalidation))) {
				$("#alternative_contactr").html("Please enter valid contact number");	
				return false;
				}
				if(address==''){
				$("#addressr").html('Please enter address');
				return false;
				}
				if(country==''){
				$("#countryr").html('Please select country');
				return false;
				}
				if(listBox==''){
				$("#listBoxr").html('Please select state');
				return false;
				}
				if(secondlist==''){
				$("#secondlistr").html('Please select city');
				return false;
				}
				if(pincode==''){
				$("#pincoder").html('Please enter pincode');
				return false;
				}
				if (!(pincode.match(chequeno))) {
				$("#pincoder").html("Please enter valid pincode");	
				return false;
				}
				if(inputPassword==''){
				$("#inputPasswordr").html('Please enter password');
				return false;
				}
				if(cofrimpass==''){
				$("#cofrimpassr").html('Please enter confirm password');
				return false;
				}
				if(upload_colloege_image==''){
				$("#upload_colloege_imager").html('Please upload college id');
				return false;
				}
				if(upload_team_image==''){
				$("#upload_team_imager").html('Please upload team logo');
				return false;
				}
		  $("#main-contact-form").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/teamregisteruser",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='team-register';
						return false;
					}
					else {
					//$('body,html').animate({scrollTop: $("#duplicateemailcheck").offset().top },500);
					document.getElementById("email_id").value;
				  		$('#duplicateemailcheck').show();
						   setTimeout(function() {$("#duplicateemailcheck").fadeOut("slow");}, 5000);
					}
					
				}
			});
			return false;  
		});
			
	}
$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });
	$(document).ready(function() {
        setTimeout(function() {
            $("#duplicateemailcheck").fadeOut("slow");
       
        }, 5000);
    });

	</script>
<div class="content">
			<div class="services">
				<div class="container">
					<h3 align="center">Team Register</h3>                    
					
					<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Team Registration Successfully..
</div> 

<?php  $this->session->unset_userdata('registrationsucess'); } ?>
  
				 <div class="panel panel-default">
        <div class="panel-heading">Reigster Team</div>
		<div class="panel-body">
	     <form id="main-contact-form" class="contact-form row" name="contact-form" enctype="multipart/form-data" method="post">
				            <div class="row">
							<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">College Name</label></div>
				            <div class="form-group col-md-6">
				                <input type="text" id="college_name" name="college_name" onchange="college_namer();" class="form-control" required="required" maxlength="40" placeholder="College Name">
							<span id="college_namer" style="color:red;"></span>
				            </div>
							</div>
							  <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Team Name</label></div>
				            <div class="form-group col-md-6">
				                <input type="text" name="team_name" id="team_name" class="form-control" onchange="team_namer()" required="required" maxlength="30" placeholder="Team Name">
								<span id="team_namer" style="color:red;"></span>
				            </div></div>
							  <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Team Captain Name</label></div>
				            <div class="form-group col-md-6">
				                <input type="text" name="team_captain_name" id="team_captain_name" onchange="team_captain_namer();" class="form-control" maxlength="40" required="required" placeholder="Team Captain Name">
									<span id="team_captain_namer" style="color:red;"></span>
				            </div> </div>
							  <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Email ID (to be used as User ID)</label></div>
				            <div class="form-group col-md-6">
				                <input type="text" id="email_id" name="email_id" onchange="email_idr();" class="form-control" required="required" maxlength="40" placeholder="Email ID (to be used as User ID)">
								<span id="email_idr" style="color:red;"></span>
				            </div></div>
							 <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Confirm Email ID</label></div>
				            <div class="form-group col-md-6">
				                <input type="text" id="confirmemailid" name="confirmemailid" class="form-control" onChange="emailidconfimr();" maxlength="30" required="required" placeholder="Confirm Email ID">	<span id="confirmemailidr" style="color:red;"></span>
								<span style="color:red;" id="conPwdeorror1"></span>	
				            </div></div>
							<div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Contact no</label></div>
				            <div class="form-group col-md-6">
				                <input type="text" id="contact_info" name="contact_info" onchange="contact_infor();" class="form-control" required="required" placeholder="Contact no" maxlength="15">
								<span id="contact_infor" style="color:red;"></span>
				            </div></div>
							<div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Alternative Contact No-</label></div>
				            <div class="form-group col-md-6">
				                <input type="text" id="alternative_contact" name="alternative_contact" onchange="alternative_contactr()" class="form-control"  maxlength="15" placeholder="Alternative Contact No">
								<span id="alternative_contactr"></span>
				            </div></div>
							<div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Address</label></div>
				            <div class="form-group col-md-6">
				                <textarea type="text" id="address" name="address" onchange="addressr();" class="form-control" required="required" placeholder="Address" maxlenght="200"></textarea>
								<span id="addressr" style="color:red;"></span>
				            </div></div>
							  <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Country Name</label></div>
				              <div class="form-group col-md-6">
				                <select  name="country" id="country" class="form-control" onchange="countryr();" required="required" placeholder="City">
								<option value="">Select Country</option>
								<option value="India">India</option>
								</select>
								<span id="countryr" style="color:red;"></span>
				             </div></div>
							   <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">State Name</label></div>
							    <div class="form-group col-md-6">
				                <div id="selection">
                             <select id="listBox" name="state" class="form-control" onchange='selct_district(this.value)'></select>
                          <span id="listBoxr" style="color:red;"></span>
                             </div>
				            </div> </div>
							  <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">City Name</label></div>
							 <div class="form-group col-md-6">
							 <select id='secondlist' name="city"  class="form-control"  onchange="secondlistr()" required></select>
							  <span id="secondlistr" style="color:red;"></span>
							 </div>
							</div>
							  <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Pincode</label></div>
				            <div class="form-group col-md-6">
				                <input type="text" name="pincode" id="pincode" onchange="pincoder();" class="form-control" required="required" placeholder="Pincode" maxlength="10">
								  <span id="pincoder" style="color:red;"></span>
				            </div> 
							</div>
							 
				             <div class="row">
							<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Password</label></div>
				            <div class="form-group col-md-6">
				                <input type="password" id="inputPassword" onchange="passwordconfirm();" name="password" class="form-control" maxlength="20" required="required" placeholder="Password">
				             <span id="inputPasswordr" style="color:red;"></span>
						    </div></div>
							  <div class="row">
							<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Confirm Password
</label></div>
				             	 <div class="form-group col-md-6">
				                <input type="password" id="cofrimpass" name="cofrimpass" class="form-control" onchange="passwordconfirm();" maxlength="20" required="required" placeholder="Confirm Password">
								<span id="cofrimpassr" style="color:red;"></span>
								<span style="color:red;" id="conPwdeorror"></span>	
				            </div></div>
								 <div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Upload College ID (in jpg, png format only)</label></div>
				            <div class="form-group col-md-6">
				                <input type="file" name="upload_colloege_image" id="upload_colloege_image"  onChange="ValidateExtension();" required="required" class="form-control">
								  <span style="color:red;" id="lblError"></span>
								  <span id="upload_colloege_imager" style="color:red;"></span>
				            </div>
							</div>
							<div class="row">
								<div class="form-group col-md-1"></div><div class="form-group col-md-4"><label for="email">Upload Team Logo(in jpg, png format only)</label></div>
				            <div class="form-group col-md-6">
				                <input type="file" name="upload_team_image" id="upload_team_image" onChange="upload_team_image();"  required="required" class="form-control">
								<span style="color:red;" id="lblError1"></span>
								  <span id="upload_team_imager" style="color:red;"></span>
				            </div>
							</div>				                   
				            <div class="form-group col-md-12">
				               <input type="submit"   name="btnWebSubmit"  id="btnWebSubmit" class="btn btn-primary pull-center" value="Submit"  onClick="return registertems()">
							
				            </div>
				        </form>
						
						  <div id="duplicateemailcheck" style="display:none">
	 <div class="alert alert-danger">
  <strong>Error!</strong>This Email Already Exist
</div> 
	</div>
			</div></div></div></div>
			</div></div>