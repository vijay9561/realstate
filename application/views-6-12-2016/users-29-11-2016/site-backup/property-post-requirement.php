<script>
$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });
	
function namer(){if($('#firstname').val()==''){}else{ $('#namer').html(' '); }}
function lastnamer(){if($('#lastname').val()==''){}else{ $('#lastnamer').html(' '); }}
function eamilr(){if($('#eamil').val()==''){}else{ $('#eamilr').html(' '); }}
function passwordr(){if($('#password').val()==''){}else{ $('#password').html(' '); }}
function mobile_nor(){if($('#mobile_no').val()==''){}else{ $('#mobile_nor').html(' '); }}
function descriptionr(){if($('#description').val()==''){}else{ $('#descriptionr').html(' '); }}
function addressr(){if($('#address').val()==''){}else{ $('#addressr').html(' '); }}
function yourpropesinalr(){if($('input:radio[name=yourpropesinal]').is(':checked')){
   $("#yourpropesinalr").html("");	
				}else{
				}
			}
			function slaebyr(){if($('input:radio[name=slaeby]').is(':checked')){
         $("#slaebyr").html("");	
				}else{
				}
			}
function regiterusers(){
        var namecheck = /[A-Za-z]+$/;      
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var numbermatch= /^[1-9]\d{0,10}(?:\.\d)?$|^0\.[1-9]$/;
		var mobilenovalidation=/^\d{10}$/;
		var positvenumber=/[0-9 -()+]+$/;
		var chequeno=/^\d{6,14}$/;
	
		    var   name=document.getElementById('firstname').value.trim();
			var  lastname=document.getElementById('lastname').value.trim();
	        var  eamil=document.getElementById('eamil').value.trim();
		    var  mobile_no=document.getElementById('mobile_no').value.trim();
			var address=document.getElementById('address').value.trim();
			var description=document.getElementById('description').value.trim();
				
				if(name==''){
				$("#namer").html('Please enter first name');
				return false;
				}
				if (!(name.match(namecheck))) {
				$("#namer").html("Please Enter Valid Name");	
				return false;
				}
					if(lastname==''){
				$("#lastnamer").html('Please enter last name');
				return false;
				}
				if (!(lastname.match(namecheck))) {
				$("#lastnamer").html("Please Enter Valid Name");	
				return false;
				}
				
				if(eamil==''){
				$("#eamilr").html('Please enter email address');
				return false;
				}
					var eamil = eamil.toLowerCase();
					if (emailpattern.test(eamil) == false){
					$("#eamilr").html("Please Enter Valid Email Address");					       
					return false;
					}
				if(mobile_no==''){
				$("#mobile_nor").html('Please enter contact number');
				return false;
				}
				if (!(mobile_no.match(mobilenovalidation))) {
				$("#mobile_nor").html("Please enter valid contact number");	
				return false;
				}
				if($('input:radio[name=yourpropesinal]').is(':checked')){
				}else{
				$("#yourpropesinalr").html("Please select your profession");	
				return false;
				}
				if(address==''){
				$("#addressr").html('Please enter address');
				return false;
				}
				if($('input:radio[name=slaeby]').is(':checked')){
				}else{
				$("#slaebyr").html("Please select property type");	
				return false;
				}
				if(description==''){
				$("#descriptionr").html('Please enter description');
				return false;
				}
				
				
		  $("#registerusers").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/property_post_requirement1",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='property-post-requirement';	
					}
					else {
			         alert('not send mails');
						return false;
					}
					
				}
			});
			return false;  
		});
			
	}
</script>
<style>
.form-info input[type="text"], .form-info input[type="password"] {
    outline: none;
    background: none;
    color: #141313;
    width: 100%;
    padding: 10px 10px;
    border: none;
    font-size: 1.2em;
    border: 1px solid #aaa2a2;
    padding: 5px;
}
</style>
<div class="login-right">
  <div class="container">
    <h3>Post Your Requirement</h3>
    <div class="login-top">
	<?php if($this->session->userdata('documentadded')) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>  <?php echo $this->session->userdata('documentadded'); ?>
</div> 

<?php  $this->session->unset_userdata('documentadded'); } ?>
      <!--<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>-->
      <div  class="form-info">
      <form method="post" enctype="multipart/form-data" id="registerusers" name="registerusers" action="#">
        <div class="form-group">
          <label>First Name <b style="color:#FF0000">*</b></label>
          <input type="text"  class="form-control"  placeholder="First Name" id="firstname" name="firstname" required="" maxlength="30" onChange="namer();" >
          <span id="namer" style="color:red;"></span> 
		  </div>
        <div class="form-group">
          <label>Last Name <b style="color:#FF0000">*</b></label>
          <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname" required="" maxlength="30" onChange="lastnamer();" >
          <span id="lastnamer" style="color:red;"></span> 
		  </div>
        <div class="form-group">
          <label>Email ID<b style="color:#FF0000">*</b></label>
          <input type="text" class="form-control" placeholder="Email ID" id="eamil" name="eamil" required="" maxlength="40" onChange="eamilr()" >
          <span id="eamilr" style="color:red;"></span>
		  </div>
        <div class="form-group">
          <label>Mobile Number<b style="color:#FF0000">*</b></label>
          <input type="text" class="form-control" placeholder="Mobile No" required="" id="mobile_no" name="mobile_no" maxlength="15"  onChange="mobile_nor()">
          <span id="mobile_nor" style="color:red;"></span>
		  </div>
        <div class="form-group">
          <label>Your Profession<b style="color:#FF0000">*</b></label>&nbsp; &nbsp;
          <input type="radio" name="yourpropesinal" onchange="yourpropesinalr()" id="yourpropesinal1"/>
          <label for="radio3"> Job</label>
          <input type="radio" name="yourpropesinal" onchange="yourpropesinalr()"  id="yourpropesinal2" />
          <label for="radio3"> Business</label>
		    <span id="yourpropesinalr" style="color:red;"></span>
        </div>
      
 
        <div class="form-group">
          <label>Address<b style="color:#FF0000">*</b></label>
          <textarea type="text" class="form-control" placeholder="Address" required="" id="address" name="address" maxlength="200"  onChange="addressr()"></textarea>
          <span id="addressr" style="color:red;"></span></div>
        <div class="form-group">
          <label for="radio3"> Property Type <b style="color:#FF0000">*</b></label> &nbsp; &nbsp;
          <input type="radio" id="slaeby1" name="slaeby" onchange="slaebyr()" value="Rent" />
          <label for="radio4">Rent</label>
          <input type="radio"  id="slaeby2" name="slaeby"  onchange="slaebyr()" value="Buy" />
          <label for="radio5">Buy</label>
          <input type="radio" id="slaeby3" name="slaeby" onchange="slaebyr()"  value="Sale" />
          <label for="radio6">Sale</label>
          <span id="slaebyr" style="color:red;"></span> </div>
        <div class="form-group">
          <label>Description<b style="color:#FF0000">*</b></label>
          <textarea type="text" class="form-control" placeholder="Description" id="description" name="description" required="" maxlength="1000" onChange="descriptionr()" ></textarea>
          <span id="descriptionr" style="color:red;"></span> </div>
        <label class="hvr-sweep-to-right">
        <input type="submit" value="Send Requirement" onclick="return regiterusers();">
        </label>
      </form>
    </div>
  </div>
</div>
</div>
