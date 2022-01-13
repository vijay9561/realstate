<script>
function namer(){if($('#name').val()==''){}else{ $('#namer').html(' '); }}
function eamilr(){if($('#eamil').val()==''){}else{ $('#eamilr').html(' '); }}
function passwordr(){if($('#password').val()==''){}else{ $('#passwordr').html(' '); }}
function mobile_nor(){if($('#mobile_no').val()==''){}else{ $('#mobile_nor').html(' '); }}
function regiterusers(){
        var namecheck = /[A-Za-z]+$/;      
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var numbermatch= /^[1-9]\d{0,10}(?:\.\d)?$|^0\.[1-9]$/;
		var mobilenovalidation=/^\d{10}$/;
		var positvenumber=/[0-9 -()+]+$/;
		var chequeno=/^\d{6,14}$/;
	
		var   	name=document.getElementById('name').value.trim();
	    var  eamil=document.getElementById('eamil').value.trim();
		var  password=document.getElementById('password').value.trim();
		var  mobile_no=document.getElementById('mobile_no').value.trim();
				
				if(name==''){
				$("#namer").html('Please enter name');
				return false;
				}
				if (!(name.match(namecheck))) {
				$("#namer").html("Please enter valid name");	
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
				if(password==''){
				$("#passwordr").html('Please enter password');
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
				
				
				
		  $("#registerusers").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/usersregistration",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==0){
					 alert(eamil+"This email id alreay exits here please enter other email address");	
					}
					else {
			      	window.location='login';
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
    margin: 1em 0 1em;
    padding: 5px;
}
</style>			
<div class="login-right">
	<div class="container">
		<h3>Register</h3>
		<div class="login-top">
				<!--<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>-->
				<div>
					<form method="post" enctype="multipart/form-data" id="registerusers" name="registerusers" action="#">
					<div class="form-group">
						<input type="text"   placeholder="Name" class="form-control" id="name" name="name" required="" maxlength="30" onChange="namer();" >
						<span id="namer" style="color:red;"></span></div>
						<div class="form-group">
						<input type="text"   placeholder="Email Adress" id="eamil" name="eamil" class="form-control" required="" maxlength="40" onChange="eamilr()" ><span id="eamilr" style="color:red;"></span>
						</div>
						<div class="form-group">
						<input type="password"  placeholder="Password" class="form-control" id="password" name="password" required="" maxlength="30" onChange="passwordr();"><span id="passwordr" style="color:red;"></span></div><div class="form-group">
					    <input type="text"   placeholder="Mobile No" class="form-control" required="" id="mobile_no" name="mobile_no" maxlength="15"  onChange="mobile_nor()"><span id="mobile_nor" style="color:red;"></span></div>
						 <div class="form-group">
				        
							<input type="submit" value="Sign Up" class="btn btn-primary mydbubttt" onclick="return regiterusers();">
				          </div>
					</form>
					<p>Already have a Real Home account? <a href="<?php  echo site_url();?>login">Login</a></p>
				</div>
			
	</div>
</div>
</div>