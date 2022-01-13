
<script>

$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });
	
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
		 $("#commentform").unbind('submit').bind('submit',function() {
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
							window.location='<?php echo site_url();?>post-property';
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
<?php if($this->session->userdata('UID')) { ?>

<script>
window.location='<?php echo site_url();?>';
</script>
<?php }else{ ?>

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
		<h3>Login</h3>
		<div class="login-top">
		<div id="duplicateemailcheck" style="display:none">
				<div class="alert alert-danger">
				<strong>Error!</strong>Email Or Passsword Incrrect
				</div> 
				</div>
		<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Your Registration Successfully..
</div> 

<?php  $this->session->unset_userdata('registrationsucess'); } ?>
				<!-- <ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul> -->
				<div class="form-info">
					<form  id="commentform" name="commentform" method="post">
						<input type="text" class="text" name="eamil" id="eamil" onchange="emailr();" placeholder="Email Adress" required="">
						<span id="emailr" style="color:red;"></span>
						<input type="password"  placeholder="Password" name="password" id="password" onchange="passwordr();" required="">
							<span id="passwordr" style="color:red;"></span><br />
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="Submit" onclick="return loginusers();">
				           </label>
						 
					</form>
				</div>
			<div class="create">
				<h4>Don,t have an Account?</h4>
				<a class="hvr-sweep-to-right" style="float:left;" href="<?php echo base_url();?>register">Create an Account</a>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
</div>
<?php } ?>